
<div class="card-header">{{ __('Continue Registration') }}</div>

<div class="card-body">

    <form method="POST" action="clients">
        @csrf

        <div class="form-group row">
            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

            <div class="col-md-6">
                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('First Name') }}" required autocomplete="First Name" autofocus>

                @error('first_name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

            <div class="col-md-6">
                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('Last Name') }}" required autocomplete="Last Name" autofocus>

                @error('last_name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="identity_card" class="col-md-4 col-form-label text-md-right">{{ __('Identity Card') }}</label>

            <div class="col-md-6">
                <input id="identity_card" type="text" class="form-control @error('identity_card') is-invalid @enderror" name="identity_card" value="{{ old('Identity Card') }}" required autocomplete="Identity Card" autofocus>

                @error('identity_card')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>

            <div class="col-md-6">
                <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('Birth Date') }}" required autocomplete="Birth Date" autofocus>

                @error('birth_date')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="driver_licence_date" class="col-md-4 col-form-label text-md-right">{{ __('Driver Licence Date') }}</label>

            <div class="col-md-6">
                <input id="driver_licence_date" type="date" class="form-control @error('driver_licence_date') is-invalid @enderror" name="driver_licence_date" value="{{ old('Driver Licence Date') }}" required autocomplete="Driver Licence Date" autofocus>

                @error('driver_licence_date')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>











        <div class="form-group row">
            <label for="avatar_path" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>

            <div class="col-md-6">
                <div class="custom-file">
                    <input type="file" class="custom-file-input form-control @error('avatar_path') is-invalid @enderror" name="avatar_path" id="inputGroupFile01" accept="image/png, image/jpeg" aria-describedby="inputGroupFileAddon01" required>
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    @error('avatar_path')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="driver_licence_path" class="col-md-4 col-form-label text-md-right">{{ __('Driver Licence Upload') }}</label>

            <div class="col-md-6">
                <div class="custom-file">
                    <input type="file" class="custom-file-input form-control @error('driver_licence_path') is-invalid @enderror" name="driver_licence_path" id="inputGroupFile01" accept="image/png, image/jpeg" aria-describedby="inputGroupFileAddon01" required>
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    @error('driver_licence_path')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="identity_card_path" class="col-md-4 col-form-label text-md-right">{{ __('Identity Card Upload') }}</label>

            <div class="col-md-6">
                <div class="custom-file">
                    <input type="file" class="custom-file-input form-control @error('identity_card_path') is-invalid @enderror" name="identity_card_path" id="inputGroupFile01" accept="image/png, image/jpeg" aria-describedby="inputGroupFileAddon01" required>
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    @error('identity_card_path')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                </div>
            </div>
        </div>



        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>

