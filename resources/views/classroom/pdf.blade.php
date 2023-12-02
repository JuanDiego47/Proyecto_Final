
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    .cabecera{
        background-color:black;
        color:white;

    }
    h2{
        color: brown;
    }
</style>
</head>
<body>
    <img src="images2/rata.png" alt="" width="150px" height="150px">
    <h2 class="text-center">LISTA DE SALONES</h2>
    <table class="table table-light"style="text-align:center;font-size:20px">
        <thead class="cabecera">
            <tr>
                <th>identificacion</th>
                <th>nombre salon</th>
                <th>ubicacion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classrooms as $classroom )
            <tr>
                <td>{{$classroom->id}}</td>
                <td>{{$classroom->nombre_salon}}</td>
                <td>{{$classroom->ubicacion}}</td>

            </tr>
            @endforeach
        </tbody>

    </table>
</body>
</html>