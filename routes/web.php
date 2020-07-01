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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'HomeController@home');
// Route::get('/register', 'AuthController@register');
// Route::get('/halo', 'AuthController@halo');
// Route::post('/halo', 'AuthController@halo_post');

Route::get('/master', function(){
    return view ('/adminlte/master');
});

Route::get('/', function(){
    return view ('/adminlte/items/tabel');
});

Route::get('/data-tables', function(){
    return view ('/adminlte/items/data-tables');
});
