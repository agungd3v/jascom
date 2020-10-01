<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('public.index');
});

Auth::routes();

// Admin
Route::group(['prefix' => 'suauth', 'namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', function () {
            return redirect()->route('admin.dashboard');
        });
        Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
        Route::group(['prefix' => 'components'], function () {
            Route::get('/', function () {
                return redirect()->back();
            });
            Route::group(['prefix' => 'category'], function () {
                Route::get('/', 'AdminController@category')->name('admin.category');
                Route::post('/', 'CategoryController@storeCategory')->name('category.store');
            });
        });
    });
});

// Public
Route::group(['prefix' => '/', 'namespace' => 'User'], function () {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::post('/order-proccess', 'UserController@order')->name('user.index');
});
// Route::get('/home', 'HomeController@index')->name('home');
