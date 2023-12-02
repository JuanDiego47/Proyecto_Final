<style>
    table {
   width: 100%;
   border: 1px solid #000;
}
th, td {
   width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
   border-collapse: collapse;
   padding: 0.3em;
   caption-side: bottom;
}
caption {
   padding: 0.3em;
   color: #fff;
    background: #000;
}
th {
   background: #eee;
}

</style>



<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>titulo</th>
            <th>precio</th>
            <th>descripcion</th>
            <th>categoria</th>
            <th>imagen</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($charsArray as $char )
        <tr>
            <td>{{$char["id"]}}</td>
            <td>{{$char["title"]}}</td>
            <td>{{$char["price"]}}</td>
            <td>{{$char["description"]}}</td>
            <td>{{$char["category"]}}</td>
            <td>{{$char["image"]}}</td>


            

        </tr>
         @endforeach
    </tbody>
</table>