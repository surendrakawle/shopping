@extends('layouts.app')

@section('style')
            <link href="{{asset('frontEnd/plugins/light-gallery/css/lightgallery.css')}}" rel="stylesheet">
@endsection
@section('content')


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Image Gallery
                            </h2>


                        </div>
                        <div class="body  table-responsive">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="">

                                        <div class="body">
                                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <a href="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}" data-sub-html="T - shirt ">
                                                        <img class="img-responsive thumbnail" src="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}">
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <a href="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}" data-sub-html="T - shirt">
                                                        <img class="img-responsive thumbnail" src="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}">
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <a href="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}" data-sub-html="T - shirt">
                                                        <img class="img-responsive thumbnail" src="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}">
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <a href="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}" data-sub-html="T - shirt">
                                                        <img class="img-responsive thumbnail" src="{{ asset('frontEnd/images/image-gallery/1.jpeg') }}">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                </div>
            </div>

@endsection
@section('script')
 <!-- Light Gallery Plugin Js -->
 <script src="{{ asset('frontEnd/plugins/light-gallery/js/lightgallery-all.js')}}"></script>

 <!-- Custom Js -->
 <script src="{{ asset('frontEnd/js/pages/medias/image-gallery.js')}}"></script>
@endsection

