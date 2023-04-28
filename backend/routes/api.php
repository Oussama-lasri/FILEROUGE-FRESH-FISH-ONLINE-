<?php

use App\Models\Customer;
use App\Models\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fishController;
use App\Http\Controllers\buyByController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\PannierController;
use App\Http\Controllers\RecepieController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\categorieController;
use App\Http\Controllers\CommandeFishController;

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
// Route::middleware(['cors'])->group(function () {
Route::apiResource('customer', customerController::class);
Route::apiResource('categorie', categorieController::class);
Route::apiResource('buyBy', buyByController::class);
Route::apiResource('fish', fishController::class);
Route::apiResource('recipe', RecepieController::class);
Route::apiResource('pannier', PannierController::class);
Route::apiResource('commande', CommandeController::class);
Route::apiResource('commande_fishes', CommandeFishController::class);
Route::get('getProductUser/{User}', [PannierController::class, 'getProductUser']);
Route::post('updateItem', [PannierController::class, 'updateItem']);
Route::post('deleteItem', [PannierController::class, 'deleteItem']);
Route::delete('clearCart/{user_id}', [PannierController::class, 'clearCart']);
Route::post('commande/accept/{id}', [CommandeController::class, 'accept']);
Route::post('commande/refuse/{id}', [CommandeController::class, 'refuse']);

// });

Route::post('message', [messageController::class, 'message']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
});
