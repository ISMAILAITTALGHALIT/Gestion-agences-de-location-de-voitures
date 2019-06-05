@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">

            <h3>My cars</h3>
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

                @foreach($agency->cars as $car)

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
                        <th> {!! Form::open(['method'=>'DELETE','route'=>['cars.destroy',$car->id]]) !!}
                            {!!  Form::submit('Delete',['class'=>'btn btn-primary float-right']) !!}
                            {!! Form::close() !!}</th>
                        <th>
                            {!! link_to_route('cars.edit','update',[$car->id],['class'=>'btn btn-warning float-right']) !!}
                        </th>
                    </tr>

                @endforeach

                </tbody>
            </table>
            <div class="row">
                <div class="col-6">
                    <a href="/agences/{{$agency->id}}/cars/add" class="btn btn-primary">add a car </a>
                </div>
            </div>
        </div>
    </div>

@endsection