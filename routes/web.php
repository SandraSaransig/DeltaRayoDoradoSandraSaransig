<?php

use App\Http\Controllers\FooterInfoController;
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
Route::get('footerinfo/contact', [FooterInfoController::class, 'contact'])->name('footerinfo.contact');

Route::get('footerinfo/policy', [FooterInfoController::class, 'policy'])->name('footerinfo.policy');

Route::get('footerinfo/privacy', [FooterInfoController::class, 'privacy'])->name('footerinfo.privacy');

Route::get('footerinfo/setting', [FooterInfoController::class, 'setting'])->name('footerinfo.setting');

Route::get('footerinfo/terms', [FooterInfoController::class, 'terms'])->name('footerinfo.terms');


// Route::get('footerinfo/policy', function(){
//     return view('footerinfo.policy');
// })->name('footerinfo.policy');

// Route::get('footerinfo/privacy', function(){
//     return view('footerinfo.privacy');
// })->name('footerinfo.privacy');

// Route::get('footerinfo/setting', function(){
//     return view('footerinfo.setting');
// })->name('footerinfo.setting');

// Route::get('footerinfo/terms', function(){
//     return view('footerinfo.terms');
// })->name('footerinfo.terms');

//  Route::view('footerInfo/contact', 'footerInfo.contact');

//  Route::view('footerInfo/policy', 'footerInfo.policy');

//  Route::view('footerInfo/privacy', 'footerInfo.privacy');

//  Route::view('footerInfo/setting', 'footerInfo.setting');

//  Route::view('footerInfo/terms', 'footerInfo.terms');

