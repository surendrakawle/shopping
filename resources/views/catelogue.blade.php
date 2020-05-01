@extends('layouts.app')

@section('content')
            <!-- Custom Content -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Catelogue
                            </h2>
                            <ul class=" btn btn-lg btn-primary header-dropdown m-r--5" id="addFormAction" data-form="CATELOGUE">
                               Add Catelogue
                            </ul>
                        </div>
                        <div class="body  table-responsive">
                             <form  id="upload_image_form" action="javascript:void(0)" class="form-horizontal addForm"  enctype="multipart/form-data" method="POST">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Catelogue List
                            </h2>
                        </div>
                        <div class="body  table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="btn-danger">
                                        <th>#</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>USERNAME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Larry</td>
                                        <td>Jellybean</td>
                                        <td>@lajelly</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Larry</td>
                                        <td>Kikat</td>
                                        <td>@lakitkat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

@endsection
<!-- Jquery Core Js -->
    <script src="{{asset('frontEnd/plugins/jquery/jquery.min.js')}}"></script>



    <script type="text/javascript">

    $(document).ready(function (e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



        $('#upload_image_form').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            console.log("");
            $.ajax({
                type:'POST',
                url: "/catelogue",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });

</script>
