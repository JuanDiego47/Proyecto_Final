
@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <div class="container">
              
                @if(Session::has('mensaje'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{Session::get('mensaje')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif
            
            
          
        <a href="{{url("role/create")}}"class="btn btn-success">Ingresar un nuevo rol</a>
        <br>
        <br>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>identificacion del rol</th>
                    <th>name </th>
                    <th>label</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role )
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td>{{$role->label}}</td>
                    <td>
                        
                            {{-- formulario para editar --}}
                        <a href={{ url('/role/'.$role->id.'/edit')}} class="btn btn-warning">
                            Editar
                        </a>

                            | 


                    <form action="{{ url('/role/'.$role->id)}}" class="d-inline" method="post">
                        @csrf {{-- llave para enviar informacion --}}
                        {{method_field('DELETE')}}
                        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar esta informacion?')" 
                        value="Borrar">
                    </form>
                        
                    
                    
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    
    
@endsection