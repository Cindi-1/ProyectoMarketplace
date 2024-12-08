@extends('Plantilla')

@section('titulo', 'EDIT')

@section('contenido')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <br><br>
    <form method="POST" action="{{ route('libro.update', [$libros->id]) }}" class0="needs-validation">
        @method('PUT')
        @csrf

        <div class="container" style="max-width: 600px;">
            <div class="card">
                <h4 class="card-header">
                    <center><b>
                            <ul>EDITAR DATOS DEL LIBRO</ul>
                        </b></center>
                </h4>
                <div class="card">
                    <div class="card-body">

                        <div class="card-title">
                            <center><b>Titulo:</b>
                                <input type="text" class="form-control" name="titulo" id="titulo"
                                    placeholder="Ingrese el Nuevo Titulo" value="{{ old('titulo') ?? $libros->titulo }}">
                        </div><br>

                        <div class="card-title">
                            <center><b>Autor:</b>
                                <input type="text" class="form-control" name="autor" id="autor"
                                    placeholder="Ingrese el Nuevo Autor" value="{{ old('autor') ?? $libros->autor }}">
                        </div><br>

                        <div class="card-title">
                            <center><b>Descripcion:</b>
                                <input type="text" class="form-control" name="descripcion" id="descripcion"
                                    placeholder="Ingrese la Nueva Descripcion"
                                    value="{{ old('descripcion') ?? $libros->descripcion }}">
                        </div><br>


                        <div class="card-title">
                            <center><b>Precio:</b>
                                <input type="text" class="form-control" name="precio" id="precio"
                                    placeholder="Ingrese el Precio" value="{{ old('precio') ?? $libros->precio }}">
                        </div><br>


                        <div>
                            <center>
                                <label for="estado"><b>Estado:</b></label>
                                <select class="form-control" name="estado" id="estado">
                                    <option value="disponible" {{ old('estado') == 'disponible' ? 'selected' : '' }}>
                                        Disponible
                                    </option>
                                    <option value="vendido" {{ old('estado') == 'vendido' ? 'selected' : '' }}>
                                        Vendido
                                    </option>
                        </div><br>

                        <div>
                            <center>
                                <input type="submit" class="btn btn-primary" value="Editar">
                                <a href="{{ route('libro.index') }}" class="btn btn-success">Volver</a>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection()
