<div class="form-group">
    <label for="id_miembro">miembro</label>
    <select name="id_miembro" id="id_miembro">
        @foreach ($UserNormal as $item3 )
        <option value="{{$item3->id}}">{{$item3->name}} {{$item3->id}}</option>
            
        @endforeach
    </select>
    <br>
</div>
<br>

<div class="form-group">
    <label for="estado_mem">Estado de la membresia</label>{{-- En este value se pone en old el nombbre de la casilla no el de la base de datos --}}
   <input type="text" class="form-control" name="estado_mem" value="{{isset($membership->estado_mem)?$membership->estado_mem:old('estado_mem')}}" id="estado_mem" >
   <br>
   </div>

   <br>

<input class="btn btn-success" type="submit" name="enviar"  value="enviar datos">
<br>

<a class="btn btn-primary" href="{{url("membership/")}}">Regresar</a>
<br>