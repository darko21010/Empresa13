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


Route::get('/', function () {
    return view('welcome');
}); 


use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');


use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

use App\Http\Controllers\PersonaController;

Route::get('/personas', [PersonaController::class, 'showOptions'])->name('personas.options');
Route::get('/personas/list', [PersonaController::class, 'index'])->name('personas.index');
Route::get('/personas/create', [PersonaController::class, 'create'])->name('personas.create');

Route::post('/personas', [PersonaController::class, 'store'])->name('personas.store');

Route::get('/personas/{nPerCodigo}/edit', [PersonaController::class, 'edit'])->name('personas.edit');
Route::patch('/personas/{nPerCodigo}', [PersonaController::class, 'update'])->name('personas.update');

Route::get('/personas/search', function () {
    return view('personas.search');
})->name('personas.search');

Route::post('/personas/findForEdit', [PersonaController::class, 'findForEdit'])->name('personas.findForEdit');

Route::delete('/personas/{nPerCodigo}', [PersonaController::class, 'destroy'])->name('personas.destroy');

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
*/


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PersonaController;

use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/personas', [PersonaController::class, 'showOptions'])->name('personas.options');
Route::get('/personas/list', [PersonaController::class, 'index'])->name('personas.index');
Route::get('/personas/create', [PersonaController::class, 'create'])->name('personas.create');

Route::post('/personas', [PersonaController::class, 'store'])->name('personas.store');

Route::get('/personas/{nPerCodigo}/edit', [PersonaController::class, 'edit'])->name('personas.edit');
Route::patch('/personas/{nPerCodigo}', [PersonaController::class, 'update'])->name('personas.update');

Route::get('/personas/search', function () {
    return view('personas.search');
})->name('personas.search');

Route::post('/personas/findForEdit', [PersonaController::class, 'findForEdit'])->name('personas.findForEdit');

Route::delete('/personas/{nPerCodigo}', [PersonaController::class, 'destroy'])->name('personas.destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Auth::routes(['register' => false]);

use App\Http\Controllers\ServicioController;

//Route::get('/servicios/create', [ServicioController::class, 'create'])->name('servicios.create');
//Route::post('/servicios', [ServicioController::class, 'store'])->name('servicios.store');
//Route::get('/servicios', [ServicioController::class, 'index'])->name('servicios.index');

Route::get('/servicios/create', [ServicioController::class, 'create'])->name('servicios.create');
Route::post('/servicios', [ServicioController::class, 'store'])->name('servicios.store');
Route::get('/servicios', [ServicioController::class, 'index'])->name('servicios.index');
Route::get('/servicios/{servicio}/edit', [ServicioController::class, 'edit'])->name('servicios.edit');
Route::patch('/servicios/{servicio}', [ServicioController::class, 'update'])->name('servicios.update');

/*
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Unificamos las rutas de 'personas' utilizando Route::resource
Route::resource('personas', PersonaController::class)->names('personas');

// Definir la ruta adicional para showOptions
Route::get('/personas/options', [PersonaController::class, 'showOptions'])->name('personas.options');

Auth::routes();

Auth::routes(['register' => false]);

*/
