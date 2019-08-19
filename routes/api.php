<?php

use Illuminate\Http\Request;

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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->get('/test', function () {
        return 'It is ok';
    });
    $api->get('/categories', [
        'as' => 'admin.category.index',
        'uses' => 'App/Http/Controllers/CategoryController@index'
    ]);
});

//$api->version('v1', function ($api) {
//    $api->group(['middleware' => 'auth:api', 'prefix' => '/categories'], function ($api) {
//        $api->get('/categories', [
//            'as' => 'admin.category.index',
//            'uses' => 'App/Http/Controllers/CategoryController@index'
//        ]);
//    });
//});
