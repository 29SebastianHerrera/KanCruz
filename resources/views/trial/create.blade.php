@extends('layouts.web')

@section('content')

    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Haz una reserva </h1>
                    </div>
                </div>
            </div>

            <div class="news-single nav-arrow-b">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">

                        <form action="{{Route('booking.store')}}" method="POST">
                    @csrf


                        <div class="box-body">

                            <div class="form-group">
                                <label></label>
                                    <input type="hidden" name="id" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Nombre</label>
                                    <input type="text" name="name" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                    <input type="email" name="email" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Telefono</label>
                                    <input type="phone" name="phone" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label for="rooms_id">Elige la habitacion</label>
                                <select name="rooms_id" id="rooms_id" class="form-control">
                                @foreach ($rooms as $room)
                                        <option value="{{$room->id}}">{{$room->name}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Fecha de entrada</label>
                                    <input type="date" name="checkin" class="form-control"/>

                            </div>
                            </div>

                            <div class="form-group">
                                <label>Fecha de salida</label>
                                    <input type="date" name="checkout" class="form-control"/>

                            </div>


                            <div class="form-group">
                                <label>Desayuno</label>
                                    <input type="checkbox" name="breakfast" id="breakfast" value="1" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Mascotas</label>
                                    <input type="checkbox" name="pets" id="pets" value="1" class="form-control"/>
                            </div>

                            <div class="form-group">



                            <!--
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <label>Mascotas</label>
                                    <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input" name="pets">

                                    </div>
                                </div>
                                <input type="number" class="form-control" aria-label="Text input with checkbox" name="pets_number">
                            </div>
                            -->
                        </div>

                        <div class="card-footer">
                            <input type="submit" value="Crear" class="btn btn-primary">
                        </div>
                    </div>
                </form>
        </div>
    </section>
@endsection
