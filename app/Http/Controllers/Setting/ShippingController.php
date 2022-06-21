<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting\ShippingCost;

class ShippingController extends Controller
{
    public function index()
    {
        return view('admin.setting.shipping.shipping');
    }

}
