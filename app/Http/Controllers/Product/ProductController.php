<?php

namespace App\Http\Controllers\Product;

use App\AllStatic;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order\OrderDetails;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductKeyword;
use App\Models\ProductSize;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\SubCategoryBrand;
use App\Models\SubSubCategory;
use Auth;
use DB;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
        public function getAllCategory($edit_time = '')
    {
        $category = Category::select('id', 'category_name', 'category_native_name')
            ->orderBy('category_name', 'desc');
        // during edit time will pass a value and will get all category active in_active
        if ($edit_time = '') {
            $category->where('status', '=', AllStatic::$active);
        }
        return $category = $category->get();
    }

        public function index()
    {

        $category = $this->getAllCategory();
        return view('admin.product.product', [
            'category' => $category,
        ]);
    }
}