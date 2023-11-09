<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

//**Se importa la clase para emplear ELOQUENT
use App\Models\Message;

use Carbon\Carbon;

use App\Http\Controllers\MessagesController;


use Illuminate\Database\Eloquent\Model;



class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
        {
            //return "Listado de mensajes";

            //
             //Uso con la implementación con el QUERY BUILDER 6.4
            /*$messages = DB::table('messages')->get(); 

            return view('messages.index', compact('messages'));
            */
            //6.5. Uso de ELOQUENT
            //$messages = DB::table('messages')->get(); 
            
            //Se crea la variable y en el modelo accedemos al metodo all para obtener todos los mensajes de la tabla 
            //$messages = Message::all();

            //Visualización Formato JSON
            //return Message::all();
            
            //6.5.3 Se regresa a visualización normal 
            $messages = Message::all();
            
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
        /*6.5.2 Se comenta para dar paso al guardado de datos con Eloquent
        DB::table('messages')->insert([
            "nombre" => $request->input('nombre'),
            "email" => $request->input('email'),
            "mensaje" => $request->input('mensaje'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),

        ]);
        */
       
       //6.5.3 Almacenamiento con Eloquent
       //La primera forma es creando una nueva instancia de la clase message o el modelo Message y guardarla en una variable, 

       /* 
       $message = new Message;

       //esta variable, esta variable es ahora un objeto llamado mensaje pero en blanco, 
       //asi que accedemos a la pripiedad nombre y le asignamos el nombre que viene del formulario
       $message->nombre = $request->input('nombre');

       //Hacemos lo mismo con el email
       $message->email = $request->input('email');     

        //Y el mensaje  
        $message->mensaje = $request->input('mensaje');     

        //Guardamos con el metodo save
        $message->save();
        */



        //6.5.4 Almacenamiento con Eloquent segunda forma

        //Opcion uno
        /*Message::create([
            "nombre" => $request->input('nombre'),
            "email" => $request->input('email'),
            "mensaje" => $request->input('mensaje'),

        ]);
        */


        //Opcion dos

        //dd($request->all());

        //Model::unguard();

        Message::create($request->all());
        




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
        //&.4 Mostrar mensajes con el query Builder
        /*
        $message = DB::table('messages')->where('id', $id)->first(); 

        return view('messages.show', compact('message'));
        */

        //6.5 Mostrar Mensajes con Eloquent

        $message = Message::findOrFail($id);

        return view('messages.show', compact('message'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //$message = DB::table('messages')->where('id', $id)->first(); 
        //6.5. Metodo edit
         $message = Message::findOrFail($id);

        return view('messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /*//Actualizar
        DB::table('messages')->where('id', $id)->update([
            "nombre" => $request->input('nombre'),
            "email" => $request->input('email'),
            "mensaje" => $request->input('mensaje'),
            "updated_at" => Carbon::now(), 
        ]);
*/
        //6.5.6 actualizar
        
        //Primera forma del Update con Eloquent
        /*$message = Message::findOrFail($id);

        $message->update($request->all());
        */
       
       //Segnda forma de Update con Eloquent dos acciones al mismo tiempo
        Message::findOrFail($id)->update($request->all());

        //Redireccionar
        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //return "Eliminando el mensaje con el id " . $id;
        //DB::table('messages')->where('id', $id)->delete();
        
        //6.5. Metodo destroy con Eloquent
        Message::findOrFail($id)->delete();
        

        //Redireccionamos a la ruta mensajes.index.
        return redirect()->route('mensajes.index');
        
    }
}
