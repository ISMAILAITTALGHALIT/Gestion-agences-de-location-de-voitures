






    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-center">

                        make a search

                    </div>
                    <div class="card-body">

                        <form action="search" method="GET">
                            @csrf

                            <div class="row">
                                <div class="col-12">

                                    <div class="input-group mb-3">
                                        <input type="text" name="search_city" class="form-control @error('search_city') is-invalid @enderror" placeholder="search by city" aria-label="search by city" >
                                        <div class="input-group-append">
                                        </div>
                                        @error('search_city')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <label for="start_date">Start Date</label>
                                    <div class="input-group mb-3">
                                        <input type="date" id="start_date" name="start_date" class="form-control @error('start_date') is-invalid @enderror" >
                                        <div class="input-group-append">
                                        </div>
                                        @error('start_date')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="end_date">End Date</label>
                                    <div class="input-group mb-3">

                                        <input type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" id="end_date" >
                                        <div class="input-group-append">
                                        </div>
                                        @error('end_date')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Search') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4"></div>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
        <br>
        @if(\Illuminate\Support\Facades\Auth::user() != null)
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            My Reservations
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">


                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th scope="col">city</th>
                                                <th scope="col">Car</th>
                                                <th scope="col">Start Date</th>
                                                <th scope="col">End Date</th>
                                                <th scope="col"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(\Illuminate\Support\Facades\Auth::user()->client->reservations as $res)
                                                @if($res->confirmed == 0)
                                                    <tr class="table-active">
                                                        <th scope="col">{{ $res->city  }}</th>
                                                        <th scope="col">

                                                            <a href="{{ route('cars.show',[$res->car_id])  }}">

                                                                {{ \App\models\brand::find(\App\models\car::find($res->car_id)->brand_id)->brand_name }}
                                                                ,
                                                                {{ \App\models\CarModel::find(\App\models\car::find($res->car_id)->model_id)->car_model_name }}

                                                            </a>

                                                        </th>
                                                        <th scope="col">
                                                            {{ $res->start_date  }}
                                                        </th>
                                                        <th scope="col">

                                                            {{ $res->end_date }}

                                                        </th>
                                                        <th scope="col">
                                                            {!! Form::open(['method'=>'DELETE','route'=>['reservations.destroy',$res->id]]) !!}
                                                            {!!  Form::submit('Cancel',['class'=>'btn btn-danger float-right']) !!}
                                                            {!! Form::close() !!}
                                                        </th>
                                                    </tr>

                                                @else
                                                    <tr class="table-success">
                                                        <th scope="col" >{{ $res->city  }}</th>
                                                        <th scope="col">

                                                            <a href="{{ route('cars.show',[$res->car_id])  }}">

                                                                {{ \App\models\brand::find(\App\models\car::find($res->car_id)->brand_id)->brand_name }}
                                                                ,
                                                                {{ \App\models\CarModel::find(\App\models\car::find($res->car_id)->model_id)->car_model_name }}

                                                            </a>

                                                        </th>
                                                        <th scope="col">
                                                            {{ $res->start_date  }}
                                                        </th>
                                                        <th scope="col">

                                                            {{ $res->end_date }}

                                                        </th>
                                                        <th scope="col">
                                                            {!! Form::open(['method'=>'DELETE','route'=>['reservations.destroy',$res->id]]) !!}
                                                            {!!  Form::submit('Cancel',['class'=>'btn btn-danger float-right']) !!}
                                                            {!! Form::close() !!}
                                                        </th>
                                                    </tr>
                                                @endif
                                            @endforeach
                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>





