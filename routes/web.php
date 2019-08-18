<?php


use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/** @var Router $router */

$router->group(['prefix' => '/categories'], function (Router $router) {
    $router->get('/', [
        'as' => 'admin.category.index',
        'uses' => 'CategoryController@index',
//        'middleware' => 'can:profile.frontendusers.index'
    ]);
    $router->get('/{category}/edit', [
        'as' => 'admin.category.edit',
        'uses' => 'CategoryController@edit',
//        'middleware' => 'can:membercv.membercvs.edit'
    ]);
    $router->put('/{category}', [
        'as' => 'admin.category.update',
        'uses' => 'CategoryController@update',
//        'middleware' => 'can:profile.frontenduserinfos.edit'
    ]);
//    $router->post('frontendusers', [
//        'as' => 'admin.profile.frontenduser.store',
//        'uses' => 'FrontendUserController@store',
//        'middleware' => 'can:profile.frontendusers.create'
//    ]);
//    $router->post('frontendusers', [
//        'as' => 'admin.profile.frontenduser.store',
//        'uses' => 'FrontendUserController@store',
//        'middleware' => 'can:profile.frontendusers.create'
//    ]);
    $router->delete('/{category}', [
        'as' => 'admin.category.destroy',
        'uses' => 'CategoryController@destroy',
//        'middleware' => 'can:profile.frontenduserinfos.destroy'
    ]);
});

