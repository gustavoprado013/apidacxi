<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('dacxi', 'ApiDacxiController');

Route::get('status-gecko', 'ApiDacxiController@statusGecko');
Route::get('price-bitcoin', 'ApiDacxiController@priceBitcoin');
Route::get('price-dacxi', 'ApiDacxiController@priceDacxi');
Route::get('price-eth', 'ApiDacxiController@priceEth');
Route::get('price-atom', 'ApiDacxiController@priceAtom');
Route::get('price-luna', 'ApiDacxiController@priceLuna');

Route::post('store-price-any', 'ApiDacxiController@storePrice');