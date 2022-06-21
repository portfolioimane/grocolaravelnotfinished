<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting\ShippingArea;

class ShippingAreaController extends Controller
{
    public function index()
    {
        return view('admin.setting.shipping.shipping_area');
    }

   
}
