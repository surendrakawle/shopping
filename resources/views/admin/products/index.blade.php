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
                                Product List
                            </h2>
                            <button  class=" btn btn-lg btn-primary header-dropdown m-r--5" type="button"  data-toggle="modal" data-target="#CreateProductModal">
                                Add Product
                            </button>

                        </div>
                        <div class="body  table-responsive">

                            <table class="table datatable">
                                <thead>
                                    <tr class="btn-danger">
                                        <th>Product NAME</th>
                                        <th>CATALOGUE NAME</th>
                                        <th>descriptionRIPTION</th>
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
                                ADD Product
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="form-group error">

                            </div>
                            <form id="wizard_with_validation" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
                                <h3>FIRST</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" id="name" required>
                                            <label class="form-label">Product Name*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="code" id="code" >
                                            <label class="form-label">Code</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="brand_name" id="brand_name" >
                                            <label class="form-label">Brand Name</label>
                                        </div>
                                    </div>
                                    <label class="form-label">Category Name*</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select class="form-control" id="categories_name" name="categories_name" required>
                                                <option value="1">-- Please select --</option>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>SECOUND</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="color" id="color" class="form-control" >
                                            <label class="form-label">Color</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="price" id="price" class="form-control" required>
                                            <label class="form-label">Price*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="discount" id="discount" class="form-control" required>
                                            <label class="form-label">Discount*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input  type="text" name="size" id="size" class="form-control" >
                                            <label class="form-label">Size*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea name="description" name="description" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                            <label class="form-label">descriptionription*</label>
                                        </div>
                                    </div>
                                    
                                </fieldset>

                                <h3>FINAL</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="unit" id="unit" class="form-control" required>
                                            <label class="form-label">Unit*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input  type="number" name="quantity" id="quantity" class="form-control" >
                                            <label class="form-label">Quantity</label>
                                        </div>
                                    </div>
                                    
                                    <label class="form-label">Images*</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                                    <input name="images[]" id="images" type="file" multiple  required/>
                                        </div>
                                    </div>
                                    <input id="acceptTerms-2" name="stock" type="checkbox" required checked>
                                    <label for="acceptTerms-2">Product in stock.</label><br>
                                    <input id="acceptTerms-2" name="home_page" type="checkbox">
                                    <label for="acceptTerms-2">Show in home page.</label>
                                </fieldset>
                                <button type="submit" class="btn btn-danger m-t-15 waves-effect" id="SubmitCreateProductForm" style="display:none">Add</button>
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
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Product Edit</h4>
                <button type="button" class="close modelClose" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">

                <div id="EditProductModalBody">

                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="SubmitEditProductForm">Update</button>
                <button type="button" class="btn btn-danger modelClose" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Product Modal -->
<div class="modal" id="DeleteProductModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">product Delete</h4>
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
            "order": [[ 0, "description" ]],
            ajax: '{{ route('get-product') }}',
            columns: [
               {data: 'name', name: 'name'},
               {data: 'price', name: 'price'},
                {data: 'images', name: 'images'},
               {data: 'Actions', name: 'Actions',orderable:false,serachable:false,sClass:'text-center'},
            ]
        });

       /* // Create product Ajax request.
        $('#SubmitCreateProductForm').click(function(e) {
            // e.preventDefault();
            return false;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('product.store') }}",
                method: 'post',
                data: {
                     name: $('#name').val(),
                     code: $('#code').val(),
                     description: $('#description').val(),
                     color: $('#color').val(),
                     price: $('#price').val(),
                     images: $('#images').val(),
                     categories_name: $('#categories_name').val(),
                     size: $('#size').val(),
                     unit: $('#unit').val(),
                     stock: $('#stock').val(),
                     brand_name: $('#brand_name').val(),
                     quantity: $('#quantity').val(),
                     discount: $('#discount').val(),
                     home_page: $('#home_page').val(),
                },
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
                        $('#descriptionription').val('');
                        showNotification('alert-success', result.success, 'top', 'center', 'animated zoomInDown', 'animated zoomOutDown');


                    }
                }
            });
        });*/

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
                url: "product/"+id+"/edit",
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
        $('#SubmitEditProductForm').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "product/"+id,
                method: 'PUT',
                data: {
                    categories_name: $('#editcategories_name').val(),
                    catelogue_id: $('#editcatelogue_id').val(),
                    descriptionription: $('#editdescriptionription').val(),
                },
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
                        $('#descriptionription').val('');
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
                url: "product/"+id,
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
