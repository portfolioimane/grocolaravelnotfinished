<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $guard = 'admin';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'role_id', 'status', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // relation with role 

    public function role()
    {
        return $this->belongsTo('App\Models\Admin\Role');
    }

    public function area()
    {
        return $this->belongsTo('App\Models\Setting\ShippingArea','admin_area_id')->withDefault([
              'id'          =>  0,
              'city'        =>  'All Alowed']);
    }
}
