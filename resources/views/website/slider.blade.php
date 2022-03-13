<section class="slider_area" id="slider_area" style="background-color: #fff;padding-bottom: 10px;">
    <div class="container mobile-padding-top-0" style="padding-top: 10px;">
        <div class="row">




            <div class="col-lg-12 col-md-12 col-sm-12 " style="padding: 0px">
                <div id="wrapper">


                    <div class="slider-wrapper theme-default">


                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0"
                                    class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"
                                    class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"
                                    class=""></li>
                                {{-- <li data-target="#carousel-example-generic" data-slide-to="3"
                                    class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"
                                    class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="5"
                                    class="active"></li> --}}
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">

                                <div
                                    class="item 
                                    active
                                                 ">
                                    <a href="#">
                                        <img style="width: 100%;max-height: 300px;"
                                            src="{{ url('/storage/'.$info->bannar_1) }}" alt="">
                                    </a>
                                </div>


                                <div
                                    class="item 
                                            
                                                 ">
                                    <a href="#">
                                        <img style="width: 100%;max-height: 300px;"
                                            src="{{ url('/storage/'.$info->bannar_2) }}" alt="">
                                    </a>
                                </div>


                                <div
                                    class="item 
                                            
                                                 ">
                                    <a href="#">
                                        <img style="width: 100%;max-height: 300px;"
                                            src="{{ url('/storage/'.$info->bannar_3) }}" alt="">
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

</section>