<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    
    public function index()
    {
        $usuarios = Usuario::paginate(20);
        return view('UsuarioIndex', compact('usuarios'));
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

 
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
