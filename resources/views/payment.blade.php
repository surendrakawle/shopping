@extends('layouts.app')

@section('content')
            <!-- Custom Content -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Product
                            </h2>
                            <ul class=" btn btn-lg btn-primary header-dropdown m-r--5" id="addFormAction">
                               Add Product
                            </ul>
                        </div>
                        <div class="body  table-responsive">
                             <form  id="upload_image_form" action="javascript:void(0)" class="form-horizontal addForm"  enctype="multipart/form-data" method="POST">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

@endsection
