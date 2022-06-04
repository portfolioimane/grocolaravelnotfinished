<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockhistory extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','product_name','product_brand','product_category','product_sub_category','added_new_stock','date'];
}
