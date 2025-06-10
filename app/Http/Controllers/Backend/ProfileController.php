<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Psy\VersionUpdater\Checker;

class ProfileController extends Controller
{

    public function edit(Request $request)
    {
        if (!Auth::check()) {
            return redirect('admin/logout');
        }

        return view('backend.pages.profile.index', ['user' => Auth::user()]);
    }


    public function updateDetails(Request $request, $userId)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ], [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }


        $user = User::find($userId);

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found']);
        }

        $user->email = $request->input('email');

        $user->save();

        return response()->json(['success' => true, 'message' => 'Profile updated successfully']);
    }

    public function updatePassword(Request $request, $userId)
    {
        $validator = Validator::make($request->all(), [
            'oldPassword' => 'required',
            'newPassword' => 'required',
            'confirmPassword' => 'required',
        ], [
            'oldPassword.required' => 'The old password field is required.',
            'newPassword.required' => 'The new password field is required.',
            'confirmPassword.required' => 'The confirm password field is required.',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        $user = User::find($userId);

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found']);
        }

        if ($request->input('newPassword') == $request->input('confirmPassword')) {
            if ($request->input('oldPassword') && $request->input('newPassword')) {
                $oldPassword = $request->input('oldPassword');

                if (password_verify($oldPassword, $user->password)) {
                    $user->password = Hash::make($request->input('newPassword'));
                    $user->save();

                    return response()->json(['success' => true, 'message' => 'Password updated successfully']);
                } else {
                    return response()->json(['success' => false, 'message' => 'Old password is incorrect']);
                }
            }
        } else {
            return response()->json(['success' => false, 'message' => 'New password and confirm password does not match']);
        }
    }
}
