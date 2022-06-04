<?php


Route::group(['prefix'=>'admin','middleware'=>['auth:admin','permission']],function(){

  Route::get('/',[
    'as' => 'admin.dashboard',
    'uses' => 'Dashboard\DashboardController@index',
  ]);


  Route::get('password',[
    'as' => 'change.password',
    'uses' => 'Admin\AdminController@getChangePage',
  ]);

    Route::post('password',[
    'as' => 'admin.changepass.submit',
    'uses' => 'Admin\AdminController@saveChangePass',
  ]);
 });

// admin register login 

Route::get('admin/login',[
	'as'=>'admin.login',
	'uses'=>'Auth\AdminLoginController@showLoginForm'
]);

Route::post('admin/login', [
	'as'=>'admin.login.submit',
	'uses'=>'Auth\AdminLoginController@login'
]);

Route::get('admin/password-change', [
  'as'=>'password-change.request',
  'uses'=>'Auth\AdminLoginController@showpage'
]);

Route::post('admin/mail-check', [
  'as'=>'admin.chkmail.password',
  'uses'=>'Auth\AdminLoginController@sendmail'
]);

Route::get('admin/reset/{token?}','Auth\AdminLoginController@viewResetPage');

Route::post('confirm-password',[
  'as' => 'admin.confirm.password',
  'uses' => 'Auth\AdminLoginController@storeNewPassword']);

Route::get('admin/logout', [
	'as'=>'admin.logout',
	'uses'=>'Auth\AdminLoginController@logout'
]);