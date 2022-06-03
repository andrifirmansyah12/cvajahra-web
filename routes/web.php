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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('superadmin.dashboard.index');
});

// Superadmin
Route::get('/superadmin/dashboard', function () {
    return view('superadmin.dashboard.index');
});

Route::get('/superadmin/input-closing', function () {
    return view('superadmin.inputclosing.index');
});

Route::get('/superadmin/status-paket', function () {
    return view('superadmin.statuspaket.index');
});

Route::get('/superadmin/laporan-iklan', function () {
    return view('superadmin.laporaniklan.index');
});

// Costumer Service
Route::get('/costumerservice/input-closing', function () {
    return view('costumerservice.inputclosing.index');
});

Route::get('/costumerservice/status-paket', function () {
    return view('costumerservice.statuspaket.index');
});
