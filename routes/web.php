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


Route::get('/', [HomeController::class, 'index'])->name('/')->middleware('translate');
Route::get('/empresa', [HomeController::class, 'empresa'])->name('empresa')->middleware('translate');
Route::get('/infraestructura', [HomeController::class, 'infraestructura'])->name('infraestructura')->middleware('translate');
Route::get('/ubicacion', [HomeController::class, 'ubicacion'])->name('ubicacion')->middleware('translate');
Route::get('/certificacion', [HomeController::class, 'certificacion'])->name('certificacion')->middleware('translate');
Route::get('/servicio', [HomeController::class, 'servicio'])->name('servicio')->middleware('translate');
Route::get('/enlace', [HomeController::class, 'enlace'])->name('enlaces')->middleware('translate');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog')->middleware('translate');
Route::get('/blog/{id}/articulo', [HomeController::class, 'blog_details'])->name('blog-details')->middleware('translate');
Route::get('/contacto', [HomeController::class, 'contacto'])->name('contacto')->middleware('translate');

Route::get('/lang/{language}', function ($language) {
    Session::put('language',$language);
    return redirect()->back();
})->name('language');
