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

Route::get('phone', 'API\PhoneController@index');
Route::post('phone', 'API\PhoneController@index');

Route::get('reportnumber', 'API\ReportnumberController@index');
Route::post('reportnumber', 'API\ReportnumberController@index');

Route::post('AddReport', 'API\ReportnumberController@AddReport');
Route::post('AddNumber', 'API\ReportnumberController@AddNumber');
