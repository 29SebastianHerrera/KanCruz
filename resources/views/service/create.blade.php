@extends('Panel.Layout.index')

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3>Crear nuevo servicio</h3>
                </div>
                <hr>
                <div class="card-body">
                    <form action="{{Route('service.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea name="description" class="form-control">Descripción del servicio ...</textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="text" name="price" class="form-control"/>
                        </div>

                        <input type="submit" value="Add" class="btn btn-primary">
                    </form>
                </div>
                <hr>
                <div class="card-footer">
                    <a href="{{Route('service.index')}}" class="btn btn-light"><i class="fa fa-arrow-left">Volver</i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
