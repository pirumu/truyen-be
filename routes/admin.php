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

Route::group(['prefix' => 'admin'], function () {

    Route::get('dang-nhap','XacThucController@dangNhapForm')->name('dangNhapForm');

    Route::post('dang-nhap','XacThucController@dangNhap')->name('dangNhap');

    Route::post('dang-xuat','XacThucController@dangXuat')->name('dangXuat');


    Route::group(['middleware' => 'kiem_tra_admin_dang_nhap'], function () {

        Route::resource('the-loai','TheLoaiController');
        Route::resource('truyen','TruyenController');
        Route::resource('anh','AnhController');
        Route::resource('chuong','ChuongController');
        Route::resource('danh-muc','DanhMucController');

    });
});
