@extends('production.1')
@section('content')
    <style>
        .shadowed-text {
            text-shadow: 1px 1px 1px #000000;
            /* Contorno sombreado */
        }

        .transparencia_cabecera_md {


            /* Ajuste opcional */
            mask-image: linear-gradient(to top, #000000 10%, transparent 100%);

            /* -webkit-mask-image: linear-gradient(to top, #000000 60%, transparent 100%); */
        }

        .transparencia_cabecera_xl {


            /* Ajuste opcional */
            mask-image: linear-gradient(to top, #000000 70%, transparent 100%);

            /* -webkit-mask-image: linear-gradient(to top, #000000 60%, transparent 100%); */
        }
    </style>

    <style>
        .card-hover {
            position: relative;
            width: 300px;
            height: 350px;
            overflow: hidden;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-hover img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.3s ease;
        }

        .card-hover:hover img {
            opacity: 0;
        }

        .card-hover .hover-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card-hover:hover .hover-content {
            opacity: 1;
        }

        .card-hover .button {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: rgb(255, 255, 255);
            border: solid 3px #ffcc00;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .card-hover .button:hover {
            background-color: #ffffff;
        }

        .card-hover .button:hover .arrow {
            transform: rotate(45deg);
        }

        .arrow {
            display: block;

            width: 16px;
            height: 16px;
            border-right: 3px solid #ffcc00;
            border-top: 3px solid #ffcc00;
            transform: rotate(+0deg);
            transition: transform 0.3s ease;
        }
    </style>
    <style>
        .modal-backdrop {
            background-color: transparent !important;
            /* Fondo del overlay completamente transparente */
        }
    </style>
    <!-- INICIO SECCION -->
<section class="text-white" style="background-color:#03424E;">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Diapositiva 1 -->
            <div class="carousel-item active">
                <p>&nbsp;</p>
                <div class="d-none d-md-block pt-xl-4 pt-5 pt-sm-5 w-100 position-absolute align-content-center text-center translate-middle start-50">
                    <h4 class="fw-bold mt-5 pt-3 shadowed-text" style="word-spacing: 10px;letter-spacing: 8px">
                        <span class="text-white" style="font-family: Montserrat-SemiBold;">CUMPLIENDO EL LOTE </span>
                        <span style="font-family: Montserrat-SemiBold;">DE TUS SUEÑOS</span>
                    </h4>
                </div>
                <div class="d-sm-block d-md-none m-1 pt-3 w-100 position-absolute align-content-center text-center translate-middle start-50">
                    <h4 class="fs-2 fw-bold mt-5 pt-2 shadowed-text" style="word-spacing:5px;letter-spacing: 5px">
                        <span class="text-white">CUMPLIENDO EL LOTE </span>DE TUS SUEÑOS
                    </h4>
                </div>
                <div class="d-none d-md-block">
                    <div class="text-center pt-5">
                        <img src="../resource/1735588521_Linea%20Amarilla.png" style="height:50px;width:500px">
                    </div>
                    <img src="../resource/1735588360_Imagen-de-fondo.jpg" alt="Imagen principal" class="w-100 transparencia_cabecera_xl" height="500px">
                </div>
                <div class="d-md-none">
                    <div class="text-center pt-5">
                        <img src="../resource/1735588521_Linea%20Amarilla.png" style="height:50px;width:300px">
                    </div>
                    <img src="../resource/1735588360_Imagen-de-fondo.jpg" alt="Imagen principal" class="w-100 transparencia_cabecera_md" height="200px">
                </div>
            </div>

            <!-- Diapositiva 2 -->
            <div class="carousel-item h-100">
              
               
               
               
                <img src="../resource/1735940681_REFERENCIA.png" alt="Imagen secundaria" class="w-100" height="100%">
            </div>
        </div>

        <!-- Indicadores -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="bg-warning active" aria-label="Diapositiva 1" aria-current="true"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" class="bg-warning" aria-label="Diapositiva 2"></button>
        </div>

        <!-- Controles de navegación -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</section>
<div class="container py-5">
        <h2 class="display-6 text-center mb-4" style="word-spacing:8px;letter-spacing:3px"><b>UBICA TU PRÓXIMO HOGAR</b>
        </h2>
        <p class="fs-7 mb-5" style="color:#03424E;text-align:center">
            Somos una inmobiliaria completamente peruana, dedicada a la creación de proyectos inmobiliarios
            de terrenos de todas las familias del Perú. Ofrecemos terrenos exclusivos en el país.
        </p>
        <div class="row">
            <!-- Tarjeta Lima -->
            <div class="col-xl-2 col-0"></div>
            <div class="col-lg-6 col-xl-4 col-md-6">
                <!-- Tarjeta -->
                <div class="card card-hover shadow" style="position: relative; width:100%;" data-bs-toggle="modal" data-bs-target="#modalLima">
                    <img src="../resource/1735593981_Lima.png" class="card-img-top" alt="Lima">
                    <h2 class="bottom-0 text-white start-20 p-3 pb-0" style="position: absolute;">LIMA METROPOLITANA</h2>
                    <div class="hover-content">
                        <p class="fw-bold">Explora las oportunidades en Lima</p>
                    </div>
                    <div class="button">
                        <span class="arrow"></span>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="modalLima" tabindex="-1" aria-labelledby="modalLimaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                   
                        <div class="modal-content" style="background: linear-gradient(to top, #e0e0e0 10%, #ffffff 90%);">
                            <div class="modal-header">

                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container text-center">
                                    <h2 class="modal-title p-5" id="modalLimaLabel">Encuentra el proyecto ideal para ti
                                        con megaproyectos.</h2>

                                    <div class="row align-content-center text-center justify-content-center">
                                        <div class="col-lg-4">
                                            <a href="../proyectos/terra_galicia">

                                                <img src="../resource/1736195210_Mesa%20de%20trabajo%202%20copia%2031.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-30%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="../proyectos/rivera">
                                                <img src="../resource/1736196462_rivera%20del%20camp.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-30%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                    </div>



                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tarjeta Ica -->
            <div class="col-lg-6 col-xl-4 col-md-6">
                <div class="card card-hover shadow" style="position: relative;width:100%" data-bs-toggle="modal" data-bs-target="#modalIca">
                    <img src="../resource/1735593994_Ica.png" class="card-img-top" alt="Ica">
                    <h1 class="bottom-0 start-20 p-3 pb-0" style="position: absolute;">ICA</h1>
                    <div class="hover-content">
                        <p class="fw-bold">Descubre los proyectos en Ica</p>
                    </div>
                    <div class="button">
                        <span class="arrow"></span>
                    </div>
                </div>

                <div class="modal fade" id="modalIca" tabindex="-1" aria-labelledby="modalLimaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                      
                        <div class="modal-content" style="background: linear-gradient(to top, #e0e0e0 10%, #ffffff 90%);">
                            <div class="modal-header">

                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container text-center">
                                    <h2 class="modal-title p-5" id="modalLimaLabel">Encuentra el proyecto ideal para ti
                                        con megaproyectos.</h2>

                                    <div class="row align-content-center text-center justify-content-center">
                                        <div class="col-lg-4">
                                            <a href="../proyectos/jumeirah">

                                                <img src="../resource/1736197086_jumeirah.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-30%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="../proyectos/palmilla">
                                                <img src="../resource/1736198278_Mesa%20de%20trabajo%202%20copia%2032.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-30%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="../proyectos/villa">
                                                <img src="../resource/1736198419_villa-porton.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-30%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                    </div>



                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-0"></div>
            <div class="col-xl-2 col-0"></div>

            <!-- Tarjeta Huaral -->
            <div class="col-lg-6 col-xl-4 col-md-6">
                <div class="card card-hover shadow" style="position: relative;width:100%" data-bs-toggle="modal" data-bs-target="#modalHuaral">
                    <img src="../resource/1736172777_Huaral.png" class="card-img-top" alt="Huaral">
                    <h1 class="bottom-0 start-20 p-3 pb-0" style="position: absolute;">HUARAL</h1>
                    <div class="hover-content">
                        <p class="fw-bold">Explora las oportunidades en Huaral</p>
                    </div>

                    <div class="button">
                        <span class="arrow"></span>
                    </div>
                </div>


                <div class="modal fade" id="modalHuaral" tabindex="-1" aria-labelledby="modalLimaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                       
                        <div class="modal-content" style="background: linear-gradient(to top, #e0e0e0 10%, #ffffff 90%);">
                            <div class="modal-header">

                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container text-center">
                                    <h2 class="modal-title p-5" id="modalLimaLabel">Encuentra el proyecto ideal para ti
                                        con megaproyectos.</h2>

                                    <div class="row align-content-center text-center justify-content-center">
                                        <div class="col-lg-4">
                                            <a href="../proyectos/nuevo_huaral">

                                                <img src="../resource/1736199258_Mesa%20de%20trabajo%202%20copia%2029.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-30%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="../proyectos/valle_huaral">
                                                <img src="../resource/1736199294_Mesa%20de%20trabajo%202%20copia%2030.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-30%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>

                                    </div>



                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
        <!-- Tarjeta Huacho -->
        <div class="col-lg-6 col-xl-4 col-md-6">
            <div class="card card-hover shadow" style="position: relative;width:100%" data-bs-toggle="modal" data-bs-target="#modalHuacho">
                <img src="../resource/1736172763_Huacho.png" class="card-img-top" alt="Huacho">
                <h1 class="bottom-0 start-20 p-3 pb-0" style="position: absolute;">HUACHO</h1>
                <div class="hover-content">
                    <p class="fw-bold">Descubre los proyectos en Huacho</p>
                </div>
                <div class="button">
                    <span class="arrow"></span>
                </div>
            </div>


            <div class="modal fade" id="modalHuacho" tabindex="-1" aria-labelledby="modalLimaLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
               
                <div class="modal-content" style="background: linear-gradient(to top, #e0e0e0 10%, #ffffff 90%);">
                    <div class="modal-header">

                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container text-center">
                            <h2 class="modal-title p-5" id="modalLimaLabel">Encuentra el proyecto ideal para ti
                                con megaproyectos.</h2>

                            <div class="row align-content-center text-center justify-content-center">
                                <div class="col-lg-4">
                                    <a href="../proyectos/maria_drago">

                                        <img src="../resource/1736199453_mariadrago.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                        <button type="button" class="btn btn-warning btn-block" style="margin-top:-30%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                    más</span>
                                            </span></button>
                                    </a>
                                </div>
                               

                            </div>



                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>                       </div>
<!-- FIN SECCION -->
@endsection
