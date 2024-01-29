<?php

use App\Http\Controllers\FooterInfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

//Añadir para la solicitud HTTP y las redirecciones HTTP
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
Route::get('footerInfo/contact', [FooterInfoController::class, 'contact'])->name('footerinfo.contact');

Route::get('footerInfo/policy', [FooterInfoController::class, 'policy'])->name('footerinfo.policy');

Route::get('footerInfo/privacy', [FooterInfoController::class, 'privacy'])->name('footerinfo.privacy');

Route::get('footerInfo/setting', [FooterInfoController::class, 'setting'])->name('footerinfo.setting');

Route::get('footerInfo/terms', [FooterInfoController::class, 'terms'])->name('footerinfo.terms');


//Ruta Evento
Route::resource('events', EventController::class)
->parameters(['event'=>'slug'])
->missing(function(Request $request){
    return Redirect::route('events.index');
});


//Otra modo de rutas para el footer

//Route::get('footerinfo/policy', function(){
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

