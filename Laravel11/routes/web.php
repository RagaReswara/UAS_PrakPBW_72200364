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

use Illuminate\Support\Facades\Route;

Route::get('/home', 'AuthController@home');

//DOSEN
Route::get('/dosen','DosenController@dosen');
Route::get('/dosen/cari', 'DosenController@cari');
Route::get('/dosen/formDosen', 'DosenController@formDosen');
Route::post('/dosen/saveDosen', 'DosenController@saveDosen');
Route::get('/dosen/editDosen/{id}', 'DosenController@editDosen');
Route::put('/dosen/updateDosen/{id}', 'DosenController@updateDosen');
Route::get('/dosen/hapusDosen/{id}', 'DosenController@hapusDosen');


//MAHASISWA
Route::get('/mhs','MhsController@mhs')->middleware('auth');
Route::get('/mhs/cari', 'MhsController@cari')->middleware('auth');
Route::get('/mhs/formMhs', 'MhsController@formMhs')->middleware('auth');
Route::post('/mhs/saveMhs', 'MhsController@saveMhs')->middleware('auth');
Route::get('/mhs/editMhs/{id}', 'MhsController@editMhs')->middleware('auth');
Route::put('/mhs/updateMhs/{id}', 'MhsController@updateMhs')->middleware('auth');
Route::get('/mhs/hapusMhs/{id}', 'MhsController@hapusMhs')->middleware('auth');

//USER
//Route::get('/user', 'AuthController@user');
Route::get('/user', 'AuthController@user')->middleware('auth');
Route::get('/user/cari', 'AuthController@cari')->middleware('auth');
Route::get('/user/formUser', 'AuthController@formUser')->middleware('auth');
Route::post('/user/saveUser', 'AuthController@saveUser')->middleware('auth');
Route::get('/user/editUser/{id}', 'AuthController@editUser')->middleware('auth');
Route::put('/user/updateUser/{id}', 'AuthController@updateUser')->middleware('auth');
Route::get('/user/hapusUser/{id}', 'AuthController@hapusUser')->middleware('auth');

//LOGIN 
Route::get('/', 'AuthController@login')->middleware('guest')->name('login');
Route::post('/user/cekLogin', 'AuthController@cekLogin')->middleware('guest');
Route::get('/logout','AuthController@logout')->middleware('auth');
