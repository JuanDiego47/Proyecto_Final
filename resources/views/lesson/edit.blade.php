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
    <h1>Editar salon</h1>
    <form action="{{url('/lesson/'.$lesson->id)}}" method="post" enctype="multipart/form-data" onsubmit="return validar();">
    @csrf
    {{method_field('PATCH')}}

    @include('lesson.form');


    </form>
</div>
<script src="{{asset('js2/lesson_val.js')}}"></script>
@endsection