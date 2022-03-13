@extends('welcome')
@section('content')
<section class="best_seller_product" style="background-color: #fff;padding-bottom: 10px;padding-top:0" id="main_content_area">
    <section class="details_section">
<div class="container">
                    @if(session()->has('error'))
                    <p class="alert alert-danger">
                        {{session()->get('error')}}
                    </p>
                    @endif
                    @if(session()->has('success'))
                    <p class="alert alert-success">
                        {{session()->get('success')}}
                    </p>
                    @endif
<div class="row" style="margin-right: 0">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 5px;padding-right: 5px">
        <div class="panel panel-info">
            
           <div class="panel-heading"><strong style="font-size: 20px;color: #3c763d"><i class="fa fa-info-circle" style="color: #3c763d"> </i> Registration Information  </strong></div>
            
            <div class="panel-body" style="padding-left: 30px;padding-right: 30px">
               
                <div class="col-sm-offset-2 col-md-offset-2 col-lg-offset-2 col-lg-8 col-md-8  col-sm-8 col-xs-12"> 
                    
                    <form action="{{ route('doRegister') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group" style="padding-bottom: 15px">

                            <input name="customer_name" style="width: 100% !important;border: 1px solid #4B9CCF;padding-left: 10px" name="customer_name" required="" type="text" class="form-control" placeholder="Type Your Name" aria-describedby="basic-addon1">
                            <span id="customer_name" style="color:red;"></span>
                        </div>

                        <div class="form-group" style="padding-bottom: 15px">
                            <input name="phone" value="" style="width: 100% !important;border: 1px solid #4B9CCF;padding-left: 10px" name="customer_mobile" required="" type="number" class="form-control" placeholder="Type Your Mobile" aria-describedby="basic-addon1">
                            <span id="customer_mobile" style="color:red;">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                            </span>
                        </div>

                        <div class="form-group" style="padding-bottom: 15px">    
                            <input name="email" style="width: 100% !important;border: 1px solid #4B9CCF;padding-left: 10px" name="customer_email" required="" type="email" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Type Your Email Address" aria-describedby="basic-addon1">
                            <span id="customer_mobile" style="color:red;">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                            </span>
                        </div>
                        
                        <div class="form-group" style="padding-bottom: 15px">
                            <input value="" style="width: 100% !important;border: 1px solid #4B9CCF;padding-left: 10px" name="customer_password" required="" type="password" class="form-control" placeholder="Type Your Password" aria-describedby="basic-addon1">
                            <span id="customer_password" style="color:red;"></span>
                        </div>
                        
                        <div class="form-group" style="padding-bottom: 15px">
                            <select name="customer_area" required="required" class="form-control" style="border: 1px solid #4B9CCF">
                                <option value="">Select Your Area</option>
                                <option value="1">&nbsp;In Dhaka City</option>
                                <option value="2">&nbsp;Out Of Dhaka City</option>
                                 
                            </select>
                             <span id="customer_area" style="color:red;"></span>
                        </div>

                        <div class="form-group" style="padding-bottom: 15px">
                             <input name="customer_address" value="" style="width: 100% !important;border: 1px solid #4B9CCF;padding-left: 10px" name="customer_address" required="" type="text" class="form-control" placeholder="Type Your Address" aria-describedby="basic-addon1">
                              <span id="customer_address" style="color:red;"></span>
                        </div>


                        <div class="form-group" style="padding-bottom: 15px">
                            <input id="submitBTN" type="submit" class="btn btn-success btn-block" value="Sign Up" style="width:100% !important;background: #4B9CCF">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

function CheckEmailAddress(Obj)
{ 
serverPage = '#' + Obj;
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function ()
{
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
    {
//                alert(xmlhttp.responseText);
        if(xmlhttp.responseText == 1){
           
            
            $(':input[type="submit"]').prop('disabled', true);
            document.getElementById("CheckEmail").innerHTML = '<strong style="color:red">Registered Email</strong>';
        }
        else{
               $(':input[type="submit"]').prop('disabled', false);
             document.getElementById("CheckEmail").innerHTML = '<strong style="color:green">Email Address  Available</strong>';
        }
//                alert(xmlhttp.responseText);
//              submitBTN  document.getElementById("main_content_area").innerHTML = xmlhttp.responseText;
//                document.getElementById("dd").innerHTML = xmlhttp.responseText;

    }
};
xmlhttp.send(null);

}

</script>

</section>
@endsection