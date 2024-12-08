@extends('Plantilla')

@section('titulo', 'Create')

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
    <form method="POST" action="{{ route('libro.crear') }}" class0="needs-validation">
        @csrf

        <div class="container" style="max-width: 600px;">
            <div class="card">

                <h4 class="card-header">
                    <center><b>
                            <ul>CREAR DATOS DEL LIBRO</ul>
                        </b></center>
                </h4>
                <div class="card">
                    <div class="card-body">

                        <div class="card-title">
                            <center><b>Titulo:</b>
                                <input type="text" class="form-control" name="titulo" id="titulo"
                                    placeholder="Ingrese el Titulo" value="{{ old('titulo') }}">
                        </div><br>

                        <div class="card-title">
                            <center><b>Autor:</b>
                                <input type="text" class="form-control" name="autor" id="autor"
                                    placeholder="Ingrese el Autor" value="{{ old('autor') }}">
                        </div><br>

                        <div class="card-title">
                            <center><b>Descripcion:</b>
                                <input type="text" class="form-control" name="descripcion" id="descripcion"
                                    placeholder="Ingrese la Descripcion" value="{{ old('descripcion') }}">
                        </div><br>

                        <div class="card-title">
                            <center><b>Precio:</b>
                                <input type="number" class="form-control" name="precio" id="precio"
                                    placeholder="Ingrese el Precio" value="{{ old('precio') }}">
                        </div><br>


                        <div class="mb-3">
                            <div class="card-title">
                                <center><b>Estado:</b>
                                    <select class="form-control" name="estado" id="estado">
                                        <option value="disponible" {{ old('estado') == 'disponible' ? 'selected' : '' }}>
                                            Disponible
                                        </option>
                                        <option value="vendido" {{ old('estado') == 'vendido' ? 'selected' : '' }}>
                                            Vendido
                                        </option>
                                    </select>
                            </div><br>

                            <div class="card-title">
                                <center><b>Id del Usuario</b>
                                    <input type="number" class="form-control" name="usuario_id" id="usuario_id"
                                        placeholder="Ingrese el ID del Usuario" value="{{ old('usuario_id') }}">
                            </div><br>

                            <div>
                                <center>
                                    <input type="submit" class="btn btn-primary" value="Crear">
                                    <a href="{{ route('libro.index') }}" class="btn btn-success">Volver</a>
                                </center>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </form>
@endsection
