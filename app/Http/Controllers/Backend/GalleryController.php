<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Category;
use App\Models\GalleryImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index(Request $request)
    {

        $rows = $request->input('rows');

        $albums = GalleryImages::orderby('created_at', 'desc')->paginate($rows ?? 10);
        $totalAlbums = GalleryImages::count();

        return view('backend.pages.gallery.index')->with('datas', $albums)
            ->with('totalAlbums', $totalAlbums);
    }

    public function create()
    {
        $category = Category::where('category_type_id', '2')
            ->where('status_id', '1')
            ->get();

        return view('backend.pages.gallery.create')->with('categories', $category);
    }

    public function edit($id)
    {
        $album = Album::find($id);
        $galleryImages = GalleryImages::where('album_id', $id)->get();
        $category = Category::where('category_type_id', '2')
            ->where('status_id', '1')
            ->get();
        return view('backend.pages.gallery.edit')->with('album', $album)->with('galleryImages', $galleryImages)->with('categories', $category);
    }

    public function store(Request $request)
    {
        $rules = [
            // 'title' => 'required',
            // 'slug' => 'required|unique:albums,slug',
            // 'cover' => 'image|mimes:jpeg,png,jpg,gif',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif',
        ];

        $messages = [
            'title.required' => 'The title field is required.',
            'slug.required' => 'The slug field is required.',
            'slug.unique' => 'The slug has already been taken.',
            'cover.image' => 'The logo must be an image file.',
            'cover.mimes' => 'The logo must be a jpeg, png, jpg, or gif file.',
            'cover.max' => 'The logo file must not exceed 2048 kilobytes.',
            'images.*.image' => 'Gallery images must be image files.',
            'images.*.mimes' => 'Gallery images must be jpeg, png, jpg, or gif files.',
            'images.*.max' => 'Each gallery image must not exceed 2048 kilobytes.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        // $coverFilename = null;

        // if ($request->hasFile('cover')) {
        //     $cover = $request->file('cover');
        //     $coverFilename = hash('sha256', uniqid() . '_' . $cover->getClientOriginalName()) . '.' . $cover->getClientOriginalExtension();
        //     $cover->move(public_path('uploads/album/'), $coverFilename);
        // }

        // $album = new Album();
        // $album->title = $request->input('title');
        // $album->slug = Str::slug($request->input('slug'), '_');
        // $album->category_id = $request->input('category');
        // $album->image = $coverFilename;
        // $album->status_id = $request->input('visibility');
        // $album->save();

        $galleryImages = $request->file('images');

        foreach ($galleryImages as $galleryImage) {
            $galleryImageFilename = hash('sha256', uniqid() . '_' . $galleryImage->getClientOriginalName()) . '.' . $galleryImage->getClientOriginalExtension();
            $galleryImage->move(public_path('uploads/album/'), $galleryImageFilename);

            $galleryImageModel = new GalleryImages();
            $galleryImageModel->image = $galleryImageFilename;
            $galleryImageModel->save();
        }

        return response()->json(['success' => true, 'message' => 'Images uploaded successfully.']);
    }

    public function update(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required',
        //     'slug' => 'required|unique:albums,slug,' . $id . '',
        // ], [
        //     'title.required' => 'The title field is required.',
        //     'slug.required' => 'The slug field is required.',
        //     'slug.unique' => 'The slug has already been taken.',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        // }

        // $album = Album::findOrFail($id);

        // if ($request->albumImageStatus == 'deleted' && !empty($album->image)) {
        //     $filePath = public_path('uploads/album/' . $album->image);
        //     if (file_exists($filePath)) {
        //         File::delete($filePath);
        //     }
        //     $album->image = null;
        // }

        // if ($request->hasFile('cover')) {
        //     $coverValidator = Validator::make($request->all(), [
        //         'cover' => 'image|mimes:jpeg,png,jpg,gif|max:12048',
        //     ], [
        //         'cover.image' => 'The logo must be an image file.',
        //         'cover.mimes' => 'The logo must be a jpeg, png, jpg, or gif file.',
        //         'cover.max' => 'The logo file must not exceed 2048 kilobytes.',
        //     ]);

        //     if ($coverValidator->fails()) {
        //         return response()->json(['success' => false, 'message' => $coverValidator->errors()->first()]);
        //     }

        //     $cover = $request->file('cover');
        //     $coverFilename = hash('sha256', uniqid() . '_' . $cover->getClientOriginalName()) . '.' . $cover->getClientOriginalExtension();
        //     $cover->move(public_path('uploads/album/'), $coverFilename);
        //     $album->image = $coverFilename;
        // }

        // $album->title = $request->input('title');
        // $album->slug = Str::slug($request->input('slug'), '_');
        // $album->category_id = $request->input('category');
        // $album->status_id = $request->input('visibility');
        // $album->save();

        // if ($request->has('length')) {
        //     for ($i = 0; $i < $request->input('length'); $i++) {
        //         if ($request->has('image' . $i)) {
        //             if ($request->input('status' . $i) == 'newset') {
        //                 $galleryImage = $request->file('image' . $i);

        //                 if ($galleryImage->isValid()) {
        //                     $galleryImageFilename = hash('sha256', uniqid() . '_' . $galleryImage->getClientOriginalName()) . '.' . $galleryImage->getClientOriginalExtension();
        //                     $galleryImage->move(public_path('uploads/album/'), $galleryImageFilename);

        //                     $newGalleryImage = new GalleryImages();
        //                     $newGalleryImage->image = $galleryImageFilename;
        //                     $newGalleryImage->album_id = $album->id;
        //                     $newGalleryImage->save();
        //                 }
        //             } elseif ($request->input('status' . $i) == 'deleted') {
        //                 $imageName = $request->input('image' . $i);
        //                 $galleryImage = GalleryImages::where('image', $imageName)->first();

        //                 if ($galleryImage) {
        //                     $filePath = public_path('uploads/album/' . $imageName);

        //                     if (file_exists($filePath)) {
        //                         File::delete($filePath);
        //                     }

        //                     $galleryImage->delete();
        //                 }
        //             }
        //         }
        //     }
        // }

        // return response()->json(['success' => true, 'message' => 'Album updated successfully.']);
    }

    public function delete($id)
    {

        $galleryImages = GalleryImages::where('id', $id)->get();
        foreach ($galleryImages as $galleryImage) {
            if (!empty($galleryImage->image)) {
                $filePath = public_path('uploads/album/' . $galleryImage->image);
                if (file_exists($filePath)) {
                    File::delete($filePath);
                }
            }
            $galleryImage->delete();
        }

        // $album = Album::find($id);

        // if (!empty($album->image)) {
        //     $filePath = public_path('uploads/album/' . $album->image);
        //     if (file_exists($filePath)) {
        //         File::delete($filePath);
        //     }
        // }

        // $album->delete();
        return response()->json(['success' => true, 'message' => 'Image deleted successfully.']);
    }
}
