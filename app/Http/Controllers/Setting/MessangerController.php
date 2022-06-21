<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting\Messenger;
use App\Models\Setting\GoogleAnalytic;

class MessangerController extends Controller
{
    public function index()
    {
        return view('admin.setting.messenger.messenger');
    }

    

}
