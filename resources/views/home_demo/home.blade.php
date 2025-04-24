@extends('home_demo.template')


@section('content')


<style>
    .bg-responsive {
        background-image: url('../../resource/1741726289_67d0a251a60fbportada-inicio-1-escritorio.png');
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;

        /* height: 85vh; */
    }

    /* Para pantallas medianas (tablets) */
    @media (max-width: 1292px) {
        .bg-responsive {
            width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('../../resource/1741726302_67d0a25eba816portada-inicio-1-tablet.png');
        }
    }

    /* Para pantallas pequeñas (móviles) */
    @media (max-width: 987px) {
        .bg-responsive {
            width: 10%;
            /* height: 90vh; */
            background-position: center;
            background-repeat: no-repeat;
            /* background-size: contain; */
            background-image: url('../../resource/1741726309_67d0a265ce0a9portada-inicio-1-celular.png');
        }
    }
</style>
<form method="post" id="Customer">
    @csrf


@php
$i = 0;
@endphp
@foreach ($section as $sections)
@php
    $i = $i + 1;
    echo $sections->code;
@endphp


@endforeach

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


        document.addEventListener("DOMContentLoaded", function () {
    const liteYTVideos = document.querySelectorAll('lite-youtube');

    liteYTVideos.forEach(video => {
        video.addEventListener('click', function () {
            // Forzar autoplay y mute al cargar el iframe
            const iframe = video.querySelector('iframe');
            if (iframe) {
                const src = iframe.src;
                if (!src.includes('autoplay=1')) {
                    iframe.src = src + '&autoplay=1&mute=1';
                }
            }
        });

        // Simular un clic para iniciar el autoplay automáticamente
        setTimeout(() => {
            video.click();
        }, 1000); // Retraso de 1 segundo para garantizar la carga
    });
});



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
  <div class="modal fade" id="bs-example-modal-xlg" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
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
            consentimiento libre, previo , informado, expreso e inequívoco para que <strong>AYBAR S.A.C. </strong> realice el tratamiento de mis datos personales que le proporcione
            de manera física o digital , con la finalidad de ejecutar cualquier relación contractual que mantengo
            y/o mantendré con la misma, contactarme y para fines estadísticos y/o analíticos.
            <br><br>
            Declaro mi derecho de revocar este consentimiento en cualquier momento.
            Los datos personales entregados a <strong>AYBAR S.A.C.</strong> serán almacenados mientras dure mi
            relación contractual, comercial y/o de cualquier índole con <strong>AYBAR S.A.C.</strong> y hasta por 10
            años de culminada la misma en el banco de datos de su titularidad, con RUC 20603865813 y con
            domicilio en Av. Circunvalación del Golf Los Incas N° 134 (Torre B Piso 19) Distrito de Santiago de Surco, Provincia y Departamento de Lima.
            <br><br>
            <strong>AYBAR S.A.C.</strong> podrá transferir sus datos personales a nivel nacional y/o internacional.
            sujetándose todos estos a las mismas obligaciones y medidas de seguridad, técnicas y legales
            descritas en la Ley y el Reglamento.
            <br><br>
            De igual modo, la información podrá ser transferida a las autoridades o terceros autorizados
            por ley bajo la regulación nacional y/o internacional vigente, incluyendo la Ley No. 29733,
            su reglamento y aquellas que las modifiquen o sustituyan, así como las vinculadas a las autoridades que fiscalizan la labor de <strong>AYBAR S.A.C.</strong><br><br>
            Declaro conocer mi derecho a solicitar acceso a mis datos personales y conocer su tratamiento,
            así como, solicitar su actualización, inclusión, rectificación, cancelación y supresión, pudiendo
            oponerme a su uso o divulgación, pudiendo dirigir mi solicitud de ejercicio de los derechos a través
            de la dirección especificada en la página web de <strong>AYBAR S.A.C.</strong>, teniendo a salvo además el
            ejercicio de la tutela de sus derechos ante la Autoridad Nacional de Protección de Datos Personales
            en vía de reclamación o ante el Poder Judicial mediante la acción de hábeas data.
            <br><br>  Los datos personales
            recolectados por <strong>AYBAR S.A.C.</strong> son obligatorios, la negativa a suministrarlos supondrá la imposibilidad de concretar el fin previsto.
            </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">
            Cerrar
          </button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>




  <!-- sample modal content -->
  <div class="modal fade" id="bs-example-modal-xlg2" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header d-flex align-items-center">

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h5 class="text-warning text-center" style="font-size: 1.65rem">CLÁUSULA PARA ENVÍO DE PROMOCIONES COMERCIALES</h5>
         <p></p>
         <p style="text-align: justify; font-size: 15px;">
            Autorizo a <strong>AYBAR S.A.C.</strong> a utilizar mis Datos Personales y que los mismos sean tratados
            por sus empresas subsidiarias; para que me sean ofrecidos beneficios, productos y servicios,
            publicidad, obsequios, ofertas y/o promociones (personalizadas o generales) de los servicios
            que brinda <strong>AYBAR S.A.C.</strong> y de las empresas subsidiarias, a través de cualquier medio de comunicación. Declaro conocer mi derecho a revocar este consentimiento en cualquier momento.
        </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">
            Cerrar
          </button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>


 <!-- Modal -->
 <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-dark">
        <div class="modal-body p-0" id="videoModalBody">
          <!-- Aquí se insertará el iframe dinámicamente -->
        </div>
      </div>
    </div>
  </div>


  <script>
    const modalElement = document.getElementById('videoModal');
    const modalBody = document.getElementById('videoModalBody');

    function openVideo(videoId) {
        // Limpia cualquier iframe previo antes de insertar uno nuevo
        modalBody.innerHTML = `
            <div class="ratio ratio-16x9">
                <iframe
                    src="https://www.youtube.com/embed/${videoId}?autoplay=1"
                    class="w-100 h-100"
                    frameborder="0"
                    allow="autoplay; encrypted-media"
                    allowfullscreen
                ></iframe>
            </div>
        `;
        const modal = new bootstrap.Modal(modalElement);
        modal.show();
    }

    // Cuando se cierra el modal, eliminamos el iframe (así sí se apaga el audio)
    modalElement.addEventListener('hidden.bs.modal', () => {
        modalBody.innerHTML = ''; // 🔇 Esto apaga todo
    });
</script>

@endsection
