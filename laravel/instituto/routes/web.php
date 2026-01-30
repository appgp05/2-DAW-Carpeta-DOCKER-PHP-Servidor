<?php
require __DIR__.'/auth.php';

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SetLanguageController;
use function Pest\Laravel\withMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return "hola";
});

Route::view("/ver", "saludo");

Route::get("/main", [MainController::class, "index"])->name("main");

Route::fallback(function () {
    $ruta = request()->url();
    return "te has perdido gang, $ruta no existe";
});

Route::get("/alumnos/{id}", AlumnoController::class);

Route::view("about", "about")->name("about");
Route::view("noticias", "noticias")->name("noticias");

Route::get('/dashboard', function () {
    return view('main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get("/lang/{lang}",SetLanguageController::class)->name('set_lang');

Route::resource("projectss", \App\Http\Controllers\ProyectoController::class);
