@extends('Panel.Layout.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3>Editar reserva #{{$booking->id}}</h3>
                    </div>
                    <hr>
                    <div class="box-body">
                        <form action="{{Route('booking.update',$booking->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="checkin">Check-in</label>
                                <input type="text" name="checkin" class="form-control" value="{{$booking->checkin}}"/>
                            </div>

                            <div class="form-group">
                                <label for="checkout">Check-in</label>
                                <input type="text" name="checkout" class="form-control" value="{{$booking->checkout}}"/>
                            </div>

                            <div class="form-group">
                                <label for="pax">PAX</label>
                                <input type="text" name="pax" class="form-control" value="{{$booking->pax}}"/>
                            </div>

                            <div class="form-group">
                                <label for="name">Cliente</label>
                                <select name="client_id">
                                    @foreach ( $clients as $client )
                                        <option value="{{$client->id}}"> {{$client->name}} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name">Servicios</label>
                                    @foreach ( $services as $service )
                                        <br>
                                        <input type="checkbox" id="service_id" name="service_id[]" value="{{$service->id}}">
                                        <label for="{{$service->id}}">{{$service->name}}</label>
                                    @endforeach
                            </div>

                            <div class="form-group">
                                <label for="name">Habitaciones</label>
                                    @foreach ( $rooms as $room )
                                        <br>
                                        <input type="checkbox" id="room_id" name="room_id[]" value="{{$room->id}}">
                                        <label for="{{$room->id}}">{{$room->name}}</label>
                                    @endforeach
                            </div>

                            <input type="submit" value="Actualizar" class="btn btn-primary">

                        </form>

                    </div>

                    <hr>
                    <div class="card-footer">
                        <a href="{{Route('booking.index')}}" class="btn btn-light"><i class="fa fa-arrow-left">Volver</i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
