<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order\Order;
use App\Models\Order\OrderDetails;
use PDF;

class CustomerController extends Controller
{
    public function index()
    {
    	return view('admin.customer.customers');
    }
}