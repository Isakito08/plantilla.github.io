@extends('layout')
@section('content')

<main class="mainproducto">
    <section class="compra">
        <div class="contenedor1">
            <div class="imagen">
                <img src="{{asset('assets/img/productos/urus.png')}}" alt="">
                <div class="text-relacionado"><h2>producto relacionado</h2></div>
                <div class="relacionado-producto">
                    <div class="relacionado1"><a href="/sesto"><img src="{{asset('assets/img/productos/lambosesto.png')}}" alt=""></a></div>
                    <div class="relacionado2"><a href="/revuelto"><img src="{{asset('assets/img/productos/lamborevuelto.png')}}" alt=""></a></div>
                </div>
            </div>
            <div class="texto">
                <div class="nombre-producto"><h2>lamborghini urus</h2></div>
                <div class="precio-producto"><h2>$550.000.000 cop</h2></div>
                <div class="impuesto-producto"><h2>Impuesto incluido.</h2></div>
                <div class="text-colores"><h2>elija un color de su preferencia</h2></div>
                <div class="colores-producto">
                   <div class="color"><a href="#"><button class="boton primero"></button></a></div>
                   <div class="color"><a href="#"><button class="boton segundo"></button></a></div>
                   <div class="color"><a href="#"><button class="boton tercero"></button></a></div>
                   <div class="color"><a href="#"><button class="boton cuarto"></button></a></div>
                </div>
                <div class="botones-cg">
                <a href=""><button class="comprar-producto">comprar</button></a>
                <a href=""><button class="añadir-producto">añadir</button></a>
                </div>
            </div>
        </div>
    </section>
</main>



@endsection