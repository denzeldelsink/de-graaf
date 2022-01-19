<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ReserveerController;
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

//templates directions
Route::get('/', 'App\Http\Controllers\TemplateController@index');   
Route::get('admin/', 'App\Http\Controllers\TemplateController@adminindex');
Route::get('register', 'App\Http\Controllers\TemplateController@register');
Route::get('admin/menu/add', 'App\Http\Controllers\TemplateController@menuadd');
Route::get('login', 'App\Http\Controllers\TemplateController@login');
Route::get('reserveer','App\Http\Controllers\TemplateController@reserveer');

//menus
Route::get('menu', 'App\Http\Controllers\MenuController@list');
Route::get('admin/menu', 'App\Http\Controllers\MenuController@adminlist');
Route::post('admin/menu/store', 'App\Http\Controllers\MenuController@store');
Route::get('admin/menu/delete/{id}', 'App\Http\Controllers\MenuController@delete');
//gebruikers
Route::get('gebruiker', 'App\Http\Controllers\UserController@list');
Route::get('admin/user/delete/{id}', 'App\Http\Controllers\UserController@delete');
Route::post('/store',"App\Http\Controllers\UserController@store");

Route::post('/check',"App\Http\Controllers\UserController@check");

//
Route::post('/storer',"App\Http\Controllers\ReserveerController@store");




