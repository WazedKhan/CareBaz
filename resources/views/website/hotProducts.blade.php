@extends('welcome')
@section('content')
<section class="best_seller_product" style="background-color: #fff;padding-bottom: 10px;padding-top:0" id="main_content_area">
    <div class="row " role="navigation" style="height: 40px;min-height: 40px;top: 0;box-shadow: none;background: #000;margin-right: 0;margin-top: -1px;">
        <div class="container">
        
           
            <div class="" style="padding:0;">
                <ul class="">
                    <li class="color-2" style="padding: 10px; width: auto;float: left;">

<a style="padding: 10px 5px 10px 0;" href="{{ route('home') }}">
<span style="font-weight: normal;padding: 0;font-size: 14px;color:#fff"> 
Home /
</span>
</a>

                    </li>
                    <li class="color-2" style="padding: 10px 5px 10px 0; width: auto;float: left;">

<a style="padding: 10px 5px 10px 0;" href="#">
<span style="font-weight: normal;padding: 0;font-size: 14px;color:#fff"> 
  Hot deals 
</span>
</a>

                    </li>
                    


                </ul>
            </div>

        </div>
    </div>
<div class="container" style="padding-right:0px">

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mobile-border-of" style="background:#fff;padding:10px;    padding-top: 20px;">
         
        <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" style=" padding: 0px;margin-bottom: 20px;  border-right:0;border-bottom:0" id="Product_Ajax">



            @foreach ($products as $product)
            <div class="col-sm-2 col-xs-6  product-hover-area product-custom-area" style="padding: 0;">
                <div class="col-sm-12 col-xs-12 padding-zero " style="background-color: #fff; border-radius: 0;padding-bottom: 0;padding: 10px 10px 20px; border: 1px solid #ddd;"> 
                
              <!--<div class="col-sm-12 col-xs-12 padding-zero " style=" padding: 0px;border: 1px solid #ebebeb; background: #fff; box-shadow: 0 7px 10px 0px rgba(23, 84, 116, 0.18);padding-bottom: 6px;"> -->
                  
                  <a style="padding: 0px;" class="img-hover col-sm-12 padding-zero" href="{{ route('products.details',$product->id) }}" id="1696">
                      @foreach ($product->product_image as $item)
                      <img class="img-responsive pro_img " style="margin: 0 auto;padding:10px height:50%" src="{{ url('/storage/'.$item->image) }}" alt="Belly Drainage Ginger Essential Oil 10ml">
                      @break
                      @endforeach
                  

      

                  <span id="productPrice1696" class="col-sm-12  col-xs-12 text-center" style="background: #fff;padding: 5px;display: block;line-height:18px;color: #D2691E;font-size: 14px;font-weight: bold;height: 50px;">
<!--<div style="border-top: 1px solid #ccc;padding: 3px;">-->
                    @if ($product->discount != 0)
                    <div class="price-old col-sm-12   text-center" style="padding:0">
                        <del style="font-size: 14px; color: #b8b8b8; line-height: 20px; font-weight: 400;">৳{{ $product->price - $product->discount }}
                        </del>
                    </div> 
                    <div class="col-sm-12 text-center  " style="padding:0">
                        <label style="display: block; font-size: 16px; color: #fca204; font-weight: 600; line-height: 20px;">
                             ৳    {{ $product->price }}
                        </label> 
                    </div><!--</div>-->
                    @else
                    <span id="productPrice1684" class="col-sm-12  col-xs-12 text-center" style="background: #fff;padding: 5px;display: block;line-height:18px;color: #D2691E;font-size: 14px;font-weight: bold;height: 50px;">
                        <!--<div style="border-top: 1px solid #ccc;padding: 3px;">-->
                                                             <div class="col-sm-12 text-center"><label style="display: block; font-size: 16px; color: #fca204; font-weight: 600; line-height: 20px;padding-top:20px"> ৳   {{ $product->price }}</label> </div><!--</div>-->
                        
                                                        </span>
                    @endif
                  </span>
                  <span id="productName1696" class="col-sm-12 text-center product-name-c" style="background: #fff;padding: 2px;padding-top: 5px;overflow: hidden;height: 40px; display: block;color:#525252;font-weight: 400;font-size: 14px !important; font-family: 'Work Sans',Arial,sans-serif;color:#777777">{{ $product->name }}            </span>
          
</a>
              </div>

          </div>
            @endforeach
                     

        </div>

    </div>

</div>


</div>
<script src="http://www.kalerhaat.com/slider-asset/js/jquery.min.js"></script>


<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>

</section>
@endsection