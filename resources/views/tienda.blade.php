@extends('layout')
@section('content')
<main class="maintienda">
   <section class="section1tienda">
    <div class="text-tienda ferraris">
        <h2>ferraris</h2>
    </div>
    <div class="fila1">
        <div class="carro1">
            <div class="text-tienda"><h2>portofino</h2></div>
            <a href="/portofino"><img src="{{asset('assets/img/tiendacarros/portofinoo22.jpg')}}" alt="" onmouseover="changeImage(this, '{{asset('assets/img/tiendacarros/portofino2.jpeg')}}')" onmouseout="resetImage(this, '{{asset('assets/img/tiendacarros/portofinoo22.jpg')}}')"></a>
          </div>
        <div class="carro1">
            <div class="text-tienda"><h2> purasangue</h2></div>
            <a href="/purosangue"><img src="{{asset('assets/img/tiendacarros/purosanguee.jpg')}}" alt="" onmouseover="changeImage(this, '{{asset('assets/img/tiendacarros/purosangue2.jpeg')}}')" onmouseout="resetImage(this, '{{asset('assets/img/tiendacarros/purosanguee.jpg')}}')"></a>
            
        </div>
        <div class="carro1">
            <div class="text-tienda"><h2> sf90 spider</h2></div>
            <a href="/spider"><img src="{{asset('assets/img/tiendacarros/spider.jpg')}}" alt="" onmouseover="changeImage(this, '{{asset('assets/img/tiendacarros/spider2.jpg')}}')" onmouseout="resetImage(this, '{{asset('assets/img/tiendacarros/spider.jpg')}}')"></a>
        </div>
    </div>
    <div class="text-tienda lamborghini">
        <h2>lamborghini</h2>
    </div>
    <div class="fila2">
        <div class="carro1">
            <div class="text-tienda"><h2>revuelto</h2></div>
            <a href="/revuelto"><img src="{{asset('assets/img/tiendacarros/lamborevuelto.jpeg')}}" alt="" onmouseover="changeImage(this, '{{asset('assets/img/tiendacarros/revuelto2.jpg')}}')" onmouseout="resetImage(this, '{{asset('assets/img/tiendacarros/lamborevuelto.jpeg')}}')"></a>
          
        </div>
        <div class="carro1">
            <div class="text-tienda"><h2>urus</h2></div>
            <a href="/urus"><img src="{{asset('assets/img/tiendacarros/urus.jpg')}}" alt="" onmouseover="changeImage(this, '{{asset('assets/img/tiendacarros/urus2.jpg')}}')" onmouseout="resetImage(this, '{{asset('assets/img/tiendacarros/urus.jpg')}}')"></a>
          
        </div>
        <div class="carro1">
            <div class="text-tienda"><h2>sesto</h2></div>
            <a href="/sesto"><img src="{{asset('assets/img/tiendacarros/lambosestoo.jpg')}}" alt="" onmouseover="changeImage(this, '{{asset('assets/img/tiendacarros/lambosesto2.jpg')}}')" onmouseout="resetImage(this, '{{asset('assets/img/tiendacarros/lambosestoo.jpg')}}')"></a>
          
            
        </div>
    </div>
    <div class="text-tienda porshe">
        <h2>porshe</h2>
    </div>
    <div class="fila3">
        <div class="carro1">
            <div class="text-tienda"><h2>911 carrera</h2></div>
            <a href="/911ca"><img src="{{asset('assets/img/tiendacarros/911carreraa.jpg')}}" alt="" onmouseover="changeImage(this, '{{asset('assets/img/tiendacarros/911carrera2.jpg')}}')" onmouseout="resetImage(this, '{{asset('assets/img/tiendacarros/911carreraa.jpg')}}')"></a>
          
        </div>
        <div class="carro1">
            <div class="text-tienda"><h2>718 cayman</h2></div>
            <a href="/718cay"><img src="{{asset('assets/img/tiendacarros/718caymann.jpg')}}" alt="" onmouseover="changeImage(this, '{{asset('assets/img/tiendacarros/718cayman2.jpg')}}')" onmouseout="resetImage(this, '{{asset('assets/img/tiendacarros/718caymann.jpg')}}')"></a>
        </div>
        <div class="carro1">

            <div class="text-tienda"><h2>718 boxter</h2></div>
            <a href="/718box"><img src="{{asset('assets/img/tiendacarros/718boxter.jpg')}}" alt="" onmouseover="changeImage(this, '{{asset('assets/img/tiendacarros/718boxter2.jpg')}}')" onmouseout="resetImage(this, '{{asset('assets/img/tiendacarros/718boxter.jpg')}}')"></a>
        
        </div>
    </div>
   </section>
</main>
@endsection