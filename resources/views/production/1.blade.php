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


    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> --}}

    <script src="{{ asset('js/customer.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/topic.js') }}"></script>
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/css/intlTelInput.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/intlTelInput.min.js"></script>
</head>


<style type="text/css">
    @font-face {
        font-family: "Montserrat-Bold";
        src: url("{{ asset('fuente_montserrat/Montserrat-Bold.ttf') }}");
        font-weight: 600;
        font-style: bold;
    }

    @font-face {
        font-family: 'Montserrat-Regular';
        src: url("{{ asset('fuente_montserrat/Montserrat-Regular.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Montserrat-BoldItalic';
        src: url("{{ asset('fuente_montserrat/Montserrat-BoldItalic.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Montserrat-Medium';
        src: url("{{ asset('fuente_montserrat/Montserrat-Medium.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Montserrat-SemiBold';
        src: url("{{ asset('fuente_montserrat/Montserrat-SemiBold.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }
</style>
<style>
    .dt-buttons button {
        border-radius: 10px !important;
        font-family: Montserrat-Bold;

    }

    .dt-buttons button span {

        font-color: #ffffff !important;
    }
</style>

<body>

    <!-- Preloader -->
    <div class="preloader"><img src="{{ asset('ayba/1.png') }}" alt="loader" class="lds-ripple img-fluid" /></div>

  
    <div id="main-wrapper flex-column">


        <!-- INICIO SECCION -->
<header class="header">
<div style="background-color: #13434d; height: 60px;" class="pt-2 d-none d-xs-flex d-lg-flex  justify-content-center align-items-center">
        <div class="text-center m-5 " style="letter-spacing: 1px;word-spacing: 5px; "><b style="color:white; ">ENCUENTRA TU LOTE SOÑADO AQUÍ  </b>
            <a href="https://bit.ly/PGWSP" class="  btn bg-white" style="color:#13434d;height: 40px; margin-bottom: 10px;
     border-radius: 100px;width: 300px;
     ">
                <b>MÁS INFORMACIÓN</b>
            </a>
        </div>
    </div>     
    <nav class="navbar navbar-expand-lg py-0">
        <div class="container">

            <a class="position-relative navbar-brand me-0 py-0 m-2 " href="/"> 
                <img src="../ayba/1.png" alt="img-fluid" width="80px" style="margin-left:0%">
            </a>

            <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti ti-menu-2 fs-9"></i>
            </button>
            <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <i class="ti ti-menu-2 fs-9"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center mb-2 mb-lg-0 mx-auto" style="letter-spacing: 1px;">
                    <li class="nav-item"></li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../" style="color: #FFA726">
                            <b style="word-spacing: 9px;">INICIO</b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../nosotros" style="color: #13434d">
                            <b style="word-spacing: 9px;">NOSOTROS</b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" style="color: #13434d" href="../../proyectos">PROYECTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../blog" style="color: #13434d">
                            <b style="word-spacing: 9px;">BLOG</b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../contacto" style="color: #13434d">
                            <b style="word-spacing: 9px;">CONTÁCTANOS</b>
                        </a>
                    </li>

                    <li class="nav-item ms-2">
                        <a class="btn btn-hover-shadow" href="https://pagos.aybarcorp.com" style="color:white; border-radius:100px; background-color:#FFA726; width: 190px;">
                            <b>PAGA TU LOTE</b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
@yield('content')
<p>                          </p><div class="container-fluid py-1" style="background-color: #054E5C;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-6 col-xl-4 justify-content-center text-center text-lg-start text-md-start mt-10">
                <h3 style="margin-top:30px; margin-left:0px; color:#FFA726;"><span style="font-family: Montserrat;">﻿</span>Contáctanos</h3><ul class="text-white mt-4" style="--bs-text-opacity: 1;"><li><h3 style="margin-top: 30px;"><font color="rgba(0, 0, 0, 0)"><span style="font-weight: var(--bs-body-font-weight); height: 21.9928px;"><img src="https://aybar.credilotesperu.com/resource/1734622413_icono%20telefono.png" class="note-float-left" style="color: rgba(var(--bs-white-rgb),var(--bs-text-opacity)); font-family: Montserrat, sans-serif; font-size: 16px; font-weight: var(--bs-body-font-weight); width: 37.5px; height: 36.6573px; float: left;"><span style="color: rgb(255, 255, 255); font-family: Montserrat-Regular; font-size: 14px; font-weight: var(--bs-body-font-weight);">(51) 01-9049838<br></span></span></font></h3></li><li><img src="https://aybar.credilotesperu.com/resource/1734622376_icono%20mapa.png" class="note-float-left" style="width: 38.5px; height: 37.6503px; float: left;"><div><span style="color: rgba(var(--bs-white-rgb),var(--bs-text-opacity)); font-weight: var(--bs-body-font-weight); font-family: Montserrat, sans-serif; font-size: 14px;"><span style="color: rgba(var(--bs-white-rgb),var(--bs-text-opacity)); font-weight: var(--bs-body-font-weight); font-family: Montserrat-Regular;">Av. Circunvalación Del Golf Los Incas&nbsp;</span></span><span style="color: rgba(var(--bs-white-rgb),var(--bs-text-opacity)); font-weight: var(--bs-body-font-weight); font-family: Montserrat-Regular; font-size: 14px;">134<br></span><span style="color: rgba(var(--bs-white-rgb),var(--bs-text-opacity)); font-family: Montserrat-Regular; font-size: 14px; font-weight: var(--bs-body-font-weight);">Patio Panorama,&nbsp; Piso 19.&nbsp;</span><span style="color: rgba(var(--bs-white-rgb),var(--bs-text-opacity)); font-family: Montserrat-Regular; font-size: 14px; font-weight: var(--bs-body-font-weight);">Santiago de Surco.</span></div></li></ul>
            </div>

            <div class="col-sm-12 col-md-7 col-lg-6 col-xl-4 justify-content-center text-center text-lg-start text-md-end mt-10">
                <h3 style="margin-top:30px; margin-left:0px; color:#FFA726;">Descubre más</h3>
         
                <div class="row">
                    <div class="col-6">
                        <ul class="text-white mt-4">
                            <li><a href="../" style="font-family: Montserrat, sans-serif; font-weight: var(--bs-body-font-weight); color: white;"><span style="font-family: Montserrat-Regular; font-size: 14px;">Inicio</span></a></li>
                            <li><a style="color:white" href="../contacto"><span style="font-family: Montserrat-Regular; font-size: 14px;">Contáctanos</span></a></li>
                           <li><a style="color:white" href="../nosotros"><span style="font-family: Montserrat-Regular; font-size: 14px;">Quiénes somos</span></a></li>
                       <li><a style="color:white" href="#"><span style="font-family: Montserrat-Regular; font-size: 14px;">Preguntas frecuentes</span></a></li>
                      
                   
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="text-white mt-4">
<li><a style="color:white" href="../blog"><span style="font-family: Montserrat-Regular; font-size: 14px;">Blog</span></a></li>
                          <li><a style="color:white" href="../proyectos"><span style="font-family: Montserrat-Regular; font-size: 14px;">Proyectos</span></a></li>
                          <li><a style="color:white" href="#"><span style="font-family: Montserrat-Regular; font-size: 14px;">Términos y condiciones</span></a></li>
                          <li><a style="color:white" href="#"><span style="font-family: Montserrat-Regular; font-size: 14px;">Libro de reclamaciones</span></a></li>
                         
                           
                    
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center col-xl-4 mt-10"><a href="../login" target="_blank"><img src="../ayba/4.png" width="40%" alt="" srcset="" style="width: 137.75px; height: 137.75px;"></a><br>
<a href="https://www.facebook.com/aybarcorpoficial" target="_blank"> <img src="../resource/1734378917_icons8-facebook-50.png" width="45px" alt="">
</a>
<a href="https://www.tiktok.com/@aybarcorpoficial" target="_blank">   <img src="../resource/1734379420_icons8-tiktok-50.png" width="45px" alt="">
</a>
     <a href="https://www.instagram.com/aybarcorpoficial/" target="_blank">   <img src="../resource/1734379216_icons8-instagram-50.png" width="45px" alt="">
</a>         
            <a href="https://www.linkedin.com/company/aybarcorpoficial" target="_blank">   <img src="../resource/1734379160_icons8-linkedin-50.png" width="45px" alt=""></a></div></div></div></div>
<footer class="footer-part pt-4 pb-3 py-2" style="background-color:#13434d;">

            <div class="container">
                <div class="justify-content-center">

                    <div class="text-center">


                        <p class="mb-0 text-white">
                            <a class="d-none d-sm-none d-sm-block d-md-block d-lg-block  d-xl-block display-1 fs-4 text-white text-hover-primary  border-primary" href="https://anthonycode.com/" target="_blank">
                                Copyright 2025, Aybar Corp&nbsp;&nbsp; | &nbsp;&nbsp; Todos los Derechos reservados
                            </a>
                            <a class="d-sm-none  display-1 fs-2 text-center text-white text-hover-primary  border-primary" href="https://anthonycode.com/" target="_blank">
                                Copyright 2025, Aybar Corp <br> Todos los Derechos reservados
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </footer>
<div class="whatsapp-container">
        <div class="whatsapp-message">
            ¿Necesitas ayuda?
        </div>
        <div class="whatsapp-btn">
            <a href="https://bit.ly/PGWSP" target="_blank" title="Enviar mensaje por WhatsApp">

                <i class="ti ti-brand-whatsapp"></i>
            </a>
        </div>

    </div>
<div class="d-none d-md-block">
    <div class="social-container p-2 pt-3 pb-3" style="background-color: #FFA726; border-top-right-radius: 20px; border-bottom-right-radius: 20px;">

        <a href="https://www.facebook.com/aybarcorpoficial" target="_blank" class="social-button">
            <img src="https://aybar.credilotesperu.com/resource/1734378917_icons8-facebook-50.png" alt="Facebook">
        </a>
        <a href="https://www.instagram.com/aybarcorpoficial" target="_blank" class="social-button">
            <img src="https://aybar.credilotesperu.com/resource/1734379216_icons8-instagram-50.png" alt="Instagram">
        </a>
        <a href="https://www.linkedin.com/company/aybarcorpoficial" target="_blank" class="social-button">
            <img src="https://aybar.credilotesperu.com/resource/1734379160_icons8-linkedin-50.png" alt="LinkedIn">
        </a>
        
    </div>
</div>
<div class="offcanvas offcanvas-start matdash-lp-offcanvas" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header p-4">
        <img src="/ayba/1.png" alt="matdash-img" class="img-fluid" width="150">
    </div>
    <div class="offcanvas-body p-4">
        <ul class="navbar-nav justify-content-end flex-grow-1">
            <li class="nav-item mt-3">
                <a class="nav-link fs-3 text-dark active" aria-current="page" href="/">Inicio</a>
            </li>
            <li class="nav-item mt-3">
                <a class="nav-link fs-3 text-dark active" aria-current="page" href="nosotros">Nosotros</a>
            </li>
            <li class="nav-item mt-3">
                <a class="nav-link fs-3 text-dark active" aria-current="page" href="proyectos">Proyectos</a>
            </li>
            <li class="nav-item mt-3">
                <a class="nav-link fs-3 text-dark active" aria-current="page" href="blog">Blogs</a>
            </li>
        </ul>
        <a href="login" class="btn btn-primary w-100 py-2">Administrar</a>
        <br>
        <a href="logout" class="btn btn-secondary w-100 py-2">Salir</a>
    </div>
</div>





<!-- FIN SECCION -->



    <style>
        /* Estilo para el botón flotante */
        #chatbot-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        #chatbot-button {
            background-color: #007bff;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        #chatbot-button img {
            width: 30px;
            height: 30px;
        }

        #chatbot-label {
            color: #007bff;
            font-weight: bold;
        }

        /* Estilo para la ventana de chat */
        #chatbot-window {
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 300px;
            height: 400px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: none;
            flex-direction: column;
            overflow: hidden;
        }

        #chatbot-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }

        #chat-box {
            flex: 1;
            padding: 10px;
            overflow-y: scroll;
            border-top: 1px solid #ddd;
        }

        #chat-input {
            display: flex;
            border-top: 1px solid #ddd;
        }

        #user-input {
            flex: 1;
            border: none;
            padding: 10px;
        }

        #send-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>

    <!-- Contenedor del botón flotante -->
    <div id="chatbot-container" onclick="toggleChat()">
        <div id="chatbot-label"style="background-color:#007bff;padding:10px;color:white;border-radius:30px">Soy tu asistente virtual</div>
        <div id="chatbot-button">
            <img src="https://cdn-icons-png.flaticon.com/512/4712/4712101.png" alt="Chatbot">
        </div>
    </div>

    <!-- Ventana de Chat -->
    <div id="chatbot-window">
        <div id="chatbot-header">Chatbot Aybar</div>
        <div id="chat-box"></div>
        <div id="chat-input">
            <input type="text" id="user-input" placeholder="Escribe tu mensaje..." class="form-control" onkeydown="handleKeyPress(event)">
            <button id="send-button" onclick="sendMessage()">Enviar</button>
        </div>
    </div>


    <script>
        let chatInitialized = false;

        // Función para alternar la visibilidad de la ventana de chat
        function toggleChat() {
            const chatWindow = document.getElementById('chatbot-window');
            chatWindow.style.display = chatWindow.style.display === 'none' || chatWindow.style.display === '' ? 'flex' : 'none';

            // Enviar saludo al abrir el chat por primera vez
            if (!chatInitialized) {
                const chatBox = document.getElementById('chat-box');
                chatBox.innerHTML += `<div><strong>Aybar:</strong> ¡Hola! Soy tu asistente virtual. ¿En qué puedo ayudarte hoy?</div>`;
                chatInitialized = true;
            }
        }

        // Función para enviar mensajes al chatbot
        async function sendMessage() {
            const input = document.getElementById('user-input').value;
            const chatBox = document.getElementById('chat-box');

            if (input.trim() === '') return; // Evitar mensajes vacíos

            // Mostrar el mensaje del usuario en el chat
            chatBox.innerHTML += `<div><strong>Tú:</strong> ${input}</div>`;
            document.getElementById('user-input').value = ''; // Limpiar el campo de entrada

            try {
                const response = await axios.post('/chatPost', { message: input });
                const reply = response.data.reply;

                // Mostrar la respuesta del chatbot en el chat
                chatBox.innerHTML += `<div><strong>Aybar:</strong> ${reply}</div>`;
            } catch (error) {
                chatBox.innerHTML += `<div><strong>Aybar:</strong> Error al procesar la solicitud.</div>`;
            }

            // Desplazar el scroll hacia abajo automáticamente
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        // Función para manejar el evento de presionar Enter
        function handleKeyPress(event) {
            if (event.key === 'Enter') {
                sendMessage();
            }
        }
    </script>








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


    
    <script>
        const input = document.querySelector("#phone");

        // Inicialización de intl-tel-input con Perú como valor predeterminado
        const init = window.intlTelInput(input, {
            initialCountry: "pe", // Código de país ISO 3166-1 Alpha-2 para Perú
            separateDialCode: true, // Muestra el código de país separado
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/utils.js" // Para validaciones
        });
    </script>
</body>

</html>
