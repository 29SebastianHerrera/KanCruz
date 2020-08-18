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
                        <h1 class="box-title">Clientes</h1>
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
                            <a href="{{Route('client.create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Nuevo cliente</a>
                        </div>
                    </div>
                    <br>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Número</th>
                                    <th colspan="3">Acciones</th>

                                </tr>
                                @foreach($clients as $client)

                                    <tr>

                                        <td>{{$client->id}}</td>
                                        <td>{{$client->name}}</td>
                                        <td>{{$client->email}}</td>
                                        <td>{{$client->phone}}</td>
                                        <td>

                                            <a href="{{Route('client.show', $client->id)}}" class="btn btn-primary"><i class="fa fa-info"></i></a>
                                        </td>
                                        <td>
                                            <a style="color:black" href="{{Route('client.edit',$client->id)}}" class="btn btn-warning" role="button"><i class="fa fa-edit"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{route('client.destroy', $client->id)}}" method="post">
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
