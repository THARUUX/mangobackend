<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(Request $request)
    {

        $status = $request->input('status');
        $search = $request->input('search');
        $rows = $request->input('rows');

        $posts = Post::when($status !== null, function ($query) use ($status) {
            $query->where('category_id', $status);
        })
            ->when($search, function ($query) use ($search) {
                $query->where(function ($subquery) use ($search) {
                    $subquery->where('title', 'like', '%' . $search . '%')
                        ->orWhere('slug', 'like', '%' . $search . '%');
                });
            })
            ->orderby('created_at', 'desc')
            ->paginate($rows ?? 10);


        $categories = Category::where('category_type_id', '1')->get();
        $totalPosts = $posts->count();
        $activePosts = $posts->where('status_id', '1')->count();
        $inactivePosts = $posts->where('status_id', '0')->count();

        return view('backend.pages.post.index')->with('datas', $posts)
            ->with('totalPosts', $totalPosts)
            ->with('activePosts', $activePosts)
            ->with('inactivePosts', $inactivePosts)
            ->with('categories', $categories);
    }

    public function create()
    {
        $category = Category::where('category_type_id', '1')
            ->where('status_id', '1')
            ->get();
        $statuses = Status::all();

        return view('backend.pages.post.create')->with('categories', $category)->with('statuses', $statuses);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $category = Category::where('status_id', '1')->get();
        return view('backend.pages.post.edit', compact('post'))->with('categories', $category);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required|unique:posts,slug',
            'shortDescription' => 'required|max:250',
            'content' => 'required',
            'category' => 'required',
            'visibility' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
        ], [
            'title.required' => 'The title field is required.',
            'slug.required' => 'The slug field is required.',
            'slug.unique' => 'The slug must be unique.',
            'shortDescription.required' => 'The short content field is required.',
            'shortDescription.max' => 'The short content must not exceed 250 characters.',
            'content.required' => 'The content field is required.',
            'category.required' => 'The category field is required.',
            'visibility.required' => 'The visibility field is required.',
            'image.image' => 'The file must be an image.',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first()]);
        }

        $post = new Post();
        $post->title = $request->input('title');
        $post->slug = Str::slug($request->input('slug'), '_');
        $post->short_content = $request->input('shortDescription');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category');
        $post->status_id = $request->input('visibility');

        if ($request->hasFile('image')) {
            if ($post->image) {
                $oldImagePath = public_path('uploads/post/') . $post->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $image = $request->file('image');
            $fileExtension = $image->getClientOriginalExtension();
            $filename = hash('sha256', uniqid() . '_' . $image->getClientOriginalName()) . '.' . $fileExtension;
            $image->move(public_path('uploads/post/'), $filename);

            $post->image = $filename;
        }

        $post->save();


        return response()->json(['success' => true, 'message' => 'Post created successfully']);
    }


    public function update(Request $request, $id)
    {

        $rules = [
            'title' => 'required',
            'slug' => 'required|unique:posts,slug,' . $id . '',
            'shortDescription' => 'required|max:250',
            'content' => 'required',
            'category' => 'required',
            'visibility' => 'required',
        ];

        $messages = [
            'title.required' => 'The title field is required.',
            'slug.required' => 'The slug field is required.',
            'slug.unique' => 'The slug has already been taken.',
            'shortDescription.required' => 'The short content field is required.',
            'shortDescription.max' => 'The short content must not exceed 250 characters.',
            'content.required' => 'The content field is required.',
            'category.required' => 'The category field is required.',
            'visibility.required' => 'The visibility field is required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->slug = Str::slug($request->input('slug'), '_');
        $post->short_content = $request->input('shortDescription');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category');
        $post->status_id = $request->input('visibility');


        if ($request->blogImageStatus == 'deleted') {
            $imagePath = $post->image;

            if (!empty($imagePath)) {
                $filePath = public_path('uploads/post/' . $imagePath);

                if (file_exists($filePath)) {
                    File::delete($filePath);
                }

                $post->image = null;
            }
        }

        if ($request->hasFile('image')) {
            if ($post->image) {
                $oldImagePath = public_path('uploads/post/') . $post->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $image = $request->file('image');
            $fileExtension = $image->getClientOriginalExtension();
            $filename = hash('sha256', uniqid() . '_' . $image->getClientOriginalName()) . '.' . $fileExtension;
            $image->move(public_path('uploads/post/'), $filename);

            $post->image = $filename;
        }

        $post->save();


        return response()->json(['success' => true, 'message' => 'Post updated successfully']);
    }

    public function delete($id)
    {

        $post = Post::find($id);

        if (!$post) {
            return response()->json(['success' => false, 'message' => 'Post not found']);
        }

        if ($post->image) {
            $oldImagePath = public_path('uploads/post/') . $post->image;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        $post->delete();

        return response()->json(['success' => true, 'message' => 'Post deleted successfully']);
    }
}
