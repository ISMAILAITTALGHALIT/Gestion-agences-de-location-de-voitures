@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">

                @if($message = \Illuminate\Support\Facades\Session::get('success'))
                    <div class="alert alert-success alert-block" align="center">
                        <button type="button" class="close" data-dimiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
            </div>
            <div class="col-1"></div>
        </div>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <form name="contact" method="post" action="contact">
                    {{ csrf_field() }}
                    <fieldset class="col-12 border padding-r" class="border p-2">
                        <legend class="w-auto" align="center">Contact us</legend>
                        <div class="form">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-10 my-2">
                                            <label for="name">Name</label>
                                            <input name="name" type="" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Your name" >
                                            @if($errors->get('name'))
                                                @foreach($errors->get('name') as $message)
                                                    <li class="error">{{ $message }}</li>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-10 my-2">
                                            <label for="email">Email</label>
                                            <input name="email" type="" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="exemple@gmail.com" >
                                            @if($errors->get('email'))
                                                @foreach($errors->get('email') as $message)
                                                    <li class="error">{{ $message }}</li>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-10 my-2">
                                            <label for="subject">Subject</label>
                                            <input name="subject" type="" class="form-control {{ $errors->has('subject') ? ' is-invalid' : '' }}" placeholder="Yout subject" >
                                            @if($errors->get('subject'))
                                                @foreach($errors->get('subject') as $message)
                                                    <li class="error">{{ $message }}</li>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-11 my-2 ">
                                            <label for="message">Message</label>
                                            <textarea name="message" cols="10" rows="6" class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" id="validationTextarea" placeholder="Write your message here"></textarea>
                                            @if($errors->get('message'))
                                                @foreach($errors->get('message') as $message)
                                                    <li class="error">{{ $message }}</li>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row">
                                        <div class="container">
                                            <div class="form-group text-center col-12 my-2">
                                                <button type="submit" class="btn btn-primary ">Send email</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </fieldset>
                </form>
            </div>
            <div class="col-1"></div>
        </div>
    </div>





    <style type="text/css">
        .error{
            font-weight: 100;
            width: 100%;
            font-size: 13px;
            color: #ff6195;
            margin-top: 0px;
            margin-left: 5px;
            font-style: italic;
        }

    </style>





@endsection