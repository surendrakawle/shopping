@extends('layouts.app')

@section('content')
<div class="login-page">
<div class="card login-box">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>{{ __('Login') }}</h2>
                                </div>
                            </div>

                        </div>
                        <div class="body">
                           <div class="card-body table-responsive-sm table-responsive-md table-responsive-lg">

                                <form method="POST" class="form-horizontal" action="{{ route('login') }}">
                                    @csrf
                                <div class="form-group row">
                                     <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                        <div class="col-md-6">
                                           <div class="form-line">
                                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                           </div>
                                       </div>

                                </div>
                                <div class="form-group row ">

                                     <label for="password" class="col-md-6 col-form-label text-md-right">{{ __('Password') }}</label>
                                     <div class="col-md-6">
                                           <div class="form-line">
                                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                            </div>
                                       </div>

                                </div>

                                <div class="row">
                                    <div class="col-xs-8 p-t-5">
                                        <input type="checkbox" name="remember" id="remember" class="filled-in chk-col-pink" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="rememberme">Remember Me</label>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                                    </div>
                                </div>
                                <div class="row m-t-15 m-b--20">
                                    <div class="col-xs-6">
                                        <a href="{{ route('register') }}">Register Now!</a>
                                    </div>
                                    <div class="col-xs-6 align-right">
                                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                                    </div>
                                </div>

                                </form>

                        </div>

                        </div>
                    </div>
                    </div>

@endsection
