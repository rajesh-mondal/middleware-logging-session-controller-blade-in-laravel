<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Middleware\DemoMiddleware;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ConstController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SingleActionController;

Route::get( '/log/{num1}/{num2}', [LogController::class, 'LogAction'] );

Route::get( '/SessionPut/{email}', [SessionController::class, 'SessionPut'] );
Route::get( '/SessionPull', [SessionController::class, 'SessionPull'] );
Route::get( '/SessionGet', [SessionController::class, 'SessionGet'] );
Route::get( '/SessionForget', [SessionController::class, 'SessionForget'] );
Route::get( '/SessionFlush', [SessionController::class, 'SessionFlush'] );

// Request Verification
Route::get( "hello", [DemoController::class, 'RequestVerification'] )->middleware( [DemoMiddleware::class] );

// Request Redirect
Route::get( "hello1/{key}", [DemoController::class, 'Redirect1'] )->middleware( [DemoMiddleware::class] );
Route::get( "hello2", [DemoController::class, 'Redirect2'] );

// Route Group
Route::middleware( ['demo'] )->group( function () {
    Route::get( "hello1/{key}", [DemoController::class, 'Route1'] );
    Route::get( "hello2/{key}", [DemoController::class, 'Route2'] );
    Route::get( "hello3/{key}", [DemoController::class, 'Route3'] );
    Route::get( "hello4/{key}", [DemoController::class, 'Route4'] );
} );

Route::get( "hello-req", [DemoController::class, 'ManiRequest'] )->middleware( [DemoMiddleware::class] );

Route::get( "rate-limit", [DemoController::class, 'RateLimit'] )->middleware( 'throttle:5,1' );

Route::get( "/single", SingleActionController::class );

// for resource controller
Route::resource( "resource", ResourceController::class );

Route::get( "hello-const", [ConstController::class, 'ManiRequest'] );