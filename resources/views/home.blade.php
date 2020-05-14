@extends('layouts.app')

@section('content')

            <div class="row clearfix">

            <!-- With T - Shirttions -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0" >
                    <div class="card">
                        <div class="body">
                            <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner " role="listbox">
                                    <div class="item active">
                                        <img src="{{asset('frontEnd/images/image-gallery/1.jpg')}}"  />

                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontEnd/images/image-gallery/1.jpg')}}" />

                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontEnd/images/image-gallery/1.jpg')}}" />

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
                    <div class="">
                        <div class="header">
                            <h2>
                                Top 10 Product
                            </h2>

                        </div>
                        <div class="body">
                            <div class="row">
                                @for ($i=0;$i<15;$i++)

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 prod">
                                    <div class="thumbnail" style="padding:15px!important">
                                        <img src="{{asset('frontEnd/images/tshirt.jpeg')}}">
                                        <div class="T - Shirttion">

                                                <h4>T - shirt</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"> <i class="material-icons">star_border</i></li>
                                                        <li class="list-inline-item"><i class="material-icons">star_border</i></li>
                                                        <li class="list-inline-item"><i class="material-icons">star_half</i><li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                                                <a  class="btn btn-primary  waves-effect"><i class="material-icons">add_shopping_cart</i></a>
                                                <a  class="btn btn-primary pull-right waves-effect"> <i class="material-icons">favorite</i></a>
                                        </div>
                                </div>
                                </div>

                                @endfor

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



@endsection
