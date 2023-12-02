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

<script src="{{asset('js2/classroom_val.js')}}"></script>

<div class="container">
    {{-- el enctype sirve para mandar archivos img  --}}
    {{-- @ llave de seguridad para saber de donde proviene y que llegue la informacion  --}}
    <form action="{{url("/classroom")}}" method="post" enctype="multipart/form-data" onsubmit="return validar();">
        <h1>Ingresar salon</h1>
        @csrf

        <div class="form-group">
         <label for="nombre_salon">Nombre salon</label>{{-- En este value se pone en old el nombbre de la casilla no el de la base de datos --}}
        <input type="text" class="form-control" name="nombre_salon" value="{{isset($classroom->nombre_salon)?$classroom->nombre_salon:old('nombre_salon')}}" id="nombre_salon" >
        <br>
        </div>

        <div class="form-group">
        <label for="ubicacion">ubicacion salon</label>
        <input type="text" class="form-control" name="ubicacion" value="{{isset($classroom->ubicacion)?$classroom->ubicacion:old('ubicacion')}}" id="ubicacion">
        <br>
        </div>


        <input class="btn btn-success" type="submit" name="enviar"  value="enviar datos">
        <br>

        <a class="btn btn-primary" href="{{url("classroom/")}}">Regresar</a>
        <br>
    </form>
</div>

@endsection

