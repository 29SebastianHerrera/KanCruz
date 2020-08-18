@extends('Panel.Layout.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3>Editar {{$client->name}}</h3>
                    </div>
                    <hr>
                    <div class="box-body">
                        <form action="{{Route('client.update',$client->id)}}" method="POST">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" class="form-control" value="{{$client->name}}">
                            </div>

                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="text" name="email" class="form-control" value="{{$client->email}}">
                            </div>

                            <div class="form-group">
                                <label for="name">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{$client->phone}}">
                            </div>

                            <input type="submit" value="Actualizar" class="btn btn-primary">

                        </form>

                    </div>

                    <hr>
                    <div class="card-footer">
                        <a href="{{Route('client.index')}}" class="btn btn-light"><i class="fa fa-arrow-left">Volver</i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
