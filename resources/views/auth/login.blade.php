@extends('layouts.app')

@section('content')
<div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>{{ __('Login') }}</h2>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                           <div class="card-body table-responsive-sm table-responsive-md table-responsive-lg">
                
                                <form method="POST" class="form-horizontal" action="{{ route('login') }}">
                                    @csrf
                                <div class="form-group row">
                                     <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
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

                                     <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
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
                                <div class="row clearfix">

                                    <label  class="col-md-4 col-form-label text-md-right"></label>
                                     
                                     <div class=" col-md-6 ">
                                           <div class="form-group">
                                               <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                           </div>
                                       </div>
                                </div>
                                <div class="form-group row mb-0">

                                     <label  class="col-md-4 col-form-label text-md-right"></label>
                                    
                                     <div class=" col-md-6 offset-md-4">
                                           <div class="form-group">
                                                <button type="submit" class="btn btn-primary">
                                                     {{ __('Login') }}
                                                 </button>

                                                 @if (Route::has('password.request'))
                                                     <a class="btn btn-link" href="{{ route('password.request') }}">
                                                         {{ __('Forgot Your Password?') }}
                                                     </a>
                                                 @endif
                                           </div>
                                       </div>
                                </div>
                                </form>   
                
                        </div>
            
                        </div>
                    </div>

@endsection
