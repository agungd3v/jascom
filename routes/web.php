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

// Route::get('/', function () {
//     return redirect()->route('public.index');
// });

// Auth::routes();

// Admin
// Route::group(['prefix' => 'suauth', 'namespace' => 'Admin'], function () {
//     Route::group(['prefix' => 'dashboard'], function () {
//         Route::get('/', 'AdminController@index')->name('admin.dashboard');
//         Route::group(['prefix' => 'components'], function () {
//             Route::get('/', function () {
//                 return redirect()->back();
//             });
//             Route::group(['prefix' => 'category'], function () {
//                 Route::get('/', 'AdminController@category')->name('admin.category');
//                 Route::post('/', 'AdminController@storeCategory')->name('category.store');
//             });
//             Route::group(['prefix' => 'service'], function () {
//                 Route::get('/', 'AdminController@service')->name('admin.service');
//                 Route::post('/', 'AdminController@storeService')->name('service.store');
//             });
//             Route::group(['prefix' => 'item'], function () {
//                 Route::post('/', 'AdminController@saveItem')->name('item.store');
//             });
//         });
//     });
// });

// Public
Route::group(['prefix' => '/', 'namespace' => 'User'], function () {
    Route::get('/{v?}/{u?}/{e?}/{j?}/{s?}', function () {
        return view('user.app');
    });
    // Route for vue getting & posting
    Route::post('/order-proccess', 'UserController@order');
});

// Route::get('/home', 'HomeController@index')->name('home');
