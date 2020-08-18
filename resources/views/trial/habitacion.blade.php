@extends('layouts.web')

@section('content')

<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">PUIGRACIÓS</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{('/trial')}}">Inicio</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="{{('/rooms')}}">Habitaciones</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  PUIGRACIÓS
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
              <div class="carousel-item-b">
                <img src="images/img_4284_lowres.jpg" alt="">
              </div>
              <div class="carousel-item-b">
                <img src="images/puig2.jpg" alt="">
              </div>
              <div class="carousel-item-b">
                <img src="images/puig3.jpg" alt="">
              </div>
            </div>
            <div class="row justify-content-between">
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row section-t3">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Comodidades</h3>
                    </div>
                  </div>
                </div>
                <div class="amenities-list color-text-a">
                  <ul class="list-a no-margin">
                    <li>Baño privado</li>
                    <li>Calefacción</li>
                    <li>Acceso a internet</li>
                    <li>1 Cama matrimonial</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->

@endsection