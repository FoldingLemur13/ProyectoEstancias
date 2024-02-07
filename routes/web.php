<?php

use App\Http\Controllers\ComputoController;
use App\Http\Controllers\ConsumiblesController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EscanersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrinterController;
use App\Http\Controllers\ProteccionController;
use App\Http\Controllers\RedesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SeguridadController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TerminalesController;
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
Route::get('/impresoras/{tipo}',[PrinterController::class,'index'])->name('printer');

//Computo route
Route::get('/computo/{tipo}',[ComputoController::class,'index'])->name('computo');

//Consumible route
Route::get('/consumible/{tipo}',[ConsumiblesController::class,'index'])->name('consumible');

//Escaners route
Route::get('/escaners/{tipo}',[EscanersController::class,'index'])->name('escaners');

//Proteccion route
Route::get('/proteccion-y-energia/{tipo}',[ProteccionController::class,'index'])->name('proteccion');

//Redes route
Route::get('/redes/{tipo}',[RedesController::class,'index'])->name('redes');

//Seguridad route
Route::get('/seguridad/{tipo}',[SeguridadController::class,'index'])->name('seguridad');

//Terminales route
Route::get('/terminales/{tipo}',[TerminalesController::class,'index'])->name('terminales');

//Services route
Route::get('/servicios',[ServicesController::class,'index'])->name('services');

//Nosotros route
Route::get('/nosotros',[NosotrosController::class,'index'])->name('nosotros');

//Contacto route
Route::get('/contacto',[ContactoController::class,'index'])->name('contacto');

//IMagenes route
Route::post('/',[ImagenController::class,'store'])->name('imagenes.store');

//Menu route
Route::get('/productos',[MenuController::class,'index'])->name('products');

//Almacenamiento de productos ruta
Route::post('/producto',[PostController::class,'store'])->name('products.store');

//Route eliminar producto
Route::delete('/products/{product}',[PostController::class,'destroy'])->name('posts.destroy');