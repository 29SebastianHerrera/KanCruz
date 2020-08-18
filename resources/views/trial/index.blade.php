@extends('layouts.web')

@section('content')

<body>
  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{('')}}">Can <span class="color-b">Cruz</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{('/')}}">Inicio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{('/aboutus')}}">Sobre nosotros</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{('/rooms')}}">Habitaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('trial.create')}}">Reservas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{('/experiencias')}}">Experiencias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('/contact')}}">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav><!-- End Header/Navbar -->

<!-- exten -->
  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(https://i.postimg.cc/1tfL54RG/can-plans.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Nuestras estancias
                    <h1 class="intro-title mb-4">
                       Habitaciones
                      <br><span class="color-b">rústicas y confortables </span></h1>
                    <p class="intro-subtitle intro-price">
                      <a href="{{route('trial.create')}}"><span class="price-a">Reserva</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(https://i.postimg.cc/pdGhZ3YV/body-of-water-near-orange-and-green-leaf-trees-217120.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">El entorno
                    <h1 class="intro-title mb-4">
                       Descubre el
                      <br>Parque Natural del <span class="color-b">Montseny</span></h1>
                    <p class="intro-subtitle intro-price">
                      <a href="{{route('trial.create')}}"><span class="price-a">Reserva</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(https://i.postimg.cc/VsZ3TqRK/meat-1440105-1920.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Cocina y huerto ecológico
                    <h1 class="intro-title mb-4">
                    Cocina <span class="color-b">ecológica </span>:
                    <br>De la <span class="color-b">huerta </span> al plato</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="{{route('trial.create')}}"><span class="price-a">Reserva</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Comentarios</h2>
              </div>
            </div>
          </div>
        </div>
        <div id="testimonial-carousel" class="owl-carousel">
        <div class="carousel-item-a">
            <div class="testimonials-box">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-img">
                    <img src="images/Edgar.jpg" style="border-radius:50%; height:initial; width:initial;" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-ico">
                  <span class="iconify" data-icon="ion-ios-quote"></span>
                  </div>
                  <div class="testimonials-content">
                    <p class="testimonial-text">
                      Tuve una experiencia maravillosa en ese paraje natural tan expectacular, la habitación era muy amplia y tambien me encantó correr detras de las gallinas.
                    </p>
                  </div>
                  <div class="testimonial-author-box">
                    <img src="assets/img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                    <h5 class="testimonial-author">Edgar Costilla</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item-a">
            <div class="testimonials-box">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-img">
                    <img src="images/David.jpg" style="border-radius:50%; height:initial; width:initial;" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-ico">
                    <span class="iconify" data-icon="ion-ios-quote"></span>
                  </div>
                  <div class="testimonials-content">
                    <p class="testimonial-text">
                      La habitación era luminosa, rustica y muy acogedora. Incluso cuando me caí del caballo me senti feliz en aquel entorno.
                    </p>
                  </div>
                  <div class="testimonial-author-box">
                    <img src="assets/img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                    <h5 class="testimonial-author">David Cruz</h5>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

</body>
@endsection
