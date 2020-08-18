@extends('Panel.Layout.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3>Editar {{$tag->name}}</h3>
                    </div>
                    <hr>
                    <div class="box-body">
                        <form action="{{Route('tag.update',$tag->id)}}" method="POST">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" class="form-control" value="{{$tag->name}}">
                            </div>

                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea name="description" class="form-control">{{$tag->description}}</textarea>
                            </div>

                            <input type="submit" value="Actualizar" class="btn btn-primary">

                        </form>

                    </div>

                    <hr>
                    <div class="card-footer">
                        <a href="{{Route('tag.index')}}" class="btn btn-light"><i class="fa fa-arrow-left">Volver</i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
