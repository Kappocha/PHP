<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use App\Models\producto;
use App\Models\carrito;
use App\Models\categoria;


class UserController extends Controller
{

     //Function de registro por aqui
     public function registro(Request $request) {
          $request->validate([
               'nick' => 'required|max:255',
               'contrasena' => 'required|max:255',
               'email' => 'required|max:255',
               'nombre' => 'required|max:255',
               'apellidos' => 'required|max:255',
               'id' => 'required|max:255',
               'fnac' => 'required',
               'rol' => 'required|max:255',
          ]);

          //Registrando un nuevo usuario y guardandolo luego con su notificación respectiva
          $usuario = new usuario([
               'Nick' => $request->input('nick'),
               'Contrasena' => $request->input('contrasena'),
               'Email' => $request->input('email'),
               'Nombre' => $request->input('nombre'),
               'Apellidos' => $request->input('apellidos'),
               'ID' => $request->input('id'),
               'Fecha_nacimiento' => $request->input('fnac'),
               'Rol' => $request->input('rol'),
          ]);

          $usuario->save();
          return view("tasks.auth")->with('success', 'Usuario Registrado Correctamente');
     }

     public function auth(){
          //Esto es para el logout... no hay mucha ciencia detrás
          session()->forget('usuario');
          return view("tasks.auth");
     }

     public function editu(Request $request, $id)
     {
          //La funcion de edit valida busca y actualiza + notificación para informar que se actualizó

          $request->validate([
               'nick' => 'required|max:255',
               'email' => 'required|max:255',
          ]);

          Usuario::where('ID', $id)->update([
               'Nick'=> $request->input('nick'),
               'Email' => $request->input('email'),
          ]);

          $usuario = usuario::find($id);
          session()->forget('usuario');
          session(['usuario' => $usuario]);
          return redirect()->route('tasks.usuario')->with('success', 'Información Editada correctamente');
     }

     //Para mostrar la vista de Productos

     public function catprod()
     {
          $catprod = producto::all();
          return view('tasks.catprod', ['catprod' => $catprod]);
     }

     //Para mostrar la vista de Categorias

     public function categorias()
     {
          $categoria = categoria::all();
          return view('tasks.categorias', ['categoria' => $categoria]);
     }


 
}
