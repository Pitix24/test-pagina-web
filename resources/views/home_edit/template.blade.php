<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/jpg" href="{{ asset('ayba/favicon.png') }}" />
    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <title>AybarCorp</title>
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/aos/dist/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/template.css') }}" />


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- Summernote CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" rel="stylesheet">

    <script src="{{ asset('js/section.js') }}"></script>
    <script src="{{ asset('js/customer.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
   

      <!-- CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/css/intlTelInput.css">
    
      <!-- JS -->
      <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/intlTelInput.min.js"></script>
</head>

<style>
    body {
        font-family: 'Montserrat', sans-serif;
        /* Aplica Montserrat como fuente principal */
        font-size: 16px;
        /* Tamaño base del texto */

        line-height: 1.6;
        /* Altura de línea para mejor legibilidad */
    }
</style>

<body>

    <!-- Preloader -->
    <div class="preloader"><img src="{{ asset('ayba/1.png') }}" alt="loader" class="lds-ripple img-fluid" /></div>

<div id="mycontent">

</div>


    <div id="main-wrapper flex-column">

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
</form>
            <div class="container mt-5">
            
           
                <h1 style="color:#03424E">{{ $sections->description }}
                    <input type="button" value="Guardar" class="btn mb-1 me-1 bg-success text-white" id="create"
                        onclick="sectionUpdateDinamic('{{ $i }}')" name="create">
                        
                </h1>
                <form action=""name="section{{ $i }}" id="section{{ $i }}">
                    <span>Nivel : </span>
               
              

                    <select name="nivel" id="nivel{{ $i }}" class="form-control">
                        @for ($nivel = 1; $nivel <= 20; $nivel++)
                            <option value="{{ $nivel }}" {{ ($nivel == $sections->nivel) ? 'selected' : '' }}>
                                {{ $nivel }}
                            </option>
                        @endfor
                    </select>
                    
                     <br>
                    <input type="hidden" name="id"value="{{ $sections->id }}">
                    <!-- Textarea para el editor -->
                    <div class="form-group">
                        <textarea name="code" id="my-textarea" class="my-textarea form-control" rows="10">
                          @php
                                 echo $sections->code;
                            @endphp
                        </textarea>
                    </div>
                </form>
            </div>
        @endforeach
    





     
        @yield("content");

   

    </div>










    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/sidebarmenu.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="{{ asset('assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('assets/js/landingpage/landingpage.js') }}"></script>

    <script type="module" src="https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1/lite-youtube.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.js"></script>

    <script>
        $(document).ready(function() {
            // Inicializar el editor Summernote extendido
            $('.my-textarea').summernote({
                height: 400, // Altura del editor
                placeholder: 'Escribe algo aquí...',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript',
                        'subscript', 'clear'
                    ]],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video', 'hr']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['history', ['undo', 'redo']]
                ]
            
                   
            });
        });
    </script>
  <script>
            const input = document.querySelector("#phone");
    
            // Inicialización de intl-tel-input con Perú como valor predeterminado
            window.intlTelInput(input, {
                initialCountry: "pe", // Código de país ISO 3166-1 Alpha-2 para Perú
                separateDialCode: true, // Muestra el código de país separado
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/utils.js" // Para validaciones
            });
        </script>

</body>

</html>
