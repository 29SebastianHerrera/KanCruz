@extends('Panel.Layout.index')

@section('content')

    @if (session()->get('success'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                {{session()->get('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
    @endif
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1 class="box-title">Reservas</h1>
                        <hr>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="box-title">
                            <a href="{{Route('booking.create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Nueva reserva</a>
                        </div>
                    </div>
                    <br>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>Check-in</th>
                                    <th>Check-out</th>
                                    <th>PAX</th>
                                    <th>Cliente</th>
                                    <th>Habitaciones</th>
                                    <th>Servicios</th>
                                    <th colspan="3">Acciones</th>

                                </tr>
                                @foreach($bookings as $booking)

                                    <tr>

                                        <td>{{$booking->id}}</td>
                                        <td>{{$booking->checkin}}</td>
                                        <td>{{$booking->checkout}}</td>
                                        <td>{{$booking->pax}}</td>
                                        <td>{{$booking->client->name}}</td>

                                        <td>@foreach ($booking->rooms as $room )
                                            <li>{{$room->name}}</li>
                                        @endforeach</td>


                                        <td>@foreach ($booking->services as $service )
                                            <li>{{$service->name}}</li>
                                        @endforeach</td>


                                        <td>

                                            <a href="{{Route('booking.show', $booking->id)}}" class="btn btn-primary"><i class="fa fa-info"></i></a>
                                        </td>
                                        <td>
                                            <a style="color:black" href="{{Route('booking.edit',$booking->id)}}" class="btn btn-warning" role="button"><i class="fa fa-edit"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{route('booking.destroy', $booking->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                    <input type="submit" value='X' class="btn btn-danger fa fa-trash" onclick="return confirm ('¿Estás seguro de eliminarlo?')">
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <hr>
                        <div class="card-footer">
                            <a href="{{Route('panel.index')}}" class="btn btn-light"><i class="fa fa-arrow-left">Volver</i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
