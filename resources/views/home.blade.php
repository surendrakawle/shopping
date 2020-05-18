@extends('layouts.app')

@section('content')


        <br>
        <br>
            <!-- Custom Content -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <div class="header">


                        </div>
                        <div class="body product_view">
                            <div class="row">
                                @if($category??"")
                                @foreach ($category as $key=>$value)
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 prod">
                                    <div class="thumbnail" style="padding:10px!important">
                                        <img src="{{asset('frontEnd/images/tshirt.jpeg')}}" class="img-size">
                                        <div class="T-Shirttion product-text">
                                            {{ $value->categories_name }}
                                        </div>
                                        <div class="spacer">
                                           <br>
                                           <br>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif

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
