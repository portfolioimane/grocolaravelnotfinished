<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Size;
use App\AllStatic;
use App\Models\Product;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::select('id','category_name','category_native_name')
                    ->orderBy('category_name','desc')
            ->where('status','=',AllStatic::$active)   
            ->get();
        return view('product.size.size',[
            'category' => $category
           ]);
    }
}