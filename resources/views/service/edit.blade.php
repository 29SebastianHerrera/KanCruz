@extends('Panel.Layout.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3>Editar {{$service->name}}</h3>
                    </div>
                    <hr>
                    <div class="box-body">
                        <form action="{{Route('service.update',$service->id)}}" method="POST">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" class="form-control" value="{{$service->name}}">
                            </div>

                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea name="description" class="form-control">{{$service->description}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="price">Precio</label>
                                <input type="text" name="price" class="form-control" value="{{$service->price}}"/>
                            </div>


                            <input type="submit" value="Actualizar" class="btn btn-primary">

                        </form>

                    </div>

                    <hr>
                    <div class="card-footer">
                        <a href="{{Route('service.index')}}" class="btn btn-light"><i class="fa fa-arrow-left">Volver</i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
