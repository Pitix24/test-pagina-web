@extends('production.1')
@section('content')

<div class="pb-1">
  <img src="http://aybar_laravel.test/resource/1735940681_REFERENCIA.png"width="100%" alt="" srcset="">


 
</div>
<div class="container">
  <h2 class="display-6 text-center mb-4 pt-5" style="word-spacing:8px;letter-spacing:3px"><b>
    Encuentra el proyecto ideal para ti con megaproyectos</b>
  </h2>
  <p class="fs-7 text-justify mb-5" style="color:#03424E">

    Conoce nuestros megaproyectos diseñados para transformar tus sueños en realidad. Cada proyecto está pensado para brindarte calidad de vida, espacios únicos y una comunidad vibrante. ¡Descubre la opción ideal para ti!
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
