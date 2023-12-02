formulario creacion de disciplinas
@extends('layouts.app')
@section('content')
@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error )
                <li>{{$error}}</li>
                
            @endforeach
        </ul>

    </div>
@endif

<script src="{{asset('js2/discipline_val.js')}}"></script>

<div class="container">
    {{-- el enctype sirve para mandar archivos img  --}}
    {{-- @ llave de seguridad para saber de donde proviene y que llegue la informacion  --}}
    <form action="{{url("/discipline")}}" method="post" enctype="multipart/form-data" onsubmit="return validar();">
        <h1>Crear disciplina</h1>
        @csrf

        <div class="form-group">
         <label for="nombredisciplina">Nombre de la disciplina</label>{{-- En este value se pone en old el nombbre de la casilla no el de la base de datos --}}
        <input type="text" class="form-control" name="nombredisciplina" value="{{isset($discipline->nombre_disciplina)?$discipline->nombre_disciplina:old('nombredisciplina')}}" id="nomdis" >
        <br>
        </div>

        <div class="form-group">
        <label for="descripciondisciplina">Descripcion de la disciplina</label>
        <input type="text" class="form-control" name="descripciondisciplina" value="{{isset($discipline->descripcion_disciplina)?$discipline->descripcion_disciplina:old('descripciondisciplina')}}" id="descdis">
        <br>
        </div>

        <div class="form-group">
        <label for="fotodisciplina">Foto de la disciplina</label>
        <input type="file" class="form-control" name="fotodisciplina" id="fotodis">
        <br>
        </div>

        {{-- <label for="enviar">Enviar informacion</label>
        <input type="submit" name="enviar" id="enviar"> --}}
        <input class="btn btn-success" type="submit" name="enviar"  value="enviar datos">
        <br>

        <a class="btn btn-primary" href="{{url("discipline/")}}">Regresar</a>
        <br>
    </form>
</div>

@endsection

