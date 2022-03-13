
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Type some info">
  <meta name="author" content="Type name">

  <title>Online Shop </title>

  <!-- Bootstrap css -->
  <link href="{{ url('/website/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />

  <!-- Custom css -->
  <link href="{{ url('/website/css/ui.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('/website/css/responsive.css') }}" rel="stylesheet" type="text/css" />

  <!-- Font awesome 5 -->
  <link href="{{ url('/website/css/fontawsome.css') }}" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

<header class="section-header">	
	<section class="header-main">
		<div class="container">
			<div class="row gy-3 align-items-center">
				<div class="col-lg-2 col-sm-4 col-4">
					<a href="{{ route('home') }}" class="navbar-brand">
						<img class="logo" height="40" src="images/logo.svg">
					</a> <!-- brand end.// -->
				</div>
				<div class="order-lg-last col-lg-5 col-sm-8 col-8">
					<div class="float-end">
						<a href="{{ route('index') }}" class="btn btn-light"> 
              <i class="fas fa-user-cog"></i>  <span class="ms-1 d-none d-sm-inline-block">Admin  </span> 
						</a>
						<a href="#" class="btn btn-light"> 
						    <i class="fa fa-user"></i>  <span class="ms-1 d-none d-sm-inline-block">Sign in  </span> 
						</a>
						<a href="#" class="btn btn-light"> 
							<i class="fa fa-heart"></i>  <span class="ms-1 d-none d-sm-inline-block">Wishlist</span>   
						</a>
            <a href="{{ route('cart') }}" class="btn btn-light"> 
              <i class="far fa-shopping-cart"></i>  
              <span class="ms-1 d-none d-sm-inline-block">My Cart
                @if ($cart->count()!=0)
                  <span class="topbar"> <span class="badge bg-danger"> {{ $cart->count() }} </span> </span>
                @endif
              </span> 
						</a>
						
			    </div>
				</div> <!-- col end.// -->
				<div class="col-lg-5 col-md-12 col-12">
					<form action="#" class="">
		              <div class="input-group">
		                <input type="search" class="form-control" style="width:55%" placeholder="Search">
		                <select class="form-select">
		                  <option value="">All type</option>
		                  <option value="codex">Special</option>
		                  <option value="comments">Only best</option>
		                  <option value="content">Latest</option>
		                </select>
		                <button class="btn btn-primary"> <i class="fa fa-search"></i> </button>
		              </div> <!-- input-group end.// -->
		            </form>
				</div> <!-- col end.// -->
				
			</div> <!-- row end.// -->
		</div> <!-- container end.// -->
	</section> <!-- header-main end.// -->

    {{-- Second Navbar Starts --}}

    @include('layouts.navbar')

    {{-- Second Navbar Ends --}}

	
</header> <!-- section-header end.// -->

<!-- ================ SECTION INTRO ================ -->
<section class="section-intro pt-3">
	<div class="container">


        {{-- Poster Space Starts --}}
        @yield('poster')
        {{-- Poster Space Ends --}}

		 <!-- row //end -->

	</div> <!-- container end.// -->
</section>
<!-- ================ SECTION INTRO END.// ================ -->

<!-- ================ SECTION CATEGORY ================ -->

<section class="padding-top">
<div class="container">
	@yield('category')
</div>	
</section>
<!-- ================ SECTION CATEGORY END.// ================ -->

<!-- ================ SECTION PRODUCTS ================ -->
<section class="padding-y">
<div class="container">

	{{-- New Products Space Starts --}}
    @yield('new_product')
	{{-- New Products Space Ends --}}

</div> <!-- container end.// -->
</section>
<!-- ================ SECTION PRODUCTS END.// ================ -->


<!-- ================ SECTION FEATURE ================ -->
{{-- Rest of the stuff --}}
@yield('recommend')
<!-- ================ SECTION PRODUCTS END.// ================ -->

<section class="padding-y-sm bg-gray-light">
  <div class="container">
      <div class="row gy-3 align-items-center">
        <div class="col-md-4">
          <form>
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Email">
              <button class="btn btn-light" type="submit"> Subscribe  </button>
            </div> <!-- input-group.// -->
          </form>
        </div>
        <div class="col-md-8">
          <nav class="float-lg-end">
              <a class="btn btn-icon btn-light" title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-icon btn-light" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram"></i></a>
              <a class="btn btn-icon btn-light" title="Youtube" target="_blank" href="#"><i class="fab fa-youtube"></i></a>
              <a class="btn btn-icon btn-light" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter"></i></a>
          </nav>
        </div>
      </div> <!-- row.// -->
  </div><!-- //container -->
</section>

<footer class="section-footer bg-white border-top">
<div class="container">
  <section class="footer-main padding-y">
    <div class="row">
      <aside class="col-12 col-sm-12 col-lg-4">
        <article class="me-lg-4">
          <img src="images/logo.png" class="logo-footer">
          <p class="mt-3"> © 2018- 2021 Templatemount. <br> All rights reserved. </p>
        </article>
      </aside>
      <aside class="col-6 col-sm-4 col-lg-2">
        <h6 class="titl">Store</h6>
        <ul class="list-menu mb-3">
          <li> <a href="#">About us</a></li>
          <li> <a href="#">Find store</a></li>
          <li> <a href="#">Categories</a></li>
          <li> <a href="#">Blogs</a></li>
        </ul>
      </aside>
      <aside class="col-6 col-sm-4 col-lg-2">
        <h6 class="title">Information</h6>
        <ul class="list-menu mb-3">
          <li> <a href="#">Help center</a></li>
          <li> <a href="#">Money refund</a></li>
          <li> <a href="#">Shipping info</a></li>
          <li> <a href="#">Refunds</a></li>
        </ul>
      </aside>
      <aside class="col-6 col-sm-4  col-lg-2">
        <h6 class="title">Support</h6>
        <ul class="list-menu mb-3">
          <li> <a href="#"> Help center </a></li>
          <li> <a href="#"> Documents </a></li>
          <li> <a href="#"> Account restore </a></li>
          <li> <a href="#"> My Orders </a></li>
        </ul>
      </aside>
      <aside class="col-6 col-sm-4 col-lg-2">
        <h6 class="title">Our apps</h6>
        <a href="#" class="mb-2 d-inline-block"> <img src="images/misc/btn-appstore.png" height="38"></a>
        <a href="#" class="mb-2 d-inline-block"> <img src="images/misc/btn-market.png" height="38"></a>
      </aside>
    </div> <!-- row.// -->
  </section>  <!-- footer-top.// -->

  <section class="footer-bottom d-flex justify-content-lg-between border-top">
    <div>
      <i class="fab fa-lg fa-cc-visa"></i>
      <i class="fab fa-lg fa-cc-amex"></i>
      <i class="fab fa-lg fa-cc-mastercard"></i>
      <i class="fab fa-lg fa-cc-paypal"></i>
    </div>
    <nav class="dropup">
        <button class="dropdown-toggle btn d-flex align-items-center py-0" type="button" data-bs-toggle="dropdown">
          <img src="images/flags/flag-usa.png" class="me-2" height="20"> 
          <span>English</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Russian</a></li>
          <li><a class="dropdown-item" href="#">Arabic</a></li>
          <li><a class="dropdown-item" href="#">Spanish</a></li>
        </ul>
    </nav>
    
  </section>
</div> <!-- container end.// -->
</footer>

<!-- Bootstrap js -->
<script src="{{ url('/website/js/bootstrap.js') }}"></script>

<!-- Custom js -->
<script src="{{ url('/website/js/script.js') }}"></script>

</body>
</html>