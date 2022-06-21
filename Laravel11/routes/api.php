<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mhs/all','MhsControllerAPI@all');
Route::post('/mhs/addMhs','MhsControllerAPI@addMhs');
Route::post('/mhs/update/{id}','MhsControllerAPI@update');
Route::delete('/mhs/delete/{id}','MhsControllerAPI@delete');