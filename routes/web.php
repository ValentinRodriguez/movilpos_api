<?php

use Illuminate\Support\Facades\Route;
use App\Mail\actividadesMailable;
use Illuminate\Support\Facades\Mail;

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


Route::resource('mail','officeMailController');

Route::get('/reporte/invtransacciones-visualizar', 'invtransacciones@verReporte')->name('transaccion');
