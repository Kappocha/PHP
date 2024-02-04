<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class categoriasadmin extends Controller
{
    //Vista Categorias Admin
    public function categoriasadmin()
    {
         $categoria = categoria::all();
         return view('tasks.categoriasadmin', ['categoria' => $categoria]);
    }

    //Crear Categorias y guardar siguiendolo
    public function crearcat()
    {
        return view('tasks.crearcatadmin');
    }

    public function guardarcat(Request $request)
    {
        // Valida crea y redirige categorias con un mensaje satisfactorio
        $request->validate([
            'id' => 'required|max:255',
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
        ]);

        categoria::create([
            'id' => $request->input('id'),
            'nombre' => $request->input('nombre'),
            'descripción' => $request->input('descripcion'),
        ]);

        return redirect()->route('tasks.categoriasadmin')->with('success', 'Categoría creada exitosamente');
    }

    //Editar Categoria

    public function editarcat($id)
    {
        //Llamo la vista de editar con el formulario y luego el compact para tener toda la información
        $categoria = categoria::find($id);

        return view('tasks.editcat', compact('categoria'));
    }

    public function actualizarcat(Request $request, $id)
    {
        // Validar, buscar y actualizar la categoria luego redirigir con mensaje satisfactorio
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
        ]);

        $categoria = Categoria::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->descripción = $request->input('descripcion');
        $categoria->save();

        return redirect()->route('tasks.categoriasadmin')->with('success', 'Categoría actualizada exitosamente');
    }

    //Borrar Categoria, busco y borro

    public function borrarcat($id)
    {
      $categoria = categoria::find($id);
      $categoria->delete();
      return redirect()->route('tasks.categoriasadmin')->with('success', 'Categoria borrada exitosamente');;
    }

   
}
