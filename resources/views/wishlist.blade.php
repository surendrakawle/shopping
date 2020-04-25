@extends('layouts.app')

@section('content')
            <!-- Custom Content -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
                            <button type="button" class="btn btn-primary waves-effect pull-right">
                                <i class="material-icons">add_shopping_cart</i>
                                <span>Add to cart</span>
                            </button>
                            <h2>
                                Wishlist
                             </h2>
                            
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
                                                <button type="button" class="btn btn-primary waves-effect pull-right">
                                                    <i class="material-icons">add_shopping_cart</i>
                                                   
                                                </button>
                                            </h4>
                                            <strike> $400.00  </strike>$369.00  30% Discount color BLACK
                                           
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
                                                <button type="button" class="btn btn-primary waves-effect pull-right">
                                                    <i class="material-icons">add_shopping_cart</i>
                                                   
                                                </button>
                                            </h4>
                                            <strike> $400.00  </strike>$369.00  30% Discount color BLACK
                                           
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
                                                <button type="button" class="btn btn-primary waves-effect pull-right">
                                                    <i class="material-icons">add_shopping_cart</i>
                                                   
                                                </button>
                                            </h4>

                                            <strike> $400.00  </strike>$369.00  30% Discount color BLACK 
                                           
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
