formulario creacion de roles
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

<script src="{{asset('js2/role_val.js')}}"></script>

<div class="container">
    {{-- el enctype sirve para mandar archivos img  --}}
    {{-- @ llave de seguridad para saber de donde proviene y que llegue la informacion  --}}
    <form action="{{url("/role")}}" method="post" enctype="multipart/form-data" onsubmit="return validar();">
        <h1>Ingresar rol</h1>
        @csrf

        <div class="form-group">
         <label for="name">Nombre rol</label>{{-- En este value se pone en old el nombbre de la casilla no el de la base de datos --}}
        <input type="text" class="form-control" name="name" value="{{isset($role->name)?$role->name:old('name')}}" id="name" >
        <br>
        </div>

        <div class="form-group">
        <label for="label">etiqueta rol</label>
        <input type="text" class="form-control" name="label" value="{{isset($role->label)?$role->label:old('label')}}" id="label">
        <br>
        </div>


        <input class="btn btn-success" type="submit" name="enviar"  value="enviar datos">
        <br>

        <a class="btn btn-primary" href="{{url("role/")}}">Regresar</a>
        <br>
    </form>
</div>

@endsection