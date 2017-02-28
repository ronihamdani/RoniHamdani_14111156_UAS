<?php
use App\Mahasiswa;
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

Route::get('/', 'ViewController@index');
Route::get('/beranda', 'ViewController@beranda');
Route::get('/input', 'ViewController@input');
Route::get('/form_add', 'ViewController@form_add');
Route::post('/add_action', 'ViewController@add_action');

Route::resource('siswa', 'ViewController');


Auth::routes();

Route::get('/home', 'HomeController@index');
