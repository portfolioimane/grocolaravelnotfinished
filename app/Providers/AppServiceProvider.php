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
