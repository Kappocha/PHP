<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class pokeware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Variable que toma del auth.blade.php el input es uno de los 2? si la respuesta es afirmativa te envia a a o b si no da error, fin
        $tipoUsuario = $request->input('usuario');

        if ($tipoUsuario === 'usuario') {
            return redirect()->route('tasks.usuario');
        } elseif ($tipoUsuario === 'administrador') {
            return redirect()->route('tasks.admin');
        }

        return redirect()->route('tasks.fail');
    }
}
