{{-- resources/views/Inicio/login/inicio.blade.php --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/mascotaClubIcon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/inicioPage.css') }}">
    <title>Centro de acondicionamiento GYMRATZ</title>
</head>
<body>
    <header>
        {{-- Aquí va el HTML de la barra de navegación --}}
        <nav>
            <!-- Contenido de tu navbar -->
        </nav>

        <div class="container banner">
            {{-- Contenido del banner --}}
        </div>
    </header>
    
    <section>
        <div class="container">
            <div class="row">
                {{-- Carta para la disciplina --}}
                <div class="col-md-6">
                    {{-- Contenido de la tarjeta --}}
                </div>
                {{-- Carta para detalle sitio --}}
                <div class="col-md-6">
                    {{-- Contenido de la tarjeta --}}
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            {{-- Aquí va el HTML del pie de página --}}
            <div class="row">
                <div class="col">
                    <h3>Sobre nosotros</h3>
                    <!-- Más contenido del footer -->
                </div>
            </div>
        </div>
    </footer>

    {{-- Inclusión de scripts JS --}}
    <script src="{{ asset('js/integracion_inicio_page.js') }}"></script>
</body>
</html>
