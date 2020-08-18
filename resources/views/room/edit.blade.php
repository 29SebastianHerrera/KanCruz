@extends('Panel.Layout.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3>Editar {{$room->name}}</h3>
                    </div>
                    <hr>
                    <div class="box-body">
                        <form action="{{Route('room.update',$room->id)}}" method="POST">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" class="form-control" value="{{$room->name}}">
                            </div>

                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea name="description" class="form-control">{{$room->description}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="pax">PAX</label>
                            <input type="text" name="pax" class="form-control" value="{{$room->pax}}"/>
                            </div>

                            <div class="form-group">
                                <label for="price">Precio</label>
                                <input type="text" name="price" class="form-control" value="{{$room->price}}"/>
                            </div>

                            <div class="form-group">
                                <label for="available">Disponibilidad</label>
                                <br>
                                <select id="available" name="available">
                                    <option value=1>Disponible</option>
                                    <option value=0>No disponible</option>
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

                            <input type="submit" value="Actualizar" class="btn btn-primary">

                        </form>

                    </div>

                    <hr>
                    <div class="card-footer">
                        <a href="{{Route('room.index')}}" class="btn btn-light"><i class="fa fa-arrow-left">Volver</i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
