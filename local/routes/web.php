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

Route::get('/','homecontroller@index');

Route::get('home/cek/{id}/{nim}', 'homecontroller@cek');

Auth::routes();

Route::group(['middleware'=>'auth'],function()
{
    Route::get('/home', 'homecontroller@home');
    
    Route::get('nomor/importnomor', 'nomorcontroller@importnomor');
    Route::post('nomor/importnomor', 'nomorcontroller@import_excel');
    Route::get('nomor/delete/{id}','nomorcontroller@delete');
    Route::post('nomor/search', 'nomorcontroller@search');
    Route::resource('nomor', 'nomorcontroller');
    
    Route::get('password', 'profilcontroller@ubahpassword');
    Route::post('password', 'profilcontroller@password');
    
    
    Route::post('simpankirim', 'kirimcontroller@simpankirim');
    Route::resource('kirim', 'kirimcontroller');
    
    Route::resource('profil', 'profilcontroller');
    
    Route::get('/logout', 'homecontroller@logout');
    Route::get('get_nomor/{data}', 'kirimcontroller@get_nomor');
    Route::post('multikirim', 'kirimcontroller@multikirim');
    Route::get('get_nomor_count/{data}', 'kirimcontroller@get_nomor_count');
    
    Route::group(['middleware' => ['checkRole:2']],function(){
        Route::get('teskirim', 'profilcontroller@teskirim');
        Route::post('teskirim', 'profilcontroller@kirimpesan');

        Route::get('kelas/delete/{id}','kelascontroller@delete');
        Route::resource('kelas', 'kelascontroller');
        
        Route::get('kelasdetail/delete/{id}/{cek}','kelasmhscontroller@delete');
        Route::resource('kelasdetail', 'kelasmhscontroller');

        Route::get('get_nomor/{id}', 'kirimcontroller@get_nomor');
        Route::get('getnomor_count/{id}', 'kirimcontroller@getnomor_count');
        Route::resource('broadcast', 'kirimcontroller');
    });

});