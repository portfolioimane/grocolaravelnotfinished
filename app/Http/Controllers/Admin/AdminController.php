<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Models\Setting\ShippingArea;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Image;


class AdminController extends Controller
{
    public function getChangePage()
    {
        return view('admin.admin.changePassword');
    }

    
    public function saveChangePass(Request $request)
    {
        $request->validate([
            'current_password'      => 'required',
            'password'              => 'required|confirmed|min:4',
            'password_confirmation' => 'required',
        ]);

        if (Hash::check($request->current_password, Auth::guard('admin')->user()->password)) {
            $admin           = Admin::find(Auth::guard('admin')->user()->id);
            $admin->password = Hash::make($request->password);
            $admin->update();
            return back()->with(['status' => 'success', 'message' => 'Password Changed Successfull']);

        } else {
            return back()->with(['status' => 'danger', 'message' => 'Old Password does not match']);
        }

    }
}