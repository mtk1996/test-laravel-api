<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', 'Api\AuthApi@login');



Route::group(['middleware' => "auth:api"], function () {
    //need login access
    Route::get('/', function () {
        return auth('api')->user();
    });
});
