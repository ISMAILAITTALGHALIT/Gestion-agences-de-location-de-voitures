@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card">

                    <div class="card-header">Update a Car  </div>
                    <div class="card-body">


                        {!! Form::open(['method'=>'PUT','route'=>['cars.update',$car->id]]) !!}

                            @csrf

                            <div class="row">
                                <div class="col-6">

                                    <div class="form-group row">
                                        <label for="type" class="col-md-4 col-form-label text-md-right">{{ __("Car's Type") }}</label>

                                        <div class="col-md-6 input-group">

                                            <select name="type" class="custom-select" id="type">
                                                <option value="Hatchback">Hatchback</option>
                                                <option value="Sedan">Sedan</option>
                                                <option value="MPV">MPV</option>
                                                <option value="SUV">SUV</option>
                                                <option value="Crossover">Crossover</option>
                                                <option value="Convertible">Convertible</option>
                                                <option value="Truck">Truck</option>
                                                <option value="Sports Car">Sports Car</option>
                                                <option value="Wagon">Wagon</option>
                                                <option value="Luxury Car">Luxury Car</option>
                                                <option value="Hybrid/Electric">Hybrid/Electric</option>
                                                <option value="Van">Van</option>
                                            </select>

                                            @error('type')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Car image') }}</label>

                                        <div class="col-md-6">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input form-control @error('image') is-invalid @enderror"  accept="image/png, image/jpeg" name="image" id="image"  aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="image">Choose files</label>
                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __("Car's Brand") }}</label>

                                        <div class="col-md-6 input-group">

                                            <select name="brand" class="custom-select" id="brand">
                                                <option>choose a brand</option>
                                                @foreach(\App\models\brand::all() as $brand)
                                                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                @endforeach
                                            </select>

                                            @error('brand')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">

                                    <div class="form-group row">
                                        <label for="model" class="col-md-4 col-form-label text-md-right">{{ __("Car's Model") }}</label>

                                        <div class="col-md-6 input-group">

                                            <select name="model" class="custom-select" id="model">

                                                <option>please choose a brand first</option>

                                            </select>

                                            @error('model')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
                            <script>
                                jQuery(document).ready(function($){
                                    $('#brand').change(function(){
                                        $.get("{{ url('api/dropdown')}}",
                                            { option: $(this).val() },
                                            function(data) {
                                                var model = $('#model');
                                                model.empty();

                                                $.each(data, function(index, element) {
                                                    model.append("<option value='"+ element.id +"'>" + element.car_model_name + "</option>");
                                                });
                                            });
                                    });
                                });
                            </script>

                            <div class="row">
                                <div class="col-6">

                                    <div class="form-group row">
                                        <label for="delivery_place" class="col-md-4 col-form-label text-md-right">{{ __("Delivery place") }}</label>

                                        <div class="col-md-6">
                                            <input id="delivery_place" placeholder="{{$car->delivery_place}}" type="text" class="form-control @error('delivery_place') is-invalid @enderror" name="delivery_place" value="{{ old("Delivery place") }}" required autocomplete="Delivery place" autofocus>

                                            @error('delivery_place')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>


                                </div>
                                <div class="col-6">

                                    <div class="form-group row">
                                        <label for="luggage" class="col-md-4 col-form-label text-md-right">{{ __("luggage") }}</label>

                                        <div class="col-md-6">

                                            <select name="luggage" class="custom-select" id="luggage">

                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="+4">+4</option>

                                            </select>

                                            @error('luggage')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-6">

                                    <div class="form-group row">
                                        <label for="seats" class="col-md-4 col-form-label text-md-right">{{ __("seats") }}</label>

                                        <div class="col-md-6">

                                            <select name="seats" class="custom-select" id="seats">

                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="+4">+4</option>

                                            </select>

                                            @error('seats')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">

                                    <div class="form-group row">
                                        <label for="transmission" class="col-md-4 col-form-label text-md-right">{{ __("transmission") }}</label>

                                        <div class="col-md-6">

                                            <select name="transmission" class="custom-select" id="transmission">


                                                @if($car->transmission == "Autmatic")

                                                    <option value="Automatic" selected>Automatic</option>
                                                    <option value="Manual">Manual</option>

                                                    @else

                                                    <option value="Automatic">Automatic</option>
                                                    <option value="Manual" selected>Manual</option>

                                                @endif




                                            </select>

                                            @error('transmission')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="fuel" class="col-md-4 col-form-label text-md-right">{{ __("fuel") }}</label>

                                        <div class="col-md-6">

                                            <select name="fuel" class="custom-select" id="fuel">

                                                @if($car->fuel == "petrol")
                                                <option value="petrol" selected>Petrol</option>
                                                <option value="diesel">Diesel</option>
                                                    @else
                                                    <option value="petrol" >Petrol</option>
                                                    <option value="diesel" selected>Diesel</option>
                                                @endif

                                            </select>

                                            @error('fuel')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="fuel_policy" class="col-md-4 col-form-label text-md-right">{{ __("fuel policy (full)") }}</label>

                                        <div class="col-md-6">

                                            <select name="fuel_policy" class="custom-select" id="fuel_policy">

                                                <option value="yes">yes</option>
                                                <option value="no">no</option>

                                            </select>

                                            @error('fuel_policy')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">

                                    <div class="form-group row">
                                        <label for="mileage_unlimited" class="col-md-4 col-form-label text-md-right">{{ __("mileage unlimited") }}</label>

                                        <div class="col-md-6">

                                            <select name="mileage_unlimited" class="custom-select" id="mileage_unlimited">

                                                <option value="1">yes</option>
                                                <option value="0">no</option>

                                            </select>

                                            @error('mileage_unlimited')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">


                                    <div class="form-group row">
                                        <label for="availability_date" class="col-md-4 col-form-label text-md-right">{{ __("availability date") }}</label>

                                        <div class="col-md-6">

                                            <input id="availability_date" placeholder="{{$car->availability_date}}" type="date" class="form-control @error('availability_date') is-invalid @enderror" name="availability_date" value="{{ old("availability date") }}" required autocomplete="availability date" autofocus>


                                            @error('availability_date')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>


                                </div>
                            </div>



                            <div class="row">

                                <div class="col-6">

                                    <div class="form-group row">
                                        <label for="price" class="col-md-4 col-form-label text-md-right">{{ __("price") }}</label>

                                        <div class="col-md-6">
                                            <input id="price" type="text" placeholder="{{$car->price}}" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old("price") }}" required autocomplete="price" autofocus>

                                            @error('price')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="col-6"><div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Update') }}
                                            </button>
                                        </div>
                                    </div></div>
                            </div>

                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>

    </div>



@endsection
