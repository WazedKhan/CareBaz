@extends('welcome')
@section('content')
<section class="best_seller_product" style="background-color: #fff;padding-bottom: 10px;padding-top:0" id="main_content_area">
    <style>
@media (min-width: 768px){
.maa-9{
    width: 75%;
    padding-right: 0;
}
}
@media (max-width: 767px){
.col-xs-12{
    margin-top: 10px;
    padding: 0;
}
}


.category-singel {
background-color: #f1f1f1;
margin-bottom: 20px;
padding: 20px;
display: block;
-webkit-box-shadow: 0 2px 10px 0 rgba(0,0,0,.16), 0 2px 5px 0 rgba(0,0,0,.26);
-moz-box-shadow: 0 2px 10px 0 rgba(0,0,0,.16),0 2px 5px 0 rgba(0,0,0,.26);
box-shadow: 0 2px 10px 0 rgba(0,0,0,.16), 0 2px 5px 0 rgba(0,0,0,.26);
transition-duration: .5s;
width: 100%;
text-align: center;
cursor: pointer;
font-size: 16px;
font-weight: bold;
}

.category-singel:hover {
-webkit-box-shadow: 0 25px 55px 0 rgba(0,0,0,.21), 0 16px 28px 0 rgba(0,0,0,.22);
-moz-box-shadow: 0 25px 55px 0 rgba(0,0,0,.21),0 16px 28px 0 rgba(0,0,0,.22);
box-shadow: 0 25px 55px 0 rgba(0,0,0,.21), 0 16px 28px 0 rgba(0,0,0,.22);
background-color: #fff;
transition-duration: .5s;
-webkit-transition-property: box-shadow;
-ms-transition-property: box-shadow;
-moz-transition-property: box-shadow;
-o-transition-property: box-shadow;
transition-property: box-shadow;
}
</style>
<section class="details_section">
<div class="container">
<div class="row" style="margin-right: 0">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 5px;padding-right: 5px">
        <div class="panel panel-success">

            <div class="panel-heading"><strong style="font-size: 25px;color: #3c763d"><i class="fa fa-user" style="color: #3c763d"> </i>My Profile  </strong></div>

            <div class="panel-body" style="padding-left: 0;padding-right: 0">

                <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12"> 

                    <div class="col-lg-3 col-md-3  col-sm-3 col-xs-12" style="background: #ECECEC;padding: 0"> 
                        <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12" style="padding: 0;"> 
                        <div class="col-lg-4 col-md-4  col-sm-4 col-xs-5" style="padding: 0;">
                             <img src="http://www.kalerhaat.com/image/default.png" alt="kalerhaat" title="Profile" class="img-responsive">
                        </div>
                           
                        <div class="col-lg-8 col-md-8  col-sm-8 col-xs-7">
                              <h3 style="margin-bottom: 5px;margin-top: 10px;color: #4BB9CF;font-weight: bold;text-transform: uppercase">{{ Auth::user()->name }}</h3>
                            <h4 style="margin-top: 0;color: #4BB9CF;font-weight: bold">{{ Auth::user()->phone }}</h4>
                        </div>
                            
                        </div>
                        <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12"> 
                            <div class="list-group" style="margin-top: 10px">
                                
                                <a href="{{ route('profile') }}" class="list-group-item">Dashboard <i class="fa fa-user pull-right"></i></a>

                                <a href="#" class="list-group-item">MyWallet <i class="fa fa-money pull-right"></i></a>
                                
                                <a href="{{ route('p.edit') }}" class="list-group-item">Setting <i class="fa fa-wrench pull-right"></i></a>
                               
                                <a href="{{ route('logout') }}" class="list-group-item">Logout <i class="fa fa-power-off pull-right"></i></a>
                            </div>
                        </div>
                    </div>

                    @yield('profile')
</div>
</div>
</section>

</section>
@endsection