<?php

// all order related route are here 
Route::group(['prefix'=>'admin','middleware'=>['auth:admin','permission']],function(){

	Route::resource('customer','Customer\CustomerController');
});