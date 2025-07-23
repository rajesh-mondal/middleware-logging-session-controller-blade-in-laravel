<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\SessionController;
use App\Http\Middleware\DemoMiddleware;
use Illuminate\Support\Facades\Route;

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
