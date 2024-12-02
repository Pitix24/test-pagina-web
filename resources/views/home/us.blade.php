@extends('home.template')
@section('content')
    <div class="container-fluid">
        <div class="row ">

            <div class="col-0 col-xl-1 col-lg-1 col-md-1 col-sm-1">
            </div>
            <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-4 align-content-center">
                <p></p>
                <h4 class="d-none d-xl-block d-lg-block fs-9  text-start " style="margin-top:-38%">
                    <b>¿QUIÉNES SOMOS?</b>
                </h4>
                <h4 class="d-none d-md-block d-xl-none d-lg-none fs-7  text-start"style="margin-top:-45%">
                    <b>¿QUIÉNES SOMOS?</b>
                </h4>
                <h4 class="  d-md-none d-xl-none d-lg-none fs-2  text-start"style="margin-top:-28%">

                    <b>¿QUIÉNES SOMOS?</b>
                </h4>
                <p class="d-none d-xl-block text-justify container fs-7 text-white text-overlay" style="word-spacing: 15px">

                    Somos una inmobiliaria completamente<br> peruana,
                    dedicada a la creación de<br> proyectos inmobiliarios
                    de terrenos de <br> todas las familias del Perú. Ofrecemos <br>
                    terrenos exclusivos en el país.

                </p>


                <p
                    class="d-none d-md-block d-lg-block d-xl-none text-justify container fs-6 text-white text-overlay"style="word-spacing: 10px">

                    Somos una inmobiliaria completamente<br> peruana,
                    dedicada a la creación de<br> proyectos inmobiliarios
                    de terrenos de <br> todas las familias del Perú. Ofrecemos <br>
                    terrenos exclusivos en el país.

                </p>
                <p class="d-sm-block d-md-none d-lg-none d-xl-none text-left  fs-1 text-white text-overlay"style="word-spacing: 2px;
                    margin-left: -20px;margin-top:-10px;
                    ">

                    Somos una inmobiliaria completamente peruana,<br>
                    dedicada a la creación de proyectos inmobiliarios <br>
                    de terrenos de todas las familias del Perú. <br>


                </p>

            </div>
            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-7 col-6">
                <img class="transparencia_left" style="" width="100%"
                    src="https://www.humaniq.com.mx/blog/wp-content/uploads/2023/09/altos-ejecutivos-scaled.jpeg"
                    alt="" srcset="">
            </div>
        </div>
    </div>


    <p></p>
    <style>
        .borde-derecha {

            border-right: 5px solid;
            border-color: white;

        }
    </style>

    <div class="container-fluid py-1"style="background-color: #F6A42C;">
        <div class="container mt-10">
            <div class="row"style="margin-top:50px">
                <div class="col-xl-1 col-lg-0 col-md-0 col-sm-0">
                </div>
                <div class="d-none d-xl-block col-xl-2 d-flex align-content-center borde-derecha"
                    style="clip-path: inset(20px 0 30px 0);">
                    <h2 class="fs-10"style="padding-left:40px"><b>MISIÓN</b> </h2>
                </div>
                <div class="d-none d-lg-block d-xl-none col-lg-4 d-flex align-content-center borde-derecha">
                    <h2 class="fs-8"style="padding-left:180px;"><b>MISIÓN</b> </h2>
                </div>

                <div class="col-xl-1 col-lg-1   d-flex align-content-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/556/556202.png" width="80px" height="50%"
                        alt="" srcset="" style="margin-top:50%">

                </div>
                <div class="d-none d-xl-block col-xl-7 col-lg-7 fs-7">
                    <p style="color:#03424E;text-align:justify; ">
                        <b>
                            Somos una inmobiliaria que ayuda a los peruanos a obtener su propio lote con espacios de calidad
                            y
                            eco sostenibles. Ofrecemos asesoramiento integral para satisfacer tus necesidades inmobiliarias
                            y
                            maximizar tu rentabilidad con integridad y empatía.
                        </b>
                    </p>
                </div>
                <div class="d-none d-lg-block d-xl-none col-xl-7 col-lg-7 fs-5">
                    <p style="color:#03424E;text-align:justify; ">
                        <b>
                            Somos una inmobiliaria que ayuda a los peruanos a obtener su propio lote con espacios de calidad
                            y
                            eco sostenibles. Ofrecemos asesoramiento integral para satisfacer tus necesidades inmobiliarias
                            y
                            maximizar tu rentabilidad con integridad y empatía.
                        </b>
                    </p>
                </div>
                <div class="col-xl-1 col-lg-0 col-md-0 col-sm-0">
                </div>
            </div>
            <p></p>
        </div>

        {{-- <div class="section vision mt-4">
            <div class="icon">
                <i class="bi bi-eye"></i>
            </div>
            <div class="divider"></div>
            <div class="content">
                <h3>VISIÓN</h3>
                <p>Queremos ser reconocidos como la mejor inmobiliaria en proyectos económicos y ecosostenibles, liderando
                    en gestión y satisfaciendo a nuestros clientes en sus inversiones ideales.</p>
            </div>
        </div> --}}
    </div>











    <style>
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        .card img {
            height: 100%;
            object-fit: cover;
        }

        .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 20px;
            transition: background 0.3s;
        }

        .card:hover .card-overlay {
            background: rgba(0, 0, 0, 0.8);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 1rem;
        }
    </style>


    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card position-relative">
                    <img src="https://via.placeholder.com/300x200" alt="Respeto" class="card-img">
                    <div class="card-overlay">
                        <h5 class="card-title">RESPETOSSSS12SSS</h5>
                        <p class="card-text">LIMA</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card position-relative">
                    <img src="https://via.placeholder.com/300x200" alt="Empatía" class="card-img">
                    <div class="card-overlay">
                        <h5 class="card-title">EMPATÍA</h5>
                        <p class="card-text">Read More</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card position-relative">
                    <img src="https://via.placeholder.com/300x200" alt="Integridad" class="card-img">
                    <div class="card-overlay">
                        <h5 class="card-title">INTEGRIDAD</h5>
                        <p class="card-text">Read More</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card position-relative">
                    <img src="https://via.placeholder.com/300x200" alt="Compromiso" class="card-img">
                    <div class="card-overlay">
                        <h5 class="card-title">COMPROMISO</h5>
                        <p class="card-text">Read More</p>
                    </div>
                </div>
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
