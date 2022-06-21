<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting\PageSetting;
use DB;

class PageSettingController extends Controller
{
    public function getPage()
    {
        return view('admin.setting.pages.pageSetting');
    }

  
}
