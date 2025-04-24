@extends('home_edit.template')


@section('content')




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


//traer los projectos
            // Ejecutar cuando el DOM esté listo
    document.addEventListener('DOMContentLoaded', ProjectList);

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
