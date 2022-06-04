<?php

// uesr and profile related all route will go there

use Illuminate\Support\Facades\Artisan;


Route::group(['middleware' => 'auth'], function () {

    Route::get('profile',
        [
            'as'   => 'user.profile',
            'uses' => 'Front\User\UserController@index',
        ]
    );

    Route::get('profile/logout',
        [
            'as'   => 'user.logout',
            'uses' => 'Front\User\UserController@logout',
        ]
    );

});

Route::group(['middleware' => 'guest'], function () {
    Route::get('dev/test', 'Admin\AdminController@tester');
    Route::post('otp', 'OTP\OTPController@store')->name('send.otp');
    Route::get('otp/submit/{phone}', 'OTP\OTPController@otpForm')->name('otp.form');
    Route::post('otp/submit', 'OTP\OTPController@otpSubmitByUser')->name('submit.otp');

    Route::post('user-password-email-reset-link', 'Front\User\UserController@sendEmailLink')->name('user-password-email-reset-link');
    Route::get('user/reset/{token?}', 'Front\User\UserController@viewUserResetPage');
    Route::post('user/reset/password', 'Front\User\UserController@storeResetPassword')->name('user.confirm.password');

});
