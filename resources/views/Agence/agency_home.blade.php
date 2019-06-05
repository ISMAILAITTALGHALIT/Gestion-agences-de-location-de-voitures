@extends('layouts.app')

@section('content')

    @if(sizeof($agency->cars) == 0 )

        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="card"><div class="card-header">My Cars</div><div class="card-body">
                            <a href="/agences/{{$agency->id}}/cars/add" class="btn btn-primary">add a car first</a>
                        </div></div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>



    @else

        @include('cars.cars_list',['agency',$agency])

    @endif

@endsection