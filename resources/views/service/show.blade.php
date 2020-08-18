@extends('Panel.Layout.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1>Servicio {{$service->name}}</h1>
                    </div>
                    <hr>
                    <div class="box-body">
                        <h3>Descripción:</h3>
                        <h4>{{$service->description}}</h4>
                        <h3>Precio:</h3>
                        <h4>{{$service->price}}<h4>
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
