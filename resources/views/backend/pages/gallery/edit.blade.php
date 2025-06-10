@extends('backend.app')

@section('content')
    <div class="page-header">
        <h1 class="page-title my-auto">Edit Album</h1>
        <div>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Album</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Album Details</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12 mb-3">
                            <label for="albumTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="albumTitle" value="{{ $album->title }}">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="albumSlug" class="form-label">Slug (Slug Message)</label>
                            <input type="text" class="form-control" id="albumSlug" value="{{ $album->slug }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Images</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="fileChooser" ondragover="handleDragOver(event)" ondragleave="handleDragLeave()"
                                ondrop="handleDrop(event)">
                                <label id="fileChooserTitleGalleryImages" for="galleryImages">
                                    Drag & Drop your file or
                                    <span><u>Browse</u></span>
                                </label>
                                <div class="selectedImages" id="selectedGalleryImages"></div>
                                <input type="file" id="galleryImages"
                                    onchange="previewImage('galleryImages', 'fileChooserTitleGalleryImages', null, 'newset',null,'{{ asset('uploads/album/') }}')"
                                    multiple accept="image/*" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
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
                                    data-status="{{ isset($album->image) && !empty($album->image) ? 'available' : 'not_available' }}"
                                    onchange="previewImage('albumCover', 'fileChooserTitleAlbumCover', null,'newset', 'edit', '{{ asset('uploads/album/') }}')"
                                    accept="image/*" />
                            </div>

                            <script>
                                window.onload = function() {
                                    @foreach ($galleryImages as $image)
                                        previewImage('galleryImages', 'fileChooserTitleGalleryImages', '{{ $image->image }}', 'uploaded',
                                            'edit', '{{ asset('uploads/album/') }}', {{ $loop->index }});
                                    @endforeach

                                    previewImage('albumCover', 'fileChooserTitleAlbumCover', '{{ $album->image }}', 'uploaded', 'edit',
                                        '{{ asset('uploads/album/') }}');
                                };
                            </script>


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
                                <option value="" disabled>Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $album->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
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
                                            @foreach ([1 => 'Show', 0 => 'Hide'] as $value => $label)
                                                <input id="album{{ ucfirst($label) }}" type="radio" name="visibility"
                                                    value="{{ $value }}"
                                                    {{ $album->status_id == $value ? 'checked' : '' }}>
                                                <label class="form-label m-0"
                                                    for="album{{ ucfirst($label) }}">{{ $label }}</label>
                                            @endforeach
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end gap-3 mt-4 mt-xl-5">
                    <button class="w-100 btn btn-secondary" onclick="window.location='/admin/gallery';">Close</button>
                    <button id="albumUpdateBtn" class="w-100 btn btn-primary"
                        onclick="updateAlbum({{ $album->id }});">Update an
                        Album</button>
                </div>
            </div>
        </div>
    </div>
@endsection
