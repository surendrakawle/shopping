@extends('layouts.app')

@section('content')
<div class="signup-page">
<div class="card signup-box">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>{{ __('Register') }}</h2>
                                </div>
                            </div>

                        </div>
                        <div class="body">
                           <div class="card-body ">
                    <form method="POST" class="form-horizontal" action="{{ route('register') }}">
                        @csrf


                        <div class="input-group ">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>


                                <div class="form-line">
                                <input id="name" type="text"  placeholder="Name Surname" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                        </div>

                        <div class="input-group ">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>

                                 <div class="form-line">
                                <input id="email" type="email"  placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                        </div>

                        <div class="input-group ">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>

                                 <div class="form-line">
                                <input id="password" type="password" minlength="6" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                        </div>

                        <div class="input-group ">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>

                                 <div class="form-line">
                                <input id="password-confirm" minlength="6" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                            <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                        </div>
                        <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

                        <div class="m-t-25 m-b--5 align-center">
                            <a href="{{ route('login') }}">You already have a membership?</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
