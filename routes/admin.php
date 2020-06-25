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



// route parameters
Route::get('/admin2/{id}', function ($id) {
    return $id;
})->name('a');

Route::get('/admin3/{id?}', function () {
    return 'welcome admin  ';
})->name('b');

// route name
Route::namespace('Front')->group(function (){
    route::get('users','UserController@showAdminName');
});

