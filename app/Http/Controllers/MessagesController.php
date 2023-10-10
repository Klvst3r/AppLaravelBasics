<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

//**Se importa la clase para emplear ELOQUENT
use App\Message;

use Carbon\Carbon;

use App\Http\Controllers\MessagesController;



class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
        {
            //return "Listado de mensajes";
            
            //Uso con la implementación con el QUERY BUILDER
            /*
            $messages = DB::table('messages')->get(); 

            return view('messages.index', compact('messages'));

            */

            //6.5. Uso de ELOQUENT
            $messages = DB::ta ble('messages')->get(); 
            
            //Se crea la variable y en el modelo accedemos al metodo all para obtener todos los mensajes de la tabla 
            $message = Message::all();
            //**
            //Es importante importar la clase "Message" al principio del archivo

            return view('messages.index', compact('messages'));            

        }

    /**
     * Show the form for creating a new resource.
     */ 
    public function create()
    {
        //return "Mostrar el formulario de creación de mensajes";
        //Eevolvemos la vista create
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return "Guardar y direccionar";
        //return $request->all();
        //return $request->input("nombre");

        //Uso del Query Builder con la clase DB
        DB::table('messages')->insert([
            "nombre" => $request->input('nombre'),
            "email" => $request->input('email'),
            "mensaje" => $request->input('mensaje'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),

        ]);

        //return "Hecho";

        return redirect()->route('mensajes.index');

        //return to_route('messages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //return "Este es el mensaje con el id " . $id;
        $message = DB::table('messages')->where('id', $id)->first(); 

        return view('messages.show', compact('message'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $message = DB::table('messages')->where('id', $id)->first(); 

        return view('messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Actualizar
        DB::table('messages')->where('id', $id)->update([
            "nombre" => $request->input('nombre'),
            "email" => $request->input('email'),
            "mensaje" => $request->input('mensaje'),
            "updated_at" => Carbon::now(), 
        ]);
        //Redireccionar
        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //return "Eliminando el mensaje con el id " . $id;
        DB::table('messages')->where('id', $id)->delete();

        //Redireccionamos a la ruta mensajes.index.
        return redirect()->route('mensajes.index');
        
    }
}
