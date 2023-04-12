<?php

use App\Http\Controllers\API\AuthController;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\messageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('customer',customerController::class);

Route::post('message',[messageController::class,'message']);

Route::middleware('auth:sanctum')->get('/user',function(Request $request){
    return $request->user();
});
Route::controller(AuthController::class)->group(function(){
    Route::post('login','login');
    Route::post('register','register');
});

