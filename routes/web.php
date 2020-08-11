<?php

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
    return view('welcome');
});


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth','admin']], function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get("/role-register",'Admin\DashboardController@register');
    Route::get("/role-edit/{id}",'Admin\DashboardController@registeredit');
    Route::put("/role-register-update/{id}",'Admin\DashboardController@registereUpdate');
    Route::delete('/role-delete/{id}','Admin\DashboardController@registereDelete');

    Route::get('/abouts','Admin\AboutusController@show');
    Route::post('/save-aboutus','Admin\AboutusController@save');
    Route::get('/about-us/{id}','Admin\AboutusController@edit');
    Route::put('/aboutus-update/{id}', 'Admin\AboutusController@update');
    Route::delete('/aboutus-delete/{id}', 'Admin\AboutusController@delete');

    Route::get('/service-category','Admin\ServiceController@index');
    Route::get('/service-create','Admin\ServiceController@create');
    Route::post('/category-store','Admin\ServiceController@store');
    Route::get('/service-category-edit/{id}','Admin\ServiceController@edit');
    Route::put('/category-update/{id}','Admin\ServiceController@update');
    Route::delete('/service-cat-delete/{id}','Admin\ServiceController@delete');

    Route::get('/service-list','Admin\ServiceListController@index');
    Route::post('/servicelist-add','Admin\ServiceListController@save');
    Route::get('/servicelist-edit/{id}', 'Admin\ServiceListController@edit'); 
    Route::put('/servicelist-update/{id}','Admin\ServiceListController@update');

});
