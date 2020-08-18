@extends('Panel.Layout.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1>{{$client->name}}, cliente numero #{{$client->id}}</h1>
                        <a href="{{Route('client.edit', $client->id)}}" class="btn btn-primary">Editar</a>
                    </div>
                    <hr>
                    <div class="box-body">
                        <h3>Nombre:</h3>
                        <h4>{{$client->name}}</h4>
                        <h3>Email:</h3>
                        <h4>{{$client->email}}<h4>
                        <h3>Numero:</h3>
                        <h4>{{$client->phone}}</h4>
                        <h3>Reservas:</h3>
                        @foreach ($bookings as $booking )
                            @if ($client->id == $booking->client_id)
                            <a style="color:black" href="{{Route('booking.show',$booking->id)}}" class="btn btn-warning" role="button">Reserva #{{$booking->id}}</a>
                            @endif
                        @endforeach
                    </div>

                    <hr>
                    <div class="card-footer">
                        <a href="{{Route('client.index')}}" class="btn btn-light"><i class="fa fa-arrow-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
