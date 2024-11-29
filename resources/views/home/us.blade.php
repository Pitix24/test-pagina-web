@extends("home.template")
@section("content")
        


<section class="container-fluid py-1">
    <div class="row">
        <div class="col-xl-3">
           Somos una inmobiliaria completamente peruana, dedicada a la creación 
           de proyectos inmobiliarios de terrenos de todas las familias del Perú. Ofrecemos
           terrenos exclusivos en el país.

           <p>
            Somos una inmobiliaria que busca ayudar a más peruanos a conseguir su lote propio, con espacios de calidad y eco sostenibles. 
            Te acompañamos con un asesoramiento integral en tu inversión para permitir solucionar todas tus
             necesidades relacionadas al mercado inmobiliario, aportándote una mayor rentabilidad basada en la integridad y empatía.
           </p>
           <p>
            Queremos ser reconocidos por nuestro público y nuestra competencia como la mejor inmobiliaria que 
            brinda proyectos económicos y ecosostenibles.  Ser reconocidos como una 
            empresa líder en gestión inmobiliaria satisfaciendo a nuestros clientes y ayudándolos a 
            solucionar sus necesidades de encontrar su inversión ideal.
           </p>

           <p>
             Fomentamos un ambiente de trabajo colaborativo
             y de apoyo mutuo, valorando a nuestro equipo
             humano. Esto nos permite satrisface mejor las necesidades y deseos
             de nuestros clientes.
           </p>
           <h2>SOMOS AYBAR CORP</h2>
           <p>
            Somos una inmobiliaria completamente peruana,
            dedicada a la creación de proyectos inmobiliarios de terrenos de todas las familias del Perú.
            Ofrecemos terrenos exclusivos en el país.
           </p>
        </div>
        <div class="col-xl-9">

            <img  height="450px" width="100%" src="https://img.freepik.com/foto-gratis/ejecutivos-negociando-reunion_1098-508.jpg" alt="" srcset="">
        </div>
    </div>
</section>
<p></p>

<div class="container my-5 mt-10">
    <div class="row">
      <!-- Preguntas frecuentes (acordeón) -->
      <div class="col-md-8">
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                ¿Cuáles son las opciones de pago?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion" data-content="Opción de pago">
              <div class="accordion-body">
                Las opciones de pago incluyen transferencia bancaria, tarjeta de crédito y más.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                ¿Instapay cobra alguna tarifa?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion" data-content="Tarifas de Instapay">
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
      collapse.addEventListener('show.bs.collapse', function () {
        const content = collapse.getAttribute('data-content');
        document.getElementById('dynamicContent').innerText = `Detalles sobre: ${content}`;
      });
    });
  </script>
  
@endsection