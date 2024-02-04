<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\categoriasadmin;
use App\Http\Controllers\productosadmin;
use App\Http\Controllers\usuariosadmin;
use App\Http\Middleware\userware;

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

//La ruta Base y rutas basicas de usuario como registro y login

Route::get('/', function () {
    return view('tasks.auth');
});

Route::post('tasks/login', [UserController::class, 'login'])->name('tasks.login')->middleware(userware::class);

Route::get('/tasks/register', function () {
    return view('tasks.register');
})->name('tasks.register');

//El panel de usuario aka su ruta

Route::get('tasks/usuario', function(){
    return view('tasks.usuario');
})->name('tasks.usuario');

//Modificacion de Usuario

Route::get('tasks/moduser', function(){
    return view('tasks.moduser');
})->name('tasks.moduser');

//Categorias y Productos, sus rutas no tienen mucha complicación

Route::get('tasks/catprod', [UserController::class, 'catprod'])->name('tasks.catprod');

Route::get('tasks/categorias', [UserController::class, 'categorias'])->name('tasks.categorias');


//Estas 2 ultimas son las funciones de login y registro

Route::get('tasks/login', [UserController::class, 'auth'])->name('tasks.auth');

Route::post('/tasks/registro', [UserController::class, 'registro'])->name('tasks.registro');


//Usuario Update

Route::put('/editu/{id}', [UserController::class, 'editu'])->name('tasks.editu');

//Admin Paneles

Route::get('tasks/admin', function(){
    return view('tasks.admin');
})->name('tasks.admin');

Route::get('tasks/catprodadmin', [productosadmin::class, 'catprodadmin'])->name('tasks.catprodadmin');

Route::get('tasks/categoriasadmin', [categoriasadmin::class, 'categoriasadmin'])->name('tasks.categoriasadmin');

Route::get('tasks/usuariosadmin', [usuariosadmin::class, 'usuariosadmin'])->name('tasks.usuariosadmin');


//Admin Productos

Route::delete('/borrarprod/{id}', [productosadmin::class, 'borrarprod'])->name('tasks.borrarprod');

Route::get('/editarprod/{id}', [productosadmin::class, 'editarprod'])->name('tasks.editarprod');

Route::put('/actualizarprod/{id}', [productosadmin::class, 'actualizarprod'])->name('tasks.actualizarprod');

Route::get('/crearprod', [productosadmin::class, 'crearprod'])->name('tasks.crearprod');

Route::post('/guardarprod', [productosadmin::class, 'guardarprod'])->name('tasks.guardarprod');

//Admin Usuarios

Route::delete('/borrarusr/{id}', [usuariosadmin::class, 'borrarusr'])->name('tasks.borrarusr');

Route::get('/editarusr/{id}', [usuariosadmin::class, 'editarusr'])->name('tasks.editarusr');

Route::put('/actualizarusr/{id}', [usuariosadmin::class, 'actualizarusr'])->name('tasks.actualizarusr');

Route::get('/crearusr', [usuariosadmin::class, 'crearusr'])->name('tasks.crearusr');

Route::post('/guardarusr', [usuariosadmin::class, 'guardarusr'])->name('tasks.guardarusr');

//Admin Categorias

Route::delete('/borrarcat/{id}', [categoriasadmin::class, 'borrarcat'])->name('tasks.borrarcat');

Route::get('/editarcat/{id}', [categoriasadmin::class, 'editarCat'])->name('tasks.editarcat');

Route::put('/actualizarcat/{id}', [categoriasadmin::class, 'actualizarcat'])->name('tasks.actualizarcat');

Route::get('/crearcat', [categoriasadmin::class, 'crearcat'])->name('tasks.crearcat');

Route::post('/guardarcat', [categoriasadmin::class, 'guardarcat'])->name('tasks.guardarcat');


