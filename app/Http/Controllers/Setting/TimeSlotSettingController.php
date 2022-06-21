<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\DeliveryTimeSLot;
use Illuminate\Http\Request;

class TimeSlotSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $time_slot = DeliveryTimeSLot::orderBy('expired_at', 'asc')->get();

        return $time_slot;
    }

    
}
