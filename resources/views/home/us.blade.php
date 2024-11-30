@extends('home.template')
@section('content')
<div class="container-fluid">
    <div class="row ">

        <div class="col-0 col-xl-1 col-lg-1 col-md-1 col-sm-1">
        </div>
        <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-4 align-content-center">
            <p></p>
            <h4 class="d-none d-xl-block d-lg-block fs-9  text-start " style="margin-top:-32%">
                <b>¿QUIÉNES SOMOS?</b>
            </h4>
            <h4 class="d-none d-md-block d-xl-none d-lg-none fs-7  text-start"style="margin-top:-38%">
                <b>¿QUIÉNES SOMOS?</b>
            </h4>
            <h4 class="  d-md-none d-xl-none d-lg-none fs-2  text-start"style="margin-top:-28%">

                <b>¿QUIÉNES SOMOS?</b>
            </h4>
            <p class="d-none d-xl-block text-justify container fs-7 text-white text-overlay" style="word-spacing: 15px">

                Somos una inmobiliaria completamente<br> peruana,
                dedicada a la creación de<br>  proyectos inmobiliarios 
                de terrenos de  <br> todas las familias del Perú. Ofrecemos <br>
                 terrenos exclusivos en el país.

            </p>


            <p class="d-none d-md-block d-lg-block d-xl-none text-justify container fs-6 text-white text-overlay"style="word-spacing: 10px">

                Somos una inmobiliaria completamente<br> peruana,
                dedicada a la creación de<br>  proyectos inmobiliarios 
                de terrenos de  <br> todas las familias del Perú. Ofrecemos <br>
                 terrenos exclusivos en el país.

            </p>
        <p class="d-sm-block d-md-none d-lg-none d-xl-none text-left  fs-1 text-white text-overlay"style="word-spacing: 2px;
        margin-left: -20px;margin-top:-10px;
        ">

                Somos una inmobiliaria completamente peruana,<br> 
                dedicada a la creación de proyectos inmobiliarios <br>   
                de terrenos de  todas  las familias del Perú. <br>
           

            </p>
            {{-- <p>
              Somos una inmobiliaria que busca ayudar a más peruanos a conseguir su lote propio, con espacios de
              calidad y eco sostenibles.
              Te acompañamos con un asesoramiento integral en tu inversión para permitir solucionar todas tus
              necesidades relacionadas al mercado inmobiliario, aportándote una mayor rentabilidad basada en la
              integridad y empatía.
          </p>
          <p>
              Queremos ser reconocidos por nuestro público y nuestra competencia como la mejor inmobiliaria que
              brinda proyectos económicos y ecosostenibles. Ser reconocidos como una
              empresa líder en gestión inmobiliaria satisfaciendo a nuestros clientes y ayudándolos a
              solucionar sus necesidades de encontrar su inversión ideal.
          </p>

          <p>
              Fomentamos un ambiente de trabajo colaborativo
              y de apoyo mutuo, valorando a nuestro equipo
              humano. Esto nos permite satrisface mejor las necesidades y deseos
              de nuestros clientes.
          </p>
          <h4>SOMOS AYBAR CORP</h4>
          <p>
              Somos una inmobiliaria completamente peruana,
              dedicada a la creación de proyectos inmobiliarios de terrenos de todas las familias del Perú.
              Ofrecemos terrenos exclusivos en el país.
          </p> --}}
        </div>
        <div class="col-xl-8 col-lg-7 col-md-7 col-sm-7 col-6">
            <img class="transparencia_left" style="" width="100%"
                src="https://www.humaniq.com.mx/blog/wp-content/uploads/2023/09/altos-ejecutivos-scaled.jpeg" alt=""
                srcset="">
        </div>
    </div>
</div>
   

    <p></p>

    <div class="container my-5 mt-10">
        <div class="row">
            <!-- Preguntas frecuentes (acordeón) -->
            <div class="col-md-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">
                                ¿Cuáles son las opciones de pago?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion"
                            data-content="Opción de pago">
                            <div class="accordion-body">
                                Las opciones de pago incluyen transferencia bancaria, tarjeta de crédito y más.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo">
                                ¿Instapay cobra alguna tarifa?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"
                            data-content="Tarifas de Instapay">
                            <div class="accordion-body">
                                Instapay cobra tarifas dependiendo del tipo de transacción.
                            </div>
                        </div>
                    </div>
                    <!-- Puedes añadir más preguntas -->
                </div>
            </div>

            <!-- Tarjeta izquierda -->
            <div class="col-md-4">
                <div id="leftCard" class="card p-3 text-white bg-dark">
                    <p id="dynamicContent">Selecciona una pregunta para ver el detalle aquí.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.accordion-collapse').forEach(collapse => {
            collapse.addEventListener('show.bs.collapse', function() {
                const content = collapse.getAttribute('data-content');
                document.getElementById('dynamicContent').innerText = `Detalles sobre: ${content}`;
            });
        });
    </script>
@endsection
