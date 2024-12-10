<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get( '/', function () {
    return view( 'welcome' );
} );

Route::get( '/my-profile/{id}', [ProfileController::class, 'index'] );