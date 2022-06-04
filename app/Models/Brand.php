<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public function sub_sub_category_brand(){

        return $this->hasMany('App\Models\Brand');
    }

    // relation with product

    public function product(){

        return $this->hasMany('App\Models\Product');
    } 
}
