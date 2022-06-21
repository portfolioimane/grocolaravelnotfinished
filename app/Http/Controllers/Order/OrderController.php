<?php

namespace App\Http\Controllers\Order;

use App\AllStatic;
use App\Http\Controllers\Controller;
use App\Models\Order\Order;
use App\Models\Order\OrderDetails;
use App\Models\Order\TrialProduct;
use App\Models\Product;
use App\Models\Setting\ShippingArea;
use App\Models\Setting\ShopSetting;
use DB;
use Illuminate\Http\Request;
use PDF;
use \Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.order.order');
    }

     public function viewAreaOrder()
    {

        return view('admin.order.areaOrder');
    }
}