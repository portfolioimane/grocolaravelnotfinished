<?php

namespace App\Http\Controllers\Offers;

use App\AllStatic;
use App\Http\Controllers\Controller;
use App\Http\Resources\Offer\CampaignResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Campaign;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;
use Image;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.offers.campaign.campaign');
    }
}