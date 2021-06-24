<?php

use Illuminate\Support\Facades\Route;




Route::get('/login','LoginController@login')->name('login');
Route::get('/','LoginController@login')->name('login');
Route::post('/login/user','LoginController@savelogin');
Route::get('/regis','LoginController@create')->name('create');
Route::post('/regis/user','LoginController@savecreate')->name('create.user');
Route::get('/logout', 'LoginController@logout');

Route::group(['middleware' => 'auth'],function () {

  Route::get('/dashboard','HomeController@home')->name('dashboard');
  Route::get('/siswa','SiswaController@index');
  Route::post('/createsiswa','SiswaController@createsiswa')->name('createsiswa');
  Route::get('/siswa/{id}/edit','SiswaController@editsiswa')->name('edit');
  Route::post('/siswa/{id}/simpan','SiswaController@saveeditsiswa')->name('update');
  Route::get('/delete/{id}','SiswaController@delete')->name('delete');

  Route::get('/siswa/{id}/profile', 'SiswaController@profile');
  
});

