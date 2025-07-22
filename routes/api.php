<?php

use App\Http\Controllers\LogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get( '/user', function ( Request $request ) {
    return $request->user();
} )->middleware( 'auth:sanctum' );

Route::get( '/log/{num1}/{num2}', [LogController::class, 'LogAction'] );
