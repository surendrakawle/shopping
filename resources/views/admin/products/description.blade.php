@extends('layouts.app')

@section('style')
           <!-- <link href="{{asset('frontEnd/plugins/light-gallery/css/lightgallery.css')}}" rel="stylesheet">
			---><link href="{{asset('css/jquery.jqZoom.css')}}"  rel="stylesheet" type="text/css" />
@endsection
@section('content')


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <a href="" class="btn btn-primary waves-effect pull-right " role="button" >  CUSTOMIZE PRODUCT </a>
                            <h2>
							{{$product->name}}
                            </h2>


                        </div>
                        <div class="body  table-responsive">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">

                                        <div class="body">
                                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
												<?php 
													$images=json_decode($product->images);
												?>
												 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zoom-box">
                                                    <img class="img-responsive" id="img1"  src="{{ asset($images[0]) }}" height="200px">
                                                    
                                                </div>
												@foreach($images as $key=>$value)
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                    <img class="img-responsive thumbnail image-change" style="border: 1px solid #ddd!important;"  src="{{ asset($value) }}">
                                                    
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
								<form method="POST" enctype="multipart/form-data" action="{{route('cart.store')}}">
								@csrf
                                   <input type="hidden" name="product_id" value="{{$product->id}}">
                                  <input type="hidden" name="qty" value="1">
								
								   <div class="header">
                                                <button type="submit" class="btn btn-primary waves-effect pull-right " role="button" >  Buy Now </button>
                                            <b>
                                                <h2>
                                                    {{$product->name}}
                                                </h2>
                                            </b>


                                            </div>
								</form>
                                            <div class="row clearfix">
                                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                                  <h3> &nbsp;&nbsp; ₹ {{$product->price -($product->price*$product->discount/100)}}  &nbsp;<strike>₹ {{$product->price}} </strike>&nbsp; {{$product->discount}}% off</h3>
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
														<div class="panel ">
                                                            <div class="panel-heading" role="tab" id="headingThree_111">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_111" aria-expanded="false"
                                                                       aria-controls="collapseThree_111">
                                                                       Description
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree_111" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_11">
                                                                <div class="panel-body">
																{{$product->description}}
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
@section('script')
 <!-- Light Gallery Plugin Js 
 <script src="{{ asset('frontEnd/plugins/light-gallery/js/lightgallery-all.js')}}"></script>
 ---->
 <!-- Custom Js 
 <script src="{{ asset('frontEnd/js/pages/medias/image-gallery.js')}}"></script>
 ---->
 <script src="{{ asset('js/jquery.jqZoom.js')}}"></script>
 <script>
 $(function(){
  
  var options={
    selectorWidth: 50,
    selectorHeight: 50,
    viewerWidth: 700,
    viewerHeight: 375
  };
  $("#img1").jqZoom(options);
  $('.image-change').click(function(e){
	 $('.viewer-box').children('img').remove();
	 $('.zoom-selector').remove();
	  let url= $(this).attr('src');
	 $("#img1").attr('src',url); 
	  $("#img1").jqZoom(options);
  });
})
 </script>
@endsection

