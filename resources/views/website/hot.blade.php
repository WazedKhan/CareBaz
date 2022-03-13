<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mobile-border-of" style="background:rgb(255, 239, 207);padding: 5px;">
                <a href="#" style="font-size: 20px; font-weight: bold; color: #F16E52;">
                    <img style="width: 100px;margin-left:6px" src="http://www.kalerhaat.com/images/hot-deal-logo.gif" title="kalerhaat">
                    </a>
                <a style="color: #EF4523;font-weight: bold;font-size: 18px;" href="{{ route('hotProducts') }}" class="pull-right">
                    সকল  হট ডিল <i class="fa fa-angle-right"></i>
                </a>

                <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" style="background: rgb(255, 239, 207);;padding: 0px;margin-bottom: 20px;padding-top: 15px  ">
                    <div class="slider">
                        <ul class="product-category owl-carousel nav owl-loaded owl-drag">   
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(-545px, 0px, 0px); transition: all 0.75s ease 0s; width: 2181px;">
                                            @foreach ($hot as $item)
                                            <div class="owl-item" style="width: 166.667px; margin-right: 15px;">
                                                <li class="product">
                                                    <a href="{{ route('products.details',$item->id) }}">
                                                        <span class="percentage-span-new">
                                                            <font class="percentage-amount-new">
                                                                {{ (int) round(((($item->price)-($item->price-$item->discount))/$item->price)*100) }}
                                                            </font>
                                                            <font class="percentage-sign-new">%</font>
                                                            <font class="percentage-discount-amount-new">ছাড়</font></span>
                                                        <span class="price-text">৳&nbsp;{{ $item->price - $item->discount }}</span>
                                                        @foreach ($item->product_image as $images)
                                                        <img src="{{ url('/storage/'.$images->image) }}">
                                                        @break
                                                        @endforeach
                                                    </a> 
                                                </li>
                                            </div>
                                            @endforeach

                                            </div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><img src="http://www.kalerhaat.com.bd/image/more.png"></button></div><div class="owl-dots disabled"></div></ul>
                    </div> 
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" style="background: rgb(255, 239, 207);padding: 0px;margin-bottom: 20px; ">
                    <div class="slider">
                        <ul class="product-category owl-carousel nav owl-loaded owl-drag">
                        @foreach ($hoter as $item)                                 
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 1.5s ease 0s; width: 2181px;"><div class="owl-item active" style="width: 166.667px; margin-right: 15px;"><li class="product">
                            <a href="{{ route('products.details',$item->id) }}">
<span class="percentage-span-new"><font class="percentage-amount-new">{{ (int) round(((($item->price)-($item->price-$item->discount))/$item->price)*100) }}</font><font class="percentage-sign-new">%</font><font class="percentage-discount-amount-new">ছাড়</font></span>
<span class="price-text">৳&nbsp;{{ $item->price - $item->discount }}</span>
@foreach ($item->product_image as $images)
                                                        <img src="{{ url('/storage/'.$images->image) }}">
                                                        @break
                                                        @endforeach
</a> 
</li></div>
                        @endforeach
                        </div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><img src="http://www.kalerhaat.com.bd/image/more.png"></button></div><div class="owl-dots disabled"></div></ul>
                    </div> 
                </div>
            </div>