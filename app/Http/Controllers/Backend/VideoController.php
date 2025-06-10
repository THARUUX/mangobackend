<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Status;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->input('status');
        $search = $request->input('search');
        $rows = $request->input('rows');

        $videos = Video::when($status !== null, function ($query) use ($status) {
            $query->where('category_id', $status);
        })
            ->when($search, function ($query) use ($search) {
                $query->where(function ($subquery) use ($search) {
                    $subquery->where('title', 'like', '%' . $search . '%');
                });
            })
            ->orderby('created_at', 'desc')
            ->paginate($rows ?? 10);

        $categories = Category::where('category_type_id', '3')->get();
        $totalVideos = $videos->count();
        $activeVideos = $videos->where('status_id', '1')->count();
        $inactiveVideos = $videos->where('status_id', '0')->count();

        return view('backend.pages.video.index')->with('datas', $videos)
            ->with('totalVideos', $totalVideos)
            ->with('activeVideos', $activeVideos)
            ->with('inactiveVideos', $inactiveVideos)
            ->with('categories', $categories);
    }

    public function create()
    {
        $category = Category::where('category_type_id', '3')
            ->where('status_id', '1')
            ->get();
        $statuses = Status::all();

        return view('backend.pages.video.create')->with('categories', $category)->with('statuses', $statuses);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'source' => 'required|file|mimetypes:video/mp4,video/ogx,video/oga,video/ogv,video/ogg,video/webm',
            'category' => 'required',
            'visibility' => 'required',
        ], [
            'title.required' => 'The title field is required.',
            'cover.required' => 'The cover image field is required.',
            'cover.image' => 'The file must be an image.',
            'cover.mimes' => 'Allowed image types: jpeg, png, jpg, gif, svg.',
            'cover.max' => 'The cover image size should not exceed 2048 KB.',
            'source.required' => 'The source field is required.',
            'source.mimetypes' => 'The file must be a video.',
            'category.required' => 'The category field is required.',
            'visibility.required' => 'The visibility field is required.',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first()]);
        }

        $video = new Video();
        $video->title = $request->input('title');
        $video->category_id = $request->input('category');
        $video->status_id = $request->input('visibility');

        // Handle video source file
        if ($request->hasFile('source')) {
            $this->handleFile($video, $request->file('source'), 'source', 'uploads/video/');
        }

        // Handle cover image file
        if ($request->hasFile('cover')) {
            $this->handleFile($video, $request->file('cover'), 'cover_image', 'uploads/cover/');
        }

        $video->save();

        return response()->json(['success' => true, 'message' => 'Video created successfully']);
    }

    private function handleFile($model, $file, $property, $uploadPath)
    {
        if ($model->$property) {
            $oldFilePath = public_path($uploadPath) . $model->$property;
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        $fileExtension = $file->getClientOriginalExtension();
        $filename = hash('sha256', uniqid() . '_' . $file->getClientOriginalName()) . '.' . $fileExtension;
        $file->move(public_path($uploadPath), $filename);

        $model->$property = $filename;
    }


    public function delete($id)
    {
        $video = Video::find($id);

        if (!$video) {
            return response()->json(['success' => false, 'message' => 'Video not found']);
        }

        $this->deleteFileIfExists($video->source, 'uploads/video/');
        $this->deleteFileIfExists($video->cover_image, 'uploads/cover/');

        $video->delete();

        return response()->json(['success' => true, 'message' => 'Video deleted successfully']);
    }

    private function deleteFileIfExists($filename, $uploadPath)
    {
        if ($filename) {
            $filePath = public_path($uploadPath) . $filename;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }
    }
}
