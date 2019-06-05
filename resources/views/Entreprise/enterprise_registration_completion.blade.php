
                <div class="card-header">{{ __('Continue Registration') }}</div>

                <div class="card-body">

                        <form method="POST" action="entreprises">
                        @csrf

                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('Company Name') }}" required autocomplete="Company Name" autofocus>

                                @error('company_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="land_line" class="col-md-4 col-form-label text-md-right">{{ __('Land line') }}</label>

                            <div class="col-md-6">
                                <input id="land_line" type="phone" class="form-control @error('land_line') is-invalid @enderror" name="land_line" value="{{ old('Land line') }}" required autocomplete="land line">

                                @error('land_line')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="textarea" class="form-control @error('description') is-invalid @enderror" name="description" required >

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                            <div class="form-group row">
                                <label for="adress" class="col-md-4 col-form-label text-md-right">{{ __('Adress') }}</label>

                                <div class="col-md-6">
                                    <input id="adress" type="textarea" class="form-control @error('adress') is-invalid @enderror" name="adress" required >

                                    @error('adress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="logo_path" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>

                                <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input form-control @error('logo_path') is-invalid @enderror" name="logo_path" id="inputGroupFile01" accept="image/png, image/jpeg" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    @error('logo_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>
                            </div>

                            <div class="form-group row">
                                <label for="extra_docs" class="col-md-4 col-form-label text-md-right">{{ __('Extra Docs') }}</label>

                                <div class="col-md-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input form-control @error('extra_docs') is-invalid @enderror" name="extra_docs" id="extra_docs"  aria-describedby="inputGroupFileAddon01" multiple>
                                        <label class="custom-file-label" for="extra_docs">Choose files</label>
                                        @error('extra_docs')
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

