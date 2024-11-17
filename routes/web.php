<?php

use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\VehiculosControllerCAMC;
use App\Http\Controllers\TallerControllerCAMC;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\CartaFacturaController;
use App\Http\Controllers\G_MenusController;
use App\Http\Controllers\PdfController;


Route::get('/', function () {
    return view('welcome');
})-> name('welcome'); 


Route::group(['middleware' => ['web','auth']], function(){

    Route::view('/clientes', "clientes")->name('clientes');
    Route::view('/prospectos', "prospectos")->name('prospectos');

});


Route::get('/cartafactura', [CartaFacturaController::class, 'index'])->name('cartafactura');

Route::get('/taller', TallerControllerCAMC::class)->name("taller");



/*
Route::get('/Vehiculos', VehiculosControllerCAMC::class)->name("Vehículos");
*/

Route::get('/vehiculos', [VehiculosControllerCAMC::class, 'index'])->name('vehiculos');


Route::post('/vehiculos',[VehiculosControllerCAMC::class, 'store'])->name('vehiculos.store');



Route::get('/generador-de-menus', [G_MenusController::class, 'index'])->name('G_Menus');;

/*
Route::resource('vehiculos', VehiculosControllerCAMC::class);
*/

/*Route::get('/Vehiculos', [VehiculosControllerCAMC::class, "index"])->name("Vehiculos");

*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('pdf', [PdfController::class, 'index'])->name('pdf');


