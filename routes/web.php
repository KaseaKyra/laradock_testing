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

$router->group(['prefix' => '/admin/categories'], function (Router $router) {
    $router->get('/', [
        'as' => 'admin.category.index',
        'uses' => 'CategoryController@index',
    ]);
    $router->get('/{category}/edit', [
        'as' => 'admin.category.edit',
        'uses' => 'CategoryController@edit',
    ]);
    $router->patch('/{category}', [
        'as' => 'admin.category.update',
        'uses' => 'CategoryController@update',
    ]);
    $router->get('categories/create', [
        'as' => 'admin.category.create',
        'uses' => 'CategoryController@create',
    ]);
    $router->post('/categories', [
        'as' => 'admin.category.store',
        'uses' => 'CategoryController@store',
    ]);
    $router->delete('/{category}', [
        'as' => 'admin.category.destroy',
        'uses' => 'CategoryController@destroy',
    ]);
    $router->get('/search', [
        'as' => 'admin.category.search',
        'uses' => 'CategoryController@search',
    ]);
});

$router->group(['prefix' => '/admin/users'], function (Router $router) {
    $router->get('/users', [
        'as' => 'admin.user.index',
        'uses' => 'UserController@index',
    ]);
    $router->get('/{user}/edit', [
        'as' => 'admin.user.edit',
        'uses' => 'UserController@edit',
    ]);
});

