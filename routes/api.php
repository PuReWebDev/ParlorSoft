<?php

use Illuminate\Http\Request;
use App\Http\Resources\Users as UserResource;
use App\User;
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

//Route::get('/user', function () {
////    return UserResource::collection(User::all());
//    return new UserResource(User::find(1));
//});


Route::resource('shops', 'ShopAPIController');