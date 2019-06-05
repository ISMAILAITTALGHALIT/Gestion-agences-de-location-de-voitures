 @extends('layouts.app')

 @section('content')


     <div class="container">
         <div class="row">
             <div class="col-3"></div>
             <div class="col-6">
                 <div class="card">

                     <div class="card-header">Update Agency</div>

                     <div class="card-body">


                         {!! Form::open(['method'=>'PUT','route'=>['agences.update',$agency->id]]) !!}

                         @csrf

                         <div class="form-group row">
                             <label for="city" class="col-md-4 col-form-label text-md-right">{{ __("Agency's City") }}</label>

                             <div class="col-md-6">
                                 <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{$agency->city}}" placeholder="{{ $agency->city }}" required autocomplete="Agency's city" autofocus>

                                 @error('city')
                                 <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                             </div>
                         </div>


                         <div class="form-group row">
                             <label for="adress" class="col-md-4 col-form-label text-md-right">{{ __("Agency's Adress") }}</label>

                             <div class="col-md-6">
                                 <input id="adress" type="textarea" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{$agency->adress}}" placeholder="{{ $agency->adress }}" required autocomplete="Agency's adress" autofocus>

                                 @error('adress')
                                 <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                             </div>
                         </div>

                         <div class="form-group row">
                             <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __("Agency's Phone") }}</label>

                             <div class="col-md-6">
                                 <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$agency->phone}}" placeholder="{{ $agency->phone }}" required autocomplete="Agency's phone" autofocus>

                                 @error('phone')
                                 <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                             </div>
                         </div>

                         <input type="hidden" value="{{Auth::user()->entreprise->id}}" name="enterprise_id">


                         <div class="row">
                             <div class="col-12">
                                 {!!  Form::submit('Update',['class'=>'btn btn-primary float-right']) !!}
                             </div>
                         </div>

                         {!! Form::close() !!}

                     </div>
                 </div>
             </div>
         </div>
     </div>


 @endsection