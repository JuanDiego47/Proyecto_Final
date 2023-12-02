formulario creacion de lecciones
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

<script src="{{asset('js2/reservation_val.js')}}"></script>

<div class="container">
    {{-- el enctype sirve para mandar archivos img  --}}
    {{-- @ llave de seguridad para saber de donde proviene y que llegue la informacion  --}}
    <form action="{{url("/reservation")}}" method="post" enctype="multipart/form-data" onsubmit="return validar();">
        <h1>Ingresar reservacion</h1>
        @csrf

        <div class="form-group">
            <label for="id_miembro">miembro</label>
            <select name="id_miembro" id="id_miembro">
                @foreach ($lista_usuarios as $item3 )
                <option value="{{$item3->id}}">{{$item3->name}} {{$item3->id}}</option>
                    
                @endforeach
            </select>
            <br>
        </div>
        <br>

        <div class="form-group">
            <label for="id_clase">leccion</label>
            <select name="id_clase" id="id_clase">
                @foreach ($lista_clases as $item2 )
                <option value="{{$item2->id}}">{{$item2->id}}</option>
                    
                @endforeach
            </select>
            <br>
        </div>
        <br>

        <br>

        <input class="btn btn-success" type="submit" name="enviar"  value="enviar datos">
        <br>

        <a class="btn btn-primary" href="{{url("reservation/")}}">Regresar</a>
        <br>
    </form>
</div>

@endsection