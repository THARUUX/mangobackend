<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\CategoryType;
use App\Models\GalleryImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.pages.new_home');
    }

    public function about()
    {
        return view('frontend.pages.new_about');
    }

    public function service()
    {
        return view('frontend.pages.new_service');
    }
    public function contact()
    {
        return view('frontend.pages.new_contact');
    }
    public function gallery()
    {
        $galleries = GalleryImages::limit(10)->get();
        $allGalleries = GalleryImages::all();
        return view('frontend.pages.new_gallery', compact('galleries', 'allGalleries'));
    }
    public function blog(Request $request)
    {

        $type = $request->input('type');

        if ($type) {
            $category = Category::where('name', $type)->first();

            $categoryIds = Category::where('category_type_id', '1')->where('id', $category->id)->pluck('id');
            $posts = Post::whereIn('category_id', $categoryIds)->limit(10)->get();
            $allPosts = Post::whereIn('category_id', $categoryIds)->get();
        } else {
            $categoryIds = Category::where('category_type_id', '1')->pluck('id');
            $posts = Post::whereIn('category_id', $categoryIds)->limit(10)->get();
            $allPosts = Post::whereIn('category_id', $categoryIds)->get();
        }


        $types = Category::where('category_type_id', 1)->get();
        return view('frontend.pages.new_blog', compact('posts', 'types', 'allPosts'));
    }

    public function loardMoreBlogs(Request $request)
    {

        $count = (int) $request->count;

        $type = $request->type ?? null;

        if ($type) {
            $category = Category::where('name', $type)->first();

            if (!$category) {
                return redirect('/');
            }

            $categoryIds = Category::where('category_type_id', '1')->where('id', $category->id)->pluck('id');
            $posts = Post::whereIn('category_id', $categoryIds);
            $allPosts = Post::whereIn('category_id', $categoryIds)->get();
        } else {
            $categoryIds = Category::where('category_type_id', '1')->pluck('id');
            $posts = Post::whereIn('category_id', $categoryIds);
            $allPosts = Post::whereIn('category_id', $categoryIds)->get();
        }
        $posts = $posts->limit($count + 10)->get();

        $hasMore = ($count + 10) < count($allPosts);


        $data = [
            'success' => true,
            'message' => 'success',
            'html' => view('frontend.components.blog.new_load_more_blogs', compact('posts', 'hasMore'))->render(),
            'count' => $count
        ];

        return response()->json($data, 200);
    }

    public function loardMoreGallery(Request $request)
    {

        $count = (int) $request->count;

        $galleries = GalleryImages::limit($count + 10)->get();

        $allGalleries = GalleryImages::all();

        $hasMore = ($count + 10) < count($allGalleries);

        $data = [
            'success' => true,
            'message' => 'success',
            'html' => view('frontend.components.gallery.new_load_more_galleries', compact('galleries', 'hasMore'))->render(),
            'count' => $count
        ];
        return response()->json($data, 200);
    }

    public function blogDetail($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $recentPosts = Post::where('id', '!=', $post->id)->latest()->limit(3)->get();
        $categories = Category::where('category_type_id', 1)->get();

        return view('frontend.pages.new_blog_detail', compact('post', 'recentPosts', 'categories'));
    }
}
