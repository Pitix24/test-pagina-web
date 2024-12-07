@extends('template')
@section('content')
    <div class="body-wrapper">
        <div class="">
            <div class="card card-body py-3">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="d-sm-flex align-items-center justify-space-between">
                            <h1>Secciones</h1>
                            {{-- <h1 class="mb-4 mb-md-0 card-title">Secciones</h1> --}}
                            <nav aria-label="breadcrumb" class="ms-auto">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item d-flex align-items-center">
                                        <a class="text-muted text-decoration-none d-flex" href="../main/index.html">
                                            <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                                            Secciones
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
                        <form action="" method="post" role="form" id="section"
                            name="form"enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">
                            {{ csrf_field() }}
                            <h6>Descripción :</h6>
                            <input type="text" name="description" id="description" class="form-control">
                            <h6>Página :</h6>
                            <select name="module" id="module"class="form-control">
                                <option value="1">Inicio</option>
                                <option value="2">Nosotros</option>
                                <option value="3">Proyectos</option>
                                <option value="4">Blog</option>
                                <option value="5">Contacto</option>

                            </select>
                            <br>




                            <p></p>


                            <h6>Contenido :</h6>
                            <textarea id="my-textarea"style="height:'900px'" name="code">
                           
                            <p></p>
                          </textarea>
                            <br>
                            <h6>Nivel :</h6>
                            <select name="nivel" id="" class="form-control">
                                <option value="1">Nivel 1</option>
                                <option value="2">Nivel 2</option>
                                <option value="3">Nivel 3</option>
                                <option value="4">Nivel 4</option>
                                <option value="5">Nivel 5</option>
                                <option value="6">Nivel 6</option>
                                <option value="7">Nivel 7</option>
                                <option value="8">Nivel 8</option>
                                <option value="9">Nivel 9</option>
                                <option value="10">Nivel 10</option>

                            </select>

                            <h6>Color :</h6>
                            <div
                                class="minicolors minicolors-theme-bootstrap minicolors-position-bottom minicolors-position-left minicolors-focus">
                                <input type="text" id="letter-case" class="form-control demo minicolors-input"
                                    data-lettercase="uppercase" value="#abcdef" size="7"><span
                                    class="minicolors-swatch minicolors-sprite minicolors-input-swatch"><span
                                        class="minicolors-swatch-color"
                                        style="opacity: 1; background-color: rgb(212, 34, 108);"></span></span>
                                <div class="minicolors-panel minicolors-slider-hue" style="display: block;">
                                    <div class="minicolors-slider minicolors-sprite">
                                        <div class="minicolors-picker" style="top: 10.3933px;"></div>
                                    </div>
                                    <div class="minicolors-opacity-slider minicolors-sprite">
                                        <div class="minicolors-picker"></div>
                                    </div>
                                    <div class="minicolors-grid minicolors-sprite"
                                        style="background-color: rgb(255, 0, 106);">
                                        <div class="minicolors-grid-inner"></div>
                                        <div class="minicolors-picker" style="top: 25px; left: 126px;">
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h6>Detalle : </h6>
                            <input type="text" name="detail" id="detail" class="form-control">
                            <p></p>
                            <input type="button" value="Nuevo" class="btn mb-1 me-1 bg-primary-subtle text-primary"
                                onclick="New();$('#section')[0].reset();reset_textarea();" name="new">

                            <input type="button" value="Guardar" class="btn mb-1 me-1 bg-success-subtle text-success"
                                id="create" onclick="sectionStore()" name="create">
                            <input type="button" value="Modificar"
                                class="btn mb-1 me-1 bg-danger-subtle text-danger"id="update" onclick="sectionUpdate();"
                                name="update">
                            <p></p>
                        </form>

                        <p>

                        </p>
                        <p class="card-subtitle mb-3">

                        </p>
                        <div class="mb-2">
                            <h4 class="card-title mb-0">Exportar</h4>
                        </div>
                        <div class="table-responsive"id="mycontent">
                            @include('section.sectiontable')
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
        <div id="success-header-modal" class="modal fade" tabindex="-1" aria-labelledby="success-header-modalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-colored-header bg-success text-white">
                        <h4 class="modal-title text-white" id="success-header-modalLabel">
                            Blog
                        </h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <form action="" method="post" role="form" id="section"
                            name="section"enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">
                            {{ csrf_field() }}

                            Descripción : <input type="text" name="description" id="description"
                                class="form-control">

                            Detalle : <input type="text" name="detail" id="detail" class="form-control">

                    </div>
                    <div class="modal-footer">
                        <input type="button" value="Nuevo" class="btn btn-primary"
                            onclick="New();$('#section')[0].reset();" name="new">
                        <input type="button" value="Guardar" class="btn bg-success-subtle text-success "
                            onclick="sectionStore()" id="create">
                        <input type="button" value="Modificar" class="btn bg-danger-subtle text-danger"
                            onclick="sectionUpdate();" id="update">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
