<?php

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

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

Route::get('/', function () {
    return View::make('auth.login');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/', 'DashboardController@index');

    Route::get('/charts', function () {
        return View::make('admin.charts.index');
    });
    Route::get('/tables', function () {
        return View::make('admin.tables.index');
    });

    Route::get('/components/buttons', function () {
        return View::make('admin.components.buttons');
    });
    Route::get('/components/cards', function () {
        return View::make('admin.components.cards');
    });

    Route::get('/utilities/animation', function () {
        return View::make('admin.utilities.animation');
    });
    Route::get('/utilities/border', function () {
        return View::make('admin.utilities.border');
    });
    Route::get('/utilities/color', function () {
        return View::make('admin.utilities.color');
    });
    Route::get('/utilities/other', function () {
        return View::make('admin.utilities.other');
    });

    Route::get('/pages/404', function () {
        return View::make('admin.pages.404');
    });
    Route::get('/pages/blank', function () {
        return View::make('admin.pages.blank');
    });
});


