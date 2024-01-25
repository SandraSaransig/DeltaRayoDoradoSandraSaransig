<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');


//Rutas footer
Route::view('footerInfo/contact', 'footerInfo.contact');

Route::view('footerInfo/policy', 'footerInfo.policy');

Route::view('footerInfo/privacy', 'footerInfo.privacy');

Route::view('footerInfo/setting', 'footerInfo.setting');

Route::view('footerInfo/terms', 'footerInfo.terms');
