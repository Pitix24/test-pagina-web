@extends("template2")
@section("content")

<div class="body-wrapper">
    <div class="container-fluid">
      <div class="card card-body py-3">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="d-sm-flex align-items-center justify-space-between">
              <h4 class="mb-4 mb-md-0 card-title">Usuarios</h4>
              <nav aria-label="breadcrumb" class="ms-auto">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item d-flex align-items-center">
                    <a class="text-muted text-decoration-none d-flex" href="../main/index.html">
                      <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page">
                    <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                      Usuarios
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
            <div class="mb-2">
              <h4 class="card-title mb-0">File export</h4>
            </div>
            <p class="card-subtitle mb-3">
              Exporting data from a table can often be a key part of a
              complex application. The Buttons extension for DataTables
              provides three plug-ins that provide overlapping
              functionality for data export. You can refer full
              documentation from here
              <a href="https://datatables.net/">Datatables</a>
            </p>
            <div class="table-responsive">
                @include("user.usertable")
             
            </div>
          </div>
        </div>
 
    
        <!-- end Language file -->
        
        <!-- end Setting defaults -->
       
    
        <!-- end Custom toolbar elements -->
      </div>
    </div>
  </div>

@endsection