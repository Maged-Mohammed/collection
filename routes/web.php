<?php
/*
Route::get('/', function () {
    return view('welcome')->with('data',2);
});

// route parameters
Route::get('/test2/{id}', function ($id) {
    return $id;
})->name('a');

Route::get('/test3/{id?}', function () {
    return 'welcome';
})->name('b');

// route name

//Route::get('second','Admin\SacandController@showString');

Route::group(['namespace'=>'Admin'],function (){
    Route::get('second','SacandController@showString');
});
Route::get('login',function (){
    return 'must be login to view this page';
}) ->name('login');

Route::resource('news','NewsController');

Route::get('indix','Front\UserController@getIndix');

/*Route::namespace('Front')->group(function (){
    route::get('users','UserController@showAdminName');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});*/



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home') ->middleware('verified');

Route::get('/', function (){
    return view('welcome');
});


