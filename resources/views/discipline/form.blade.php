
    
    <div class="form-group">

    <label for="nombredisciplina">Nombre de la disciplina</label>
    <input type="text" class="form-control" name="nombredisciplina" value="{{$discipline->nombre_disciplina}}" id="nomdis">
    <br>

    </div>

    <div class="form-group">

    <label for="descripciondisciplina">Descripcion de la disciplina</label>
    <input type="text" class="form-control" name="descripciondisciplina" value="{{$discipline->descripcion_disciplina}}" id="descdis">
    <br>

    </div>

    <div class="form-group">

    <label for="fotodisciplina">Foto de la disciplina</label>
    {{-- {{$discipline->foto}} --}}

    <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$discipline->foto}}" width="100" alt="">
    <input type="file" class="form-control" name="fotodisciplina" value="" id="fotodis">
    <br>

    </div>

    {{-- <label for="enviar">Enviar informacion</label> --}}
    <input class="btn btn-success" type="submit" name="enviar"  value="enviar datos">

    <a class="btn btn-primary" href="{{url("discipline/")}}">Regresar</a>
    <br>