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
                    <form action="{{Route('room.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea name="description" class="form-control">Descripción de la habitación ...</textarea>
                        </div>

                        <div class="form-group">
                            <label for="pax">PAX</label>
                            <input type="text" name="pax" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="name">Precio</label>
                            <input type="text" name="price" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="available">Disponibilidad</label>
                            <br>
                            <select id="available" name="available">
                                <option value='1'>Disponible</option>
                                <option value='0'>No disponible</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Tags</label>
                                @foreach ( $tags as $tag )
                                    <br>
                                    <input type="checkbox" id="tag_id" name="tag_id[]" value="{{$tag->id}}">
                                    <label for="{{$tag->id}}">{{$tag->name}}</label>
                                @endforeach
                        </div>

                        <input type="submit" value="Add" class="btn btn-primary">
                    </form>
                </div>
                <hr>
                <div class="card-footer">
                    <a href="{{Route('room.index')}}" class="btn btn-light"><i class="fa fa-arrow-left">Volver</i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
