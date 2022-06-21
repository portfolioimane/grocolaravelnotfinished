<?php

namespace App\Providers;

use App\Models\Setting\SeoSetting;
use App\Models\Setting\ShopSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Validator;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Validator::extend('image64', function ($attribute, $value, $parameters, $validator) {
            $type = explode('/', explode(':', substr($value, 0, strpos($value, ';')))[1])[1];
            if (in_array($type, $parameters)) {
                return true;
            }
            return false;
        });
        
        $shop_info = cache()->remember('shop-info', 43000, function () {
            return ShopSetting::orderBy('id', 'desc')->first();
        });

        $seo_info = cache()->remember('seo-info', 43000, function () {
            return SeoSetting::orderBy('id', 'desc')->first();
        });

        return View::share([
            'shop_info' => $shop_info,
            'seo_info'  => $seo_info]);
    }
}
