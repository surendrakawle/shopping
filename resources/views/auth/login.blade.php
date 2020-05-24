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
                            <a href="{{ url('/redirect') }}" class="btn card btn-lg waves-effect">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAB/ElEQVRIidWUz24SURTGvzNQbBrSDUhjigutuCGRROi2YtIVNZmhZqi70k0fQIkYV901FNMH6CNQA4NJWTWVsCTFhYm7amJCjBFd2D9JUyzHRTvjwOVOKXbTb3Xuuef8vnNv5g5w3UVOm2G94PGdepPErAJ4CEIQAMBoAvjADOPXyJHxaTN1cmmDx9rW0w5hDcDdC4b8zOCXtdKT4kAGul5wtdpjOSZ6cQG4Swx6U4vUs1hZ6djzSm/hMPCzSTnz6OP0qpi36fxa3sogi6kQ5mZv46ZvFERAfL4iGjElq0bCEE4Q1gueDiEng0cf+LH0LISA/wwuEyu8HtYLHnPtNgPfqTcJ8JSs8f7UuBWnlnfw4+exxAF3/H/GVACbXScghiafC7jhcVmxFG6yANWM3f/SHJU1VIsJYf17/wRqertvPYNiZmz7iviW41g9+to8dNjlSTNyO1RZis9XkF4IIb0QstbOIust2E5A3wYxG1AWy/7QGldosCsYMMPoX3t5EVFZMDgKTJRAvHcF/C8t1+E7waCxEWszI/u/dAV4bv99C49+JlnJEzgzDJxAuWop8arHsFu1SD0LID8Efa0aqb8W0xLFtYrGSicPpnvOYN5TmDLvS3PlvttOvdHl3RFv67tGgMqgKMDB87YmgRsgxTjwB8qNjVjbcYhrrb+RMZs0DUy5pAAAAABJRU5ErkJggg=="/>
                                <span>Facebook</span>
                            </a>&nbsp;&nbsp;
                            <a href="{{ url('/redirect') }}" class="btn card btn-lg waves-effect">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAEUElEQVRIia2VTWxUVRTHf+e+6bQzr3Q6bWlp6YcdqgGFEoSIdIHBBImJH0REQDdGINGEIAsXJsQFSlwZNUFNJH6FsJJqTCRCIMGFqKlFiWmVJgi0pToDBabgtJ3pvHePi5lOOy0lJnqS/8t99517fvece/KukDcdHWzA2MWIGP6reeYqbmOPiKgA6NjgVtBDQMlsb809fQujGfB9cENI0Ml/lzko8qWEmzflAQO/ACtmBtaMh37fA1196KU4ZLK5T8YgTfNh1T3IQ8uRiHt7kC/LJgFfA49ND267+9DDJ2EkdedylJUgT6/DrF85E6KI3xrIZePvQh0F7lNVtPNULUd/LJ8r+SJLZ+DwcXRFG1RHEJEkcAX0YwnFBgIAEooNAE8AeJtf2C7IR7MCRVyINUCJg15JIoNXQXPnQ4ULbhkidreEYwemLyvOqXfDcvthzRESwbsLk3VR7JaHob11yl1AEknk6A9wIwXb1kPLgnNOedu9M/dVDDi//gToGj1W2aOn3TW6aCH68mYIBVG1xQvFgAgiBsEBkX7jLoqJiBb56Vj/GtBXNXO5Robf6CjAku3Wr99iNBIGtXMATA4gDiIOIG8bL7BfKluS0wADQ6AL9dYJJNk5lU3Fo/jlj6DqowXAJGQy8LTghbEAgohcRNgRAFIAkvkL7FTFbGk7iqKqeUAO1D8eZP/FepKeM63CkhsJuA5sb06zoS4bQ+VgAMdutFleNONDm/BpLGRQUpPvkpxULWo9Po/PpzdVNvMsi+y1vjBrq28SCuAaKW3tc8pb95C+fAYrFKRecc0REEER1Nc7Kp2FjJoUsNsAqJ4vxURG8YVJSXoIRAoSMRgJsHXBCEvdDA3BLA1Bj4agR9SxqM+UrKQrK/6ulnBLp+jY5dXgH9ORn6Iy9BkA8WAdJyMdPFvVUag/+fPIddDkQTqIGM4my3i+K1rItiqo577bWNUuIp4B+xwQpXwpUMqp0HJ2Ogv59NYfdKfjhU7hth1jyKrDW70uOmEL2hFLLyHd/36u36z5BiQrgTAn6p7hdc+S8rKohX3xb+kajxcCi8kr/z6Gz97uML8mHGxGsRklgmVjiwdqHgAISHnTcR0bimH8xbFwW7jkRs/BCevVAYyTZe+fJ+lwm3i8cjF3BSupdMpIZFN0jQ3RmfwNM6+WWudJEqO5+2HPygkiQb2Kmn0w81eR6V9yOPHz2k+Gu9/x1Ibu2IvTrMLWcP3stuvDqcCRC6/Uv1TcfZPBxwYPgO4C5fz4NfYOHCc+cetfAQThqeiKa7saH3w3IKQx5ispa75QAOiNCxHKAskpoDLqT3AocYYvrveS9rNzBl/mLmBn/Wrun9c4fb9xQsMtIquyOYCeKWF8/hUgWrw8Bzo9confRxMkJlJkrU9VSZjWUDWrK5poC9fA7OvSJ+1VS9Wim1MlGu9fh5o3QWtn71NnT1EowEzXDMh74jZ/MGfa/6f9A2LD8L+TMI/SAAAAAElFTkSuQmCC"/>
                                <span>Google</span>
                            </a>
                        </div>
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
