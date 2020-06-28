@extends('layouts.app')

@section('style')
<style>
    @import url('https://fonts.googleapis.com/css?family=Lato:400,700|Space+Mono:700');

* { margin: 0; padding: 0; box-sizing: border-box; }

$font-head: "";
$font-txt: "";
$small: "";
$blue: dodgerblue;
$violet: lighten(rebeccapurple, 20%);
$yellow: lemonchiffon;

html,
body {
	height: 100%;
	 }

.center-wrapper {
	padding: 0.5rem;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-orient: vertical;
	-webkit-box-direction: normal;
	    -ms-flex-direction: column;
	        flex-direction: column;
	-webkit-box-pack: center;
	    -ms-flex-pack: center;
	        justify-content: center;
	min-height: 100%; }

.content {
	margin: 0 auto;
	border: 1px solid $yellow;
	background: white; }



.body>a {
	padding: 0.2rem 0.5rem;
	border: 2px solid white;
	text-decoration: none; }

    .body>.logo { font-family: $font-head; }

.logo,
button { text-transform: uppercase; }

.body>.fa-search,
.body>.fa-arrow-left,
.body>.fa-lock { margin-right: 1rem; }

.top-bar,
.bag-head::after,
.bag-total::before { background: whitesmoke; }

.bag-head::after,
.bag-total::before,
.btn-remove { display: block; }

.bag-head::after,
.bag-total::before,
.description-text,
.promo-checkbox { margin: 0.5rem 0; }

.bag-head::after,
.bag-total::before {
	content: "";
	width: 100%;
	height: 3px; }

.muted { color: grey; }





	.product-image { max-width: 90%; }

.description {
	padding-right: 1rem;
	width: 60%; }

select {
	padding: 0.3rem;
	width: 60px; }

select,
button,
input[type="text"] { height: 40px; }

button {
	cursor: pointer;
	width: 100px;
	background: none;
	border: 2px solid $violet; }

.quantity-wrapper {
	-webkit-box-align: start;
	    -ms-flex-align: start;
	        align-items: flex-start;
	-webkit-box-orient: horizontal;
	-webkit-box-direction: normal;
	    -ms-flex-flow: row wrap;
	        flex-flow: row wrap;
	margin: 1rem 0 0.5rem; }

select {
	width: 50px;
	margin-right: 1rem; }

.bag-product,
.quantity-wrapper,
.subtotal,
.delivery,
.total,
.promo-code {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: justify;
    -ms-flex-pack: justify;
        justify-content: space-between; }

.subtotal,
.delivery,
input[type="checkbox"],
.help { margin-bottom: 0.5rem; }

.total { margin-bottom: 1rem; }

button,
.change-delivery { color: $violet; }

input[type="text"],
.btn-go-checkout { font-size: 1rem; }

input[type="text"] {
	width: calc(100% - 100px - 1rem);
	padding: 0.5rem; }

.btn-go-checkout {
	margin-top: 1rem;
	width: 100%;
	height: 40px;
	background: $violet;
	box-shadow: 0 3px 6px 2px darken(whitesmoke, 10%); }

.help {	text-align: center; }


</style>
@endsection
@section('content')
            <!-- Custom Content -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Order Summery
                            </h2>
                            <ul class=" btn btn-lg btn-primary header-dropdown m-r--5" id="addFormAction">
                               Checkout
                            </ul>
                        </div>
                        <div class="body">

                            <div class="panel  panel-post">
                                <div class="center-wrapper">
                                    <div class="content">

									 <?php $total = 0;?>
 
									@if(session('cart'))
										@foreach(session('cart') as $key => $value)
							
										 <?php 
										      $total += $value['price'] * 1;
											  $image=json_decode($value['photo']);
										 ?>
 
                                    <div class="bag-product">
                                        <div class="image">
                                            <img src="{{asset($image[0])}}" class="product-image">
                                        </div>
                                        <div class="description">
                                            <h4>{{$value['name']}}</h4>
                                            <p>Sun</p>
                                            <p class="description-text"></p>
                                            <p style="margin-bottom: 0.5rem;">One Size</p>
                                            <h2>Rs. {{$value['price']}}</h2>
                                            <div class="quantity-wrapper">
                                                <div>
                                                    <label for="quantity" style="margin-right: 0.5rem;">Quantity:</label>
                                                    <select name="quantity" style="margin-bottom: 1rem;">
                                                        <option value disabled>Please select</option>
                                                        <option value="1" selected>1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                                <button class="btn-remove">Remove</button>
                                            </div>
                                        </div>
                                    </div>
									<br>
									@endforeach
									@endif
								<!---	product end --->
                                    <div class="bag-total">
                                        <div class="subtotal">
                                            <p class="small">Subtotal:</p>
                                            <p class="small">Rs. <?php echo $total; ?></p>
                                        </div>
                                        <div class="delivery">
                                            <p class="small">Delivery (Standard - 2 working days):<br>
                                                <span class="change-delivery">Change delivery method</span></p>
                                            <p class="small">Free</p>
                                        </div>
                                        <div class="total">
                                            <h3>Total:</h3>
                                            <h3>$825.00</h3>
                                        </div>
                                        
                                        <button class="btn-go-checkout">
                                            <i class="fas fa-lock"></i>
                                            <span>Go to Checkout</span>
                                        </button>
                                    </div>
                                    <div class="help">
                                        <p>Need help? Call free 01234 567 890</p>
                                    </div>
                                </div>
                                </div>
                                <div class="bg"></div>

                                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection
