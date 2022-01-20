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

Route::get('message', 'API\MessageController@index');
Route::post('message', 'API\MessageController@index');

Route::get('reportnumber', 'API\ReportnumberController@index');
Route::post('reportnumber', 'API\ReportnumberController@index');

Route::post('AddReport', 'API\ReportnumberController@AddReport');
Route::post('AddNumber', 'API\ReportnumberController@AddNumber');


Route::get('user', 'API\UserController@index');
Route::post('user', 'API\UserController@index');

Route::post('user/login', 'API\UserController@login');
Route::post('user', 'API\UserController@Register');
Route::get('user/{id}', 'API\UserController@view');
Route::put('user/{id}', 'API\UserController@update');
Route::post('user/{id}', 'API\UserController@update');//fake update
Route::put('user/{id}', 'API\UserController@updatepassword');

Route::get('member', 'API\MemberController@index');
Route::post('member', 'API\MemberController@index');
Route::post('member', 'API\MemberController@AddMember');
Route::post('member', 'API\MemberController@Addusername');


Route::post('member/login', 'API\MemberController@login');
Route::post('member', 'API\MemberController@Register');
Route::get('member/{id}', 'API\MemberController@view');
Route::put('member/{id}', 'API\MemberController@update');
Route::post('member/{id}', 'API\MemberController@update');//fake update
Route::put('member/{id}', 'API\MemberController@updatepassword');