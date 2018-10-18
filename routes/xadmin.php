<?php

Route::group(['namespace' => 'Xadmin'], function() {

    Route::get('/', 'HomeController@index')->name('xadmin.dashboard');

    //posts
    Route::name('xadmin.')->group(function(){
        Route::resource('posts','PostController');
    });

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('xadmin.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('xadmin.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('xadmin.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('xadmin.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('xadmin.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('xadmin.password.reset');

    // Verify
    // Route::get('email/resend', 'Auth\VerificationController@resend')->name('xadmin.verification.resend');
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('xadmin.verification.notice');
    // Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('xadmin.verification.verify');

});