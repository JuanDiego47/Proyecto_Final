    
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
    
        {{-- <label for="enviar">Enviar informacion</label> --}}
        <input class="btn btn-success" type="submit" name="enviar"  value="enviar datos">
    
        <a class="btn btn-primary" href="{{url("role/")}}">Regresar</a>
        <br>