<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\usuario;

class userware
{
   public function handle(Request $request, Closure $next): Response
   {    
        //Si el usuario no existe primero, enviará un error diciendo que no existe
        //Si existe pasamos a la revision del Rol, dependiendo te vas a Panel Admin o Panel Usuario
        $usuario = usuario::find($request->input('usuario'));
        if ($usuario == null) {
            return redirect()->route('tasks.auth')->with('error', 'No se ha encontrado ningun usuario');
        } else {
            if($usuario->Rol == 'Usuario') {
                session(['usuario' => $usuario]);
                return redirect()->route('tasks.usuario');
            } else if ($usuario->Rol == 'Admin'){
                session(['usuario' => $usuario]);
                return redirect()->route('tasks.admin');
            }
        }
   }
}
