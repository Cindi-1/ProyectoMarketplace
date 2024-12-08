@extends('Plantilla')

@section('titulo','Show')

@section('contenido')

<br>
<br>
<div class="container" style="max-width: 600px;" >
    
<div class="card">
  <h4 class="card-header"><center><b><ul>DATOS DEL LIBRO</ul></b></center></h4>
    <div class="card">
    <div class="card-body">

    <p class="card-title"><center><b>Titulo:</b><br>
        {{$libro->titulo}}</center></p>

    <p class="card-title"><center><b>Autor:</b><br>
          {{$libro->autor}}</center></p>

    <p class="card-title"><center><b>Descripcion:</b><br>
      {{$libro->descripcion}}</center></p>

    <p class="card-title"><center><b>Precio:</b><br>
       {{$libro->precio}}</center></p>

    <p class="card-title"><center><b>Usuario</b><br>
      {{$libro->usuario->nombre ?? 'Desconocido' }}</center></p>

    <p class="card-title"><center><b>Estado</b><br>
        {{$libro->estado}}</center></p>

    <div><center>
    <a href="{{ route('libro.index') }}" class="btn btn-success">Volver</a>
    </center></div>

   </div>
  </div>
 </div>
</div>

@endsection()