<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\PwaSetting;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Throwable;

class PwaSettingController extends Controller
{
    public function index()
    {
        return PwaSetting::orderBy('id', 'desc')->first();
    }

  
}
