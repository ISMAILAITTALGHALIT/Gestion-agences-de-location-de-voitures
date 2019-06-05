@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Mes Reservation</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Profile Picture</th>
                                <th scope="col">first name</th>
                                <th scope="col">last name</th>
                                <th scope="col">identity card</th>
                                <th scope="col">birth date</th>
                                <th scope="col">driver licence date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <th scope="col">{{$client->avatar_path}}</th>
                            <th scope="col">{{$client->first_name}}</th>
                            <th scope="col">{{$client->last_name}}</th>
                            <th scope="col">{{$client->identity_card}}</th>
                            <th scope="col">{{$client->birth_date}}</th>
                            <th scope="col">{{$client->driver_licence_date}}</th>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection