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
                                        <th>Product Name</th>
                                        <th>Catagories </th>
                                        <th>Images </th>
                                        <th>Price </th>
                                        <th>Description</th>
                                        <th>Action</th>
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
                                            <label class="form-label">Description*</label>
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
            <div class="modal-body" > 
				<form id="wizard_with_validation_1" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" id="id_1" value="">

                                <h3>FIRST</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" id="name_1" required>
                                            <label class="form-label">Product Name*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="code" id="code_1" >
                                            <label class="form-label">Code</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="brand_name" id="brand_name_1" >
                                            <label class="form-label">Brand Name</label>
                                        </div>
                                    </div>
                                    <label class="form-label">Category Name*</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select class="form-control" id="categories_name_1" name="categories_name" required>
                                                <option value="1">-- Please select --</option>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>SECOUND</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="color" id="color_1" class="form-control" >
                                            <label class="form-label">Color</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="price" id="price_1" class="form-control" required>
                                            <label class="form-label">Price*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="discount" id="discount_1" class="form-control" required>
                                            <label class="form-label">Discount*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input  type="text" name="size" id="size_1" class="form-control" >
                                            <label class="form-label">Size*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea id="description_1" name="description" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                            <label class="form-label">Description*</label>
                                        </div>
                                    </div>

                                </fieldset>

                                <h3>FINAL</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="unit" id="unit_1" class="form-control" required>
                                            <label class="form-label">Unit*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input  type="number" name="quantity" id="quantity_1" class="form-control" >
                                            <label class="form-label">Quantity</label>
                                        </div>
                                    </div>

                                    <label class="form-label">Images*</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                                    <input name="images[]" id="images_1" type="file" multiple  required/>
                                        </div>
                                    </div>
                                    <input id="stock_1" name="stock" type="checkbox" required checked>
                                    <label for="acceptTerms-2">Product in stock.</label><br>
                                    <input id="home_page_1" name="home_page" type="checkbox">
                                    <label for="acceptTerms-2">Show in home page.</label>
                                </fieldset>
                                <button type="submit" class="btn btn-danger m-t-15 waves-effect" id="SubmitCreateProductForm_1" style="display:none">Add</button>
                            </form>
               
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
var save_url="{{ route('product.store') }}";
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
               {data: 'catalogue', name: 'catalogue'},
               {data: 'image', name: 'image'},
               {data: 'price', name: 'price'},
               {data: 'description', name: 'description'},
               {data: 'Actions', name: 'Actions',orderable:false,serachable:false,sClass:'text-center'},
            ]
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
                url: "product/"+id+"/edit",
                method: 'GET',
                // data: {
                //     id: id,
                // },
                success: function(result) {
                    console.log(result);
					$('#id_1').val(result.data.id);
					$('#brand_name_1').val(result.data.brand_name);
					$('#brand_name_1').parent().addClass("focused");
					$('#categories_name_1').val(result.data.categories_name);
					$('#categories_name_1').parent().addClass("focused");
					$('#code_1').val(result.data.code);
					$('#code_1').parent().addClass("focused");
					$('#color_1').val(result.data.color);
					$('#color_1').parent().addClass("focused");
					$('#home_page_1').val(result.data.home_page);
					$('#discount_1').val(result.data.discount);
					$('#discount_1').parent().addClass("focused");
					$('#name_1').val(result.data.name);
					$('#name_1').parent().addClass("focused");
					$('#description_1').val(result.data.description);
					$('#description_1').parent().addClass("focused");
					$('#price_1').val(result.data.price);
					$('#price_1').parent().addClass("focused");
					$('#purchase_price_1').val(result.data.purchase_price);
					$('#purchase_price_1').parent().addClass("focused");
					$('#quantity_1').val(result.data.quantity);
					$('#quantity_1').parent().addClass("focused");
					$('#size_1').val(result.data.size);
					$('#size_1').parent().addClass("focused");
					$('#stock_1').val(result.data.stock);
					$('#unit_1').val(result.data.unit);
					$('#unit_1').parent().addClass("focused");
					//$('#images_1').val(result.data.images);
					
                    //$('#EditProductModalBody').html(result.html);
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

       function category(){
            $.ajax({
                url: "{{ route('get-category') }}",
                method: 'GET',
                success: function(result) {
                    // console.log(result);
                    result.data.forEach(element => {
                        // console.log(element);
                        $('#categories_name').append('<option value="'+element.id+'">'+element.categories_name+'</option>');
                        $('#categories_name_1').append('<option value="'+element.id+'">'+element.categories_name+'</option>');
                    });

                }
            });
       }
       category();
    });
</script>
@endsection

