<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/empresa', [HomeController::class, 'empresa'])->name('empresa');
Route::get('/infraestructura', [HomeController::class, 'infraestructura'])->name('infraestructura');
Route::get('/ubicacion', [HomeController::class, 'ubicacion'])->name('ubicacion');
Route::get('/certificacion', [HomeController::class, 'certificacion'])->name('certificacion');
Route::get('/servicio', [HomeController::class, 'servicio'])->name('servicio');
Route::get('/enlace', [HomeController::class, 'enlace'])->name('enlaces');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contacto', [HomeController::class, 'contacto'])->name('contacto');
