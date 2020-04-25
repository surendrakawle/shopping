@extends('layouts.app')

@section('content')
            <!-- Custom Content -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Order Summery
                            </h2>
                            <ul class=" btn btn-lg btn-primary header-dropdown m-r--5" id="addFormAction">
                               Checkout
                            </ul>
                        </div>
                        <div class="body">
                            
                            <div class="panel panel-primary panel-post">
                                <div class="panel-heading">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}" />
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="#">T - shirt</a>
                                                <span class="pull-right">
                                                 <b> - &nbsp;<label> 1 </label>&nbsp; + &nbsp; </b>
                                                 QTY
                                                </span>
                                            </h4>
                                            <strike> $400.00  </strike>$369.00  30% Discount color BLACK
                                            <span class="pull-right"> 1200 </span>
                                        </div>
                                    </div>
                                </div> 
                            </div><div class="panel panel-primary panel-post">
                                <div class="panel-heading">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}" />
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="#">T - shirt</a>
                                                <span class="pull-right">
                                                 <b> - &nbsp;<label> 1 </label>&nbsp; + &nbsp; </b>
                                                 QTY
                                                </span>
                                            </h4>
                                            <strike> $400.00  </strike>$369.00  30% Discount color BLACK
                                            <span class="pull-right"> 1200 </span>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="panel panel-primary panel-post">
                                <div class="panel-heading">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}" />
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="#">T - shirt</a>
                                                <span class="pull-right">
                                                 <b> - &nbsp;<label> 1 </label>&nbsp; + &nbsp; </b>
                                                 QTY
                                                </span>
                                            </h4>

                                            <strike> $400.00  </strike>$369.00  30% Discount color BLACK 
                                            <span class="pull-right"> 1200 </span>
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
