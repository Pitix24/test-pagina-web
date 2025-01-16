@extends('production.1')


@section('content')
    <form method="post" id="Customer">
        @csrf

        <!-- INICIO SECCION -->
<div id="carouselExample" class="carousel slide text-white pointer-event" data-bs-ride="carousel" data-bs-interval="30000">
            <div class="carousel-inner" style="display: flex; align-items: center;">
                <!-- Diapositiva 1 -->
                <div class="carousel-item text-center py-5 active" style="
    background-image: url('../resource/1734733260_fondo-.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    width: 100vw;
">
                    <div class="container-fluid" style=" background-color: transparent;">
                        <div class="row h-100">
                            <!-- Columna izquierda con imagen -->
                            <div class="col-lg-6 col-xl-4 col-md-6   text-center align-content-center">

                                <img src="https://aybar.credilotesperu.com/resource/1734547017_circulo.png" width="100%" class="align-content-center" style="margin-top:-20%">


                                <div style="margin-top:-80%">

                                    <!-- Contenido encima -->
                                    <img src="../ayba/4.png" alt="" width="50px">
                                    <h4 class="text-white font-weight-bold fs-5" style="letter-spacing: 10px;">HACIENDO
                                        REALIDAD</h4>
                                    <h4 class="font-weight-bold text-warning fs-5" style="letter-spacing: 10px;">TU HOGAR
                                    </h4>
                                    <p class="lead mb-4 fs-3">
                                    </p>
                                    <div class="container">
                                        ¡No pierdas más tiempo y asegura el lote de tus <br> sueños hoy mismo, con
                                        facilidades de pago y <br> ubicaciones estratégicas!
                                    </div>
                                    <p></p>
                                    <h3 style="color:#F6A42C">¿Dudas o consultas?</h3>
                                    <p class="mb-4">Nuestros números de atención al cliente:</p>
                                    <a href="tel:+5101-9049838" style="font-family:Montserrat-Regular;color:white">
                                        <p>(51) 01-9049838</p>
                                    </a>
                                </div>
                            </div>
                            <!-- Columna central con imagen adicional -->
                            <div class="d-none d-xl-block col-xl-5  align-content-center">
                                <img src="../resource/1734446605_portada%20de%20aybar%20-%20inicio2.jpg" alt="Imagen central" width="100%" class="note-float-right" style="float: right; width: 100%;">
                            </div>

                            <!-- Columna derecha con formulario -->
                            <div class="col col-md-6 col-lg-6 col-xl-3 col-sm-12">

                                <div class="p-3 rounded" style="background-color: #055261; color: white; box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.3);">
                                    <p class="text-center text-light mb-4"><b> <span style="font-size: 12px;">QUIERO
                                                INFORMACIÓN DE UN LOTE</span></b></p>


                                    <select class="form-control" name="project_id" id="project_id" style="color: white; background-color: #055261">
                                        <option value="">Seleccione un proyecto</option>
                                    </select>
                                    <br>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="names" placeholder="Nombres y Apellidos:" style="color: white;">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" id="phone" class="form-control" name="cellphone" placeholder="Número de Teléfono" style="color: white;width:100%">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="dni" name="dni" placeholder="Número de DNI" style="color: white;">

                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="message" name="message" placeholder="Mensaje" style="color: white; height: 70px;" maxlength="200" oninput="updateCounter()">
                                        <div class="form-text text-white">
                                            <p><span id="charCount"><span style="font-size: 8px;">0</span></span><span style="font-size: 8px;">/200 caracteres</span></p>
                                        </div>
                                    </div>



                                    <div class="form-check text-start">
                                        <input class="form-check-input" type="checkbox" id="txtTratamientoDatos" name="data_aprobed_1" value="true">
                                        <label class="form-check-label fs-3" for="txtTratamientoDatos">
                                            <span class="fs-2">He leído y acepto la </span>
                                            <a class="text-warning fs-2" data-bs-toggle="modal" data-bs-target="#bs-example-modal-xlg2" style="cursor: pointer;">
                                                Política para envío de comunicaciones comerciales.
                                            </a>
                                        </label>
                                    </div>

                                    <div class="form-check text-start ">
                                        <input class="form-check-input" type="checkbox" id="txtTratamientoDatos2" name="data_aprobed_2" value="true">
                                        <label class="form-check-label fs-3" for="txtTratamientoDatos2">
                                            <span class="fs-2">He leído y acepto el </span>
                                            <a class="text-warning fs-2" data-bs-toggle="modal" data-bs-target="#bs-example-modal-xlg" style="cursor: pointer;">
                                                Tratamiento de mis datos personales.
                                            </a>
                                        </label>
                                    </div>




                                    <div class="text-center"><span style="font-size: 9px;">

                                        </span><button type="button" class="btn btn-warning btn-block" onclick="CustomerStorePublic();" style="color: white; border-radius: 100px; background-color: #F6A42C; width: 180px;"><span style="font-size: 9px;">
                                                <span style="font-family: Montserrat-Bold; font-size: 12px;">Enviar mis
                                                    datos</span>
                                            </span></button><span style="font-size: 9px;">
                                        </span></div><span style="font-size: 9px;">
                                    </span>
                                </div><span style="font-size: 9px;">
                                </span>
                            </div><span style="font-size: 9px;">

                            </span>
                        </div><span style="font-size: 9px;">
                        </span>
                    </div><span style="font-size: 9px;">
                    </span>
                </div>
                <span style="font-size: 9px;">

                </span><!-- Diapositiva 2: Video de YouTube -->
                <div class="carousel-item position-relative " style="height: 600px;">
                    <iframe src="https://www.youtube.com/embed/68tbz0AyBUs?autoplay=1&amp;mute=1&amp;loop=1&amp;playlist=68tbz0AyBUs&amp;controls=0&amp;showinfo=0&amp;modestbranding=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="" class="w-100 h-100" style="object-fit: cover;"></iframe>
                </div>
                <div class="carousel-item text-center py-5 " style="
    background-image: url('../resource/1734733260_fondo-.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    width: 100vw;
">
                    <div class="container-fluid" style=" background-color: transparent;">
                        <div class="row h-100">
                            <!-- Columna izquierda con imagen -->
                            <div class="col-lg-6 col-xl-4 col-md-6   text-center align-content-center">

                                <img src="../resource/1734547017_circulo.png" width="100%" class="align-content-center" style="margin-top:-20%">


                                <div style="margin-top:-80%">

                                    <!-- Contenido encima -->
                                    <img src="../ayba/4.png" alt="" width="50px">
                                    <h4 class="font-weight-bold text-warning fs-5" style="letter-spacing: 10px;">LOTES
                                        ENTREGADOS </h4>


                                    <h4 class="text-white font-weight-bold fs-5" style="letter-spacing: 10px;"> TIERRA
                                        GALICIA <br> Y LUGO</h4>


                                    <p class="lead mb-4 fs-3">
                                    </p>
                                    <div class="container">
                                        ¡Así como cambiamos la vida de muchas <br> familias podemos cambiar la tuya!
                                    </div>
                                    <img src="../resource/1735944556_logos.png" width="250px" alt="">
                                    <p></p>

                                </div>
                            </div>
                            <!-- Columna central con imagen adicional -->
                            <div class="d-none d-lg-block d-md-block  d-xl-block col-xl-8 col-lg-6 col-md-6  align-content-center">
                                <img src="../resource/1735568084_imagenes.png" alt="Imagen central" width="100%" class="note-float-right" style="float: right; width: 100%;padding-bottom:38px;padding-top:38px">
                                <p></p>
                            </div>

                            <span style="font-size: 9px;">

                            </span>
                        </div><span style="font-size: 9px;">
                        </span>
                    </div><span style="font-size: 9px;">
                    </span>
                </div>
            </div><span style="font-size: 9px;">

            </span><!-- Indicadores del Carrusel -->
            <div class="carousel-indicators">
                <button type="button" style="background-color: orange" data-bs-target="#carouselExample" data-bs-slide-to="0" aria-label="Diapositiva 2" class="active" aria-current="true"></button>
                <button type="button" style="background-color: orange" data-bs-target="#carouselExample" data-bs-slide-to="1" class="" aria-label="Diapositiva 1"></button>
                <button type="button" style="background-color: orange" data-bs-target="#carouselExample" data-bs-slide-to="2" class="" aria-label="Diapositiva 3"></button>

            </div>
        </div>                        
<p></p>
<div class="container-fluid text-light py-5" style="background-image: url('https://aybar.credilotesperu.com/resource/1734733260_fondo-.jpg')">
        <div class="text-center">





            <div class="container py-2">

                <h1>VIVE EN LA MEJOR ZONA</h1>
                <p>
                    &nbsp;&nbsp;
                </p>
                <!-- Carrusel para pantallas pequeñas y medianas -->
                <div id="responsiveCarousel" class="carousel slide d-lg-none pointer-event" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Primera diapositiva -->
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-4 mb-3">
                                    <lite-youtube videoid="rdxrSIrZISE" style="width: 100%;" class="rounded-1 border-2" title="Play: Video"></lite-youtube>
                                </div>

                            </div>
                        </div>
                        <!-- Segunda diapositiva -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-4 mb-3">
                                    <lite-youtube videoid="uuw6UDjl0oo" style="width: 100%;" class="rounded-1 border-2" title="Play: Video"></lite-youtube>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-4 mb-3">
                                    <lite-youtube videoid="aguyG7M828M" style="width: 100%;" class="rounded-1 border-2" title="Play: Video"></lite-youtube>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Controles del carrusel -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#responsiveCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#responsiveCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>

                <!-- Grilla para pantallas grandes -->
                <div class="row d-none d-lg-flex mt-4">
                    <div class="col-lg-4 mb-3">
                     <lite-youtube videoid="rdxrSIrZISE" posterquality="maxresdefault" style="width: 100%;" class="rounded-1 border-2" title="Play: Video"></lite-youtube>
        
                    </div>
                    <div class="col-lg-4 mb-3">
                                        <lite-youtube videoid="uuw6UDjl0oo" style="width: 100%;" class="rounded-1 border-2" title="Play: Video"></lite-youtube>
        
                    </div>
                    <div class="col-lg-4 mb-3">
                                     <lite-youtube videoid="aguyG7M828M" style="width: 100%;" class="rounded-1 border-2" title="Play: Video"></lite-youtube>
        
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
    <div id="mobileCarousel" class="carousel slide d-md-none pointer-event" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <!-- Tarjeta 1 -->
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <div class="card overflow-hidden" style="border-radius: 20px; width: 18rem;">
                        <div class="el-card-item pb-5" style="border: 1px solid black; border-radius: 20px;">
                            <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                                <img src="https://aybar.credilotesperu.com/resource/1734117292_ICONO%205.svg" alt="Inversion Segura" style="width: 50%;border-radius:0px">
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
                            <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                                <img src="https://aybar.credilotesperu.com/resource/1734116435_ICONO%202.svg" alt="Rentabilidad a Largo Plazo" style="width: 50%;border-radius:0px">
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
                            <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                                <img src="https://aybar.credilotesperu.com/resource/1734116666_ICONO%203.svg" alt="Patrimonio Familiar" style="width: 50%;border-radius:0px">
                            </div>
                            <div class="el-card-content text-center">
                                <h4 class="mb-0 card-title">PATRIMONIO PARA<br>TU FAMILIA</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 4 -->
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    <div class="card overflow-hidden" style="border-radius: 20px; width: 18rem;">
                        <div class="el-card-item pb-5" style="border: 1px solid black; border-radius: 20px;">
                            <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                                <img src="https://aybar.credilotesperu.com/resource/1734116940_ICONO%204.svg" alt="Alta Revalorizacion" style="width: 50%;border-radius:0px">
                            </div>
                            <div class="el-card-content text-center">
                                <h4 class="mb-0 card-title">ALTA<br>REVALORIZACIÓN</h4>
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
                    <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                        <img src="https://aybar.credilotesperu.com/resource/1734117292_ICONO%205.svg" alt="Inversion Segura" style="width: 50%;border-radius:0px">
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
                    <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                        <img src="https://aybar.credilotesperu.com/resource/1734116435_ICONO%202.svg" alt="Rentabilidad a Largo Plazo" style="width: 50%;border-radius:0px">
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
                    <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                        <img src="https://aybar.credilotesperu.com/resource/1734116666_ICONO%203.svg" alt="Patrimonio Familiar" style="width: 50%;border-radius:0px">
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
                    <div class="el-card-avatar mb-3 w-100 overflow-hidden d-flex position-relative text-center justify-content-center" style="margin-top: 5vh;">
                        <img src="https://aybar.credilotesperu.com/resource/1734116940_ICONO%204.svg" alt="Alta Revalorización" style="width: 50%;border-radius:0px">
                    </div>
                    <div class="el-card-content text-center">
                        <h4 class="mb-0 card-title">ALTA<br>REVALORIZACIÓN</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4" style="background-image: url('https://aybar.credilotesperu.com/resource/1734733260_fondo-.jpg')">
    <div class="text-center">
        <a class="btn btn-hover-shadow" href="#" style="color:white;border-radius:20px;background-color:#F6A42C;margin:20px;">
            <h3 class="display-7 p-6 pb-1"><b>&nbsp;DESCUBRE NUESTROS PROYECTOS&nbsp;</b></h3>
        </a>
    </div>

    <!-- Carrusel para pantallas pequeñas -->
    <div id="responsiveCarousel6" class="carousel slide d-md-none pointer-event" data-bs-interval="3000" data-bs-ride="carousel">
        <div class="container">
            <div class="carousel-inner">
                <!-- Tarjeta 1 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card" style="border-color:#03424E;color:#03424E;border-width:1px; width: 90%;">
                            <div class="card-body p-1 text-center">
                                <img src="https://aybar.credilotesperu.com/resource/1734461605_SAN%20ANDRES%20-%20CARD%203.png" alt="matdash-img" class="w-100 mb-4" width="80" style="padding-top:40px">
                                <b style="font-size: 20px;">PROYECTO <br> SAN ANDRÉS</b><p>------------</p>
                                <p>Lotes desde 120 m2</p>
                                <a class="btn btn-hover-shadow" href="../../proyectos" style="color:white;border-radius:20px;background-color:#F6A42C;margin:10px;">
                                    &gt; &nbsp;CONOCER MÁS&nbsp;
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 2 -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="card" style="border-color:#03424E;color:#03424E;border-width:1px; width: 90%;">
                            <div class="card-body p-1 text-center">
                                <img src="https://aybar.credilotesperu.com/resource/1734791444_LAGOON%20VILLAGE%20-%20CARD%201.png" alt="matdash-img" class="w-100 mb-4" width="80" style="padding-top:40px">
                                <b style="font-size: 20px;">PROYECTO <br>LAGOON VILLAGE</b><p>------------</p>
                                <p>Lotes desde 120 m2</p>
                                <a class="btn btn-hover-shadow" href="../../proyectos" style="color:white;border-radius:20px;background-color:#F6A42C;margin:10px;">
                                    &gt; &nbsp;CONOCER MÁS&nbsp;
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
                                <img src="https://aybar.credilotesperu.com/resource/1734791522_JUMEIRAH%20LAKE%20-%20CARD%202.png" alt="matdash-img" class="w-100 mb-4" width="80" style="padding-top:40px">
                                <b style="font-size: 20px;">PROYECTO <br>JUMEIRAH LAKE</b><p>------------</p>
                                <p>Lotes desde 120 m2</p>
                                <a class="btn btn-hover-shadow" href="../../proyectos" style="color:white;border-radius:20px;background-color:#F6A42C;margin:10px;">
                                    &gt; &nbsp;CONOCER MÁS&nbsp;
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controles del Carrusel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#responsiveCarousel6" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#responsiveCarousel6" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <!-- Grilla para pantallas medianas y grandes -->
        <div class="row d-none d-md-flex justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-4 mb-3">
                <div class="card" style="border-color:#03424E;color:#03424E;border-width:1px;">
                    <div class="card-body p-1 text-center">
                        <img src="https://aybar.credilotesperu.com/resource/1734461605_SAN%20ANDRES%20-%20CARD%203.png" alt="matdash-img" class="w-100 mb-4" width="80" style="padding-top:40px">
                        <b style="font-size: 20px;">PROYECTO <br> SAN ANDRÉS</b>
                        <p>------------</p>
                        <p>Lotes desde 120 m2</p>
                        <a class="btn btn-hover-shadow" href="../../proyectos" style="color:white;border-radius:20px;background-color:#F6A42C;margin:10px;">
                            &gt; &nbsp;CONOCER MÁS&nbsp;
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 mb-3">
                <div class="card" style="border-color:#03424E;color:#03424E;border-width:1px;">
                    <div class="card-body p-1 text-center">
                        <img src="https://aybar.credilotesperu.com/resource/1734791444_LAGOON%20VILLAGE%20-%20CARD%201.png" alt="matdash-img" class="w-100 mb-4" width="80" style="padding-top:40px">
                        <b style="font-size: 20px;">PROYECTO <br>LAGOON VILLAGE</b><p>------------</p>
                        <p>Lotes desde 120 m2</p>
                        <a class="btn btn-hover-shadow" href="../../proyectos" style="color:white;border-radius:20px;background-color:#F6A42C;margin:10px;">
                            &gt; &nbsp;CONOCER MÁS&nbsp;
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 mb-3">
                <div class="card" style="border-color:#03424E;color:#03424E;border-width:1px;">
                    <div class="card-body p-1 text-center">
                        <img src="https://aybar.credilotesperu.com/resource/1734791522_JUMEIRAH%20LAKE%20-%20CARD%202.png" alt="matdash-img" class="w-100 mb-4" width="80" style="padding-top:40px">
                        <b style="font-size: 20px;">PROYECTO <br>JUMEIRAH LAKE</b><p>------------</p>
                        <p>Lotes desde 120 m2</p>
                        <a class="btn btn-hover-shadow" href="../../proyectos" style="color:white;border-radius:20px;background-color:#F6A42C;margin:10px;">
                            &gt; &nbsp;CONOCER MÁS&nbsp;
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
                <img class="transparencia_pie" src="../ayba/familia.jpg" style="margin-top: 0%;" width="100%" alt="">
            </div>

            <!-- Contenido -->
            <div class="col-xl-7" style="margin-top: 50px;">
                <div class="container">
                    <h4 class="display-5 d-lg-block d-xl-block d-sm-none d-none" style="word-spacing: 13px; letter-spacing: 8px;">
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
                    <a class="btn btn-hover-shadow" href="#" style="color:white;border-radius:20px;background-color:#F6A42C;margin-bottom:20px">
                        &gt; &nbsp;CONOCER MÁS&nbsp;
                    </a>

                    <!-- Carrusel para pantallas SM -->
                    <div id="carouselExample5" class="carousel slide d-md-none pointer-event" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Diapositiva 1 -->
                            <div class="carousel-item active">
                                <div class="card" style="background-color: #03424E;">
                                    <div class="card-body text-center text-white">
                                        <img src="../resource/1734978023_Mesa%20de%20trabajo%2033.png" class="mb-1" width="60px" alt="">
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
                                        <img src="../resource/1734977986_+%20de%205%20a%C3%B1os.png" class="mb-1" width="60px" alt="">
                                        <p class="fs-6"><b>+ DE 5 AÑOS</b></p>
                                        <p class="fs-2">De experiencia en el mercado.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Diapositiva 3 -->
                            <div class="carousel-item">
                                <div class="card" style="background-color: #03424E;">
                                    <div class="card-body text-center text-white">
                                        <img src="../resource/1734978047_proyectos%20sostenibles.png" class="mb-1" width="60px" alt="">
                                        <p class="fs-6"><b>PROYECTOS SOSTENIBLES</b></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Diapositiva 4 -->
                            <div class="carousel-item">
                                <div class="card" style="background-color: #03424E;">
                                    <div class="card-body text-center text-white">
                                        <img src="../resource/1734977972_+%20de%201,000.png" class="mb-1" width="60px" alt="">
                                        <p class="fs-6"><b>+ DE 1,000</b></p>
                                        <p class="fs-2">Adquirieron nuestros proyectos.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Diapositiva 5 -->
                            <div class="carousel-item">
                                <div class="card" style="background-color: #03424E;">
                                    <div class="card-body text-center text-white">
                                        <img src="../resource/1734977955_+%202,000.png" class="mb-1" width="60px" alt="">
                                        <p class="fs-6"><b>+ 2,000 KM 2</b></p>
                                        <p class="fs-2">Zonas verdes proporcionadas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controles del Carrusel -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample5" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample5" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>

                    <!-- Grilla para pantallas MD y superiores -->
                    <div class="row d-none d-md-flex mt-4">
                        <div class="col-lg-4 col-md-6 col-xl-4">
                            <div class="card" style="background-color: #03424E;">
                                <div class="card-body text-center text-white">
                                    <img src="../resource/1734978023_Mesa%20de%20trabajo%2033.png" class="mb-1" width="60px" alt="" style="width: 25%;">
                                    <p class="fs-5"><span style="font-size: 12px;"><b>+ DE 300 PROYECTOS<br></b></span><span style="color: rgba(var(--bs-white-rgb),var(--bs-text-opacity)); font-size: 11px; font-weight: var(--bs-body-font-weight); text-align: justify;">Con la mejor inversión en la construcción de un futuro estable para tu familia.</span></p><p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xl-4">
                            <div class="card" style="background-color: #03424E;">
                                <div class="card-body text-center text-white">
                                    <img src="../resource/1734977986_+%20de%205%20a%C3%B1os.png" class="mb-1" width="60px" alt="" style="">
                                    <p class="fs-6"><b>+ DE 5 AÑOS<br></b><span style="font-size: 12px;">De experiencia en el mercado.</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-md-block  d-lg-none col-md-3"></div>
                        <div class="col-lg-4 col-md-6 col-xl-4">
                            <div class="card" style="background-color: #03424E;">
                                <div class="card-body text-center text-white">
                                    <img src="../resource/1734978047_proyectos%20sostenibles.png" class="mb-1" width="60px" alt="" style="">
                                    <p class="fs-6"><b>PROYECTOS SOSTENIBLES</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-xl-2"></div>
                        <div class="col-lg-4 col-md-6 col-xl-4">
                            <div class="card" style="background-color: #03424E;">
                                <div class="card-body text-center text-white">
                                    <img src="../resource/1734977972_+%20de%201,000.png" class="mb-1" width="60px" alt="">
                                    <p class="fs-6"><b>+ DE 1,000</b></p>
                                    <p class="fs-2">Adquirieron nuestros proyectos.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-xl-4">
                            <div class="card" style="background-color: #03424E;">
                                <div class="card-body text-center text-white">
                                    <img src="../resource/1734977955_+%202,000.png" class="mb-1" width="60px" alt="">
                                    <p class="fs-6"><b>+ 2,000 KM 2</b></p>
                                    <p class="fs-2">Zonas verdes proporcionadas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                        
<div id="mycontent"></div>
<!-- FIN SECCION -->
    </form>

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


        // document.addEventListener("DOMContentLoaded", function() {
        //     const liteYTVideos = document.querySelectorAll('lite-youtube');

        //     liteYTVideos.forEach(video => {
        //         video.addEventListener('click', function() {
        //             // Forzar autoplay y mute al cargar el iframe
        //             const iframe = video.querySelector('iframe');
        //             if (iframe) {
        //                 const src = iframe.src;
        //                 if (!src.includes('autoplay=1')) {
        //                     iframe.src = src + '&autoplay=1&mute=0';
        //                 }
        //             }
        //         });

        //         // Simular un clic para iniciar el autoplay automáticamente
        //         setTimeout(() => {
        //             video.click();
        //         }, 1000); // Retraso de 1 segundo para garantizar la carga
        //     });
        // });



        //traer los projectos y los agrega a un select
        // Ejecutar cuando el DOM esté listo
        document.addEventListener('DOMContentLoaded', ProjectList);

        //descuenta el ingreso de caracteres en message
        function updateCounter() {
            const input = document.getElementById("message");
            const charCount = document.getElementById("charCount");
            charCount.textContent = input.value.length;
        }
    </script>
    <style>
        lite-youtube {
            /* No Shadow */
            --lite-youtube-frame-shadow-visible: no;
            width: 100%;
        }
    </style>






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




    <!-- sample modal content -->
    <div class="modal fade" id="bs-example-modal-xlg" tabindex="-1" aria-labelledby="bs-example-modal-lg"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="text-warning text-center" style="font-size: 1.65rem">TRATAMIENTOS DE DATOS PERSONALES</h5>
                    <p></p>
                    <p style="text-align: justify; font-size: 15px;">
                        Declaro haber sido informado, conforme a Ley N° 29733 - Ley de Protección de Datos Personales
                        (“la Ley”) y al Decreto Supremo 003-2013/JUS - Reglamento de la Ley (“el Reglamento)”, doy mi
                        consentimiento libre, previo , informado, expreso e inequívoco para que <strong>AYBAR S.A.C.
                        </strong> realice el tratamiento de mis datos personales que le proporcione
                        de manera física o digital , con la finalidad de ejecutar cualquier relación contractual que
                        mantengo
                        y/o mantendré con la misma, contactarme y para fines estadísticos y/o analíticos.
                        <br><br>
                        Declaro mi derecho de revocar este consentimiento en cualquier momento.
                        Los datos personales entregados a <strong>AYBAR S.A.C.</strong> serán almacenados mientras dure mi
                        relación contractual, comercial y/o de cualquier índole con <strong>AYBAR S.A.C.</strong> y hasta
                        por 10
                        años de culminada la misma en el banco de datos de su titularidad, con RUC 20603865813 y con
                        domicilio en Av. Circunvalación del Golf Los Incas N° 134 (Torre B Piso 19) Distrito de Santiago de
                        Surco, Provincia y Departamento de Lima.
                        <br><br>
                        <strong>AYBAR S.A.C.</strong> podrá transferir sus datos personales a nivel nacional y/o
                        internacional.
                        sujetándose todos estos a las mismas obligaciones y medidas de seguridad, técnicas y legales
                        descritas en la Ley y el Reglamento.
                        <br><br>
                        De igual modo, la información podrá ser transferida a las autoridades o terceros autorizados
                        por ley bajo la regulación nacional y/o internacional vigente, incluyendo la Ley No. 29733,
                        su reglamento y aquellas que las modifiquen o sustituyan, así como las vinculadas a las autoridades
                        que fiscalizan la labor de <strong>AYBAR S.A.C.</strong><br><br>
                        Declaro conocer mi derecho a solicitar acceso a mis datos personales y conocer su tratamiento,
                        así como, solicitar su actualización, inclusión, rectificación, cancelación y supresión, pudiendo
                        oponerme a su uso o divulgación, pudiendo dirigir mi solicitud de ejercicio de los derechos a través
                        de la dirección especificada en la página web de <strong>AYBAR S.A.C.</strong>, teniendo a salvo
                        además el
                        ejercicio de la tutela de sus derechos ante la Autoridad Nacional de Protección de Datos Personales
                        en vía de reclamación o ante el Poder Judicial mediante la acción de hábeas data.
                        <br><br> Los datos personales
                        recolectados por <strong>AYBAR S.A.C.</strong> son obligatorios, la negativa a suministrarlos
                        supondrá la imposibilidad de concretar el fin previsto.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
                        data-bs-dismiss="modal">
                        Cerrar
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>




    <!-- sample modal content -->
    <div class="modal fade" id="bs-example-modal-xlg2" tabindex="-1" aria-labelledby="bs-example-modal-lg"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="text-warning text-center" style="font-size: 1.65rem">CLÁUSULA PARA ENVÍO DE PROMOCIONES
                        COMERCIALES</h5>
                    <p></p>
                    <p style="text-align: justify; font-size: 15px;">
                        Autorizo a <strong>AYBAR S.A.C.</strong> a utilizar mis Datos Personales y que los mismos sean
                        tratados
                        por sus empresas subsidiarias; para que me sean ofrecidos beneficios, productos y servicios,
                        publicidad, obsequios, ofertas y/o promociones (personalizadas o generales) de los servicios
                        que brinda <strong>AYBAR S.A.C.</strong> y de las empresas subsidiarias, a través de cualquier medio
                        de comunicación. Declaro conocer mi derecho a revocar este consentimiento en cualquier momento.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
                        data-bs-dismiss="modal">
                        Cerrar
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
