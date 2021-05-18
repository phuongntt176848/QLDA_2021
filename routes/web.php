<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;




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

Route::get('/admin', 'App\Http\Controllers\AdminController@getIndexAdmin')->name('admin');
Route::get('/admin/nhanvien/nhan-vien', 'App\Http\Controllers\AdminController@getNhanvien')->name('nhanvien.nhanvien');
Route::get('/admin/tochuc/phong-ban', 'App\Http\Controllers\AdminController@getPhongBan')->name('tochuc.phongban');
Route::post('/admin/tochuc/phong-ban', 'App\Http\Controllers\AdminController@storePhongBan')->name('tochuc.phongban.store');



