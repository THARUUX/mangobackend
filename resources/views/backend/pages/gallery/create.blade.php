@extends('backend.app')

@section('content')
<div class="page-header">
    <h1 class="page-title my-auto">Add Gallery Images</h1>
    <div>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <!-- <div class="card">
            <div class="card-header">
                <div class="card-title">Album Details</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12 mb-3">
                        <label for="albumTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="albumTitle">
                    </div>
                    <div class="col-xl-12 mb-3">
                        <label for="albumSlug" class="form-label">Slug(Slug Message)</label>
                        <input type="text" class="form-control" id="albumSlug">
                    </div>
                </div>
            </div>
        </div> -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">Images</div>
            </div>
            <div class="card-body multiple">
                <div class="row">
                    <div class="fileChooser" ondragover="handleDragOver(event)" ondragleave="handleDragLeave()"
                        ondrop="handleDrop(event)">
                        <label id="fileChooserTitleGalleryImages" for="galleryImages">
                            Drag & Drop your file or
                            <span><u>Browse</u></span>
                        </label>
                        <div class="selectedImages" id="selectedGalleryImages"></div>
                        <input type="file" id="galleryImages"
                            onchange="previewImage('galleryImages', 'fileChooserTitleGalleryImages')" multiple
                            accept="image/*" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 d-none">

        {{-- Album Image --}}
        <div class="card">
            <div class="card-header">
                <div class="card-title">Album Image</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="fileChooser" ondragover="handleDragOver(event)" ondragleave="handleDragLeave()"
                            ondrop="handleDrop(event)">
                            <label id="fileChooserTitleAlbumCover" for="albumCover">
                                Drag & Drop your file or
                                <span><u>Browse</u></span>
                            </label>
                            <div class="selectedImages" id="selectedAlbumCover"></div>
                            <input type="file" id="albumCover"
                                onchange="previewImage('albumCover', 'fileChooserTitleAlbumCover')" accept="image/*" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Album Category --}}
        <div class="card">
            <div class="card-header">
                <div class="card-title">Album Category</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12">
                        <label for="albumCategory" class="form-label">Category</label>
                        <select id="albumCategory" class="form-select selectChoices">
                            <option value="" disabled selected>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        {{-- Album Visibility --}}
        <div class="card">
            <div class="card-header">
                <div class="card-title">Album Visibility</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="list-unstyled p-0 m-0">
                            <li class="d-flex justify-content-between">
                                <label class="form-label">Visibility</label>
                                <div class="d-flex gap-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <input id="albumShow" type="radio" name="visibility" value="1" checked>
                                        <label class="form-label m-0" for="albumShow">Show</label>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <input id="albumHide" type="radio" name="visibility" value="0">
                                        <label class="form-label m-0" for="albumHide">Hide</label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer d-flex justify-content-end gap-3 mt-4 mt-xl-5">
        <button class="btn btn-secondary" onclick="window.location='/admin/gallery';">Cancel</button>
        <button id="albumSaveBtn" class="btn btn-primary" onclick="createAlbum();">Upload</button>
    </div>
</div>
@endsection
