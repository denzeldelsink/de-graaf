<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\TemplateController;
use App\Models\Menu;
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


Route::get('/', 'App\Http\Controllers\TemplateController@index');
Route::get('register', 'App\Http\Controllers\TemplateController@register');
Route::get('menu', 'App\Http\Controllers\MenuController@list');
Route::get('login', 'App\Http\Controllers\TemplateController@login');
Route::post('/store',"App\Http\Controllers\UserController@store");
Route::post('/check',"App\Http\Controllers\UserController@check");



