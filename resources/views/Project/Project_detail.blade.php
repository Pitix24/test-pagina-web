@extends('production.1')
@section('content')
    <div class="pb-0">
        <div class="container-fluid ">
            <!-- Fondo con video o imagen -->
            <lite-youtube videoid="{{ $Project->video_1 }}" style="width: 100%;height:500px"autoplay class="rounded-1 border-2"
                title="Play: Video"></lite-youtube>
        </div>
    </div>

    <div class="py-0 container-fluid text-center " style="background-color: #F6A42C">
        <div class="row">
            <div class="col-1 py-4"style="background-color:#F6A42C">

            </div>

            <div
                class="col-sm-12 col-xl-4 pt-5 pb-4"style="background-color:#03424E;margin-top:-3%;position:relative;border-top-left-radius:20px;border-bottom-left-radius:20px">
                <h3>SEPARA TU LOTE DESDE</h3>
                <h2 class="f-bold text-white">S/ 15,000</h2>
            </div>
            <div
                class="d-none d-xl-block  col-xl-2 pt-5 pb-4"style="background-color:#03424E;margin-top:-3%;position:relative;">
                <!-- Línea divisora -->
                <div class="vr" style="border:solid 1px #F6A42C">
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                </div>
            </div>
            <div
                class="d-none d-xl-block  col-xl-4 pt-5 pb-4"style="background-color:#03424E;margin-top:-3%;position:relative;border-top-right-radius:20px;border-bottom-right-radius:20px">
                <h3>SEPARA TU LOTE DESDE</h3>
                <h2 class="fw-bold text-white">PRE VENTA</h2>
            </div>
            <div class="col-1 py-4"style="background-color:#F6A42C">

            </div>
        </div>







    </div>
    <!-- Botón 1 -->




    <!-- Navegación inferior -->
    <div class="py-3"style="background-color:#F6A42C">
        <div class="container text-center">
            <nav class="nav justify-content-center">
                <a class="nav-link text-dark fw-bold" href="#ubicacion">Ubicación</a>
                <a class="nav-link text-dark fw-bold" href="#acerca">Acerca</a>
                <a class="nav-link text-dark fw-bold" href="#galeria">Galería</a>
                <a class="nav-link text-dark fw-bold" href="#recorridos">Recorridos</a>
                <a class="nav-link text-dark fw-bold" href="#proyectos">Proyectos</a>
            </nav>
        </div>
    </div>


    <!-- CSS adicional para el diseño -->
    <style>
        .nav-link {
            font-size: 1rem;
            letter-spacing: 0.05rem;
        }
    </style>

    <p></p>

    <div class="py-3">

        <div class="text-center text-white container-fluid">
            <h2 class="pt-5 text-white">UBICACIÓN DE {{ Str::upper($Project->title) }}</h2>
            <p class="pb-4 fs-6">Contamos con la mejor zona para comprar tu lote, estamos ubicados en</p>
        </div>



    </div>


    <div class="container py-1">
        <div class="row text-center">
            <!-- Elemento 1 -->
            <div class="col-md-4 mb-4">
                <div class="rounded-circle  mx-auto"
                style="background-color:#F6A42C;width: 90px; height: 90px; display: flex; align-items: center; justify-content: center;">
                <img src="../resource/1736540612_ICONO%201.svg" alt="Placeholder"style="margin:-15px" class="">
                </div>
                <p class="mt-3 fw-bold fs-5 "style="color:#03424E">{{$Project->location}}</p>
            </div>
            <!-- Elemento 2 -->
            <div class="col-md-4 mb-4">
                <div class="rounded-circle  mx-auto"
                    style="background-color:#F6A42C;width: 90px; height: 90px; display: flex; align-items: center; justify-content: center;">
                    <img src="../resource/1736540595_ICONO%202.svg" alt="Placeholder"width="" class=""style="margin:-15px">
                </div>
                <p class="mt-3 fw-bold fs-5 "style="color:#03424E">{{$Project->land}}</p>
            </div>
            <!-- Elemento 3 -->
            <div class="col-md-4 mb-4">
                <div class="rounded-circle  mx-auto"
                    style="background-color:#F6A42C;width: 90px; height: 90px; display: flex; align-items: center; justify-content: center;">
                    <img src="../resource/1736540585_ICONO%203.svg" alt="Placeholder"width="" class=""style="margin:-15px">
                </div>
                <p class="mt-3 fw-bold fs-5 "style="color:#03424E">{{$Project->land_count}}</p>
            </div>
        </div>
    </div>

    <img src="../resource/{{ $Project->map_1 }}"width="100%" alt="" srcset="">

    <p></p>






    <!-- Contenedor del video con contenido centrado -->
    <div class="d-flex justify-content-center align-items-center text-center"
        style="position: relative; height: 40vh; overflow: hidden;">

        <!-- Video de fondo -->
        <video autoplay loop muted playsinline
            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); min-width: 100%; min-height: 100%; object-fit: cover; z-index: -1;">
            <source src="../resource/1736518824_2rRNnUldMHGgJrM7yGrJGQ2OnAm.mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>

        <!-- Contenido sobre el video -->
        <div style="position: relative; z-index: 1; color: white;">



            <!-- Carrusel para tamaño md -->
            <div id="carouselExampleControls" class="carousel slide d-md-block d-lg-none"
                data-bs-ride="carousel"data-bs-interval="2500">
                <div class="carousel-inner">
                    <!-- Tarjeta 1 -->
                    <div class="carousel-item active">

                        <div class="card mx-auto text-center"style="width: 18rem;">

                            <div class="card-body">
                                <img src="../resource/1736532842_oportunidad%20de%20inversion%20v2%20(1).png"width="160px"
                                    style="padding-left:40px;padding-right:40px" alt="" srcset="">
                                <p class=" fs-7" style="color:#03424E">Oportunidad<br>de inversión
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 2 -->
                    <div class="carousel-item">
                        <div class="card mx-auto text-center" style="width: 18rem;">
                            <div class="card-body">
                                <img src="../resource/1736532817_portico%20de%20ingreso.png"width="160px"
                                    style="padding-left:40px;padding-right:40px" alt="" srcset="">

                                <p class=" fs-7" style="color:#03424E">Pórtico de <br> ingreso</p>
                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 3 -->
                    <div class="carousel-item">
                        <div class="card mx-auto text-center" style="width: 18rem;">
                            <div class="card-body">
                                <img src="../resource/1736532823_juegos%20para%20ni%C3%B1os.png"width="160px"
                                    style="padding-left:40px;padding-right:40px" alt="" srcset="">
                                <p class=" fs-7" style="color:#03424E">Juegos<br> para niños</p>

                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 4 -->
                    <div class="carousel-item">
                        <div class="card mx-auto text-center" style="width: 18rem;">
                            <div class="card-body">
                                <img src="../resource/1736532833_caseta%20de%20vigilancia.png"width="160px"
                                    style="padding-left:40px;padding-right:40px" alt="" srcset="">
                                <p class=" fs-7" style="color:#03424E">Vigilancia <br>24 horas</p>

                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>

            <!-- Tarjetas para tamaños lg y xl -->
            <div class="container d-none d-lg-block mt-4">
                <div class="row text-center">
                    <div class="col-lg-3 mb-0">
                        <div class="card">
                            <div class="card-body">
                                <img src="../resource/1736532842_oportunidad%20de%20inversion%20v2%20(1).png"width="160px"
                                    style="padding-left:40px;padding-right:40px" alt="" srcset="">
                                <p class=" fs-7" style="color:#03424E">Oportunidad<br>de inversión</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-0">
                        <div class="card">
                            <div class="card-body">
                                <img src="../resource/1736532817_portico%20de%20ingreso.png"width="160px"
                                    style="padding-left:40px;padding-right:40px" alt="" srcset="">

                                <p class=" fs-7" style="color:#03424E">Pórtico de <br> ingreso</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-0">
                        <div class="card">
                            <div class="card-body">
                                <img src="../resource/1736532823_juegos%20para%20ni%C3%B1os.png"width="160px"
                                    style="padding-left:40px;padding-right:40px" alt="" srcset="">
                                <p class=" fs-7" style="color:#03424E">Juegos<br> para niños</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-0">
                        <div class="card">
                            <div class="card-body">
                                <img src="../resource/1736532833_caseta%20de%20vigilancia.png"width="160px"
                                    style="padding-left:40px;padding-right:40px" alt="" srcset="">
                                <p class=" fs-7" style="color:#03424E">Vigilancia <br>24 horas</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <style>
        .image-slider-container {
            position: relative;
            width: 100%;
            height: 60vh;
            /* Altura estándar para pantallas más grandes */
            margin: 0 auto;
            overflow: hidden;
            cursor: pointer;
        }

        @media (max-width: 800px) {
            .image-slider-container {
                height: 30vh;
                /* Cambia la altura para pantallas pequeñas */
            }
        }

        .image-slider {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .image-slider img {
            position: absolute;
            transition: transform 0.8s ease, opacity 0.8s ease;
            width: 65%;
            height: 70%;
            max-width: 700px;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            opacity: 0;
            transform: scale(0.8) translateX(0);
            z-index: 0;
        }

        .image-slider img.active {
            opacity: 1;
            transform: scale(1) translateX(0);
            z-index: 3;
        }

        .image-slider img.prev {
            opacity: 1;
            transform: scale(0.8) translateX(-30%) translateY(0%);
            z-index: 2;
        }

        .image-slider img.next {
            opacity: 1;
            transform: scale(0.8) translateX(30%) translateY(0%);
            z-index: 2;
        }

        .image-slider img.hidden {
            opacity: 0;
            transform: scale(0.8);
            z-index: 1;
        }

        /* Indicadores debajo del carrusel */
        .image-slider-indicators {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .image-slider-indicators .indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 8px;
            background-color: rgba(255, 165, 0, 1);
            /* Naranja opaco */
            transition: background-color 0.3s ease, transform 0.3s ease;
            cursor: pointer;
        }

        .image-slider-indicators .indicator.active {
            background-color: rgba(255, 165, 0, 1);
            /* Naranja fuerte */
            transform: scale(1.3);
            /* Aumenta el tamaño del indicador activo */
        }
    </style>

    <div class="py-1 container-fluid"
        style="background: linear-gradient(to right, #03424E 10%, #04505f 20%, #04505f 70%, #03424E 90%)">
        <h2 class="text-center pt-5" style="color:#F6A42C;margin-bottom:-20px">FOTOS Y VIDEOS</h2>
        <div class="image-slider-container">
            <div class="image-slider">
                <img src="http://aybar_laravel.test/resource/1736450467_Mapa-camtabria.png" class="hidden"
                    alt="Imagen 1">
                <img src="http://aybar_laravel.test/resource/1736450467_Mapa-camtabria.png" class="active"
                    alt="Imagen 2">
                <img src="http://aybar_laravel.test/resource/1736450467_Mapa-camtabria.png" class="hidden"
                    alt="Imagen 3">
                <img src="http://aybar_laravel.test/resource/1736450467_Mapa-camtabria.png" class="hidden"
                    alt="Imagen 4">
            </div>
            <div class="image-slider-indicators">
                <span class="indicator"></span>
                <span class="indicator"></span>
                <span class="indicator"></span>
            </div>
        </div>
    </div>

    <script>
        const images = document.querySelectorAll(".image-slider img");
        const indicators = document.querySelectorAll(".image-slider-indicators .indicator");

        let currentIndex = Math.floor(images.length / 2);

        // Actualizar el carrusel
        function updateCarousel() {
            images.forEach((img, index) => {
                img.classList.remove("active", "prev", "next", "hidden");

                if (index === currentIndex) {
                    img.classList.add("active");
                } else if (index === (currentIndex - 1 + images.length) % images.length) {
                    img.classList.add("prev");
                } else if (index === (currentIndex + 1) % images.length) {
                    img.classList.add("next");
                } else {
                    img.classList.add("hidden");
                }
            });

            // Actualizar los indicadores
            indicators.forEach((indicator, index) => {
                indicator.classList.remove("active");
                if (index === currentIndex) {
                    indicator.classList.add("active");
                }
            });
        }

        // Avanzar al siguiente
        function nextImage() {
            currentIndex = (currentIndex + 1) % images.length; // Pasa a la siguiente imagen con efecto loop
            updateCarousel();
        }

        // Retroceder al anterior
        function prevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length; // Retrocede con efecto loop
            updateCarousel();
        }

        // Añadir eventos de clic a las imágenes
        images.forEach((img) => {
            img.addEventListener("click", (e) => {
                if (e.target.classList.contains("next")) {
                    nextImage(); // Si clic en "next", avanza
                } else if (e.target.classList.contains("prev")) {
                    prevImage(); // Si clic en "prev", retrocede
                }
            });
        });

        // Añadir eventos de clic a los indicadores
        indicators.forEach((indicator, index) => {
            indicator.addEventListener("click", () => {
                currentIndex = index; // Ir directamente a la imagen seleccionada
                updateCarousel();
            });
        });

        // Al cargar, simular un clic en la imagen siguiente
        document.addEventListener("DOMContentLoaded", () => {
            setTimeout(() => {
                nextImage();
            }, 500); // Espera 500 ms antes de avanzar automáticamente
        });

        // Inicializar el carrusel
        updateCarousel();
    </script>



    <div class="d-flex justify-content-center align-items-center text-center"
        style="position: relative;  overflow: hidden;">

        <!-- Video de fondo -->
        <video autoplay loop muted playsinline
            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); min-width: 100%; min-height: 100%; object-fit: cover; z-index: -1;">
            <source src="../resource/1736518824_2rRNnUldMHGgJrM7yGrJGQ2OnAm.mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>

        <!-- Contenido sobre el video -->
        <div style="position: relative; z-index: 1; color: white;">

            <div id="bootstrapCarousel" class="py-5 carousel slide" data-bs-ride="carousel" data-bs-interval="30000">
                <!-- Indicadores -->
                <div class="carousel-indicators">
                    @php $totalSlides = 0; @endphp
                    @for ($i = 1; $i <= 10; $i += 2)
                        @php
                            $video_1 = "video_" . $i;
                            $video_2 = "video_" . ($i + 1);
                        @endphp
                        @if (!empty($Project->$video_1) || !empty($Project->$video_2))
                            <button type="button" data-bs-target="#bootstrapCarousel" data-bs-slide-to="{{ $totalSlides }}" 
                                class="{{ $totalSlides === 0 ? 'active' : '' }}" aria-current="{{ $totalSlides === 0 ? 'true' : '' }}" 
                                aria-label="Slide {{ $totalSlides + 1 }}" style="background-color: #F6A42C"></button>
                            @php $totalSlides++; @endphp
                        @endif
                    @endfor
                </div>
            
                <!-- Contenido del Carrusel -->
                <div class="carousel-inner">
                    @php $activeSet = false; @endphp
                    @for ($i = 1; $i <= 10; $i += 2)
                        @php
                            $video_1 = "video_" . $i;
                            $video_2 = "video_" . ($i + 1);
                        @endphp
                        @if (!empty($Project->$video_1) || !empty($Project->$video_2))
                            <div class="carousel-item {{ !$activeSet ? 'active' : '' }}">
                                <div class="row">
                                    <!-- Primer Video del Grupo -->
                                    @if (!empty($Project->$video_1))
                                        <div class="col-md-6">
                                            <lite-youtube videoid="{{ $Project->$video_1 }}" autoload 
                                                style="width: 100%; height: 300px; border-radius: 10px"></lite-youtube>
                                        </div>
                                    @endif
            
                                    <!-- Segundo Video del Grupo -->
                                    @if (!empty($Project->$video_2))
                                        <div class="col-md-6">
                                            <lite-youtube videoid="{{ $Project->$video_2 }}" autoload 
                                                style="width: 100%; height: 300px; border-radius: 10px"></lite-youtube>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @php $activeSet = true; @endphp
                        @endif
                    @endfor
                </div>
            
                <!-- Controles de Navegación -->
                <button class="carousel-control-prev" type="button" data-bs-target="#bootstrapCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#bootstrapCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            


        </div>
    </div>



 


    <style>
        .tourist-card {
          border-radius: 15px;
          overflow: hidden;
          position: relative;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .tourist-card:hover {
          transform: translateY(-5px);
          box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .tourist-card img {
          width: 100%;
          height: 250px;
          object-fit: cover;
        }
        .tourist-card .card-body {
          background: rgba(0, 66, 78, 0.8);
          color: white;
          text-align: center;
          padding: 20px;
        }
        .tourist-card .card-title {
          font-size: 1.2rem;
          font-weight: bold;
          margin: 0;
        }
        .tourist-card .card-subtitle {
          font-size: 0.9rem;
          color: rgba(255, 255, 255, 0.8);
          margin-top: 5px;
        }
      </style>


    
      <div class="container py-5">
        <p class="text-center mb-5 display-5" style="color: #03424E;font-family:Montserrat-SemiBold">CONOCE {{Str::Upper($Project->title) }}</p>
        <div class="row g-4 text-center align-content-center justify-content-center">
          <!-- Card 1 -->
         @for($i = 1; $i <=6; $i++)
            @php
           $tourist_image="tourist_image_". $i;
           
            @endphp
         @if ($Project->$tourist_image!="")
            <div class="col-md-6 col-lg-3">
                <div class="tourist-card">
                  <img src="../resource/{{$Project->$tourist_image}}" alt="Lugar Turístico 1">
                  <div class="card-body">
                    <p class="card-title text-start">LUGARES TURISTICOS</p>
                    <p class="card-subtitle text-start">{{Str::Upper($Project->title) }}</p>
                  </div>
                </div>
              </div>
            @endif
         @endfor
    
  
        </div>
      </div>
    








    <style>
        /* Personalización de las tarjetas */
        .custom-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            /* Sombra inicial */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .custom-card:hover {
            transform: translateY(-5px);
            /* Elevar la tarjeta en hover */
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
            /* Incrementar sombra */
        }

        .custom-btn {
            background-color: #FFA500;
            /* Botón naranja */
            border: none;
            border-radius: 25px;
            color: white;
            padding: 8px 20px;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .custom-btn:hover {
            background-color: #FF8C00;
            /* Naranja más oscuro en hover */
        }
    </style>
@endsection
