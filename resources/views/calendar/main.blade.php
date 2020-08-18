<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
    <link href="{{ asset('assets/fullcalendar/packages/core/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fullcalendar/packages/daygrid/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fullcalendar/packages/timegrid/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fullcalendar/packages/list/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fullcalendar/style.css') }}" rel="stylesheet"/> 

      <!-- Favicons -->
  <link href="{{ asset('assets/vendor/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/vendor/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- assets/Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- Font awesome & Iconify -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

</head>

<body>
<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{('/trial')}}">Can <span class="color-b">Cruz</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{('/trial')}}">Inicio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{('/aboutus')}}">Sobre Nosotros</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('trial.create')}}">Reservas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('/rooms')}}">Habitaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'/experiencias'}}">Experiencias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('/contact')}}">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
    
</nav><!-- End Header/Navbar -->

  <section class="intro-single">
    <div class="container">
      <div class="row">
         <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Calendario</h1>
            </div>
          </div>

          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{('/trial')}}">Inicio</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Calendario
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <section class="content container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <div id='wrap'>

              <div id="calendar" data-route-load-bookings="{{ route('routeLoadBookings') }}"></div>

              <div style='clear:both'></div>
            </div>

          </div>
        </div>
      </div>
    </section>

  <!-- ======= Footer ======= -->
<section class="section-footer">
    <div class="container">
      <div class="row">
      <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Quienes somos</h3>
            </div>
      
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
              La masía de Can Plans es una gran nave principal levantada sobre una gran piedra en la planta baja, con el suelo nivelado con losas del propio lugar.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Redes Sociales</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Facebook</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Instagram</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Twitter</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Can Cruz</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">

              <span class="iconify" data-icon="ion-ios-pin"></span> Parc Natural del Montseny Allotjament Rural
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="fas fa-phone"></span> +54 356 945234 </li>
                <li class="color-a">
                  <span class="fas fa-envelope"></span> cancruz@example.com</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Can Cruz</span> Todos los derechos reservados.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by <a href="https://bootstrapmade.com/">Stranger Strings</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- <div id="preloader"></div> => this preloader was what was causing the charging error! -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/scrollreveal/scrollreveal.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

  

  <script src="{{ asset('assets/fullcalendar/packages/core/main.js') }}"></script>
  <script src="{{ asset('assets/fullcalendar/packages/interaction/main.js') }}"></script>
  <script src="{{ asset('assets/fullcalendar/packages/daygrid/main.js') }}"></script>
  <script src="{{ asset('assets/fullcalendar/packages/timegrid/main.js') }}"></script>
  <script src="{{ asset('assets/fullcalendar/packages/list/main.js') }}"></script>
  <script src="{{ asset('assets/fullcalendar/packages/core/locales-all.js') }}"></script>
  <script src="{{ asset('assets/fullcalendar/bookingData.js') }}"></script>
  <script src="{{ asset('assets/fullcalendar/calendar.js') }}"></script>
</body>
</html>
