<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class usuariosadmin extends Controller
{
    public function usuariosadmin()
    {
          //Vista llamando a todos los usuarios... no hay mas
           $usuario = usuario::all();
           return view('tasks.usuariosadmin', ['usuario' => $usuario]);
    }
 
    public function borrarusr($id)
    {
          //Envio la id desde el formulario de la pagina web y luego... lo borro, y su mensaje respectivo volviendo a la vista anterior
          Usuario::where('ID', $id)->delete();

          return redirect()->route('tasks.usuariosadmin')->with('success', 'Usuario Borrado exitosamente');;
    }
 
 
    public function editarusr($id)
    {
         // Esto sirve para llamar la pagina de editar el usuario, con el compact necesario para poder tener toda la información actual
         $usuario = usuario::find($id);
 
         return view('tasks.editusr', compact('usuario'));
    }
 
    public function actualizarusr(Request $request, $id)
    {
     // Validar, buscar usuario actualizandolo y luego llevandote de vuelta a la pagina de usuarios con su respectiva notificación
           $request->validate([
                'nick' => 'required|max:255',
                'email' => 'required|max:255',
                'nombre' => 'required|max:255',
                'apellidos' => 'required|max:255',
                'fecha_nacimiento' => 'required|date',
                'contrasena' => 'required', // Ajusta la longitud según tus requisitos
                'rol' => 'required',
           ]);
 
           Usuario::where('ID', $id)->update([
                'Nick'=> $request->input('nick'),
                'Email' => $request->input('email'),
                'Nombre' => $request->input('nombre'),
                'Apellidos' => $request->input('apellidos'),
                'Fecha_nacimiento' => $request->input('fecha_nacimiento'),
                'Contrasena' => $request->input('contrasena'),
                'Rol' => $request->input('rol'),
           ]);
 
           return redirect()->route('tasks.usuariosadmin')->with('success', 'Usuario actualizado exitosamente');
      }
 
      public function crearusr()
      {
          //Llamando vistas por aqui
          return view('tasks.crearusuarioadmin');
      }
  
      public function guardarusr(Request $request)
      {
          // Validar, crear nuevo usuario y luego llevandote de vuelta a la pagina de usuarios con su respectiva notificación
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

          return redirect()->route('tasks.usuariosadmin')->with('success', 'Usuario creado exitosamente');
      }
}
