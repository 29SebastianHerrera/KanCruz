@extends('Panel.Layout.index')

@section('content')

    @if (session()->get('success'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                {{session()->get('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
    @endif

    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h1 class="box-title">Habitaciones</h1>
                        <hr>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="box-title">
                            <a href="{{Route('room.create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Nueva habitacion</a>
                            <a href="{{Route('tag.index')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tags</a>
                        </div>
                    </div>
                    <br>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Servicios</th>
                                    <th>PAX</th>
                                    <th>Precio</th>
                                    <th>Disponibilidad</th>
                                    <th colspan="3">Acciones</th>

                                </tr>
                                @foreach($rooms as $room)

                                    <tr>

                                        <td>{{$room->id}}</td>
                                        <td>{{$room->name}}</td>
                                        <td>{{$room->description}}</td>
                                        <td>@foreach ($room->tags as $tag)
                                            <li>{{$tag->name}}</li>
                                        @endforeach</td>
                                        <td>{{$room->pax}}</td>
                                        <td>{{$room->price}} €</td>
                                        <td>@if ($room->available==1)
                                                {{'Disponible'}}
                                            @endif

                                            @if ($room->available==0)
                                                {{'No disponible'}}
                                            @endif
                                        </td>
                                        <td>

                                            <a href="{{Route('room.show', $room->id)}}" class="btn btn-primary"><i class="fa fa-info"></i></a>
                                        </td>
                                        <td>
                                            <a style="color:black" href="{{Route('room.edit',$room->id)}}" class="btn btn-warning" role="button"><i class="fa fa-edit"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{route('room.destroy', $room->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                    <input type="submit" value='X' class="btn btn-danger fa fa-trash" onclick="return confirm ('¿Estás seguro de eliminarlo?')">
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <hr>
                        <div class="card-footer">
                            <a href="{{Route('panel.index')}}" class="btn btn-light"><i class="fa fa-arrow-left">Volver</i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
