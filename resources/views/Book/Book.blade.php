@extends('template')
@section('content')
    <div class="body-wrapper">
        <div class="">
            <div class="card card-body py-3">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="d-sm-flex align-items-center justify-space-between">
                            <h1 class="text-primary">Reclamaciones</h1>
                            <nav aria-label="breadcrumb" class="ms-auto">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item d-flex align-items-center">
                                        <a class="text-muted text-decoration-none d-flex" href="../main/index.html">
                                            <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                                            Reclamaciones
                                        </span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="datatables">

                <!-- start File export -->
                <div class="card">
                    <div class="card-body">

                        <p class="card-subtitle mb-3">
                            <!-- success header modal -->
                            {{-- @canany(["administrar","agregar"])
                            <button type="button" class="btn mb-1 me-1 btn-success"
                                data-bs-toggle="modal" data-bs-target="#success-header-modal" fdprocessedid="cw61t3"
                                 onclick="New();$('#Book')[0].reset();">
                                Agregar
                            </button>
                            @endcanany --}}
                        </p>
                        <div class="mb-2">
                            <h4 class="card-title mb-0">Exportar</h4>
                        </div>
                        <div class="table-responsive"id="mycontent">



                            @include('Book.Booktable')

                        </div>
                    </div>
                </div>


                <!-- end Language file -->

                <!-- end Setting defaults -->


                <!-- end Custom toolbar elements -->
            </div>
        </div>
    </div>

    <div class="button-group">


        <!-- /.modal -->
        <!-- danger header modal -->

        <!-- /.modal -->

        <!-- /.modal -->

        <!-- success Header Modal -->
        <div id="success-header-modal" class="modal " tabindex="-1" aria-labelledby="success-header-modalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-fullscreen modal-xl">
                <div class="modal-content ">
                    <div class="modal-header modal-colored-header bg-success text-white">
                        <h4 class="modal-title text-white" id="success-header-modalLabel">
                            Reclamaciones
                        </h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <style>
                        input::placeholder,
textarea::placeholder {
    color: rgb(121, 121, 121) !important;
    opacity: 1 !important; /* Asegura que el color sea visible */
}
select option[disabled] {
    color: rgb(121, 121, 121)  !important;
}

                    </style>
                 <!-- MODAL BODY -->
<div class="modal-body">
  <form id="Book" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="id" id="id">

    <div class="row g-4">
      <!-- Columna izquierda -->
      <div class="col-md-6">
        @foreach ([
          'names' => 'Nombres',
          'firstname' => 'Apellido Paterno',
          'lastname' => 'Apellido Materno',
          'address' => 'Dirección',
          'document_number' => 'Número de documento',
          'phone' => 'Celular',
          'email' => 'Correo electrónico',
          'claimed_amount' => 'Monto reclamado',
          'office_address' => 'Dirección de oficina'
        ] as $id => $label)
          <div class="mb-2">
            <label class="form-label">{{ $label }}:</label>
            <input type="text" id="{{ $id }}" name="{{ $id }}" class="form-control" readonly>
          </div>
        @endforeach

        <div class="mb-2">
          <label class="form-label">Tipo de documento:</label>
          <select id="document_type" name="document_type" class="form-control" disabled>
            <option disabled selected>Seleccione tipo de documento</option>
            <option value="dni">DNI</option>
            <option value="ce">Carné de Extranjería</option>
            <option value="passport">Pasaporte</option>
          </select>
        </div>

        <div class="mb-2">
          <label class="form-label">Tipo de reclamo:</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="claim_type" id="product" value="Producto" disabled>
            <label class="form-check-label" for="product">Producto</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="claim_type" id="service" value="Servicio" disabled>
            <label class="form-check-label" for="service">Servicio</label>
          </div>
        </div>

        <div class="mb-2">
          <label class="form-label">Moneda:</label>
          <select id="currency_type" name="currency_type" class="form-control" disabled>
            <option value="">Seleccione moneda</option>
            <option value="PEN">Soles (PEN)</option>
            <option value="USD">Dólares (USD)</option>
          </select>
        </div>

        <div class="mb-2">
          <label class="form-label">Descripción del producto o servicio:</label>
          <textarea id="product_or_service_description" name="product_or_service_description" class="form-control" rows="4" readonly></textarea>
        </div>

        <div class="mb-2">
          <label class="form-label">Tipo de queja:</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="complaint_type" id="complaint" value="Queja" disabled>
            <label class="form-check-label" for="complaint">Queja</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="complaint_type" id="claim" value="Reclamo" disabled>
            <label class="form-check-label" for="claim">Reclamo</label>
          </div>
        </div>

        <div class="mb-2">
          <label class="form-label">Pedido del reclamo:</label>
          <textarea id="complaint_request" name="complaint_request" class="form-control" rows="5" readonly></textarea>
        </div>

        <div class="mb-2">
          <label class="form-label">Detalle del reclamo:</label>
          <textarea id="complaint_details" name="complaint_details" class="form-control" rows="5" readonly></textarea>
        </div>
      </div>

      <!-- Columna derecha -->
      <div class="col-md-6">
        <div class="mb-3">
          <label class="form-label">Estado del reclamo:</label>
          <select class="form-control" id="state" name="state">
            <option disabled selected>Seleccione el Estado</option>
            <option value="Pendiente">Pendiente</option>
            <option value="Proceso">Proceso</option>
            <option value="Atendido">Atendido</option>
            <option value="Observado">Observado</option>
            <option value="Finalizado">Finalizado</option>
            <option value="Cerrado">Cerrado</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Mensaje:</label>
          <textarea name="message" id="message" class="form-control" rows="10"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Archivo 1:</label>
          <input class="form-control" type="file" id="file_1" name="file_1" onchange="readImage(this,'#blah_1');">
        </div>

        <div class="mb-3">
          <label class="form-label">Archivo 2:</label>
          <input class="form-control" type="file" id="file_2" name="file_2" onchange="readImage(this,'#blah_2');">
        </div>

        <div class="mb-4 d-flex gap-3">
          <img id="blah_1" src="https://placehold.co/150" class="img-bordered" width="100">
          <img id="blah_2" src="https://placehold.co/150" class="img-bordered" width="100">
        </div>

        @canany(['administrar', 'agregar'])
      <button type="button" id="submitButton" class="btn btn-success w-100 mb-2" onclick="handleBookUpdate()">
  <span id="submitSpinner" class="spinner-border spinner-border-sm d-none me-2" role="status" aria-hidden="true"></span>
  Enviar
</button>

        @endcanany
        <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>

</div>


                    <div class="modal-footer">


                      </form>







                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <!-- /.modal -->
    </div>
@endsection
