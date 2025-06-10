@extends('backend.app')

@section('content')
<div class="page-header">
    <h1 class="page-title my-auto">Category</h1>
    <div>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/admin/dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Category</li>
        </ol>
    </div>
</div>
<div class="row top-row">
    <div class="container">
        <div class="row">
            <div class="col-12 d-inline-block mb-3">
                <div class="d-inline-flex float-end">
                    <button class="btn btn-primary d-flex align-items-center gap-2" onclick="createCategory()">
                        <i class="fi fi-rr-add"></i>
                        Create a Category
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div>
                            <div class="icon">
                                <i class="fi fi-rr-signal-alt-2"></i>
                            </div>
                        </div>
                        <div class="text">
                            <p>Total Categories</p>
                            <h3>{{ $totalCategories }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div>
                            <div class="icon">
                                <i class="fi fi-rs-check-circle"></i>
                            </div>
                        </div>
                        <div class="text">
                            <p>Active Categories</p>
                            <h3>{{ $activeCategories }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div>
                            <div class="icon">
                                <i class="fi fi-rr-circle-xmark"></i>
                            </div>
                        </div>
                        <div class="text">
                            <p>Inactive Categories</p>
                            <h3>{{ $inactiveCategories }}</h3>
                        </div>
                    </div>
                </div>
            </div>

            @if ($totalCategories > 0)
                <div class="overflow-x-auto" style="white-space: nowrap;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($datas as $data)
                                <tr>
                                    <td class="text-left">{{ $data->name }}</td>
                                    <td class="text-left">{{ $data->categoryType->name }}</td>
                                    <td class="text-left">
                                        @if ($data->status_id == '1')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
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
                                                            onclick="openEditCategory('{{ $data->id }}')"><i
                                                                class="fi fi-rr-edit"></i> Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-2"
                                                            onclick="deleteCategory('{{ $data->id }}', this)"><i
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
                </div>
            @else
                <div class="col-12 pb-4">
                    <p class="text-white text-center">No Data</p>
                </div>
            @endif

        </div>
    </div>
</div>

<div class="col-12 row bg-warning">
    <div id="addCategoryModal" class="categoryModal overflow-y-auto">
        <div class="card">
            <div class="card-header">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="modal-title">Add Category</h4>
                        <span class="close" onclick="closeModal()">
                            <i class="fi fi-rr-cross-small"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Category Title">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-select" id="type">
                            @foreach ($categoryTypes as $categoryType)
                                <option value="{{ $categoryType->id }}">{{ $categoryType->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 mb-4">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status">
                            @foreach ($statuses as $status)
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="row">
                            <div class="col-6">
                                <button class="w-100 btn btn-secondary" onclick="closeModal()">Close</button>
                            </div>
                            <div class="col-6">
                                <button id="categorySaveBtn" class="w-100 btn btn-primary" onclick="saveCategory()">Save
                                    Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="editCategoryModal" class="categoryModal overflow-y-auto">
        <div class="card">
            <div class="card-header">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="modal-title">Edit Category</h4>
                        <span class="close" onclick="closeModal()">
                            <i class="fi fi-rr-cross-small"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <input type="text" class="d-none form-control" id="categoryUpdateId">
                    <div class="col-12 mb-3">
                        <label for="categoryUpdateTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="categoryUpdateTitle"
                            placeholder="Enter Category Title">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="categoryUpdateType" class="form-label">Type</label>
                        <select class="form-select" id="categoryUpdateType">
                            <option value="1">Post</option>
                            <option value="2">Gallery</option>
                        </select>
                    </div>
                    <div class="col-12 mb-4">
                        <label for="categoryUpdateStatus" class="form-label">Status</label>
                        <select class="form-select" id="categoryUpdateStatus">
                            <option value="0">Inactive</option>
                            <option value="1">Active</option>

                        </select>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="row">
                            <div class="col-6">
                                <button class="w-100 btn btn-secondary" onclick="closeModal()">Close</button>
                            </div>
                            <div class="col-6">
                                <button id="categoryUpdateBtn" class="w-100 btn btn-primary"
                                    onclick="updateCategory()">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
