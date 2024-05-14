<?php

use App\Http\Controllers\CorreoController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [PersonaController::class, 'inicio'])->name('inicio');
Route::get('/', [PersonaController::class, 'inicio'])->name('inicio');
//Route::get('/persona', [PersonaController::class, 'index'])->name('index');
// Route::get('/acerca', [FrontendController::class, 'index'])->name('acerca');

Route::get('/create', [PersonaController::class, 'create'])->name('create');

Route::post('/datos', [PersonaController::class, 'store'])->name('store');

Route::get('/datos', [PersonaController::class, 'index'])->name('index')->middleware('auth');

Route::get('/show/{id}', [PersonaController::class, 'show'])->name('show');

Route::get('/{id}/edit', [PersonaController::class, 'edit'])->name('edit');

Route::put('/persona/{id}', [PersonaController::class, 'update'])->name('update');

Route::delete('/persona/{id}', [PersonaController::class, 'destroy'])->name('destroy');

Route::get('/contacto', [PersonaController::class, 'contacto'])->name('contacto');






// Mostrar el formulario para crear un nuevo registro
Route::get('/formulario', [FrontendController::class, 'create'])->name('formulario.create');

// Procesar los datos del formulario y almacenar un nuevo registro
Route::post('/formulario', [FrontendController::class, 'store'])->name('formulario.store');

// Mostrar una página que liste todos los registros existentes
Route::get('/frontend', [FrontendController::class, 'index'])->name('frontend.index');



//   Route::get('/', function () {
//       return view('dashboard');
//   })->middleware(['auth', 'verified'])->name('dashboard');


//Ruta sobre los correos
Route::post('/correos', [CorreoController::class, 'store'])->name('correo.store');
Route::delete('/correos/{id_correo}/{persona_id}', [CorreoController::class, 'destroy'])->name('correo.destroy');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\PersonaController::class, 'inicio'])->name('home');
