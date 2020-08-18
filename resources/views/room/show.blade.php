@extends('Panel.Layout.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1>Habitación {{$room->name}}</h1>
                    </div>
                    <hr>
                    <div class="box-body">
                        <h3>Descripción:</h3>
                        <h4>{{$room->description}}</h4>
                        <h3>Pax:</h3>
                        <h4>{{$room->pax}}<h4>
                        <h3>Precio:</h3>
                        <h4>{{$room->price}}</h4>
                        <h3>Disponibilidad:</h3>
                        @if ($room->available==1)
                            <h4>{{'Disponible'}}<h4>
                        @endif

                        @if ($room->available==0)
                            <h4>{{'No disponible'}}<h4>
                        @endif
                    </div>

                    <hr>
                    <div class="card-footer">
                        <a href="{{Route('room.index')}}" class="btn btn-light">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
