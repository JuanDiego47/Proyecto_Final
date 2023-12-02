
    
        <div class="form-group">
                <label for="fecha_leccion">fecha leccion</label>{{-- En este value se pone en old el nombbre de la casilla no el de la base de datos --}}
               <input type="date" class="form-control" name="fecha_leccion" value="{{isset($lesson->fecha_leccion)?$lesson->fecha_leccion:old('fecha_leccion')}}" id="fecha_leccion" >
               <br>
               </div>
       
               <div class="form-group">
               <label for="hora_inicio">hora inicio leccion</label>
               <input type="text" class="form-control" name="hora_inicio" value="{{isset($lesson->hora_inicio)?$lesson->hora_inicio:old('hora_inicio')}}" id="hora_inicio" placeholder="hh:mm am/pm">
               <br>
               </div>
               <div class="form-group">
               <label for="hora_fin">hora fin leccion</label>
               <input type="text" class="form-control" name="hora_fin" value="{{isset($lesson->hora_fin)?$lesson->hora_fin:old('hora_fin')}}" id="hora_fin" placeholder="hh:mm am/pm">
               <br>
               </div>
       
               <div class="form-group">
                   <label for="id_instructor">Instructor</label>
                   <select name="id_instructor" id="id_instructor">
                       @foreach ($usersWithRole1 as $item3 )
                       <option value="{{$item3->id}}">{{$item3->name}} {{$item3->id}}</option>
                           
                       @endforeach
                   </select>
                   <br>
               </div>
               <br>
       
               <div class="form-group">
                   <label for="id_disciplina">Disciplina</label>
                   <select name="id_disciplina" id="id_disciplina">
                       @foreach ($discipline as $item2 )
                       <option value="{{$item2->id}}">{{$item2->nombre_disciplina}}</option>
                           
                       @endforeach
                   </select>
                   <br>
               </div>
               <br>
       
       {{-- como se ingresan datos cuando hay llaves foraneas --}}
               <div class="form-group">
                   <label for="id_salon">Salon</label>
                   <select name="id_salon" id="id_salon">
                       @foreach ($classroom as $item )
                       <option value="{{$item->id}}">{{$item->nombre_salon}}</option>
                           
                       @endforeach
                   </select>
                   <br>
               </div>
       
               <br>
    
            <br>
            
            <input class="btn btn-success" type="submit" name="enviar"  value="enviar datos">
        <br>

        <a class="btn btn-primary" href="{{url("lesson/")}}">Regresar</a>
        <br>