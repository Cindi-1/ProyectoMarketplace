<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use Illuminate\Support\Facades\DB; 

class LibroController extends Controller
{
    
    public function index(Request $request)
    {
        $LibroBuscar=$request->get('buscar');
        $libros=DB::table('libros')
                    ->select('id','titulo','autor', 'descripcion', 'precio','estado','usuario_id')
                    ->where('titulo', 'LIKE', '%'.$LibroBuscar.'%')
                    ->orwhere('autor', 'LIKE', '%'.$LibroBuscar.'%')
                    ->orwhere('precio', 'LIKE', '%'.$LibroBuscar.'%')
                    ->paginate(10);
        return view ('LibroIndex', compact('libros','LibroBuscar'));
    
    }

    public function create()
    {
        return view('LibroCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo'=>'required|regex:/[A-Z][a-z]+/i',
            'autor'=>'required|regex:/[A-Z][a-z]+/i',
            'descripcion'=>'required|regex:/[A-Z][a-z]+/i',
            'precio'=>'required|numeric',
            'estado'=>'required',
            'usuario_id'=>'required|numeric',
        ]);
        
        $libro = new Libro();
        $libro->titulo=$request->input('titulo');
        $libro->autor=$request->input('autor');
        $libro->descripcion=$request->input('descripcion');
        $libro->precio=$request->input('precio');
        $libro->estado=$request->input('estado');
        $libro->usuario_id=$request->input('usuario_id');

        if ($libro->save()){
         $mensaje = "El libro se creo exitosamente"; 
        }
        
        else{
          $mensaje = "El libro no se creo exitosamente"; 
        }

        return redirect()->route('libro.index')->with('mensaje',$mensaje);
    }

    public function show(string $id)
    {
        $libro = Libro::findOrfail($id);
        return view('LibroShow' , compact('libro'));
    }

    public function edit(string $id)
    {
        $libro = Libro::findOrfail($id);
        return view('LibroEdit')->with('libros',$libro);
    }

    public function update(Request $request, string $id)
    {
        $libro = Libro::findOrfail($id);
        
        $request->validate([
            'titulo'=>'required|regex:/[A-Z][a-z]+/i',
            'autor'=>'required|regex:/[A-Z][a-z]+/i',
            'descripcion'=>'required|regex:/[A-Z][a-z]+/i',
            'precio'=>'required|numeric',
            'estado'=>'required',
        ]);

        $libro->titulo=$request->input('titulo');
        $libro->autor=$request->input('autor');
        $libro->descripcion=$request->input('descripcion');
        $libro->precio=$request->input('precio');
        $libro->estado=$request->input('estado');

        if ($libro->save()){
            $mensaje = "El libro se edito exitosamente"; 
           }
           
           else{
             $mensaje = "El libro no se edito exitosamente"; 
           }
   
           return redirect()->route('libro.index')->with('mensaje',$mensaje);
    }

    public function destroy(string $id)
    {
        $borrados = Libro::destroy($id);
    
        if ($borrados > 0){
            $mensaje = "El libro se elimino exitosamente"; 
           }
           
           else{
             $mensaje = "El libro no se elimino exitosamente"; 
           }
   
           return redirect()->route('libro.index')->with('mensaje',$mensaje);
  
    }
}
