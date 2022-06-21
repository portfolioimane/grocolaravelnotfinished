<?php

namespace App\Http\Controllers\Offers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon\Coupon;
use App\Models\Coupon\UserCoupon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    public function index()
    {
        return view('admin.offers.coupon.coupon');
    }
}