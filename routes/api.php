<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

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

Route::post('login', 'PassportController@login');
Route::post('register', 'PassportController@register');



Route::middleware('auth:api')->group(function() {
    Route::post('user', 'PassportController@details');
    Route::post('test', function () {
        return response()->json(["test" => "Hello World"], 200);
    });
    /* Route::resource('products', 'ProductController'); */
});

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 */