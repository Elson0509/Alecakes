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
use Illuminate\Support\Facades\Storage;

Route::get('/', function(){
    return redirect('/br');
});

Route::get('/curriculo', 'MyController@curriculo');

Route::get('/{lg}/cake/{id}', 'MyController@cake');

Route::get('/{lg}/fillings', 'MyController@fillings');

Route::get('/{lg}/price', 'MyController@price');

Route::get('/{lg}', 'MyController@index');


