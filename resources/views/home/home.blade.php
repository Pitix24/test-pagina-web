@extends('home.template')
@section('content')
    <div class="container-fluid text-light py-5 degradado-centro" style="background-color: #13434d;">
        <div class="row h-100">

            <div class="col-md-1">

            </div>

            <!-- <img src="facebook-icon.png" alt="Facebook" class="mx-2" width="40">
                <img src="linkedin-icon.png" alt="LinkedIn" class="mx-2" width="40"> -->


            <!-- Columna izquierda con texto e imágenes -->
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center text-center">
                <img src="ayba/4.png" alt="" width="90px">
                <h4 class="text-white font-weight-bold" style="letter-spacing: 10px;">HACIENDO REALIDAD</h4>
                <h4 class="font-weight-bold text-warning" style="letter-spacing: 10px;">TU HOGAR</h4>
                <p class="lead mb-4">¡No pierdas más tiempo y asegura el lote de tus sueños hoy mismo, con facilidades de
                    pago
                    y ubicaciones estratégicas!</p>
                <h3>¿Dudas o consultas?</h3>
                <p class="mb-4">Nuestros números de atención al cliente:</p>
                <p>970 579 363 - 970 574 495 - 977 637 651</p>

            </div>
            <style>
                .degradado-centro {

                    background: radial-gradient(circle, #fffcfc31 -100%, #13434d 100%);

                }
            </style>
            <div class="col d-none d-lg-block   col-lg-4">
                <img src="ayba/album.png" alt="" srcset="" width="100%" style="padding-top: 150px;">
            </div>

            <!-- Columna derecha con formulario -->
            <div class="col col-md-5 col-lg-3 col-sm-12">
                <div class="p-3 rounded"
                    style="background-color: #055261;color:white;
        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.3);
      ">
                    <p></p>
                    <h6 class="text-center text-light mb-4">QUIERO INFORMACIÓN DE UN LOTE</h6>
                    <form>
                       

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="tb-nombre" name="tb-nombre"
                                oninput="" placeholder="Nombres y Apellidos:" style="color: white;">
                            <label for="tb-nombre" style="color: white;">Nombres y Apellidos:</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="telefono" name="tb-nombre"
                                oninput=""placeholder="Número de teléfono" style="color: white;">
                            <label for="telefono" style="color: white;">Número de teléfono</label>
                        </div>

                      
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="dni" placeholder="Número de DNI" style="color: white;">
                            <label for="dni" class=" text-light">DNI</label>
                        </div>
                        <div class="form-floating mb-3 h-5">
                            <textarea style="height: 100px;color:white" class="form-control" id="message" rows="3" style="color: white;" placeholder="Escribe tu mensaje"></textarea>
                            <label for="message" class="text-light">Mensaje</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class=" btn btn-warning btn-block"
                                style="color:white;border-radius:100px;background-color:#FFA726;width: 250px;">Enviar mis
                                datos</button>
                            <p></p>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>



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
    </script>
    <style>
        lite-youtube {
            /* No Shadow */
            --lite-youtube-frame-shadow-visible: no;
            width: 100%;
        }
    </style>
    <div class="container-fluid text-light py-5">
        <div class="text-center">
            <h1>VIVE EN LA MEJOR ZONA</h1>
            <p></p>




            <div class="container">
                <div class="row">


                    <div class="col-lg-4">
                        <lite-youtube videoid="68tbz0AyBUs" style="width: 100%;" class="rounded-1  border-2 mb-3">

                        </lite-youtube>
                    </div>

                    <div class="col-lg-4">
                        <lite-youtube videoid="68tbz0AyBUs" style="width: 100%;" class="rounded-1  border-2 mb-3">

                        </lite-youtube>
                    </div>

                    <div class="col-lg-4">
                        <lite-youtube videoid="68tbz0AyBUs" style="width: 100%;" class="rounded-1  border-2 mb-3">

                        </lite-youtube>
                    </div>

                </div>

            </div>





        </div>

        <div>

        </div>

        </lite-youtube>

    </div>

    <div class="container text-light py-1">
        <h4 class="text-center display-3" style="margin:40px"><b style="color:#13434d">¿POR QUÉ</b> <b> COMPRAR UN
                LOTE?</b> </h4>
        <p></p>
        <div class="row">

            <div class="col-sm-12 col-lg-6 col-xl-3 col-md-12">
                <div class="card" style="border-color:#13434d;border-width:1px">
                    <div class="card-body p-4 text-center">
                        <p></p>
                        <img src="../assets/images/profile/user-11.jpg" alt="matdash-img"
                            class="img-fluid rounded-circle mb-4" width="80" height="80">
                        <h2 class="display-6" style="font-size: 30px;">INVERSIÓN SEGURA</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-xl-3 col-md-12">
                <div class="card" style="border-color:#13434d;border-width:1px">
                    <div class="card-body p-4 text-center">
                        <p></p>
                        <img src="../assets/images/profile/user-11.jpg" alt="matdash-img"
                            class="img-fluid rounded-circle mb-4" width="80" height="80">
                        <h2 class="display-6" style="font-size: 30px;">RENTABILIDAD <br>A LARGO PLAZO</h2>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-6 col-xl-3 col-md-12">
                <div class="card" style="border-color:#13434d;border-width:1px">
                    <div class="card-body p-4 text-center">
                        <p></p>
                        <img src="../assets/images/profile/user-11.jpg" alt="matdash-img"
                            class="img-fluid rounded-circle mb-4" width="80" height="80">
                        <h2 class="display-6" style="font-size: 30px;">PATRIMONIO <br> PARA TU FAMILIA</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-xl-3 col-md-12">
                <div class="card" style="border-color:#13434d;border-width:1px">
                    <div class="card-body p-4 text-center">
                        <p></p>
                        <img src="../assets/images/profile/user-11.jpg" alt="matdash-img"
                            class="img-fluid rounded-circle mb-4" width="80" height="80">
                        <h2 class="display-6" style="font-size: 30px;">ALTA REVALORIZACIÓN</h2>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <div class="container-fluid  py-1">
        <div style="width: 100%;" class="text-center">
            <p></p>

            <a class="btn btn-hover-shadow" href="#"
                style="color:white;border-radius:20px;background-color:#FFA726;margin:20px">
                <b>
                    <h3 class="display-7 p-6 pb-1"><b>&nbsp;DESCUBRE NUESTROS PROYECTOS&nbsp;</b> </h3>

                </b></a>
            <p></p>
            <div id="carouselExampleInterval" class="carousel slide carousel-dark" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <!-- <img src="../assets/images/blog/blog-img1.jpg" class="d-block w-100" alt="..."> -->
                        <div class="container">
                            <div class="row">


                                <div class="col-lg-4">
                                    <div class="card" style="border-color:#13434d;color:#13434d;border-width:1px">
                                        <div class="card-body p-1 text-center">
                                            <p></p>
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1cw_qzpNR151OeqDPIT-VzzkT95iMdaDRfA&s"
                                                alt="matdash-img" class="w-100 mb-4" width="80"
                                                style="padding-top:40px">
                                            <b style="font-size: 20px;">PROYECTO <br> SAN ANDRÉS</b>
                                            <p>------------</p>
                                            <p></p>
                                            <p>Lotes desde 120 m2</p>

                                            <a class="btn btn-hover-shadow" href="#"
                                                style="color:white;border-radius:20px;background-color:#FFA726;margin:10px">

                                                > &nbsp;CONOCER MÁS&nbsp;

                                            </a>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card" style="border-color:#13434d;color:#13434d;border-width:1px">
                                        <div class="card-body p-1 text-center">
                                            <p></p>
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1cw_qzpNR151OeqDPIT-VzzkT95iMdaDRfA&s"
                                                alt="matdash-img" class="w-100 mb-4" width="80"
                                                style="padding-top:40px">
                                            <b style="font-size: 20px;">PROYECTO <br> SAN ANDRÉS</b>
                                            <p>------------</p>
                                            <p></p>
                                            <p>Lotes desde 120 m2</p>

                                            <a class="btn btn-hover-shadow" href="#"
                                                style="color:white;border-radius:20px;background-color:#FFA726;margin:10px">
                                                <!-- <span class="carousel-control-next-icon"></span> -->
                                                > &nbsp;CONOCER MÁS&nbsp;

                                            </a>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card" style="border-color:#13434d;color:#13434d;border-width:1px">
                                        <div class="card-body p-1 text-center">
                                            <p></p>
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1cw_qzpNR151OeqDPIT-VzzkT95iMdaDRfA&s"
                                                alt="matdash-img" class="w-100 mb-4" width="80"
                                                style="padding-top:40px">
                                            <b style="font-size: 20px;">PROYECTO <br> SAN ANDRÉS</b>
                                            <p>------------</p>
                                            <p></p>
                                            <p>Lotes desde 120 m2</p>

                                            <a class="btn btn-hover-shadow" href="#"
                                                style="color:white;border-radius:20px;background-color:#FFA726;margin:10px">

                                                > &nbsp;CONOCER MÁS&nbsp;

                                            </a>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>



                    </div>
                    <!-- <div class="carousel-item" data-bs-interval="2000">
                <img src="../assets/images/blog/blog-img2.jpg" class="d-block w-100" alt="...">
              </div> -->

                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev"
                    style="background-color: #f79400;border-radius: 100%; width: 50px;height: 50px;margin-top: 10%; margin-left: 10%;">

                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next"
                    style="background-color: #f79400;border-radius: 100%; width: 50px;height: 50px; margin-top: 10%; margin-right: 10%;">

                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid  py-1 " style="background-color: #ffffff;">
        <div class="row m-10">
            <div class=" d-xl-none col-1">

            </div>
            <div class="col-10 col-xl-5">

                <img class="transparencia_pie" src="ayba/familia.png" style="margin-top: 50px;" width="100%"
                    alt="" srcset="">
            </div>
            <div class=" d-xl-none col-1">

            </div>
            <div class="col-xl-6" style="margin-top: 50px;">
                <h4 class="display-5 d-lg-block d-xxl-block d-sm-none d-none"
                    style="word-spacing: 13px; letter-spacing: 8px;">
                    <b>CONFÍA EN </b>
                    <b style="color:#13434d">AYBAR CORP</b>
                </h4>

                <h4 class="fs-10 d-lg-none text-center" style="word-spacing: 13px;letter-spacing:3px"><b>CONFÍA EN </b>
                    <b style="color:#13434d"> AYBAR CORP</b>
                </h4>


                <p class="fs-8 d-none d-lg-block d-xxl-block d-sm-none" style="color:#13434d;">Construye un futuro sólido
                    para
                    tu familia
                    <br> invirtiendo en
                    confianza.
                </p>
                <p class="fs-4 d-lg-none" style="color:#13434d;text-align: justify">Construye un futuro sólido para tu
                    familia
                    invirtiendo en confianza.</p>



                <a class="btn btn-hover-shadow" href="#"
                    style="color:white;border-radius:20px;background-color:#FFA726;margin-bottom:20px"> > &nbsp;CONOCER
                    MÁS&nbsp;</a>


                <div class="row">
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-4">
                        <div class="card" style="background-color: #13434d;">

                            <div class="card-body text-center text-white ">

                                <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1"
                                    width="40%" alt="">
                                <p class="fs-5"><b>+ DE 300 PROYECTOS</b></p>
                                <p class="fs-1" style="margin-bottom:3% ;text-align:justify">Con la mejor inversión en
                                    la construcción
                                    de un futuro
                                    estable para tu familia.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-4">
                        <div class="card" style="background-color: #13434d;">
                            <div class="card-body text-center text-white ">
                                <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1"
                                    width="40%" alt="">
                                <p class="fs-6"><b> + DE 5 AÑOS</b></p>
                                <p class="fs-2">De experiencia en el mercado.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-4">
                        <div class="card" style="background-color: #13434d;">
                            <div class="card-body text-center text-white ">
                                <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1"
                                    width="40%" alt="">
                                <p class="fs-6"><b>PROYECTOS SOSTENIBLES</b></p>
                                <p class="fs-2"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 d-lg-block d-none">

                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-4">

                        <div class="card" style="background-color: #13434d;">
                            <div class="card-body text-center text-white ">
                                <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1"
                                    width="40%" alt="">
                                <p class="fs-6"><b>+ DE 1,000</b></p>
                                <p class="fs-2">Adquirieron nuestros proyectos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-4">
                        <div class="card" style="background-color: #13434d;">
                            <div class="card-body text-center text-white ">
                                <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1"
                                    width="40%" alt="">
                                <p class="fs-6"><b>+ 2,000 KM 2</b></p>
                                <p class="fs-2">Zonas verdes proporsionadas.</p>
                            </div>
                        </div>
                        <!-- <div class="card" style="background-color: #13434d;">
                    <div class="card-body text-center text-white ">
                      <img src="https://cdn-icons-png.flaticon.com/512/210/210684.png" class="mb-1" width="40%" alt="">
                      <p class="fs-6"><b>+ 2,000 KM 2</b></p>
                      <p class="fs-2">Zonas verdes proporsionadas.</p>
                    </div>
                  </div> -->
                    </div>
                </div>


            </div>
        </div>

    </div>
@endsection
