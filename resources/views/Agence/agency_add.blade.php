<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">

                <form action="agences" method="POST">

                    @csrf

                    <div class="form-group row">
                        <label for="city" class="col-md-4 col-form-label text-md-right">{{ __("Agency's City") }}</label>

                        <div class="col-md-6">
                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old("Agency's city") }}" required autocomplete="Agency's city" autofocus>

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
                            <input id="adress" type="textarea" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ old("Agency's adress") }}" required autocomplete="Agency's adress" autofocus>

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
                            <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old("Agency's phone") }}" required autocomplete="Agency's phone" autofocus>

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <input type="hidden" value="{{Auth::user()->entreprise->id}}" name="enterprise_id">


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add') }}
                            </button>
                        </div>
                    </div>


                </form>

            </div>
        </div>
    </div>
</div>