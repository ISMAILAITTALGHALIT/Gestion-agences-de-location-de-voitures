@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">Mes Reservation</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">city</th>
                                <th scope="col">Client</th>
                                <th scope="col">Car</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($agency->reservations as $reservation)

                                <th scope="col">{{ $reservation->city }}</th>
                                <th scope="col">
                                    <a href="{{ route('clients.show',[$reservation->client_id]) }}">

                                        {{ \App\models\client::find($reservation->client_id)->first_name }}
                                        ,
                                        {{ \App\models\client::find($reservation->client_id)->last_name }}

                                    </a>
                                </th>
                                <th scope="col">
                                    <a href="{{ route('cars.show',[$reservation->car_id])  }}">

                                        {{ \App\models\brand::find(\App\models\car::find($reservation->car_id)->brand_id)->brand_name }}
                                        ,
                                        {{ \App\models\CarModel::find(\App\models\car::find($reservation->car_id)->model_id)->car_model_name }}

                                    </a>
                                </th>
                                <th scope="col">
                                    {!! Form::open(['method'=>'DELETE','route'=>['reservations.destroy',$reservation->id]]) !!}
                                    {!!  Form::submit('Delete',['class'=>'btn btn-primary float-right']) !!}
                                    {!! Form::close() !!}
                                </th>
                                @if($reservation->confirmed == 0)
                                    <th scope="col">

                                        {!! link_to_route('reservations.edit','confimer',[$reservation->id],['class'=>'btn btn-warning float-right']) !!}


                                    </th>
                                    @else
                                    <th scope="col">
                                        <button class="btn-success btn float-right" disabled>Reserved !</button>

                                    </th>
                                @endif

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection