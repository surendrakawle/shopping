@extends('layouts.app')

@section('style')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
            <!-- Custom Content -->
            <div class="row clearfix">

                <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Category List
                            </h2>
                            
                            <button  class=" btn btn-lg btn-primary header-dropdown m-r--5" type="button"  data-toggle="modal" data-target="#CreateProductModal">
                                Add Category
                            </button>

                        </div>
                        <div class="body  table-responsive">

                            <table class="table datatable">
                                <thead>
                                    <tr class="btn-danger">
                                        <th>CATEGORY NAME</th>
                                        <th>CATALOGUE NAME</th>
                                        <th>DESCRIPTION</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

<!-- Create Product Modal -->
<div class="modal" id="CreateProductModal">
    <div class="modal-dialog">
        <div class="modal-content ">
           <div class="modal-body card">


             <!-- Vertical Layout -->
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <div class="header">
                            <h2>
                                ADD CATEGORY
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="SubmitCreateProductForm" method="POST" enctype="multipart/form-data" action="javascript:void(0)">
                                <div class="form-group error">

                                </div>

                                <label for="categories_name">Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="categories_name" name="categories_name" class="form-control" placeholder="Enter your catalogue name">
                                    </div>
                                </div>
                                <label for="catelogue_id">Catalogue</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control" id="catelogue_id" name="catelogue_id">
                                            <option value="">-- Please select --</option>

                                        </select>
                                    </div>
                                </div>
                                <label for="catelogue_id">Images</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <input type="file" name="image" id="image" placeholder="Choose image" >          
                                    </div>
                                </div>
                                <label for="description">Description</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="description" name="description" class="form-control" placeholder="Enter your description">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success m-t-15 waves-effect" >Add</button>
                                <button type="button" class="btn btn-danger m-t-15 waves-effect" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- #END# Vertical Layout -->

        </div>
    </div>
</div>

<!-- Edit Product Modal -->
<div class="modal" id="EditProductModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="SubmitEditProductForm" method="POST" enctype="multipart/form-data" action="javascript:void(0)">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Category Edit</h4>
                <button type="button" class="close modelClose" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div id="EditProductModalBody">

                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" >Update</button>
                <button type="button" class="btn btn-danger modelClose" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Product Modal -->
<div class="modal" id="DeleteProductModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Category Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                Are you sure want to delete this catalogue?
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="SubmitDeleteProductForm">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        // init datatable.
        var dataTable = $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            pageLength: 5,
            // scrollX: true,
            "order": [[ 0, "desc" ]],
            ajax: '{{ route('get-category') }}',
            columns: [
               {data: 'categories_name', name: 'categories_name'},
               {data: 'catalogue', name: 'catalogue'},
                {data: 'description', name: 'description'},
               {data: 'Actions', name: 'Actions',orderable:false,serachable:false,sClass:'text-center'},
            ]
        });
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        // Create product Ajax request.
        $('#SubmitCreateProductForm').submit(function(e) {
            e.preventDefault();
           
            var formData = new FormData(this);

            $.ajax({
                url: "{{ route('category.store') }}",
                method: 'post',
                cache:false,
                contentType: false,
                processData: false,                   
                data:formData,
                success: function(result) {
                    if(result.errors) {
                        $('.error').html('');
                        $.each(result.errors, function(key, value) {
                            $('.error').show();
                            $('.error').append('<div class="alert bg-red alert-dismissible" role="alert"> '+
                               '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> '+value+'</div>');
                        });
                    } else {

                        $('#CreateProductModal').click();
                        $('.error').html('');
                        $('.datatable').DataTable().ajax.reload();
                        $('#categories_name').val('');
                        $('#description').val('');
                        showNotification('alert-success', result.success, 'top', 'center', 'animated zoomInDown', 'animated zoomOutDown');


                    }
                }
            });
        });

        // Get single product in EditModel
        $('.modelClose').on('click', function(){
            $('#EditProductModal').hide();
        });
        var id;
        $('body').on('click', '#getEditProductData', function(e) {
            e.preventDefault();
            $('.alert-danger').html('');
            $('.alert-danger').hide();
            id = $(this).data('id');
            $.ajax({
                url: "category/"+id+"/edit",
                method: 'GET',
                // data: {
                //     id: id,
                // },
                success: function(result) {
                    console.log(result);
                    $('#EditProductModalBody').html(result.html);
                    $('#EditProductModal').show();
                }
            });
        });
       
        // Update product Ajax request.
        $('#SubmitEditProductForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.append('id',id);
            $.ajax({
                url: "categoryUpdate",
                method: 'post',
                cache:false,
                contentType: false,
                processData: false,                   
                data:formData,
                success: function(result) {
                    if(result.errors) {
                        $('.error').html('');
                        $.each(result.errors, function(key, value) {
                            $('.error').show();
                            $('.error').append('<div class="alert bg-red alert-dismissible" role="alert"> '+
                               '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> '+value+'</div>');
                        });
                    } else {

                        $('#EditProductModal').hide();
                        $('.error').html('');
                        $('.datatable').DataTable().ajax.reload();
                        $('#categories_name').val('');
                        $('#description').val('');
                        showNotification('alert-success', result.success, 'top', 'center', 'animated zoomInDown', 'animated zoomOutDown');


                    }
                }
            });
        });

        // Delete product Ajax request.
        var deleteID;
        $('body').on('click', '#getDeleteId', function(){
            deleteID = $(this).data('id');
        })
        $('#SubmitDeleteProductForm').click(function(e) {
            e.preventDefault();
            var id = deleteID;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "category/"+id,
                method: 'DELETE',
                success: function(result) {
                        $('#DeleteProductModal').click();
                        $('.datatable').DataTable().ajax.reload();
                        showNotification('alert-danger', result.success, 'top', 'center', 'animated zoomInDown', 'animated zoomOutDown');

                }
            });
        });

       function Catalog(){
            $.ajax({
                url: "{{ route('get-catalogues') }}",
                method: 'GET',
                success: function(result) {
                    // console.log(result);
                    result.data.forEach(element => {
                        // console.log(element);
                        $('#catelogue_id').append('<option value="'+element.id+'">'+element.catelogue_name+'</option>');
                    });

                }
            });
       }
       Catalog();

    });
</script>
@endsection

