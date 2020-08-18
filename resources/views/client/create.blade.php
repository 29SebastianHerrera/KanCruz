@extends('Panel.Layout.index')

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3>Crear nuevo cliente</h3>
                </div>
                <hr>
                <div class="card-body">
                    <form action="{{Route('client.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="phone">Numero</label>
                            <input type="text" name="phone" class="form-control"/>
                        </div>


                        <input type="submit" value="Add" class="btn btn-primary">
                    </form>
                </div>
                <hr>
                <div class="card-footer">
                    <a href="{{Route('client.index')}}" class="btn btn-light"><i class="fa fa-arrow-left">Volver</i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
