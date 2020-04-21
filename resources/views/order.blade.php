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
                        <div class="body  table-responsive">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="">
                                    <img class="img-responsive thumbnail" src="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}" max-width="60%">
                                </div> 
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="1" placeholder="Enter Quantity">
                                        </div>
                                        <span class="input-group-addon">
                                            QTY
                                        </span>
                                    </div>
                                </div> 
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                T - Shirt - RED - M 
                                </div>
                                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    &nbsp;&nbsp; ₹199  &nbsp;<strike>₹999 </strike>&nbsp; 80% off
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <img class="img-responsive responsive thumbnail" src="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}" max-width="60%">
                                </div> 
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="1" placeholder="Enter Quantity">
                                        </div>
                                        <span class="input-group-addon">
                                            QTY
                                        </span>
                                    </div>
                                </div> 
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                T - Shirt - RED - M 
                                </div>
                                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    &nbsp;&nbsp; ₹199  &nbsp;<strike>₹999 </strike>&nbsp; 80% off
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
