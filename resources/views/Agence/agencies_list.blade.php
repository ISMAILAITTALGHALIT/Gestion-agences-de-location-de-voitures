        <h3>My Agencies</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">city</th>
                <th scope="col">adress</th>
                <th scope="col">phone</th>
                <th scope="col">cars</th>
                <th scope="col">Reservations</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
@foreach(\App\models\Entreprise::find(Auth::user()->entreprise->id)->agences as $agence)


                <tr>
                    <th scope="row">{{ $agence->city }}</th>
                    <td>{{ $agence->adress }}</td>
                    <td>{{$agence->phone}}</td>
                    <td>

                        <a href="{{ route('agences.show',$agence->id)  }}">
                            <span class="badge badge-primary badge-pill">
                                {{ $agence->cars->count()  }}
                            </span>
                        </a>

                    </td>

                    <td>

                        <a href="{{ route('reservations.show',$agence->id)  }}">
                            <span class="badge badge-danger badge-pill">
                                {{ $agence->reservations->count()  }}
                            </span>
                        </a>

                    </td>
                    <td>

                        {!! Form::open(['method'=>'DELETE','route'=>['agences.destroy',$agence->id]]) !!}
                        {!!  Form::submit('Delete',['class'=>'btn btn-primary float-right']) !!}
                        {!! Form::close() !!}

                    </td>
                    <td>

                        {!! link_to_route('agences.edit','update',[$agence->id],['class'=>'btn btn-warning float-right']) !!}


                    </td>
                </tr>
@endforeach
                </tbody>
            </table>

    <div class="row"><div class="col-6"><br></div></div>
    <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">

                    Add Agency
                </button>
            </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Agency</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('Agence.agency_add')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>




    </div>
