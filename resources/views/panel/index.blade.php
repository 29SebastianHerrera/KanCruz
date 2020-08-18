@extends('Panel.Layout.index')

@section('content')

  <section class="content container-fluid">
    <div class="row">

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            @inject('reservas', 'App\Booking')
           <h3>{{$reservas->count()}}<sup style="font-size: 20px"></sup></h3>
            <p>Reservas</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{route('booking.index')}}" class="small-box-footer">Administrar Reservas<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-teal">
          <div class="inner">
            @inject('clientes', 'App\Client')
            <h3>{{$clientes->count()}}</h3>
            <p>Clientes</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="{{route('client.index')}}" class="small-box-footer">Administrar Clientes <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6" >
        <div class="small-box bg-yellow" >
          <div class="inner">
            @inject('habitaciones', 'App\Room')
           <h3>{{$habitaciones->count()}}<sup style="font-size: 20px"></sup></h3>
            <p>Habitaciones</p>
          </div>
          <div class="icon">
          <i  class="fa fa-bed"></i></a>
          </div>
          <a href="{{route('room.index')}}" class="small-box-footer">Administrar Habitaciones<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>


      <div class="col-lg-3 col-xs-6" >
        <div class="small-box bg-purple" >
          <div class="inner">
            @inject('servicios', 'App\Service')
           <h3>{{$servicios->count()}}<sup style="font-size: 20px"></sup></h3>
            <p>Servicios</p>
          </div>
          <div class="icon">
          <i  class="fa fa-cutlery"></i></a>
          </div>
          <a href="{{route('service.index')}}" class="small-box-footer">Administrar Servicios <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

    </div>
  </section>
@endsection
