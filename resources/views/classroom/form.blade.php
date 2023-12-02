
    
    <div class="form-group">

    <label for="nombre_salon">Nombre del salon</label>
    <input type="text" class="form-control" name="nombre_salon" value="{{$classroom->nombre_salon}}" id="nombre_salon">
    <br>

    </div>

    <div class="form-group">

    <label for="ubicacion">ubicacion</label>
    <input type="text" class="form-control" name="ubicacion" value="{{$classroom->ubicacion}}" id="ubicacion">
    <br>

    </div>

    {{-- <label for="enviar">Enviar informacion</label> --}}
    <input class="btn btn-success" type="submit" name="enviar"  value="enviar datos">

    <a class="btn btn-primary" href="{{url("classroom/")}}">Regresar</a>
    <br>