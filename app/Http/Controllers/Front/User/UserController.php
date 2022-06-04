<?php

namespace App\Http\Controllers\Front\User;

use App\Http\Controllers\Controller;
use App\Models\Coupon\Coupon;
use App\Models\Coupon\UserCoupon;
use App\Models\Order\Order;
use App\Models\Order\OrderDetails;
use App\Models\Order\TrialProduct;
use App\Models\Setting\ShopSetting;
use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Image;
use PDF;
use Session;
use \Mail;

class UserController extends Controller
{

       public function index()
    {
        return view('front.user.dashboard');
    }

       public function logout()
    {
        Auth::logout();
        Session::flash('success', 'You are Logout!');
        return redirect()->to('/');
    }

    public function sendEmailLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $token                  = \Hash::make(substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'), 0, 6));
        $result                 = User::where('email', $request->email)->first();
        $result->remember_token = $token;
        $result->update();

        $shop_info = ShopSetting::orderBy('id', 'desc')->first();
        $subject   = 'Confim Email For Reset User Password';
        $to        = $request->email;
        $email     = $shop_info->email;
        $name      = $shop_info->shop_name;
        Mail::send('auth.passwords.reset_email_temp', ['token' => $token],
            function ($message) use ($to, $email, $name, $subject) {
                $message->from($email, $name);
                $message->to($to)->subject($subject);
            });
        \Session::flash('status', 'A fresh verification link has been sent to your email address.');
        return redirect()->back();
    }
      public function viewUserResetPage(Request $request)
    {
        $result = User::where('remember_token', $request->token)->first();
        if ($result->count() > 0) {
            return view('auth.passwords.confirm', ['token' => $request->token]);
        } else {
            Session::flash('error', 'Please, try again!!');
            return redirect()->back();
        }
    }

    
    public function storeResetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:6',
        ]);
        $user           = User::where('remember_token', $request->identity)->first();
        $user->password = Hash::make($request->password);
        $user->update();
        Auth::logout();
        Session::flash('success', 'Password is Changed Successfully!');
        return redirect()->route('login');
    }


}