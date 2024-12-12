@extends('home_edit.template')


@section('content')




    <p></p>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const liteYoutubes = document.querySelectorAll('lite-youtube');

            liteYoutubes.forEach(liteYoutube => {
                const playButton = liteYoutube.shadowRoot.querySelector('#playButton');

                if (playButton) {
                    // playButton.style.visibility = 'hidden'; 
                    playButton.style.width = '0px';
                    playButton.style.height = '0px';
                    playButton.style.backgroundRepeat = 'no-repeat';
                }
            });
        });


//traer los projectos
            // Ejecutar cuando el DOM esté listo
    document.addEventListener('DOMContentLoaded', ProjectList);

    </script>
    <style>
        lite-youtube {
            /* No Shadow */
            --lite-youtube-frame-shadow-visible: no;
            width: 100%;
        }
    </style>

    


    {{-- <div class="container-fluid text-light py-5"style="background-image: url('{{ asset('ayba/bg.png') }}')">
        <div class="text-center">





            <div class="container py-2">

                <h1>VIVE EN LA MEJOR ZONA</h1>
                <p>
                    &nbsp;&nbsp;
                </p>
                <!-- Carrusel para pantallas pequeñas y medianas -->
                <div id="responsiveCarousel" class="carousel slide d-lg-none" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Primera diapositiva -->
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-4 mb-3">
                                    <lite-youtube videoid="68tbz0AyBUs" style="width: 100%;"
                                        class="rounded-1 border-2"></lite-youtube>
                                </div>

                            </div>
                        </div>
                        <!-- Segunda diapositiva -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-4 mb-3">
                                    <lite-youtube videoid="68tbz0AyBUs" style="width: 100%;"
                                        class="rounded-1 border-2"></lite-youtube>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-4 mb-3">
                                    <lite-youtube videoid="68tbz0AyBUs" style="width: 100%;"
                                        class="rounded-1 border-2"></lite-youtube>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Controles del carrusel -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#responsiveCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#responsiveCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>

                <!-- Grilla para pantallas grandes -->
                <div class="row d-none d-lg-flex mt-4">
                    <div class="col-lg-4 mb-3">
                        <lite-youtube videoid="68tbz0AyBUs" style="width: 100%;" class="rounded-1 border-2"></lite-youtube>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <lite-youtube videoid="68tbz0AyBUs" style="width: 100%;" class="rounded-1 border-2"></lite-youtube>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <lite-youtube videoid="68tbz0AyBUs" style="width: 100%;" class="rounded-1 border-2"></lite-youtube>
                    </div>

                </div>
            </div>




        </div>

        <div>

        </div>



    </div>


    <div class="container py-1">
        <h4 class="text-center display-4" style="margin:40px">
            <b style="color:#03424E">¿POR QUÉ</b> <b>COMPRAR UN LOTE?</b>
        </h4>

        <!-- Carrusel (visible solo en pantallas pequeñas) -->
        <div id="mobileCarousel" class="carousel slide d-md-none" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <!-- Tarjeta 1 -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="card overflow-hidden" style="border-radius: 20px; width: 18rem;">
                            <div class="el-card-item pb-5" style="border: 1px solid black; border-radius: 20px;">
                                <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                                    style="margin-top: 5vh;">
                                    <img src="{{ asset('ayba/agua.png') }}" alt="Inversion Segura"
                                        style="width: 50%;border-radius:0px">
                                </div>
                                <div class="el-card-content text-center">
                                    <h4 class="mb-0 card-title">INVERSIÓN<br>SEGURA</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 2 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card overflow-hidden" style="border-radius: 20px; width: 18rem;">
                            <div class="el-card-item pb-5" style="border: 1px solid black; border-radius: 20px;">
                                <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                                    style="margin-top: 5vh;">
                                    <img src="{{ asset('ayba/ahorrar.png') }}" alt="Rentabilidad a Largo Plazo"
                                        style="width: 50%;border-radius:0px">
                                </div>
                                <div class="el-card-content text-center">
                                    <h4 class="mb-0 card-title">RENTABILIDAD<br>A LARGO PLAZO</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 3 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card overflow-hidden" style="border-radius: 20px; width: 18rem;">
                            <div class="el-card-item pb-5" style="border: 1px solid black; border-radius: 20px;">
                                <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                                    style="margin-top: 5vh;">
                                    <img src="{{ asset('ayba/ambiente laboral.png') }}" alt="Patrimonio Familiar"
                                        style="width: 50%;border-radius:0px">
                                </div>
                                <div class="el-card-content text-center">
                                    <h4 class="mb-0 card-title">PATRIMONIO PARA<br>TU FAMILIA</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 4 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card overflow-hidden" style="border-radius: 20px; width: 18rem;">
                            <div class="el-card-item pb-5" style="border: 1px solid black; border-radius: 20px;">
                                <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                                    style="margin-top: 5vh;">
                                    <img src="{{ asset('ayba/beneficiados.png') }}" alt="Patrimonio Familiar"
                                        style="width: 50%;border-radius:0px">
                                </div>
                                <div class="el-card-content text-center">
                                    <h4 class="mb-0 card-title">ALTA<br>REVALORIZACION</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Controles del Carrusel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#mobileCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mobileCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Grid de tarjetas (visible en pantallas medianas y grandes) -->
        <div class="row d-none d-md-flex el-element-overlay">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card overflow-hidden" style="border-radius: 20px;">
                    <div class="el-card-item pb-5" style="border: 1px solid black; border-radius: 20px;">
                        <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                            style="margin-top: 5vh;">
                            <img src="{{ asset('ayba/agua.png') }}" alt="Inversion Segura"
                                style="width: 50%;border-radius:0px">
                        </div>
                        <div class="el-card-content text-center">
                            <h4 class="mb-0 card-title">INVERSION<br>SEGURA</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card overflow-hidden" style="border-radius: 20px;">
                    <div class="el-card-item pb-5" style="border: 1px solid black; border-radius: 20px;">
                        <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                            style="margin-top: 5vh;">
                            <img src="{{ asset('ayba/ahorrar.png') }}" alt="Rentabilidad a Largo Plazo"
                                style="width: 50%;border-radius:0px">
                        </div>
                        <div class="el-card-content text-center">
                            <h4 class="mb-0 card-title">RENTABILIDAD<br>A LARGO PLAZO</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card overflow-hidden" style="border-radius: 20px;">
                    <div class="el-card-item pb-5" style="border: 1px solid black; border-radius: 20px;">
                        <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                            style="margin-top: 5vh;">
                            <img src="{{ asset('ayba/ambiente laboral.png') }}" alt="Patrimonio Familiar"
                                style="width: 50%;border-radius:0px">
                        </div>
                        <div class="el-card-content text-center">
                            <h4 class="mb-0 card-title">PATRIMONIO PARA<br>TU FAMILIA</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card overflow-hidden" style="border-radius: 20px;">
                    <div class="el-card-item pb-5" style="border: 1px solid black; border-radius: 20px;">
                        <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center"
                            style="margin-top: 5vh;">
                            <img src="{{ asset('ayba/beneficiados.png') }}" alt="Patrimonio Familiar"
                                style="width: 50%;border-radius:0px">
                        </div>
                        <div class="el-card-content text-center">
                            <h4 class="mb-0 card-title">ALTA<br>REVALORIZACION</h4>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div> --}}



    <style>
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            /* Fondo visible */
            border-radius: 50%;
            /* Forma redonda */
            width: 40px;
            height: 40px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            z-index: 10;
            /* Asegúrate de que estén por encima del contenido */
        }
    </style>




{{-- 

    <div class="container-fluid py-4" style="background-image: url('{{ asset('ayba/bg.png') }}')">
        <div class="text-center">
            <a class="btn btn-hover-shadow" href="#"
                style="color:white;border-radius:20px;background-color:#F6A42C;margin:20px;">
                <h3 class="display-7 p-6 pb-1"><b>&nbsp;DESCUBRE NUESTROS PROYECTOS&nbsp;</b></h3>
            </a>
        </div>



        <!-- Carrusel para pantallas pequeñas -->
        <div id="responsiveCarousel6" class="carousel slide d-md-none"data-bs-interval="3000" data-bs-ride="carousel">
            <div class="container">
                <div class="carousel-inner">
                    <!-- Tarjeta 1 -->
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <div class="card" style="border-color:#03424E;color:#03424E;border-width:1px; width: 90%;">
                                <div class="card-body p-1 text-center">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1cw_qzpNR151OeqDPIT-VzzkT95iMdaDRfA&s"
                                        alt="matdash-img" class="w-100 mb-4" width="80"
                                        style="padding-top:40px;border-radius: 0;">
                                    <b style="font-size: 20px;">PROYECTO <br> SAN ANDRÉS</b>
                                    <p>------------</p>
                                    <p>Lotes desde 120 m2</p>
                                    <a class="btn btn-hover-shadow" href="#"
                                        style="color:white;border-radius:20px;background-color:#F6A42C;margin:10px;">
                                        > &nbsp;CONOCER MÁS&nbsp;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 2 -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="card" style="border-color:#03424E;color:#03424E;border-width:1px; width: 90%;">
                                <div class="card-body p-1 text-center">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1cw_qzpNR151OeqDPIT-VzzkT95iMdaDRfA&s"
                                        alt="matdash-img" class="w-100 mb-4" width="80"
                                        style="padding-top:40px;border-radius: 0;">
                                    <b style="font-size: 20px;">PROYECTO <br> SAN ANDRÉS</b>
                                    <p>------------</p>
                                    <p>Lotes desde 120 m2</p>
                                    <a class="btn btn-hover-shadow" href="#"
                                        style="color:white;border-radius:20px;background-color:#F6A42C;margin:10px;">
                                        > &nbsp;CONOCER MÁS&nbsp;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 3 -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="card" style="border-color:#03424E;color:#03424E;border-width:1px; width: 90%;">
                                <div class="card-body p-1 text-center">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1cw_qzpNR151OeqDPIT-VzzkT95iMdaDRfA&s"
                                        alt="matdash-img" class="w-100 mb-4" width="80"
                                        style="padding-top:40px;border-radius: 0;">
                                    <b style="font-size: 20px;">PROYECTO <br> SAN ANDRÉS</b>
                                    <p>------------</p>
                                    <p>Lotes desde 120 m2</p>
                                    <a class="btn btn-hover-shadow" href="#"
                                        style="color:white;border-radius:20px;background-color:#F6A42C;margin:10px;">
                                        > &nbsp;CONOCER MÁS&nbsp;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Controles del Carrusel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#responsiveCarousel6"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#responsiveCarousel6"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container">
            <!-- Grilla para pantallas medianas y grandes -->
            <div class="row d-none d-md-flex justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-4  mb-3">
                    <div class="card" style="border-color:#03424E;color:#03424E;border-width:1px;">
                        <div class="card-body p-1 text-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1cw_qzpNR151OeqDPIT-VzzkT95iMdaDRfA&s"
                                alt="matdash-img" class="w-100 mb-4" width="80" style="padding-top:40px">
                            <b style="font-size: 20px;">PROYECTO <br> SAN ANDRÉS</b>
                            <p>------------</p>
                            <p>Lotes desde 120 m2</p>
                            <a class="btn btn-hover-shadow" href="#"
                                style="color:white;border-radius:20px;background-color:#F6A42C;margin:10px;">
                                > &nbsp;CONOCER MÁS&nbsp;
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 mb-3">
                    <div class="card" style="border-color:#03424E;color:#03424E;border-width:1px;">
                        <div class="card-body p-1 text-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1cw_qzpNR151OeqDPIT-VzzkT95iMdaDRfA&s"
                                alt="matdash-img" class="w-100 mb-4" width="80" style="padding-top:40px">
                            <b style="font-size: 20px;">PROYECTO <br> SAN ANDRÉS</b>
                            <p>------------</p>
                            <p>Lotes desde 120 m2</p>
                            <a class="btn btn-hover-shadow" href="#"
                                style="color:white;border-radius:20px;background-color:#F6A42C;margin:10px;">
                                > &nbsp;CONOCER MÁS&nbsp;
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 mb-3">
                    <div class="card" style="border-color:#03424E;color:#03424E;border-width:1px;">
                        <div class="card-body p-1 text-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1cw_qzpNR151OeqDPIT-VzzkT95iMdaDRfA&s"
                                alt="matdash-img" class="w-100 mb-4" width="80" style="padding-top:40px">
                            <b style="font-size: 20px;">PROYECTO <br> SAN ANDRÉS</b>
                            <p>------------</p>
                            <p>Lotes desde 120 m2</p>
                            <a class="btn btn-hover-shadow" href="#"
                                style="color:white;border-radius:20px;background-color:#F6A42C;margin:10px;">
                                > &nbsp;CONOCER MÁS&nbsp;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid py-1" style="background-color: #ffffff;">
        <div class="row m-10">
            <!-- Imagen -->
            <div class="col-12 d-md-none d-xl-block col-xl-5 mt-lg-5">
                <img class="transparencia_pie" src="ayba/familia.png" style="margin-top: 0%;" width="100%"
                    alt="">
            </div>

            <!-- Contenido -->
            <div class="col-xl-7" style="margin-top: 50px;">
                <div class="container">
                    <h4 class="display-5 d-lg-block d-xl-block d-sm-none d-none"
                        style="word-spacing: 13px; letter-spacing: 8px;">
                        <b>CONFÍA EN </b><b style="color:#03424E">AYBAR CORP</b>
                    </h4>
                    <h4 class="fs-8 d-lg-none text-center" style="word-spacing: 13px;letter-spacing:3px">
                        <b>CONFÍA EN </b><b style="color:#03424E">AYBAR CORP</b>
                    </h4>
                    <p class="fs-7 d-none d-lg-block d-xxl-block d-sm-none" style="color:#03424E;">
                        Construye un futuro sólido para tu familia invirtiendo en confianza.
                    </p>
                    <p class="fs-4 d-lg-none" style="color:#03424E;text-align: justify;">
                        Construye un futuro sólido para tu familia invirtiendo en confianza.
                    </p>
                    <a class="btn btn-hover-shadow" href="#"
                        style="color:white;border-radius:20px;background-color:#F6A42C;margin-bottom:20px">
                        > &nbsp;CONOCER MÁS&nbsp;
                    </a>

                    <!-- Carrusel para pantallas SM -->
                    <div id="carouselExample5" class="carousel slide d-md-none" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Diapositiva 1 -->
                            <div class="carousel-item active">
                                <div class="card" style="background-color: #03424E;">
                                    <div class="card-body text-center text-white">
                                        <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1"
                                            width="60px" alt="">
                                        <p class="fs-5"><b>+ DE 300 PROYECTOS</b></p>
                                        <p class="fs-1" style="margin-bottom:3%; text-align: justify;">
                                            Con la mejor inversión en la construcción de un futuro estable para tu familia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Diapositiva 2 -->
                            <div class="carousel-item">
                                <div class="card" style="background-color: #03424E;">
                                    <div class="card-body text-center text-white">
                                        <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1"
                                            width="60px" alt="">
                                        <p class="fs-6"><b>+ DE 5 AÑOS</b></p>
                                        <p class="fs-2">De experiencia en el mercado.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Diapositiva 3 -->
                            <div class="carousel-item">
                                <div class="card" style="background-color: #03424E;">
                                    <div class="card-body text-center text-white">
                                        <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1"
                                            width="60px" alt="">
                                        <p class="fs-6"><b>PROYECTOS SOSTENIBLES</b></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Diapositiva 4 -->
                            <div class="carousel-item">
                                <div class="card" style="background-color: #03424E;">
                                    <div class="card-body text-center text-white">
                                        <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1"
                                            width="60px" alt="">
                                        <p class="fs-6"><b>+ DE 1,000</b></p>
                                        <p class="fs-2">Adquirieron nuestros proyectos.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Diapositiva 5 -->
                            <div class="carousel-item">
                                <div class="card" style="background-color: #03424E;">
                                    <div class="card-body text-center text-white">
                                        <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1"
                                            width="60px" alt="">
                                        <p class="fs-6"><b>+ 2,000 KM 2</b></p>
                                        <p class="fs-2">Zonas verdes proporcionadas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controles del Carrusel -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample5"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample5"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>

                    <!-- Grilla para pantallas MD y superiores -->
                    <div class="row d-none d-md-flex mt-4">
                        <div class="col-lg-4 col-md-6 col-xl-4">
                            <div class="card" style="background-color: #03424E;">
                                <div class="card-body text-center text-white">
                                    <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1"
                                        width="60px" alt="">
                                    <p class="fs-5"><b>+ DE 300 PROYECTOS</b></p>
                                    <p class="fs-1" style="margin-bottom:3%; text-align: justify;">
                                        Con la mejor inversión en la construcción de un futuro estable para tu familia.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xl-4">
                            <div class="card" style="background-color: #03424E;">
                                <div class="card-body text-center text-white">
                                    <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1"
                                        width="60px" alt="">
                                    <p class="fs-6"><b>+ DE 5 AÑOS</b></p>
                                    <p class="fs-2">De experiencia en el mercado.</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-md-block  d-lg-none col-md-3"></div>
                        <div class="col-lg-4 col-md-6 col-xl-4">
                            <div class="card" style="background-color: #03424E;">
                                <div class="card-body text-center text-white">
                                    <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1"
                                        width="60px" alt="">
                                    <p class="fs-6"><b>PROYECTOS SOSTENIBLES</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-xl-2"></div>
                        <div class="col-lg-4 col-md-6 col-xl-4">
                            <div class="card" style="background-color: #03424E;">
                                <div class="card-body text-center text-white">
                                    <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1"
                                        width="60px" alt="">
                                    <p class="fs-6"><b>+ DE 1,000</b></p>
                                    <p class="fs-2">Adquirieron nuestros proyectos.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-xl-4">
                            <div class="card" style="background-color: #03424E;">
                                <div class="card-body text-center text-white">
                                    <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1"
                                        width="60px" alt="">
                                    <p class="fs-6"><b>+ 2,000 KM 2</b></p>
                                    <p class="fs-2">Zonas verdes proporcionadas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
