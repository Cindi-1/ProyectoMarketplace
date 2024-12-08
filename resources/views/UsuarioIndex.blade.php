@extends('Plantilla')

@section('titulo','index')

@section('contenido')

<br>
<h1><center><b><i><u>Lista de Usuarios</u></i></b></center></h1>

<div class="container"> 
<table class="table table-bordered border-black" class>
    <thead class="table-dark">
        <th class="table-dark"><center>ID</center></th>
        <th><center>NOMBRE</center></th>
        <th><center>CORREO</center></th>
    </thead>
    <tbody>
        @forelse($usuarios as $usuario)
        <tr>
        <td class="table-dark"><center>{{$usuario->id}}</center></td>
        <td><center>{{$usuario->nombre}}</center></td>
        <td><center>{{$usuario->correo}}</center></td>
        @empty
        <tr>
            <td>NO AHI USUARIOS</td>
        </tr>
        @endforelse

    </tbody>
</table>
</div>
<br>

<style>
    .custom-center {
        display: flex;
        justify-content: center;
    }
</style>

<div class="custom-center">
    {{ $usuarios->render('pagination::bootstrap-4') }}
</div>


@endsection()