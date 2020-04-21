@extends('layouts.app')

@section('content')

            <div class="row clearfix">

            <!-- With T - Shirttions -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="{{asset('frontEnd/images/image-gallery/7.jpg')}}"  />
                                        
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontEnd/images/image-gallery/15.jpg')}}" />
                                        
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontEnd/images/image-gallery/16.jpg')}}" />
                                        
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# With T - Shirttions -->

            </div>

            <!-- Custom Content -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Top 10 Product
                            </h2>
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
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="{{asset('frontEnd/images/tshirt.jpeg')}}">
                                        <div class="T - Shirttion">
                                            <h3>T - Shirt</h3>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s
                                            </p>
                                            <p>
                                                <a href="{{asset('productdesc')}}" class="btn btn-primary waves-effect" role="button">  BUY NOW </a>
                                                <a href="javascript:void(0);" class="btn btn-primary waves-effect pull-right" role="button"> Rs. 200  </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="{{asset('frontEnd/images/tshirt.jpeg')}}">
                                        <div class="T - Shirttion">
                                            <h3>T - Shirt</h3>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s
                                            </p>
                                            <p>
                                                <a href="{{asset('productdesc')}}" class="btn btn-primary waves-effect" role="button">  BUY NOW </a>
                                                <a href="javascript:void(0);" class="btn btn-primary waves-effect pull-right" role="button"> Rs. 200  </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="{{asset('frontEnd/images/tshirt.jpeg')}}">
                                        <div class="T - Shirttion">
                                            <h3>T - Shirt</h3>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s
                                            </p>
                                            <p>
                                                <a href="{{asset('productdesc')}}" class="btn btn-primary waves-effect" role="button">  BUY NOW </a>
                                                <a href="javascript:void(0);" class="btn btn-primary waves-effect pull-right" role="button"> Rs. 200  </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="{{asset('frontEnd/images/tshirt.jpeg')}}">
                                        <div class="T - Shirttion">
                                            <h3>T - Shirt</h3>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s
                                            </p>
                                            <p>
                                                <a href="{{asset('productdesc')}}" class="btn btn-primary waves-effect" role="button">  BUY NOW </a>
                                                <a href="javascript:void(0);" class="btn btn-primary waves-effect pull-right" role="button"> Rs. 200  </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Custom Content -->
                <!--    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif   --->

            <!-- Custom Content -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Best Product
                            </h2>
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
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="{{asset('frontEnd/images/tshirt.jpeg')}}">
                                        <div class="T - Shirttion">
                                            <h3>T - Shirt</h3>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s
                                            </p>
                                            <p>
                                                <a href="{{asset('productdesc')}}" class="btn btn-primary waves-effect" role="button">  BUY NOW </a>
                                                <a href="javascript:void(0);" class="btn btn-primary waves-effect pull-right" role="button"> Rs. 200  </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="{{asset('frontEnd/images/tshirt.jpeg')}}">
                                        <div class="T - Shirttion">
                                            <h3>T - Shirt</h3>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s
                                            </p>
                                            <p>
                                                <a href="{{asset('productdesc')}}" class="btn btn-primary waves-effect" role="button">  BUY NOW </a>
                                                <a href="javascript:void(0);" class="btn btn-primary waves-effect pull-right" role="button"> Rs. 200  </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="{{asset('frontEnd/images/tshirt.jpeg')}}">
                                        <div class="T - Shirttion">
                                            <h3>T - Shirt</h3>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s
                                            </p>
                                            <p>
                                                <a href="{{asset('productdesc')}}" class="btn btn-primary waves-effect" role="button">  BUY NOW </a>
                                                <a href="javascript:void(0);" class="btn btn-primary waves-effect pull-right" role="button"> Rs. 200  </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="{{asset('frontEnd/images/tshirt.jpeg')}}">
                                        <div class="T - Shirttion">
                                            <h3>T - Shirt</h3>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s
                                            </p>
                                            <p>
                                                <a href="{{asset('productdesc')}}" class="btn btn-primary waves-effect" role="button">  BUY NOW </a>
                                                <a href="javascript:void(0);" class="btn btn-primary waves-effect pull-right" role="button"> Rs. 200  </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
