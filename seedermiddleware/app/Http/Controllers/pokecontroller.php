<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pokemon;

class pokecontroller extends Controller
{
    //Aqui simplemente añadí 3 funciones nuevas dependiendo si es un usuario admin o fail... aka ni a ni b
    
    public function fail()
    {
        return view('tasks.auth');
    }

    public function usuario()
    {
        return view('tasks.usuario');
    }

    public function admin()
    {
        return view('tasks.admin');
    }

    public function login(Request $request)
    {
        // Lógica de autenticación
        $username = $request->input('usuario');

        return view('tasks.message');

        // Realizar validación o autenticación aquí...
        
        // Redirigir según el resultado de la autenticación
    }

    public function index()
    {
        $pokemon = pokemon::all();
        return view('tasks.index', ['pokemon' => $pokemon]);
    }
    
    public function create()
    {
        // Muestra el formulario para crear una nueva tarea
        return view('tasks.create');
    }
    
    public function store(Request $request)
    {
        // Almacena una nueva tarea en la base de datos
          // Validación de datos
          $request->validate([
            'id' => 'max:255',
            'Nombre'=> 'required|max:255',
            'Tipo' => 'required|max:255',
            'Tamaño' => 'max:255',
            'Peso' => 'max:255',
        ]);

        // Crear una nueva instancia de Tarea con los datos del formulario
        $pokemon = new pokemon([
            'id' => $request->input('id'),
            'Nombre' => $request->input('Nombre'),
            'Tipo' => $request->input('Tipo'),
            'Tamaño' => $request->input('Tamaño'),
            'Peso' => $request->input('Peso'),
        ]);

        // Guardar la tarea en la base de datos
        $pokemon->save();

        return view("tasks.message");
    }

    
    public function show($id)
    {
        // Muestra los detalles de una tarea específica
    }
    
    public function edit($id)
    {
        $pokemon = pokemon::find($id);
        return view('tasks.edit', ['pokemon' => $pokemon]);
    }
    
    public function update(Request $request, $id)
    {
          $request->validate([
            'id' => 'max:255',
            'Nombre'=> 'required|max:255',
            'Tipo' => 'required|max:255',
            'Tamaño' => 'max:255',
            'Peso' => 'max:255',
        ]);

        $pokemon = pokemon::find($id);
        $pokemon->id = $request->input('id');
        $pokemon->Nombre = $request->input('Nombre');
        $pokemon->Tipo = $request->input('Tipo');
        $pokemon->Tamaño = $request->input('Tamaño');
        $pokemon->Peso = $request->input('Peso');

        $pokemon->update();

        return view("tasks.message");
    }
    
    public function destroy($id)
    {

        $pokemon = pokemon::find($id);
        $pokemon->delete();

        return view("tasks.message");

    }
}
