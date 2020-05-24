@extends('layouts.app')

@section('content')
            <!-- Custom Content -->
            <!-- Light Gallery Plugin Css -->
     <link href="{{asset('frontEnd/plugins/light-gallery/css/lightgallery.css')}}" rel="stylesheet">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <a href="{{route('order')}}" class="btn btn-primary waves-effect pull-right " role="button" >  Custom T - Shirt </a>
                            <h2>
                               T - Shirt
                            </h2>


                        </div>
                        <div class="body  table-responsive">
                            <div class="row clearfix">
                                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">

                                        <div class="body">
                                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <a href="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}" data-sub-html="Demo Description">
                                                        <img class="img-responsive thumbnail" src="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}">
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <a href="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}" data-sub-html="Demo Description">
                                                        <img class="img-responsive thumbnail" src="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}">
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <a href="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}" data-sub-html="Demo Description">
                                                        <img class="img-responsive thumbnail" src="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}">
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <a href="{{asset('frontEnd/images/image-gallery/1.jpeg')}}" data-sub-html="Demo Description">
                                                        <img class="img-responsive thumbnail" src="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}">
                                                    </a>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                    <div class="header">
                                                <a href="{{url('payment')}}" class="btn btn-primary waves-effect pull-right " role="button" >  Buy Now </a>
                                            <b>
                                                <h2>
                                                    Printed T-Shirt
                                                </h2>
                                            </b>


                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                                  <h3> &nbsp;&nbsp; ₹199  &nbsp;<strike>₹999 </strike>&nbsp; 80% off</h3>
                                                    <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                                                        <div class="panel ">
                                                            <div class="panel-heading" role="tab" id="headingOne_1">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">
                                                                        Available offers
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
                                                                <div class="panel-body">
                                                                    <ul>
                                                                        <li>Bank Offer 5% Unlimited Cashback </li>
                                                                        <li>Bank Offer 5% Unlimited Cashback </li>
                                                                        <li>Bank Offer 5% Unlimited Cashback </li>
                                                                        <ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel ">
                                                            <div class="panel-heading" role="tab" id="headingTwo_1">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false"
                                                                       aria-controls="collapseTwo_1">
                                                                       Deliver to
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
                                                                <div class="panel-body">
                                                                    <div class="col-md-12">

                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="Enter delivery pin code">
                                                                            </div>
                                                                            <span class="input-group-addon">
                                                                                <i class="material-icons">send</i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel ">
                                                            <div class="panel-heading" role="tab" id="headingThree_1">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false"
                                                                       aria-controls="collapseThree_1">
                                                                       Color
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
                                                                <div class="panel-body">
                                                                    <div class="demo-checkbox">
                                                                        <input type="checkbox" id="md_checkbox_1" class="chk-col-red" checked />
                                                                        <label for="md_checkbox_1">RED</label>
                                                                        <input type="checkbox" id="md_checkbox_2" class="chk-col-pink"  />
                                                                        <label for="md_checkbox_2">PINK</label>
                                                                        <input type="checkbox" id="md_checkbox_3" class="chk-col-purple"  />
                                                                        <label for="md_checkbox_3">PURPLE</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel ">
                                                            <div class="panel-heading" role="tab" id="headingThree_11">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_11" aria-expanded="false"
                                                                       aria-controls="collapseThree_1">
                                                                       Size
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree_11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_11">
                                                                <div class="panel-body">
                                                                    <div class="demo-checkbox">
                                                                        <input type="checkbox" id="md_checkbox_11" class="chk-col-red" checked />
                                                                        <label for="md_checkbox_1">S</label>
                                                                        <input type="checkbox" id="md_checkbox_21" class="chk-col-red"  />
                                                                        <label for="md_checkbox_2">M</label>
                                                                        <input type="checkbox" id="md_checkbox_31" class="chk-col-red"  />
                                                                        <label for="md_checkbox_3">L</label>
                                                                        <input type="checkbox" id="md_checkbox_41" class="chk-col-deep-red"  />
                                                                        <label for="md_checkbox_4">XL</label>
                                                                        <input type="checkbox" id="md_checkbox_51" class="chk-col-red"  />
                                                                        <label for="md_checkbox_5">XLL</label>


                                                                    </div>
                                                                </div>
                                                            </div>

                                                </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>

@endsection

