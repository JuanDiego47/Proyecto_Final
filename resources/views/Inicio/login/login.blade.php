{{-- resources/views/login.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>

<div class="container">
    <div class="containerGrid">
        <div class="col-md-6 offset-md-3">
            <h1>Login</h1>
            <form>
                <div class="mb-3">
                    <label for="exampleInputUSER" class="form-label">Usuario</label>
                    <br>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="USER" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <br>
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <br>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <br>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
            <p class="mt-3">Forgot Password? <a href="#">Click here</a></p>
        </div>
    </div>
</div>

</body>
</html>
