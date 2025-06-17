@extends('backend.app')

@section('content')
<div class="page-header">
    <h1 class="page-title my-auto">Tour Packages</h1>
    <div>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/admin/dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Tour Packages</li>
        </ol>
    </div>
</div>
<div class="row top-row">
    <div class="container">
        <div class="row">
            <div class="col-12 d-inline-block mb-3">
                <div class="d-inline-flex float-end">
                    <button class="btn btn-primary d-flex align-items-center gap-2"
                        onclick="window.location='/admin/tour-package/create'">
                        <i class="fi fi-rr-add"></i>
                        Add New Tour Package
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-4 mx-auto">
                <div class="card">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div>
                            <div class="icon">
                                <i class="fi fi-rr-plane"></i>
                            </div>
                        </div>
                        <div class="text">
                            <p>Total Tour Packages</p>
                            <h3>{{ $totalPackages }}</h3>
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
                                    onchange="this.form.submit()">
                                    <option value="10" {{ request('rows') == 10 ? 'selected' : '' }}>10</option>
                                    <option value="20" {{ request('rows') == 20 ? 'selected' : '' }}>20</option>
                                    <option value="50" {{ request('rows') == 50 ? 'selected' : '' }}>50</option>
                                    <option value="100" {{ request('rows') == 100 ? 'selected' : '' }}>100</option>
                                </select>
                            </div>
                            <div class="col-8">
                                <p class="pageRowName m-0">Items Per Page</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-8 mt-3 mt-xl-0 right-panel">
                        <div class="row align-items-center justify-content-xl-end">
                            <div class="col-12 col-xl-7 me-lg-3">
                                <input type="text" name="search" class="form-control"
                                    placeholder="Search by name or location..." value="{{ request('search') }}">
                            </div>
                            <div class="col-5 col-xl-2 mt-3 mt-xl-0">
                                <select name="type" class="form-select" onchange="this.form.submit()">
                                    <option value="">All Types</option>
                                    <option value="tailor-made" {{ request('type') == 'tailor-made' ? 'selected' : '' }}>
                                        Tailor Made
                                    </option>
                                    <option value="round-tour" {{ request('type') == 'round-tour' ? 'selected' : '' }}>
                                        Round Tour
                                    </option>
                                </select>
                            </div>
                            <div class="col-5 col-xl-2 mt-3 mt-xl-0">
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="fi fi-rr-search"></i> Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap">
                            <thead>
                                <tr class="bg-gray-2 text-dark">
                                    <th class="w-5">ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Duration</th>
                                    <th>Status</th>
                                    <th>Featured</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tourPackages as $tourPackage)
                                <tr>
                                    <td>{{ $tourPackage->id }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $tourPackage->image) }}" alt="{{ $tourPackage->name }}"
                                            class="img-fluid" style="max-width: 100px; max-height: 60px;">
                                    </td>
                                    <td>{{ $tourPackage->name }}</td>
                                    <td>{{ ucfirst(str_replace('-', ' ', $tourPackage->type)) }}</td>
                                    <td>${{ number_format($tourPackage->price, 2) }}</td>
                                    <td>{{ $tourPackage->duration }}</td>
                                    <td>
                                        @if($tourPackage->active)
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($tourPackage->featured)
                                        <span class="badge bg-primary">Featured</span>
                                        @else
                                        <span class="badge bg-secondary">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="/admin/tour-package/edit/{{ $tourPackage->id }}"
                                                class="btn btn-primary btn-sm">
                                                <i class="fi fi-rr-edit"></i>
                                            </a>
                                            <a href="/admin/tour-package/delete/{{ $tourPackage->id }}"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this tour package?')">
                                                <i class="fi fi-rr-trash"></i>
                                            </a>
                                            <a href="{{ route('tours.detail', $tourPackage->slug) }}" target="_blank"
                                                class="btn btn-info btn-sm">
                                                <i class="fi fi-rr-eye"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9" class="text-center">No tour packages found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
