@extends('backend.app')

@section('content')
<div class="page-header">
    <h1 class="page-title my-auto">Profile</h1>
    <div>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/admin/dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Settings</li>
        </ol>
    </div>
</div>
<div class="row top-row">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Personal Details</h4>
                        <p class="card-text">Manage your personal information</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 mb-3 mx-auto">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="{{ $user->email }}" required>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="float-end">
                            <button id="updateProfileBtn" class="btn btn-primary"
                                onclick="updateProfile({{ $user->id }})">Save
                                Changes</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Change Password</h4>
                        <p class="card-text">Protect your account with a strong and secure password</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="oldPassword" class="form-label">Old Password</label>
                                <input type="password" class="form-control" id="oldPassword">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="newPassword" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="newPassword">
                            </div>
                            <div class="col-lg-6">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-end">
                            <button id="updatePasswordBtn" class="btn btn-primary"
                                onclick="updatePassword({{ $user->id }})">Update
                                Password</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
