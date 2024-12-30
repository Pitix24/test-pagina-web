@extends('production.1')
@section("content")
  

<style>
    /* Personalización de las tarjetas */
    .custom-card {
      border: none;
      border-radius: 15px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Sombra inicial */
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .custom-card:hover {
      transform: translateY(-5px); /* Elevar la tarjeta en hover */
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2); /* Incrementar sombra */
    }

    .custom-btn {
      background-color: #FFA500; /* Botón naranja */
      border: none;
      border-radius: 25px;
      color: white;
      padding: 8px 20px;
      font-weight: bold;
      text-transform: uppercase;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    .custom-btn:hover {
      background-color: #FF8C00; /* Naranja más oscuro en hover */
    }
  </style>



<!-- INICIO SECCION -->
<section class="  text-white">
        <!-- Barra lateral -->

        <!-- Contenido central -->
        <div class="container-fluid " style="background-image:url('http://aybar_laravel.test/resource/1734733260_fondo-.jpg')">
            <div class="row justify-content-center align-items-center text-center">
                <img src="../resource/1735568084_imagenes.png" style="width: 1000px;">
            </div>
        </div>

    </section>

    <section class="  text-white" style="background-color: #F6A42C">
        <div class="container BG-WA ">
            <div class="row justify-content-center align-items-center text-center" style="height: 100px;">
                <h2 style="word-spacing: 8px;letter-spacing:2px">NOTICIAS RELACIONADAS</h2>
            </div>
        </div>
    </section>
<div class="container  py-5">
    <div class="row g-4" id="mycontent">
     
  </div>
</div>
<!-- FIN SECCION -->

<script>
  topicPublic();

</script>
@endsection