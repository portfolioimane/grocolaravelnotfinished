<?php

// this file will contain all offer related routes 

Route::group(['prefix'=>'admin','middleware'=>['auth:admin','permission']],function(){
   
  Route::resource('offer','Offers\CampaignController');
  Route::resource('coupon','Offers\CouponController');
  Route::resource('send-coupon','Offers\SendCouponController');
  Route::resource('slider','Offers\SliderController');

});