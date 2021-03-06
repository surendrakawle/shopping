<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Shoping Add') }}</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('frontEnd/favicon.ico')}}" type="image/x-icon">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href=" {{asset('frontEnd/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href=" {{asset('frontEnd/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('frontEnd/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('frontEnd/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('frontEnd/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('frontEnd/css/themes/all-themes.css')}}" rel="stylesheet" />
    <style>
        @font-face {
            font-family: brand-font;
            src: url({{asset('frontEnd/font/Cream-Cake.ttf')}});
        }
        @font-face {
            font-family: product-text-font;
            src: url({{asset('frontEnd/font/Jacky-Shake.otf')}});
        }

        .login-img{
            background-image: url("{{asset('frontEnd/images/image-gallery/login.jpg')}}");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
		.breadcrumb>li+li:before{
			display:none;
		}
    </style>
    @yield('style');
   
</head>

<body class="theme-red ">
    <!-- Page Loader
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>-->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING..." style="background-color: #f6f5f999;">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar" style="min-height: 125px;">
        <div class="container-fluid">

            <div class="navbar-header">
                <!---
				---->
				<a href="javascript:void(0);"  class="bars"></a> 
                
                <a class="navbar-brand brand-name"   href="{{route('/')}}">
                <!-- {{ config('app.name', 'Shoping Add') }} -->
                <img src="{{asset('Uphaaar.png')}}"  alt="logo"  style="margin-top:-15px;width:6%;">
				</a>
            

            <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                     -->
					 <li><a href="{{ route('wishlist')}}"  ><i class="material-icons">favorite</i></a></li>
                    <!-- #END# Call Search -->


                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">add_shopping_cart</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Products</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="{{ route('order.index') }}" class="btn btn-primary waves-effect">Checkout</a>
                            </li>
                        </ul>
                    </li>
                    @can('admin-users')
                    <!-- #END# Notifications -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                    @endcan
                </ul>
            </div>
        </div>

    </nav>

    @if($category ?? "")
    <nav class="navbar brand-catalog"style="background-color:none!important;min-height: 55px;">
        <div class="container-fluid">
            <div class=" table-responsive" style="border: none!important;color:white;">
			 <a href="javascript:void(0);"  class="bars"></a>
               
            <ol class="breadcrumb   m-t-0 pull-right" style="font-size:14px;width:1200px;overflow:hidden;margin-top:3px;">
                <li>
                    <a href="/" style="color:white!important;">
                        <i class="material-icons">home</i>
                    </a>
                </li>
                @foreach($category_1 as $key=>$value)
                <li onclick="listShow(this)" tar-data="collapsenav{{$key}}">
                    <a href="#collapsenav{{$key}}" style="color:white!important;" class="font-bold" role="button" data-toggle="collapse"  aria-expanded="false"
                    aria-controls="collapseExample">
                        {{ $value->catelogue_name }}
                    </a>
                    <i class="material-icons">arrow_drop_down</i>
                </li>
                @endforeach
            </ol>
			
                
            </div>

        </div>
        @foreach($category_1 as $key=>$value)
        <div class="collapse list_show" id="collapsenav{{$key}}">
            <div class="well nav-collapse-1" >
                <div class="body product_view">
                    <div class="row cat-show card at-container">
                        @if($category??"")
                        @foreach ($category as $key_1=>$value_1)
                        @if($value_1->catelogue_id==$value->id)
						@if($value_1->in_home=="off")
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 at-item ">
                            <a href="{{url('product_filter/12')}}" class="thumbnail" style="border:none!important;">
                                <img src="{{asset('storage/category/'.$value_1->image)}}" style="height:80px;width:100%;" >
                                <div class="T-Shirttion" style="padding-top:5px;">
                                 {{ $value_1->categories_name }}
                                </div>
                            </a>
                        </div>
                        @endif
                        @endif
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </nav>
        @endif

    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        @if(!isset($sidebar))
        <aside id="leftsidebar" class="sidebar" style="z-index: 12!important;">
            @can('admin-users')
            <!-- User Info -->
            <div class="user-info">

                <div class="image">
                    <img src="{{asset('frontEnd/images/user.png')}}" width="48" height="48" alt="User" />
                </div>

                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @can('manage-users')
                    {{ Auth::user()->name }}
                    @endcan
                    </div>
                    <div class="email">
                    @can('manage-users')
                    {{ Auth::user()->email }}
                    @endcan
                    </div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="/profile"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                             @if (Route::has('login'))
                                 @auth
                                     <li><a href="{{ url('/') }}"><i class="material-icons">home</i>Home</a></li>
                                    @else
                                        <li><a href="{{ route('login') }}"><i class="material-icons">input</i>Login</a></li>
                                         @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}"><i class="material-icons">edit</i>Register</a></li>
                                        @endif
                                    @endauth
                            @endif
                            <li><a href="{{ route('order.index') }}"><i class="material-icons">shopping_cart</i>Cart</a></li>
                            <li><a href="{{ route('wishlist') }}"><i class="material-icons">favorite</i>Wishlist</a></li>
                            <li role="separator" class="divider"></li>
                            @can('all-users')
                            <li>
                                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="material-icons">input</i>
                                {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            @endcan
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header"></li>

                    <li class="active">
                                    <a href="{{ route('/') }}">
                                         <i class="material-icons">home</i>
                                         <span>Home</span>
                                    </a>
                    </li>
                    @if(!Auth::user())
                    <li class="active">
                                    <a href="{{ route('login') }}">
                                         <i class="material-icons">input</i>
                                         <span>Login</span>
                                    </a>
                    </li>
                   @endif
                    @if($category??'')
                    @foreach ($category_1 as $key=>$value)
                    <li class="sidebar-catalog">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">store</i>
                            <span>{{ $value->catelogue_name }}</span>
                        </a>
                        @if($category_1??"")
                        <ul class="ml-menu">
                        @foreach($category as $key_1=>$value_2)
                            @if($value->id==$value_2->catelogue_id)
                            <li>
                                <a href="{{url('product_filter')}}">
                                    <span>{{ $value_2->categories_name }}</span>
                                </a>
                            </li>
                            @endif
                        @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                    @endif

                         @can('admin-users')
                    <li>
                                    <a href="{{ route('admin.users.index') }}">
                                         <i class="material-icons">perm_identity</i>
                                         <span>Users</span>
                                    </a>
                    </li>
                    @endcan
                    @can('manage-users')


                    <li class="">
                        <a href="{{ url('/slider') }}">
                             <i class="material-icons">device_hub</i>
                             <span>Slider</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('/catalogue') }}">
                             <i class="material-icons">device_hub</i>
                             <span>Catelogue</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('/category') }}">
                             <i class="material-icons">device_hub</i>
                             <span>Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('product.index') }}">
                             <i class="material-icons">donut_large</i>
                             <span>Product</span>
                        </a>
                    </li>
					<!----
                    <li class="">
                        <a href="{{ url('/') }}">
                             <i class="material-icons">store</i>
                             <span>Sale</span>
                        </a>
                    </li> ---->
                    <li class="">
                        <a href="{{ route('/') }}">
                             <i class="material-icons"> local_shipping</i>
                             <span>Order Management</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('Uphaaar_Gift_gallary.index') }}">
                             <i class="material-icons">wallpaper</i>
                             <span>Image Gallery</span>
                        </a>
                    </li>

                     @endcan
                     {{-- <li class="">
                        <a href="{{ route('order') }}">
                             <i class="material-icons">add_shopping_cart</i>
                             <span>Cart</span>
                        </a>
                    </li> --}}
                    <li class="">
                        <a href="/profile">
                             <i class="material-icons">person</i>
                             <span>Account</span>
                        </a>
                    </li>


                    <li class="">
                        <a href="{{ route('contact.index') }}">
                             <i class="material-icons">phone</i>
                             <span>Contact Us</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('faq') }}">
                             <i class="material-icons">help</i>
                             <span>Help</span>
                        </a>
                    </li>
                    @if(Auth::user())
                    <li>
                        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                             document.getElementById('logout-form_1').submit();">
                                             <i class="material-icons">input</i>
                                            <span>{{ __('Logout') }}</span>
                        </a>
                        <form id="logout-form_1" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </li>
                    @endif
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 - 2021 <a href="javascript:void(0);">Dream4U</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        @endif
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content" >
        @if($slider??'')
        <div class="row clearfix top-slider"

            <!-- With T - Shirttions -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0" >
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                           @foreach($slider as $key=>$value)   
                            <li data-target="#carousel-example-generic" data-slide-to="{{$key}}" class="
                            @if($key==0)
                                    active
                            @endif
                            "></li>
                            @endforeach 
                        </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner " role="listbox">
                                @foreach($slider as $key=>$value)
                                    <div class="item 
                                    @if($key==0)
                                    active
                                    @endif ">
                                        <img src="{{asset('storage/slider/'.$value->image)}}"  class="slider_img" style="width:100%!important" alt="uphaaar_offer_slider" />

                                    </div>
                                @endforeach 
                                </div>
                                <!-- Controls -->

                            </div>
                        </div>

                <!-- #END# With T - Shirttions -->

            </div>
            @endif
             @yield('content')
        </div>
    </section>


    <section class="content" style="margin-right:0px!important;margin-left:0px!important;background-color:#3e3e3e;">
        <div class="container-fluid">
            <!-- No Header Card -->
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0" >
                    <div class="card" style="margin-bottom:0px!important;">
                        <div class="body " style="
                        background-color: #3e3e3e;
                        color:#fff;
                        font-family: 'Montserrat', sans-serif;
                        font-weight: 700;
                        font-size: 16px;
                        letter-spacing: 1.4px;
                    ">
                            <div class="row">

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="">
                                        <div class="">
                                           <ul class="footer_ul">
                                                <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                                                <li>About Us</li>
                                                <li>Help Center</li>
                                                <li>FAQ</li>
                                           </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="">
                                        <div class="">
                                            <ul class="footer_ul">
                                                <li>Return Policy</li>
                                                <li>Terms of Use </li>
                                                <li>Security</li>
                                                <li>Privacy</li>
                                           </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="">
                                        <div class="">
                                           <ul class="footer_ul">
                                                <li>Facebook</li>
                                                <li>Twitter </li>
                                                <li>Youtube</li>
                                                <li>Telegram</li>
                                           </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="">
                                        <div class="">
                                        <ul class="footer_ul">
                                                <li> Shop No. 09  C-21 MALL, </li>
                                                <li>BHAYANDAR WEST ,</li>
                                                <li>MUMBAI 401601 ,</li>
                                                <li>MAHARATRA , INDIA .</li>
                                           </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- #END# No Header Card -->
        </div>
    </section>


    <!-- Jquery Core Js -->
    <script src="{{asset('frontEnd/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('frontEnd/plugins/bootstrap/js/bootstrap.js')}}"></script>


    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('frontEnd/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="{{asset('frontEnd/plugins/jquery-validation/jquery.validate.js')}}"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="{{asset('frontEnd/plugins/jquery-steps/jquery.steps.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('frontEnd/plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{asset('frontEnd/plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{asset('frontEnd/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('frontEnd/plugins/morrisjs/morris.js')}}"></script>




    <!-- Custom Js -->
    <script src="{{asset('frontEnd/js/admin.js')}}"></script>
    <script src="{{asset('frontEnd/js/pages/forms/form-wizard.js')}}"></script>


    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{asset('frontEnd/plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>
    <script src="{{asset('frontEnd/js/pages/ui/notifications.js')}}"></script>


    <!-- Demo Js -->
    <script src="{{asset('frontEnd/js/demo.js')}}"></script>

    <script src="{{asset('frontEnd/js/product.js')}}"></script>
    <script>
        function listShow(element){
            $(element).toggleClass('in');
           var selected= $(element).attr('tar-data');
           $('#'.selected).removeClass('list_show');
            $('.list_show').removeClass('in');

            $('#'.selected).addClass('list_show');

        }
        $("body").click(function(){
            $('.list_show').removeClass('in');
});
    </script>
    @yield('script')
</body>

</html>
