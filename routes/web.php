<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrinterController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServicesController;
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

//Ruta para la vista home
Route::get('/',[HomeController::class,'index'])->name('home');

//Ruta para la vista de login
Route::get('/login',[LoginController::class,'index'])->name('login');

Route::post('/login',[LoginController::class,'store']);

Route::post('/logout',[LogoutController::class,'store'])->name('logout');

//Register route
Route::get('/register',[RegisterController::class,'index'])->name('register');

//Register store route
Route::post('/register',[RegisterController::class,'store']);

//Profile route
Route::get('/perfil',[PostController::class,'index'])->name('posts.index');

Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');

//Printers route
Route::get('/impresoras',[PrinterController::class,'index'])->name('printer');

//Services route
Route::get('/servicios',[ServicesController::class,'index'])->name('services');

//Nosotros route
Route::get('/nosotros',[NosotrosController::class,'index'])->name('nosotros');

//Contacto route
Route::get('/contacto',[ContactoController::class,'index'])->name('contacto');

//IMagenes route
Route::post('/',[ImagenController::class,'store'])->name('imagenes.store');

//Menu route
Route::get('/Productos',[MenuController::class,'index'])->name('products');