<?php

use App\Models\Contacto;
use App\Models\Tarea;
use App\Http\Controllers\SitioController;
use App\Http\Controllers\TareaController;
use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::get('/contacto/{tipo?}', [SitioController::class, 'formContacto']);
Route::post('/contacto', [SitioController::class, 'saveContacto']);

Route::resource('tarea', TareaController::class);