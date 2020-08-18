@extends('Panel.Layout.index')

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3>Crear nueva habitación</h3>
                </div>
                <hr>
                <div class="card-body">
                    <form action="{{Route('tag.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea name="description" class="form-control">Descripción del tag ...</textarea>
                        </div>

                        <input type="submit" value="Add" class="btn btn-primary">
                    </form>
                </div>
                <hr>
                <div class="card-footer">
                    <a href="{{Route('tag.index')}}" class="btn btn-light"><i class="fa fa-arrow-left">Volver</i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
