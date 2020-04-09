@extends('layouts.app')

@section('content')
            <!-- Custom Content -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CUSTOM CONTENT
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
                                <div class="col-sm-6 col-md-3">
                                    <div class="thumbnail">
                                        <img src="http://placehold.it/500x300">
                                        <div class="caption">
                                            <h3>Thumbnail label</h3>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s
                                            </p>
                                            <p>
                                                <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">BUTTON</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="thumbnail">
                                        <img src="http://placehold.it/500x300">
                                        <div class="caption">
                                            <h3>Thumbnail label</h3>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s
                                            </p>
                                            <p>
                                                <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">BUTTON</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="thumbnail">
                                        <img src="http://placehold.it/500x300">
                                        <div class="caption">
                                            <h3>Thumbnail label</h3>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s
                                            </p>
                                            <p>
                                                <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">BUTTON</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="thumbnail">
                                        <img src="http://placehold.it/500x300">
                                        <div class="caption">
                                            <h3>Thumbnail label</h3>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s
                                            </p>
                                            <p>
                                                <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">BUTTON</a>
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
@endsection
