<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customers";

    public function customerOrder()
    {
        return $this->hasMany('App\Models\Order\Order','user_id');
    }
}
