@extends('layouts.app')

@section('content')

<div class="login-page">

    <div class="card login-box">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 login-img" style="height:100%; ">

                <div class="login_brand">
                    <br>
                    <center><span class="brand-name">Uphaaar </span></center>
                    <br>
                    <div style="padding: 10px">
                    Ecommerce, also known as electronic commerce or internet commerce, refers to the buying and selling of goods or services using the internet.
                    </div>
                    <br>
                    <ul>
                        <li>Uphaaar Uphaaar Uphaaar</li>
                        <li>Uphaaar Uphaaar Uphaaar</li>
                        <li>Uphaaar Uphaaar Uphaaar</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h2>Discover fashion</h2>
                        </div>
                    </div>

                </div>
                <div class="body">
                   <div class="card-body table-responsive-sm table-responsive-md table-responsive-lg">

                        <form method="POST" class="form-horizontal" action="{{ route('login') }}">
                            @csrf
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

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
    </div>
</div>

@endsection
