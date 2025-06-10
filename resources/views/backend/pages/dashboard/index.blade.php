@extends('backend.app')

@section('content')
    <div class="page-header">
        <h1 class="page-title my-auto">Dashboard</h1>
        <div>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="/admin/dashboard">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
    </div>
    <div class="row top-row">
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body d-flex align-items-center gap-3">
                    <div>
                        <div class="icon">
                            <i class="fi fi-rr-edit"></i>
                        </div>
                    </div>
                    <div class="text">
                        <p>Total Active Posts</p>
                        <h3>{{ $posts }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body d-flex align-items-center gap-3">
                    <div>
                        <div class="icon">
                            <i class="fi fi-rr-picture"></i>
                        </div>
                    </div>
                    <div class="text">
                        <p>Total Gallery Images</p>
                        <h3>{{ $galleryImages }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body d-flex align-items-center gap-3">
                    <div>
                        <div class="icon">
                            <i class="fi fi-rr-apps"></i>
                        </div>
                    </div>
                    <div class="text">
                        <p>Total Active Categories</p>
                        <h3>{{ $categories }}</h3>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
