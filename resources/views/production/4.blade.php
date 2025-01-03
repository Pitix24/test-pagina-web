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

    <!-- INICIO SECCION -->
<section class=" text-white" style="background-color:#03424E ">
<p>  
</p>


        <div class="d-none  d-md-block
            pt-xl-4 pt-5 pt-sm-5  w-100 position-absolute
             align-content-center text-center translate-middle  start-50 ">
            <h4 class="fw-bold mt-5 pt-3 shadowed-text" style="word-spacing: 10px;letter-spacing: 8px">
                <p></p>
                <span class="text-white " style="font-family: Montserrat-SemiBold;">CUMPLIENDO EL LOTE </span><span style="font-family: Montserrat-SemiBold;">DE TUS SUEÑOS</span>
            </h4>

        </div>

        <div class=" d-sm-block d-md-none
         m-1 pt-3  w-100 position-absolute
         align-content-center text-center translate-middle  start-50 ">
        <h4 class="fs-2 fw-bold mt-5 pt-2 shadowed-text" style="word-spacing:5px;letter-spacing: 5px">
            <p></p>
            <span class="text-white ">CUMPLIENDO EL LOTE </span>    DE TUS SUEÑOS
        </h4>
    </div>
    <div class="d-none d-md-block">
<div class="text-center pt-5">
<img src="../resource/1735588521_Linea%20Amarilla.png" style="height:50px;width:500px">
</div>
       <!-- Imagen de fondo -->
       <img src="../resource/1735588360_Imagen-de-fondo.jpg" alt="Imagen principal" class="w-100 transparencia_cabecera_xl" height="500px">

    </div>
    <div class=" d-md-none">
<div class="text-center pt-5">
<img src="../resource/1735588521_Linea%20Amarilla.png" style="height:50px;width:300px">
</div>
        <!-- Imagen de fondo -->
        <img src="../resource/1735588360_Imagen-de-fondo.jpg" alt="Imagen principal" class="w-100 transparencia_cabecera_md" height="200px">
 
     </div>
        <!-- Texto sobrepuesto -->



    </section>
<div class="container py-5">
        <h2 class="display-6 text-center mb-4" style="word-spacing:8px;letter-spacing:3px"><b>UBICA TU PRÓXIMO HOGAR</b>
        </h2>
        <p class="fs-7 text-justify mb-5" style="color:#03424E">
            Somos una inmobiliaria completamente peruana, dedicada a la creación de proyectos inmobiliarios
            de terrenos de todas las familias del Perú. Ofrecemos terrenos exclusivos en el país.
        </p>
        <div class="row">
            <!-- Tarjeta Lima -->
            <div class="col-xl-2 col-0"></div>
            <div class="col-lg-6 col-xl-4 col-md-6">
                <div class="card card-hover shadow" style="position: relative;width:100%">
                    <img src="../resource/1735593981_Lima.png" class="card-img-top" alt="Lima">
                    <h1 class="bottom-0 start-20 p-3 pb-0" style="position: absolute;">LIMA</h1>
                    <div class="hover-content">
                        <p class="fw-bold">Explora las oportunidades en Lima</p>
                    </div>

                    <a href="proyectos/lima">
                    <div class="button">
                        <span class="arrow"></span>
                    </div>
</a>
                </div>
            </div>

            <!-- Tarjeta Ica -->
            <div class="col-lg-6 col-xl-4 col-md-6">
                <div class="card card-hover shadow" style="position: relative;width:100%">
                    <img src="../resource/1735593994_Ica.png" class="card-img-top" alt="Ica">
                    <h1 class="bottom-0 start-20 p-3 pb-0" style="position: absolute;">ICA</h1>
                    <div class="hover-content">
                        <p class="fw-bold">Descubre los proyectos en Ica</p>
                    </div>
  <a href="proyectos/ica">
                    <div class="button">
                        <span class="arrow"></span>
                    </div>
</a>
                </div>
            </div>

            <div class="col-xl-2 col-0"></div>
            <div class="col-xl-2 col-0"></div>

            <!-- Tarjeta Tarapoto -->
            <div class="col-lg-6 col-xl-4 col-md-6">
                <div class="card card-hover shadow" style="position: relative;width:100%">
                    <img src="../resource/1735587620_Tarapoto.jpg" class="card-img-top" alt="Tarapoto">
                    <h1 class="bottom-0 start-20 p-3 pb-0" style="position: absolute;">TARAPOTO</h1>
                    <div class="hover-content">
                        <p class="fw-bold">Explora las oportunidades en Tarapoto</p>
                    </div>
                   <a href="proyectos/tarapoto">
                    <div class="button">
                        <span class="arrow"></span>
                    </div>
</a>
                </div>
            </div>

            <!-- Tarjeta Iquitos -->
            <div class="col-lg-6 col-xl-4 col-md-6">
                <div class="card card-hover shadow" style="position: relative;width:100%">
                    <img src="../resource/1735593987_Iquitos.png" class="card-img-top" alt="Iquitos">
                    <h1 class="bottom-0 start-20 p-3 pb-0" style="position: absolute;">IQUITOS</h1>
                    <div class="hover-content">
                        <p class="fw-bold">Descubre los proyectos en Iquitos</p>
                    </div>
                <a href="proyectos/iquitos">
                    <div class="button">
                        <span class="arrow"></span>
                    </div>
</a>
                </div>
            </div>
        </div>


        <div class="col-xl-2 col-0"></div>
    </div>
<!-- FIN SECCION -->
@endsection
