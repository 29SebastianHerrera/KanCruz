<body>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{('/')}}">Can <span class="color-b">Cruz</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{('/')}}">Inicio</a>
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
