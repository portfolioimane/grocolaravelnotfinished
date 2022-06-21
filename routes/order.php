<?php

// all order related route are here 
Route::group(['prefix'=>'admin','middleware'=>['auth:admin','permission']],function(){
   	Route::resource('order','Order\OrderController');

   	Route::get('area-wise-order',[
		'as'   => 'areawiseorder.index',
		'uses' => 'Order\OrderController@viewAreaOrder'
	]);
	Route::get('order-area',['as' => 'order-area.index','uses' => 'Setting\ShippingAreaController@index']);

});