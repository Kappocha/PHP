<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\categoria;

class productosadmin extends Controller
{
    //Vista con todos los productos aka catprod = Catalogo Productos
    public function catprodadmin()
    {
            $catprod = producto::all();
            return view('tasks.catprodadmin', ['catprod' => $catprod]);
    }

    public function crearprod()
    {
        // Obtener todas las categorías para el select en el formulario
        $categorias = Categoria::all();

        return view('tasks.crearproductoadmin', compact('categorias'));
    }

    public function guardarprod(Request $request)
    {
        // Validar, crear y redirigir creando el producto con un mensaje
        $request->validate([
            'id' => 'required',
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'unidades' => 'required|integer',
            'preciou' => 'required|numeric',
            'categoria' => 'required',
        ]);

        Producto::create([
            'id' => $request->input('id'),
            'nombre' => $request->input('nombre'),
            'descripción' => $request->input('descripcion'),
            'unidades' => $request->input('unidades'),
            'preciou' => $request->input('preciou'),
            'categoriaID' => $request->input('categoria'),
        ]);

        return redirect()->route('tasks.catprodadmin')->with('success', 'Producto creado exitosamente');
    }
    
   public function editarprod($id)
   {
        //Busco productos y categorias ya que el select usa las categorias de la tabla categorias
       $producto = Producto::find($id);
       $categorias = categoria::all();

       return view('tasks.editprod', compact('producto'))->with('categorias', $categorias);
   }

   public function actualizarprod(Request $request, $id)
   {
        //Verifico, busco y edito el producto luego con su mensaje a la vista anterior que el producto se actualizó de forma satisfactoria
       $request->validate([
           'nombre' => 'required|max:255',
           'descripcion' => 'required',
           'unidades' => 'required|integer',
           'precio' => 'required|numeric',
           'categoria' => 'required|max:255',
       ]);

       $producto = Producto::find($id);
       $producto->Nombre = $request->input('nombre');
       $producto->Descripción = $request->input('descripcion');
       $producto->Unidades = $request->input('unidades');
       $producto->PrecioU = $request->input('precio');
       $producto->CategoriaID = $request->input('categoria');
       $producto->save();

       return redirect()->route('tasks.catprodadmin')->with('success', 'Producto actualizado exitosamente');
   }

   //Buscar y borrar fin... su mensaje satisfactorio
   public function borrarprod($id)
   {
     $producto = producto::find($id);
     $producto->delete();
     return redirect()->route('tasks.catprodadmin')->with('success', 'Producto borrado exitosamente');;
   }

}
