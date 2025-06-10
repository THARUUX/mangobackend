@extends('backend.app')

@section('content')
<div class="page-header">
    <h1 class="page-title my-auto">Image Gallery</h1>
    <div>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/admin/dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Image Gallery</li>
        </ol>
    </div>
</div>
<div class="row top-row">
    <div class="container">
        <div class="row">
            <div class="col-12 d-inline-block mb-3">
                <div class="d-inline-flex float-end">
                    <button class="btn btn-primary d-flex align-items-center gap-2"
                        onclick="window.location='/admin/gallery/create'">
                        <i class="fi fi-rr-add"></i>
                        Upload an Images
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-4 mx-auto">
                <div class="card">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div>
                            <div class="icon">
                                <i class="fi fi-rr-signal-alt-2"></i>
                            </div>
                        </div>
                        <div class="text">
                            <p>Total Images</p>
                            <h3>{{ $totalAlbums }}</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters -->
            <form class="col-12 filter-list my-4" action="" method="get">
                <div class="row justify-content-between">

                    <div class="col-12 col-xl-4 left-panel">
                        <div class="row align-items-center justify-content-end justify-content-xl-start">

                            <div class="col-4">
                                <select id="sessionMaxRows" name="rows" class="form-select"
                                    onchange="updateFilters('gallery')">
                                    <option value="10" {{ Request::get('rows') == '10' ? 'selected' : '' }}>10
                                    </option>
                                    <option value="25" {{ Request::get('rows') == '25' ? 'selected' : '' }}>25
                                    </option>
                                    <option value="50" {{ Request::get('rows') == '50' ? 'selected' : '' }}>50
                                    </option>
                                    <option value="100" {{ Request::get('rows') == '100' ? 'selected' : '' }}>100
                                    </option>
                                    <option value="250" {{ Request::get('rows') == '250' ? 'selected' : '' }}>250
                                    </option>
                                    <option value="500" {{ Request::get('rows') == '500' ? 'selected' : '' }}>500
                                    </option>
                                </select>
                            </div>

                            <div class="col-4">
                                <a href="/admin/gallery">
                                    <input type="button" class="form-control text-center" value="Reset Filter">
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </form>

            @if ($totalAlbums > 0)
                <div class="overflow-x-auto overflow-y-hidden" style="white-space: nowrap; min-height: 300px">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="">Image</th>
                                <th class="">Created At</th>
                                <th class="d-table-cell justify-content-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($datas as $data)
                                <tr>
                                    <td class="text-left">
                                        <img src="{{ asset('uploads/album/' . $data->image) }}" width="auto" height="80px"
                                            alt="">
                                    </td>
                                    <td>{{ $data->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="d-table-cell justify-content-end">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" type="button" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fi fi-rs-menu-dots"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-2"
                                                            onclick="deleteAlbum({{ $data->id }}, this)"><i
                                                                class="fi fi-rr-trash"></i> Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    <div class="float-end">
                        {{ $datas->links() }}
                    </div>

                </div>
            @else
                <div class="col-12 pb-4">
                    <p class="text-white text-center">No Data</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
