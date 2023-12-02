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
            <label for="id_clase">leccion</label>
            <select name="id_clase" id="id_clase">
                @foreach ($lesson as $item2 )
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