<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pokecontroller;
use App\Http\Middleware\pokeware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleFware group. Make something great!
|
*/

Route::get('/', function () {
    return view('tasks.auth');
});

Route::post('tasks/login', [pokecontroller::class, 'login'])->name('tasks.login')->middleware(pokeware::class);

Route::get('/tasks/usuario', [pokecontroller::class, 'usuario'])->name('tasks.usuario');

Route::get('/tasks/admin', [pokecontroller::class, 'admin'])->name('tasks.admin');

Route::get('/tasks/fail', [pokecontroller::class, 'fail'])->name('tasks.fail');

Route::resource('/tasks', pokecontroller::class);