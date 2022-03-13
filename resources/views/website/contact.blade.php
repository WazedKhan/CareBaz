@extends('welcome')
@section('content')
{{-- subSuc --}}
<section class="best_seller_product" style="background-color: #fff;padding-bottom: 10px;padding-top:0" id="main_content_area">
            
    <div class="container" style="padding-right:0px">
        <div class="row">

            @if(session()->has('subSuc'))
                    <p class="alert alert-success">
                        {{session()->get('subSuc')}}
                    </p>
                    @endif
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding-left: 0px">
                <div class="panel panel-success">
                    <div class="panel-heading"><strong style="font-size: 22px;color: #3c763d"><i class="fa fa-bus" style="color: #3c763d"> </i> Replace and Refund </strong></div>
                    <div class="panel-body" style="padding-left: 30px;padding-right: 30px">
                        <div class="col-sm-12">
                            <h4>
                                <i class="fa fa-th"> আপনার মতামত লিখুন </i>
                                 
                            </h4>
    
                            <div class="col-sm-12">
                                                <form action="{{ route('contact.submit') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
                                                    </div>

                                                        <button class="btn btn-success btn-block" type="submit">Submit</button>

                                                </form>
                                            </div>
                        </div>
                        
                    </div>
                </div> 
            </div>
        </div>
    </div>
            </section>
@endsection