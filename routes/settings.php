<?php

// all kind of setting related route will be here
// we are not using put and delete method because some server does not support put & deletes  method

use App\Http\Controllers\Setting\DeliverySlotSettingController;

Route::group(['prefix' => 'admin/setting', 'middleware' => ['auth:admin', 'permission']], function () {

    // currency setting
    Route::resource('currency', 'Setting\CurrencyController');
    
    // payment gateway setting

    Route::get('payment-gateway-setting', [
        'as'   => 'gateway.index',
        'uses' => 'Setting\PaymentSettingController@index',
    ]);
  

    // payment gateway setting

    // social login credential setting
    Route::get('social/login', [
        'as'   => 'social.index',
        'uses' => 'Setting\SocialCreadentialController@index',
    ]);


    // Seo Setting
    Route::get('seo', ['as' => 'seo.index', 'uses' => 'Setting\SeoSettingController@index']);

 
    // Seo Setting

    // Sop Setting
    Route::get('shop', ['as' => 'shop.index', 'uses' => 'Setting\ShopSettingController@index']);

  
    // Sop Setting

    //Messenger, Google App ID
    Route::get('message', ['as' => 'message.analytics', 'uses' => 'Setting\MessangerController@index']);
 
    //End Messenger, Google App ID

    //Shipping Route
    Route::get('shipping', ['as' => 'shipping.index', 'uses' => 'Setting\ShippingController@index']);
 

    //Email Route
    Route::get('email', ['as' => 'email.index', 'uses' => 'Email\EmailController@index']);
  
    // page route
    Route::get('pages', [
        'as'   => 'pages.index',
        'uses' => 'Setting\PageSettingController@getPage',
    ]);



    //Trial Setting
    Route::get('trial', ['as' => 'trial.index', 'uses' => 'Setting\TrialController@index']);
    Route::get('trial/{id}/edit', 'Setting\TrialController@edit');
    Route::post('trial', 'Setting\TrialController@update');

// Email Setting
    Route::get('email/setting', ['as' => 'email-setting.index', 'uses' => 'Email\EmailController@showSettingPage']);



    /****** *****
     * PWA Settings
     ****** *****/
    Route::get('pwa-setting', 'Setting\PwaSettingController@index')->name('pwa.index');


    // date time slot setting
    Route::get('date-slot', [DeliverySlotSettingController::class, 'index'])->name('slot.index');


    Route::get('time-slot-list', 'Setting\TimeSlotSettingController@index');

});