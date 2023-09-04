@extends('layout')
@section('content')
    <main class="main">
        <section class="sectionv">
            <video  autoplay loop muted>
                <source src="{{asset('assets/img/slide/video.mp4')}}" type="video/mp4">
                    Tu navegador no admite el elemento de video.
              </video>
              <div class="video-overlay">
                <h1>BIENVENIDO</h1>
                <p>La mejor tienda de carros de lujos de barranquilla</p>
            </div>
        </section>
        
        <section class="section2 background-image">
            <div class="texto2"><h2>marcas populares</h2></div>
            <div class="carousel-container">
                <div class="carousel">
                  
                  <div class="carousel-item ferraril active">
                    <img src="{{asset('assets/img/marcas/ferrari.png')}}" alt="Imagen 2">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/marcas/lambo.png')}}" alt="Imagen 3">
                  </div>
                  <div class="carousel-item ultima">
                    <img src="{{asset('assets/img/marcas/porshe.png')}}" alt="Imagen 4">
                  </div>
                </div>
                <div class="carousel-buttons">
                  <button class="prev-button"><</button>
                  <button class="next-button">></button>
                </div>
              </div>
              <div class="texto2">
                <h2>Carro mas popular de la marca</h2>
              </div>
              <div class="secondary-carousel">
                <div class="carousel">
                  <div class="carousel-item estatico active ferrari ">
                   <a href="/portofino"><img src="{{asset('assets/img/carros/ferrarica.png')}}" alt="Imagen 2"></a>
                  </div>
                  <div class="carousel-item estatico lambo ">
                    <a href="/sesto"><img src="{{asset('assets/img/carros/lamboca.png')}}" alt="Imagen 3"></a>
                  </div>
                  <div class="carousel-item estatico carros">
                    <img src="{{asset('assets/img/carros/porsheca.png')}}" alt="Imagen 4">
                  </div>
                </div>
            </div>
             
        </section>
        <section class="noticias">
        <div class="titulo-noticias">
         <h2>noticias</h2>
        </div>
         <div class="contenedor-imagen">
            <div class="texto-noticia">
             <h2>Nuevo Lanzamiento</h2>
             <p>¡Emoción sobre ruedas! La espera ha llegado a su fin con el espectacular lanzamiento de nuestro nuevo auto insignia. Diseñado para redefinir la experiencia de conducción, este vehículo combina elegancia y tecnología de vanguardia. Su diseño aerodinámico y características de última generación prometen llevar el placer de manejar a un nivel completamente nuevo. Desde su potente motor hasta su interior lujosamente equipado, el nuevo auto refleja la pasión por la innovación de nuestra marca. Prepárate para despegar</p>
             <button class="boton-ver"><a href="/noticia1">ver mas</a></button>
            </div>
            <div class="img-noticia background-image">
              
            </div>
         </div>
         <div class="contenedor-imagen">
          <div class="texto-noticia">
           <h2>sorprendente</h2>
           <p>El intrépido piloto Max Sterling asombra al mundo al crear marcas de lujo y ganar una carrera ficticia. Desafía las normas con autos imaginarios de características sorprendentes. La competición en su circuito propio genera revuelo en redes sociales. Su innovación subraya cómo la creatividad puede impulsar el éxito en escenarios imaginarios.</p>
           <button class="boton-ver"><a href="/noticia2">ver mas</a></button>
          </div>
          <div class="img-noticia background-image2">
            
          </div>
       </div>
       <div class="contenedor-imagen">
        <div class="texto-noticia">
         <h2>Tecnología de Lujo en Movimiento</h2>
         <p>Introduciendo las llantas "EvoLux": un modelo revolucionario diseñado para vehículos de lujo. Con tecnología de nano-compuestos, ofrecen un agarre excepcional y durabilidad inigualable. Su diseño aerodinámico mejora la eficiencia y el rendimiento. Las llantas EvoLux marcan el estándar de elegancia y rendimiento en la industria automotriz.</p>
         <button class="boton-ver"><a href="/noticia3">ver mas</a></button>
        </div>
        <div class="img-noticia background-image3">
          
        </div>
     </div>
         </section>
    </main>
@endsection