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
                    <div class="panel-heading"><strong style="font-size: 22px;color: #3c763d"><i class="fa fa-bus" style="color: #3c763d"> </i> Track Order </strong></div>
                    <div class="panel-body" style="padding-left: 30px;padding-right: 30px">
                        <div class="col-sm-12">
                            <h4>
                                <i class="fa fa-th"> Your Order </i>
                                 
                            </h4>
    
                            <div class="col-sm-12">
                                                <form action="{{ route('track') }}" method="GET">
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="key" placeholder="Order Number">
                                                    </div>

                                                        <button class="btn btn-success" type="submit">Submit</button>

                                                </form>
                                                @if ($order != null)
                                                    
                                                
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Order Name</th>
                                                            <th>Total</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($order as $item)
                                                        <tr>
                                                            {{-- @dd($order) --}}
                                                            
                                                            <td scope="row">{{ $item->id }}</td>
                                                            <td>{{ $item->total }}</td>
                                                            <td>{{ $item->status }}</td>
                                                            
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                @endif
                                            </div>
                        </div>
                        
                    </div>
                </div> 
            </div>
        </div>
    </div>
            </section>
            <br><br><br><br> 
            <br><br><br><br> 
            <br><br><br><br> 
            <br><br><br><br> 
            <br><br><br><br> 
@endsection