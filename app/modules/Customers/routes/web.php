<?php

use Illuminate\Support\Facades\Route;
use Customers\Http\Controllers\Backend;

Route::namespace('Customers\Http\Controllers')->middleware('customer')->group(function () {

    Route::prefix(buildPrefix('customers'))->namespace('Backend')->group(function () {
        route::get('all', 'Customers@index');
    });

    Route::prefix(buildPrefix('customers','frontend'))->namespace('Frontend')->group(function () {
        route::get('all', 'Customers@index');
    });

});
