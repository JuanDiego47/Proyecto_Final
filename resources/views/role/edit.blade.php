formulario de edicion
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
<div class="container">
    <h1>Editar rol</h1>
    <form action="{{url('/role/'.$role->id)}}" method="post" enctype="multipart/form-data" onsubmit="return validar();">
    @csrf
    {{method_field('PATCH')}}

    @include('role.form');


    </form>
</div>
<script src="{{asset('js2/role_val.js')}}"></script>
@endsection