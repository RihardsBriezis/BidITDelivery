<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\PackageController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Post generated package
Route::get('delivery/package/generate', [PackageController::class, 'generatePackage']);
Route::get('delivery/package/test', [PackageController::class, 'test']);
//Get package status by packageID
Route::post('delivery/package/{packageId}/status', [DeliveryController::class, 'confirmation']);