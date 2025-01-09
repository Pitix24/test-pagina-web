@extends('production.1')
@section('content')
    <div class="pb-0">
        <div class="container-fluid ">
            <!-- Fondo con video o imagen -->
            <lite-youtube videoid="{{$Project->video_1}}"  style="width: 100%;height:500px"autoplay class="rounded-1 border-2" title="Play: Video"></lite-youtube>
        </div>
    </div>

    <div class="py-0 container-fluid text-center " style="background-color: #F6A42C">
        <div class="row">
            <div class="col-1 py-4"style="background-color:#F6A42C">

            </div >
   
            <div class="col-sm-12 col-xl-4 pt-5 pb-4"style="background-color:#03424E;margin-top:-3%;position:relative;border-top-left-radius:20px;border-bottom-left-radius:20px">
                <h3>SEPARA TU LOTE DESDE</h3>
                <h2 class="f-bold text-white">S/ 15,000</h2>
            </div>
            <div class="d-none d-xl-block  col-xl-2 pt-5 pb-4"style="background-color:#03424E;margin-top:-3%;position:relative;">
                <!-- Línea divisora -->
                <div class="vr" style="border:solid 1px #F6A42C">
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                </div>
            </div>
            <div class="d-none d-xl-block  col-xl-4 pt-5 pb-4"style="background-color:#03424E;margin-top:-3%;position:relative;border-top-right-radius:20px;border-bottom-right-radius:20px">
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

      <div class="text-center text-white container-fluid" >
         <h2 class="pt-5 text-white">UBICACIÓN DE {{ Str::upper($Project->title) }}</h2>
         <p class="pb-4 fs-6">Contamos con la mejor zona para comprar tu lote, estamos ubicados en</p>
      </div>



    </div>


    <div class="container py-5">
        <div class="row text-center">
            <!-- Elemento 1 -->
            <div class="col-md-4 mb-4">
                <div class="rounded-circle  mx-auto" style="background-color:#F6A42C;width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                    <img src="../resource/1736462848_1734640986_Mision.png" alt="Placeholder" class="img-fluid p-3">
                </div>
                <p class="mt-3 fw-bold text-primary">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>
            </div>
            <!-- Elemento 2 -->
            <div class="col-md-4 mb-4">
                <div class="rounded-circle  mx-auto" style="background-color:#F6A42C;width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                    <img src="../resource/1736462848_1734640986_Mision.png" alt="Placeholder" class="img-fluid p-3">
                </div>
                <p class="mt-3 fw-bold text-primary">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>
            </div>
            <!-- Elemento 3 -->
            <div class="col-md-4 mb-4">
                <div class="rounded-circle  mx-auto" style="background-color:#F6A42C;width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                    <img src="../resource/1736462848_1734640986_Mision.png" alt="Placeholder" class="img-fluid p-3">
                </div>
                <p class="mt-3 fw-bold text-primary">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>
            </div>
        </div>
    </div>
    
<img src="../resource/{{$Project->map_1}}"width="100%" alt="" srcset="">





    <div class="container">
        <h2 class="display-6 text-center mb-4 pt-5" style="word-spacing:8px;letter-spacing:3px"><b>
                Encuentra el proyecto ideal para ti con megaproyectos</b>
        </h2>
        <p class="fs-7 text-justify mb-5" style="color:#03424E">

            Conoce nuestros megaproyectos diseñados para transformar tus sueños en realidad. Cada proyecto está pensado para
            brindarte calidad de vida, espacios únicos y una comunidad vibrante. ¡Descubre la opción ideal para ti!
        </p>
    </div>


    <section class="  text-white" style="background-color: #F6A42C">
        <div class="container BG-WA ">
            <div class="row justify-content-center pt-1 align-items-center text-center" style="height: 80px;">
                <h3 style="word-spacing: 8px;letter-spacing:2px">
                    {{ strtoupper($Project->description) }}</h3>
            </div>
        </div>
    </section>

    <div class="py-y container">
        <p></p>



        <div class="container row py-5" id="mycontent">

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
