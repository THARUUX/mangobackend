@extends('backend.app')

@section('content')
<div class="page-header">
    <h1 class="page-title my-auto">Create Video</h1>
    <div>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/admin/dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Videos</li>
        </ol>
    </div>
</div>
<div class="row top-row">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Video Details</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="videoTitle" class="form-label">Video Title</label>
                                <input type="text" class="form-control" id="videoTitle">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="videoSource" class="form-label">Video</label>
                                <input type="file" class="form-control" id="videoSource" accept="video/*">
                                <small class="form-text text-white">Upload video files only.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Post Image</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="fileChooser" ondragover="handleDragOver(event)"
                                    ondragleave="handleDragLeave()" ondrop="handleDrop(event)">
                                    <label id="fileChooserTitlePostCover" for="postCover">
                                        Drag & Drop your file or
                                        <span><u>Browse</u></span>
                                    </label>
                                    <div class="selectedImages" id="selectedPostCover"></div>
                                    <input type="file" id="postCover"
                                        onchange="previewImage('postCover', 'fileChooserTitlePostCover')"
                                        accept="image/*" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Video Category</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="videoCategory" class="form-label">Category</label>
                                <select class="form-select" id="videoCategory">
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Video Visibility</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-unstyled p-0 m-0">
                                    <li class="d-flex justify-content-between">
                                        <label class="form-label">Visibility</label>
                                        <div class="d-flex gap-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <input id="videoShow" type="radio" name="visibility" value="1" checked>
                                                <label for="videoShow" class="form-label m-0 p-0">Show</label>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <input id="videoHide" type="radio" name="visibility" value="0">
                                                <label for="videoHide" class="form-label m-0 p-0">Hide</label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end gap-3 mt-4 mt-xl-5">
                        <button class="w-100 btn btn-secondary" onclick="window.location='/admin/video'">Close</button>
                        <button id="videoSaveBtn" class="w-100 btn btn-primary" onclick="createVideo()">Create a
                            Video</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
