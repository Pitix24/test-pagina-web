@extends('production.1')
@section('content')
{{-- <div class="bg-black" style="height:100px">

</div> --}}
<style>
    .is-invalid {
        border: 2px solid red !important;
        background-color: rgba(255, 0, 0, 0.05) !important;
    }
</style>


<form class="" action="" id="Book">
    @csrf
    <section class="text-center  py-5 " id="mycontent"
        style="background: url('../../resource/1738952046_67a64d6ec4181banner-negro.jpg') no-repeat center center/cover; color: white;">
        <div class="container mt-4">
            <p></p>
            <div class="bg-white justify-content-center d-flex mt-5" style="border-radius:10px">
                <h1 class=" fw-bold text-uppercase display-4 text-lg-start my-4" style="color: #054E5C">Libro de
                    Reclamaciones

            </div>
            </h1>

            <div class="row g-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">



                <div class="container mt-4">
                    <!-- Encabezado -->


                    <!-- Descripción -->
                    <p class="text-start fw-semibold text-white mt-3">
                        Este formulario es exclusivamente para expresar su disconformidad con algún producto o servicio
                        brindado por <b>
                            AYBAR CORP. SOCIEDAD ANONIMA CERRADA - AYBAR CORP. S.A.C
                        </b>
                        Para mejor atencion de tu reclamo y/o queja requerimos completar todos los campos.
                    </p>

                    <!-- Información de la Empresa -->
                    {{-- <div class="card shadow-sm border-0 text-start" style="background-color:#ffffff">
                        <div class="card-body text-black">
                            <h4 class="fw-bold text-warning">Empresa</h4>
                            <p><b>Razón Social:</b> ComexLat & S.A.C.</p>
                            <p><b>RUC:</b> 20603865813</p>
                            <p><b>Dirección Legal:</b> Av. Circunvalación Del Golf Los Incas 134 Patio Panorama,
                                Santiago de Surco</p>
                            <p><b>Fecha actual:</b> <span id="current-date"></span></p>
                        </div>
                    </div> --}}
                    <div class="card shadow-sm border-0 text-start" style="background-color:#ffffff">
                        <div class="card-body text-black">
                            <h4 class="fw-bold " style="color:#054E5C">Empresa</h4>
                            <p><b>Razón Social:</b> AYBAR CORP. SOCIEDAD ANONIMA CERRADA - AYBAR CORP. S.A.C</p>
                            <p><b>RUC:</b> 20603865813</p>
                            <p><b>Dirección Legal:</b>
                                Av. Circunvalación Del golf Los Incas 134 Patio Panorama, Santiago de Surco.
                            </p>
                            <p><b>Fecha actual:</b> <span id="current-date"></span></p>
                        </div>
                    </div>
                </div>

                <script>
                    // Mostrar la fecha actual en formato YYYY-MM-DD
                        document.getElementById("current-date").textContent = new Date().toISOString().split('T')[0];
                </script>



                <div class="col-12 ">
                    <h1 class="fw-bold text-uppercase fs-4 text-lg-start " style="color: white;">1. Identificación del
                        consumidor reclamante</h1>
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" id="names" name="names" class="form-control" placeholder="Ingrese su nombre"
                        style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px">
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" id="firstname" name="firstname" class="form-control"
                        placeholder="Apellido Paterno"
                        style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px">
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Apellido Materno"
                        style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px">
                </div>
                <div class="col-6">
                    <input type="text" id="address" name="address" class="form-control" placeholder="Dirección"
                        style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px">
                </div>

                <div class="col-12 col-md-6">
                    <select id="document_type" name="document_type" class="form-control"
                        style="background-color: rgba(0, 0, 0, 0.63); color: rgb(255, 255, 255); border: 1px solid #666464; padding: 12px;font-size:20px">
                        <option value="" disabled selected>Seleccione tipo de documento</option>
                        <option value="dni">DNI</option>
                        <option value="RUC">RUC</option>
                        <option value="Pasaporte">Pasaporte</option>
                    </select>
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" id="document_number" name="document_number" class="form-control"
                        placeholder="Número de documento"
                        style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px">
                </div>
                <div class="col-12 col-md-6">
                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Número celular"
                        style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px">
                </div>
                <div class="col-12 col-md-6">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Correo electrónico"
                        style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px">
                </div>
                Política para envío de comunicaciones comerciales.
                <div class="row">
                    <div class="form-check text-start">
                        <input class="form-check-input" type="checkbox" id="txtTratamientoDatos" name="data_aprobed_1"
                            value="true">
                        <label class="form-check-label fs-3" for="txtTratamientoDatos">
                            <span class="fs-2">He leído y acepto la </span>
                            <a class="text-warning fs-2" data-bs-toggle="modal" data-bs-target="#bs-example-modal-xlg2"
                                style="cursor: pointer;">
                                Política para envío de comunicaciones comerciales.
                            </a>
                        </label>
                    </div>

                    <div class="form-check text-start ">
                        <input class="form-check-input" type="checkbox" id="txtTratamientoDatos2" name="data_aprobed_2"
                            value="true">
                        <label class="form-check-label fs-3" for="txtTratamientoDatos2">
                            <span class="fs-2">He leído y acepto el </span>
                            <a class="text-warning fs-2" data-bs-toggle="modal" data-bs-target="#bs-example-modal-xlg"
                                style="cursor: pointer;">
                                Tratamiento de mis datos personales.
                            </a>
                        </label>
                    </div>
                </div>





                <!-- Tipo de bien a reclamar -->
                <div class="col-12 mt-5">
                    <h1 class="fw-bold text-uppercase fs-4 text-lg-start " style="color: white;">2. Identificación del
                        bien contratado</h1>
                </div>
                <div class="col-12 row text-center my-3">
                    <div class="col-6">

                        <input class="form-check-input" type="radio" id="product" name="claim_type" class="radio"
                            value="Producto">
                        <label class="form-check-label" for="exampleRadios1">
                            Producto
                        </label>
                    </div>
                    <div class="col-6">
                        <input class="form-check-input" type="radio" id="service" name="claim_type" value="Servicio">
                        <label class="form-check-label" for="exampleRadios1">
                            Servicio
                        </label>
                    </div>
                    <div class="col-6 mt-4">

                        <select name="project" id="project" class="form-control" required
                            style="background-color: white; color: black;">
                            <option value="" disabled selected style="color: black;">Seleccione un Proyecto
                            </option>
                            @foreach ($projects as $project)
                            {{-- Grupo del proyecto --}}
                            <optgroup label="{{ $project->title }}" style="background-color: #f0f0f0; color: black;">
                                @foreach ($project->subProjects as $subproject)
                                @if (!empty($subproject->name))
                                <option value="{{ $subproject->name }}" style="color: black;">
                                    {{ $subproject->name }}
                                </option>
                                @endif
                                @endforeach
                            </optgroup>
                            @endforeach
                        </select>


                    </div>
                    <div class="col-6 mt-4">

                        <input type="text" required style="width:50%" id="manzana_lote" name="manzana_lote"
                            class="form-control" placeholder="Ingrese Manzana / Lote"
                            style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px">

                    </div>
                </div>


                <div class="col-12 col-md-6">
                    <input type="number" id="claimed_amount" name="claimed_amount" class="form-control"
                        placeholder="Monto reclamado" step="0.01"
                        style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px">
                </div>
                <div class="col-12 col-md-6">
                    <select id="currency_type" name="currency_type" class="form-control"
                        style="background-color: rgba(0, 0, 0, 0.63); color: white; border: 1px solid #666464; padding: 12px;font-size:20px">
                        <option value="">Seleccione moneda</option>
                        <option value="PEN">Soles (PEN)</option>
                        <option value="USD">Dólares (USD)</option>
                    </select>
                </div>
                <div class="col-12">
                    <textarea id="product_or_service_description" name="product_or_service_description"
                        class="form-control" placeholder="Descripción del producto o servicio" style="background: rgba(255, 255, 255, 0.1);
                       color: white;
                       border: 1px solid #666464;
                       padding: 12px;
                       font-size: 20px;
                       width: 100%;
                       min-height: 100px;
                       resize: vertical;"></textarea>

                    <style>
                        /* Forzar el color del placeholder */
                        textarea::placeholder {
                            color: rgb(255, 255, 255) !important;
                            /* Color gris claro para visibilidad */
                            opacity: 1 !important;
                            /* Asegurar que se vea */
                        }
                    </style>

                </div>
                <div class="col-12 mt-5">
                    <h1 class="fw-bold text-uppercase fs-4 text-lg-start " style="color: white;">3. Detalle de la
                        reclamación</h1>
                </div>
                <div class="col-12 mt-2 text-xl-justify text-start">
                    <p> <b class="m-5 ">• Queja:</b>Malestar, descontento o disconformidad no relacionada al producto
                        o
                        servicio o con respecto a la atención recibida.</p>

                    <p class="mt-n3">
                        <b class="m-5 ">• Reclamo:</b>Disconformidad con respecto al producto o servicio.
                    </p>
                </div>

                <!-- Tipo de reclamo -->
                <div class="col-12 row text-center my-3">
                    <div class="col-6">
                        <input class="form-check-input" type="radio" id="complaint" name="complaint_type" value="Queja">
                        <label class="form-check-label" for="complaint">
                            Queja
                        </label>
                    </div>
                    <div class="col-6">
                        <input class="form-check-input" type="radio" id="claim" name="complaint_type" value="Reclamo">
                        <label class="form-check-label" for="claim">
                            Reclamo
                        </label>
                    </div>
                </div>


                <div class="col-12">
                    <textarea id="complaint_details" name="complaint_details" class="form-control"
                        placeholder="Detalle del reclamo"
                        style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px"></textarea>
                </div>

                <div class="col-12">
                    <textarea id="complaint_request" name="complaint_request" class="form-control"
                        placeholder="Pedido del reclamo"
                        style="background: rgba(255, 255, 255, 0.1); color: white; border: 1px solid #666464; padding: 12px;font-size:20px"></textarea>
                </div>

                <div class="col-12">
                    <button id="submitBookBtn" data-aos="flip-right" data-aos-duration="1000" data-aos-delay="100"
                        type="button" onclick="BookStorePublic(); return false" class="btn w-100"
                        style="background: #FFA726; color: white; font-weight: bold; padding: 12px;">
                        <h1 class="text-white m-0">Enviar</h1>
                    </button>

                </div>
            </div>


        </div>
    </section>
</form>

<div class="modal fade" id="bs-example-modal-xlg" tabindex="-1" aria-labelledby="bs-example-modal-lg"
    aria-hidden="true">
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
                    consentimiento libre, previo , informado, expreso e inequívoco para que <strong>AYBAR S.A.C.
                    </strong> realice el tratamiento de mis datos personales que le proporcione
                    de manera física o digital , con la finalidad de ejecutar cualquier relación contractual que
                    mantengo
                    y/o mantendré con la misma, contactarme y para fines estadísticos y/o analíticos.

                    <br><br>
                    Declaro mi derecho de revocar este consentimiento en cualquier momento.
                    Los datos personales entregados a <strong>AYBAR S.A.C.</strong> serán almacenados mientras dure mi
                    relación contractual, comercial y/o de cualquier índole con <strong>AYBAR S.A.C.</strong> y hasta
                    por 10 años
                    de culminada la misma en el banco de datos de su titularidad, con RUC 20603865813 y con
                    domicilio en Av. Circunvalación del Golf Los Incas N° 134 (Torre B Piso 19) Distrito de Santiago de
                    Surco, Provincia y Departamento de Lima.
                    <br><br>
                    <strong>AYBAR S.A.C.</strong> podrá transferir sus datos personales a nivel nacional y/o
                    internacional.
                    sujetándose todos estos a las mismas obligaciones y medidas de seguridad, técnicas y legales
                    descritas en la Ley y el Reglamento.
                    <br><br>
                    De igual modo, la información podrá ser transferida a las autoridades o terceros autorizados
                    por ley bajo la regulación nacional y/o internacional vigente, incluyendo la Ley No. 29733,
                    su reglamento y aquellas que las modifiquen o sustituyan, así como las vinculadas a las autoridades
                    que fiscalizan la labor de <strong>AYBAR S.A.C.</strong>
                    <br><br>
                    Declaro conocer mi derecho a solicitar acceso a mis datos personales y conocer su tratamiento, así
                    como,
                    solicitar su actualización, inclusión, rectificación, cancelación y supresión, pudiendo oponerme a
                    su uso o divulgación,
                    pudiendo dirigir mi solicitud de ejercicio de los derechos a través de la dirección especificada en
                    la página web de <strong>AYBAR S.A.C.</strong>
                    o al correo datospersonales@aybarsac.com, llenando el formulario siguiente <a
                        href="https://credilotesperu.com/derechos_arco/FORMATO_DERECHOS_ARCO_AYBAR_CORP.pdf"
                        target="_blank" rel="noopener noreferrer"><strong>LPDP</strong></a>
                    , teniendo a salvo además el ejercicio de la tutela de sus
                    derechos ante la Autoridad Nacional de Protección de Datos Personales en vía de reclamación o ante
                    el Poder Judicial mediante la acción de
                    hábeas data.
                    <br><br> Los datos personales recolectados por <strong>AYBAR S.A.C.</strong> son obligatorios, la
                    negativa a suministrarlos supondrá
                    la imposibilidad de concretar el fin previsto.
                    <br><br>
                    <a href="{{ asset('documentos/FORMATO_DERECHOS_ARCO_AYBAR_CORP.pdf') }}" target="_blank"
                        style="color: #00bfff; text-decoration: none;">
                        FORMATO DE SOLICITUD DE DERECHOS ARCO DIRIGIDO A AYBAR CORP S.A.C.
                    </a>

                </p>
            </div>




            <div class="modal-footer">
                <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
                    data-bs-dismiss="modal">
                    Cerrar
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>




<!-- sample modal content -->
<div class="modal fade" id="bs-example-modal-xlg2" tabindex="-1" aria-labelledby="bs-example-modal-lg"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="text-warning text-center" style="font-size: 1.65rem">CLÁUSULA PARA ENVÍO DE PROMOCIONES
                    COMERCIALES</h5>
                <p></p>
                <p style="text-align: justify; font-size: 15px;">
                    Autorizo a <strong>AYBAR S.A.C.</strong> a utilizar mis Datos Personales y que los mismos sean
                    tratados
                    por sus empresas subsidiarias; para que me sean ofrecidos beneficios, productos y servicios,
                    publicidad, obsequios, ofertas y/o promociones (personalizadas o generales) de los servicios
                    que brinda <strong>AYBAR S.A.C.</strong> y de las empresas subsidiarias, a través de cualquier medio
                    de comunicación. Declaro conocer mi derecho a revocar este consentimiento en cualquier momento.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
                    data-bs-dismiss="modal">
                    Cerrar
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection