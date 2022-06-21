<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\SubCategoryBrand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Product;
use App\Models\Color;
use App\AllStatic;
use App\Http\Resources\Product\SubSubCategoryResource;
use Illuminate\Http\Request;
use DB;
use Image;
use Cache;

class SubSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::
            select('id', 'category_name', 'category_native_name')
            ->where('status', '=', AllStatic::$active)
            ->get();

        $brand = Brand::
            select('id', 'brand_name', 'brand_native_name')
            ->where('status', '=', AllStatic::$active)
            ->orderBy('brand_name', 'asc')
            ->get();

        return view('admin.subsubcategory.sub_sub_category', [

            'category' => $category,
            'brand' => $brand,

        ]);
    }
}