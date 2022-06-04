<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

   protected $fillable = [
        'name','email','phone','location_id','avatar','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // relation with order 

    public function order()
    {
        return $this->hasMany('App\Models\Order\Order');
    } 

    public function location()
    {
        return $this->belongsTo('App\Models\Setting\ShippingArea')->withDefault([
            'id' => 0,
            'city' => 'Not Found'
        ]);
    } 

    public function user_coupon()
    {
        return $this->hasOne('App\Models\Coupon\UserCoupon');
    }
}
