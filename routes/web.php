<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',['as'=>'frontend.index','uses'=>'FrontendController@index']);
Route::get('menu',['as'=>'frontend.menu','uses'=>'FrontendController@menu']);
Route::get('contact',['as'=>'frontend.contact','uses'=>'FrontendController@contact']);
Route::get('reservation',['as'=>'frontend.reservation','uses'=>'FrontendController@reservation']);
