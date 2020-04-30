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
                url: "{{ route('products.add-product')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    alert('Image has been uploaded successfully');
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });

</script>
