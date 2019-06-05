@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row"><div class="col-12">



            @if (\Session::has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{!! \Session::get('success') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            </div>
        </div>
        <div class="row">

            <h3>Result</h3>
            <table class="table table-striped">
                <thead>
                <tr>

                    <th scope="col">Picture</th>
                    <th scope="col">aviability date</th>
                    <th scope="col">price</th>
                    <th scope="col">delivery place</th>
                    <th scope="col">fuel</th>
                    <th scope="col">brand</th>
                    <th scope="col">model</th>
                    <th scope="col">model year</th>
                    <th scope="col">fuel policy (full)</th>
                    <th scope="col">luggage</th>
                    <th scope="col">mileage unlimited</th>
                    <th scope="col">seats</th>
                    <th scope="col">transmission</th>

                </tr>
                </thead>
                <tbody>

                @foreach($results as $result)

                    @foreach($result->cars as $car)

                        @if(\Carbon\Carbon::parse($car->aviability_date)->between(\Carbon\Carbon::parse($start),\Carbon\Carbon::parse($end)))


                            <tr>
                        <th scope="col">

                            <img src="{{ $car->image }}" alt="{{ $car->image }}" width="55px" height="55px" >

                        </th>
                        <th scope="col">{{ $car->aviability_date }}</th>
                        <th scope="col">{{ $car->price }}</th>
                        <th scope="col">{{ $car->delivery_place }}</th>
                        <th scope="col">{{ $car->fuel }}</th>
                        <th scope="col">{{ \App\models\brand::find($car->brand_id)->brand_name }}</th>
                        <th scope="col">{{ \App\models\CarModel::find($car->model_id)->car_model_name }}</th>
                        <th scope="col">{{ \App\models\CarModel::find($car->model_id)->car_model_year }}</th>
                        <th scope="col">{{ $car->fuel_policy }}</th>
                        <th scope="col">{{ $car->luggage }}</th>
                        <th scope="col">@if($car->mileage_unlimited == 1) yes @else no @endif</th>
                        <th scope="col">{{ $car->seats }}</th>
                        <th scope="col">{{ $car->transmission }}</th>

                                @if(\Illuminate\Support\Facades\Auth::user() != null)
                                    <th scope="col">
                                        {!! Form::open(['method'=>'POST','action'=>'ReservationsController@store']) !!}
                                        {{ Form::hidden('start', $start) }}
                                        {{ Form::hidden('end', $end) }}
                                        {{ Form::hidden('car_id', $car->id) }}
                                        {{ Form::hidden('user_id',\Illuminate\Support\Facades\Auth::user()->id) }}
                                        {!!  Form::submit('Reserver',['class'=>'btn btn-primary float-right']) !!}
                                        {!! Form::close() !!}
                                    </th>
                                @else
                                    <th scope="col">
                                        <a href="/login">Reserver</a>
                                    </th>



                                @endif

                    </tr>

                    @endif
                    @endforeach
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

@endsection