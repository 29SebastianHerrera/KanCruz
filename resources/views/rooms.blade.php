@extends('layouts.web')

@section('content')

<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Nuestras Habitaciones</h1>
            </div>
          </div>
          
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">

          </div>
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="images/img_4284_lowres.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#">PUIGRACIÓS</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">€ 85.00 p/n</span>
                    </div>
                    <a href="{{('/habitacion')}}" class="link-a">Click para ver más
                      <span class="iconify" data-icon="ant-design:right-outlined" data-inline="false"></span>                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Personas</h4>
                        <span>4</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Camas</h4>
                        <span>3</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baños</h4>
                        <span>1</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Wi-fi</h4>
                        <span>Sí</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="images/sant-cristobal.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#">Sant Cristòfol </a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">€ 85.00 p/n</span>
                    </div>
                    <a href="property-single.html" class="link-a">Click para ver más
                      <span class="iconify" data-icon="ant-design:right-outlined" data-inline="false"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Personas</h4>
                        <span>4
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Camas</h4>
                        <span>3</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baños</h4>
                        <span>1</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Wi-fi</h4>
                        <span>No</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="images/rocacentella.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#">Rocacentella</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">€ 85.00 p/n</span>
                    </div>
                    <a href="property-single.html" class="link-a">Click para ver más
                      <span class="iconify" data-icon="ant-design:right-outlined" data-inline="false"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Personas</h4>
                        <span>4
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Camas</h4>
                        <span>3</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baños</h4>
                        <span>1</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Wi-fi</h4>
                        <span>No</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->

@endsection
