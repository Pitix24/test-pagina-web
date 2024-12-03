<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="ayba/1.png" />
  <!-- Core Css -->
  <link rel="stylesheet" href="assets/css/styles.css" />
  <title>AybarCorp</title>
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/libs/aos/dist/aos.css" />
  <link rel="stylesheet" href="css/template.css" />
  {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

</head>

<body>
  <!-- Preloader -->
  <div class="preloader"><img src="ayba/1.png" alt="loader" class="lds-ripple img-fluid" /></div>
  <div style="background-color: #03424E; height: 80px;margin-bottom: -10px;"
    class="d-none d-xs-flex d-lg-flex  justify-content-center align-items-center">
    <div class="text-center m-5 " style="letter-spacing: 1px;word-spacing: 5px; ">
      <b style="font-size:x-large;color:white; ">ENCUENTRA TU LOTE SOÑADO AQUÍ &nbsp;</b>
      <a href="#" class="  btn bg-white" style="color:#03424E;height: 40px; margin-bottom: 10px;
     border-radius: 100px;width: 300px;
     ">
        <b>MÁS INFORMACIÓN</b>
      </a>
    </div>
  </div>
  <div id="main-wrapper flex-column">
    <header class="header">
      <nav class="navbar navbar-expand-lg py-0">
        <div class="container">
          <a class="navbar-brand me-0 py-0 m-2 " href="{{url('/')}}"> <img src="ayba/1.png" alt="img-fluid"
              width="80px" />
          </a>
          <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="ti ti-menu-2 fs-9"></i>
          </button>
          <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <i class="ti ti-menu-2 fs-9"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center mb-2 mb-lg-0 mx-auto" style="letter-spacing: 1px; ">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{url('/')}}"  style="color:#F6A42C">
                  <b style=" word-spacing: 9px;">INICIO </b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{url('nosotros')}}" style="color:#03424E">
                  <b style=" word-spacing: 9px;">NOSOTROS </b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{url('proyectos')}}" style="color:#03424E">
                  <b style=" word-spacing: 9px;">PROYECTOS </b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{url('blog')}}" style="color:#03424E">
                  <b style=" word-spacing: 9px;">BLOG </b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{url('contacto')}}" style="color:#03424E">
                  <b style=" word-spacing: 9px;">CONTÁCTANOS </b></a>
              </li>

              <li class="nav-item ms-2">
                <a class="btn btn-hover-shadow" href="https://pagos.aybarcorp.com"
                  style="color:white;border-radius:100px;background-color:#F6A42C;width: 190px;">
                  <b>PAGA TU LOTE</b>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>


{{-- <div class="social-container p-2 pt-3 pb-3"
style="background-color: #f6a52c00;border-top-right-radius: 20px;border-bottom-right-radius: 20px;">

<a href="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-0.png" target="_blank"
  class="social-button">
  <img src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-0.png" alt="Instagram">
</a>
<a href="https://www.facebook.com" target="_blank" class="social-button">
  <img src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-0.png" alt="Facebook">
</a>
<a href="https://www.linkedin.com" target="_blank" class="social-button">
  <img src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-0.png" alt="LinkedIn">
</a>
</div> --}}

@yield("content")

    <div class="container-fluid  py-1" style="background-color: #055c6d;">
      <div class="container">
        <div class="row">
          <div
            class="col-sm-12 col-md-5 col-lg-6 col-xl-4 justify-content-center text-center  text-lg-start text-md-start   mt-10">
            <h3 clas="" style="margin-top:30px;margin-left:0px;color:#F6A42C ">Contáctanos</h3>
            <!-- <h4 clas="d-lg-none "style="margin-top:30px;margin-left:0px"><span> Contáctanos</span></h4> -->

            <ul class="text-white mt-4 ">
              <li><i class=""></i> (+51) 970 579 363 </li>
              <li>(+51) 977 637 351 </li>
              <li>Av.Circunvalación Del Golf Los Incas 134 <br>Patio Panorama, Santiago de Surco</li>
              <li>Jr. Los Viñedos 170, La Molina</li>
            </ul>
          </div>
          <!-- <div class="col-1 d-none d-xl-block"></div> -->

          <div
            class="col-sm-12 col-md-7 col-lg-6 col-xl-4 justify-content-center  text-center  text-lg-start text-md-end mt-10">

            <h3 clas="" style="margin-top:30px;margin-left:0px;color:#F6A42C ">Descubre más</h3>
            <p></p>
            <div class="row">
              <div class="col-6">
                <ul class="text-white mt-4">
                  <li>Inicio</li>
                  <li>Contáctanos</li>
                  <li>Quiénes somos</li>
                  <li>Preguntas frecuentes</li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="text-white mt-4">
                  <li>Blog</li>
                  <li>Proyectos</li>
                  <li>Términos y condiciones</li>
                  <li>Libro de reclamaciones</li>
                </ul>
              </div>

            </div>

          </div>
          <!-- <div class="col-1 d-none  d-xl-block"></div> -->
          <!-- <div class="col-4 d-none d-sm-block"></div> -->

          <div class="mt-4 text-center col-xl-4 mt-10">
            <img src="ayba/4.png" width="40%" alt="" srcset=""><br>
            <img src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-0.png" width="45px" alt="">
            <img src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-0.png" width="45px" alt="">
            <img src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-0.png" width="45px" alt="">
            <img src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-0.png" width="45px" alt="">
            <p></p>
          </div>
        </div>
      </div>



    </div>


    <footer class="footer-part pt-4 pb-3 py-2" style="background-color:#03424E;">

      <div class="container">
        <div class="justify-content-center">

          <div class="text-center">


            <p class="mb-0 text-white">
              <a class="d-none d-sm-none d-sm-block d-md-block d-lg-block  d-xl-block display-1 fs-4 text-white text-hover-primary  border-primary" href="https://anthonycode.com/"
                target="_blank">
                Copyright 2025, Aybar Corp&nbsp;&nbsp; | &nbsp;&nbsp; Todos los Derechos reservados
              </a>
              <a class="d-sm-none  display-1 fs-2 text-center text-white text-hover-primary  border-primary" href="https://anthonycode.com/"
                target="_blank">
                Copyright 2025, Aybar Corp <br> Todos los Derechos reservados
              </a>
            </p>
          </div>

        </div>
      </div>
    </footer>
    <div class="offcanvas offcanvas-start matdash-lp-offcanvas" tabindex="-1" id="offcanvasNavbar"
      aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header p-4">
        <img src="assets/images/logos/logo.svg" alt="matdash-img" class="img-fluid" width="150" />
      </div>
      <div class="offcanvas-body p-4">
        <ul class="navbar-nav justify-content-end flex-grow-1">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between fs-3 text-dark"
              href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Demos <i class="ti ti-chevron-down fs-14"></i>
            </a>
            <ul class="dropdown-menu ps-2">
              <li><a class="dropdown-item text-dark" href="dark/index.html">Dark</a></li>
              <li><a class="dropdown-item text-dark" href="horizontal/index.html">Horizontal</a></li>
              <li><a class="dropdown-item text-dark" href="main/index3.html">main</a></li>
              <li><a class="dropdown-item text-dark" href="minisidebar/index.html">Minisidebar</a></li>
              <li><a class="dropdown-item text-dark" href="rtl/index.html">RTL</a></li>
            </ul>
          </li>
          <li class="nav-item mt-3 dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between fs-3 text-dark"
              href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pages <i class="ti ti-chevron-down fs-14"></i>
            </a>
            <div class="dropdown-menu mt-3 ps-1">
              <div class="position-relative">
                <div class="row">
                  <div class="col-md-8">
                    <div class="p-4 pb-3">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="position-relative">
                            <a href="main/app-chat.html" class="d-flex align-items-center pb-9 position-relative">
                              <div
                                class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                <iconify-icon icon="solar:chat-line-bold-duotone"
                                  class="fs-7 text-primary"></iconify-icon>
                              </div>
                              <div>
                                <h6 class="mb-0">Chat Application</h6>
                                <span class="fs-11 d-block text-body-color">New messages arrived</span>
                              </div>
                            </a>
                            <a href="main/app-invoice.html" class="d-flex align-items-center pb-9 position-relative">
                              <div
                                class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                <iconify-icon icon="solar:bill-list-bold-duotone"
                                  class="fs-7 text-secondary"></iconify-icon>
                              </div>
                              <div>
                                <h6 class="mb-0">Invoice App</h6>
                                <span class="fs-11 d-block text-body-color">Get latest invoice</span>
                              </div>
                            </a>
                            <a href="main/app-contact2.html" class="d-flex align-items-center pb-9 position-relative">
                              <div
                                class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                <iconify-icon icon="solar:phone-calling-rounded-bold-duotone"
                                  class="fs-7 text-warning"></iconify-icon>
                              </div>
                              <div>
                                <h6 class="mb-0">Contact Application</h6>
                                <span class="fs-11 d-block text-body-color">2 Unsaved Contacts</span>
                              </div>
                            </a>
                            <a href="main/app-email.html" class="d-flex align-items-center pb-9 position-relative">
                              <div
                                class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                <iconify-icon icon="solar:letter-bold-duotone" class="fs-7 text-danger"></iconify-icon>
                              </div>
                              <div>
                                <h6 class="mb-0">Email App</h6>
                                <span class="fs-11 d-block text-body-color">Get new emails</span>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="position-relative">
                            <a href="main/page-user-profile.html"
                              class="d-flex align-items-center pb-9 position-relative">
                              <div
                                class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                <iconify-icon icon="solar:user-bold-duotone" class="fs-7 text-success"></iconify-icon>
                              </div>
                              <div>
                                <h6 class="mb-0">User Profile</h6>
                                <span class="fs-11 d-block text-body-color">learn more information</span>
                              </div>
                            </a>
                            <a href="main/app-calendar.html" class="d-flex align-items-center pb-9 position-relative">
                              <div
                                class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                <iconify-icon icon="solar:calendar-minimalistic-bold-duotone"
                                  class="fs-7 text-primary"></iconify-icon>
                              </div>
                              <div>
                                <h6 class="mb-0">Calendar App</h6>
                                <span class="fs-11 d-block text-body-color">Get dates</span>
                              </div>
                            </a>
                            <a href="main/app-contact.html" class="d-flex align-items-center pb-9 position-relative">
                              <div
                                class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                <iconify-icon icon="solar:smartphone-2-bold-duotone"
                                  class="fs-7 text-secondary"></iconify-icon>
                              </div>
                              <div>
                                <h6 class="mb-0">Contact List Table</h6>
                                <span class="fs-11 d-block text-body-color">Add new contact</span>
                              </div>
                            </a>
                            <a href="main/app-notes.html" class="d-flex align-items-center pb-9 position-relative">
                              <div
                                class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                <iconify-icon icon="solar:notes-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                              </div>
                              <div>
                                <h6 class="mb-0">Notes Application</h6>
                                <span class="fs-11 d-block text-body-color">To-do and Daily tasks</span>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 d-none d-lg-flex">
                    <img src="assets/images/backgrounds/mega-dd-bg.jpg" alt="mega-dd" class="img-fluid mega-dd-bg" />
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item mt-3">
            <a class="nav-link fs-3 text-dark active" aria-current="page" href="docs/index.html">Documentation</a>
          </li>
          <li class="nav-item mt-3"><a class="nav-link fs-3 text-dark" href="#">Pages</a></li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <a href="main/authentication-login2.html" class="btn btn-primary w-100 py-2">Login</a>
        </form>
      </div>
    </div>

    <div class="dark-transparent sidebartoggler"></div>
    <script src="assets/js/vendor.min.js"></script>
    <!-- Import Js Files -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/js/theme/app.init.js"></script>
    <script src="assets/js/theme/theme.js"></script>
    <script src="assets/js/theme/app.min.js"></script>
    <script src="assets/js/theme/sidebarmenu.js"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/libs/aos/dist/aos.js"></script>
    <script src="assets/js/landingpage/landingpage.js"></script>

    <script type="module" src="https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1/lite-youtube.min.js"></script>
</body>

</html>