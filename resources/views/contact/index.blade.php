@extends('layouts.app')
@section('style')
<style>
    .btn {
        border-radius: 25px!important;
    }
</style>
@endsection
@section('content')
<div class="signup-page">
<div class="card signup-box">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 align-center fon-bold">
                                    <h2>Drop Us a Message</h2>
                                </div>
                            </div>

                        </div>
                        <div class="body">
                           <div class="card-body ">
                    <form method="POST" class="form-horizontal" action="">
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
                                <i class="material-icons">call</i>
                            </span>

                                 <div class="form-line">
                                <input id="mobile" type="number" minlength="6" placeholder="Mobile Number" class="form-control @error('password') is-invalid @enderror" name="mobile" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                        </div>

                        <div class="input-group ">
                            <span class="input-group-addon">
                                <i class="material-icons">message</i>
                            </span>

                                 <div class="form-line">
                                <input id="message" minlength="6" placeholder="Message" type="text" class="form-control" name="message" required autocomplete="new-password">
                                </div>

                        </div>

                        <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SEND MESSAGE</button>



                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
