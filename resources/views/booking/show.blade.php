@extends('Panel.Layout.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1>Reserva #{{$booking->id}}</h1>
                        <a href="{{Route('booking.edit', $booking->id)}}" class="btn btn-primary">Editar</a>
                    </div>
                    <hr>
                    <div class="box-body">
                        <h3>Cliente:</h3>

                        <a style="color:black" href="{{Route('client.show',$booking->client->id)}}" class="btn btn-warning" role="button">{{$booking->client->name}}</a>
                        <h3>PAX:</h3>
                        <h4>{{$booking->pax}}</h4>
                        <h3>Check-in:</h3>
                        <h4>{{$booking->checkin}}</h4>
                        <h3>Check-out:</h3>
                        <h4>{{$booking->checkout}}</h4>

                    </div>

                    <hr>
                    <div class="card-footer">
                        <a href="{{Route('booking.index')}}" class="btn btn-light">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
