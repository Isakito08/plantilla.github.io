
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eliteautomoviles</title>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/stylestienda.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/stylespro.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/stylesabout.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/stylesnoticias.css')}}">


</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="{{asset('assets/img/logopng.jpg')}}" alt="Logo de la marca">
        </div>
        <nav>
           <ul class="nav-links">
                <li><a href="/tienda">Tienda</a></li>
                <li><a href="/">Home</a></li>
                <li><a href="/about">Acerca de</a></li>
           </ul>            
        </nav>
        <a class="btn-contact" href="#"><button id="boton-contacto" onclick="abrirWhatsApp()">Contact</button></a>
    </header>
</body>
</html>
    
    
    


@yield('content')

 <!-- ======= Footer ======= -->
 <footer>
    <h2>eliteautomoviles</h2>
    <div class="logo-footer">
        <img src="{{asset('assets/img/logopng.jpg')}}" alt="Logo de la marca">
    </div>
   
    <h2>Copyright © 2023 eliteautomoviles. Todos los derechos reservados.</h2>
</footer>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/animacion.js')}}"></script>
<script src="{{asset('assets/js/whats.js')}}"></script>


</body>
</html>
