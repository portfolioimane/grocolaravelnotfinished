<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\DeliverySlotSetting;
use Illuminate\Http\Request;

class DeliverySlotSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.setting.slot.date_time_slot');
    }

    
}
