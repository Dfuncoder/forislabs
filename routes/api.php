<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('login')->name('login.')->group( function (){
    Route::post('/google', [ApiController::class, 'googleloginApi'])->name('google')->middleware('auth:api');
    Route::post('/facebook', [ApiController::class, 'facebookloginApi'])->name('facebook')->middleware('auth:api'); 
});
