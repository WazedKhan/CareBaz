@extends('welcome')
@section('content')
<section class="best_seller_product" style="background-color: #fff;padding-bottom: 10px;padding-top:0" id="main_content_area">
    <style>
td{padding: 1px !important;    font-size: 12px;}
.reg-title{
padding: 12px 12px !important;
background: #f9f9f9 !important;
margin: 5px 0 10px 0 !important;
color: #495c58 !important;
border-bottom: 1px dashed #E7E7E7 !important;
cursor: pointer !important;
text-transform: uppercase !important;
font-weight: 600 !important;
}
</style>
<section class="details_section">
<div class="container" style="padding-right: 0  !important;;">
<div class="row" style="margin-right: 0;padding-top:20px">
       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-left: 5px;padding-right: 5px">
        
        
        <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12"> 
        <div class="panel panel-success" style="border: 0;">

            <div class="panel-heading reg-title">
                <strong style="font-size: 16px;color: #495c58"> কাস্টমার ইনফরমেশন </strong>

            </div>

            <div class="panel-body" style="padding:0">
             
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12"> 
                        <form action="{{ route('makeOrder') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group" style="padding-bottom: 15px">

                                <!--<input name="product_id" type="hidden" value="">-->
                                <input style="width: 100% !important;border: 1px solid #ccc;padding-left: 10px;border-radius: 5px !important;" name="customer_name" required="" type="text" class="form-control" value="" placeholder="Name" aria-describedby="basic-addon1">

                            </div>

                            <div class="form-group" style="padding-bottom: 15px">
                                <!--<input style="width: 100% !important;border: 1px solid #ccc;padding-left: 10px;border-radius: 5px !important;" name="customer_mobile"  required type="number" class="form-control" placeholder="Mobile" aria-describedby="basic-addon1" >-->

<input style="width: 100% !important;border: 1px solid #ccc;padding-left: 10px;border-radius: 5px !important;" name="customer_mobile" required="" type="text" class="form-control" value="" name="phone" placeholder="number" aria-describedby="basic-addon1" pattern="\d*" maxlength="11" minlength="11">

                            </div>


                            <div class="form-group" style="padding-bottom: 15px" hidden> 
                                <input style="width: 100% !important;border: 1px solid #ccc;padding-left: 10px;border-radius: 5px !important;" name="customer_email" value="none@gmail.com" type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" hidden>

                            </div>

                            <div class="form-group" style="padding-bottom: 15px">
                                <select id="DeliAddress" onchange="UpdateOrderInfo(this.value)" name="customer_area" required="required" class="form-control" style="border: 1px solid #ccc;border-radius: 5px !important;">
                                    <option value="">Select Your Area</option>
                                    <option value="1">Inside Dhaka</option>
                                    <option value="2">Outside Dhaka</option>
                                
                                   <option value="3">Outside Dhaka Home Delivery </option>  
                                </select>
                            </div>
<input type="hidden" id="travel_cost" name="travel_cost">
                            <div class="form-group" style="padding-bottom: 15px">
                                <textarea style="border: 1px solid #ccc;border-radius: 5px !important;" class="form-control" name="customer_address" required="" placeholder="Delivery Address"></textarea>
                                
                               
                            </div>

                            <input type="text" id="subforcontroller" name="sub_total" value="" hidden>

                            @if ($data->isNotEmpty())
                            <div class="form-group  reg-btn-desk " style="padding-bottom: 15px;width: 40%;margin-right: 15px;float:left">
                                <input onclick="getInputValue();" id="submitBTN" type="submit" class="btn btn-success btn-block" value="অর্ডার কনফার্ম করুন" style="background: #286090;padding: 6px 12px;font-size: 14px; font-weight: 400;border:0;border-radius: 4px !important;">
                            </div>
                            @endif
                             <div class="form-group reg-btn-desk" style="padding-bottom: 15px;width: 32%;float: left;">
                                  <a href="{{ route('home') }}" class="btn btn-info btn-block" style="background: #37A1D1;padding: 6px 12px;font-size: 14px; font-weight: 400;border:0;border-radius: 4px !important;"> আরো শপিং করুন </a>
                             </div>
                            
                        </form>
                    </div>
                 
            </div>
        </div>
        </div>
    </div>
    @php
        $sub_total = 0;
        $total = 0;
    @endphp

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-left: 5px;padding-right: 5px; ">
            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12"> 
            <div class="panel panel-info" style="border: 0;">
                <div class="panel-heading reg-title"><strong style="font-size: 16px;color: #495c58;">  অর্ডার ইনফরমেশন</strong></div>
                <div class="panel-body " style="padding: 0">


                    <table class="table table-bordered" style="margin-top: 0px;border:0">
                        <thead>
    <tr class="active">
        <th>প্রোডাক্ট</th> 
      <th style="width: 35%;text-align: right;padding:10px">মূল্য  </th>
    </tr>
                        </thead>    
                        <tbody id="CustomerOrderData">

                            @foreach ($data as $item)
                                
                            
                                <tr style="cursor: pointer">
                       

                                    <td style="">
                                        @foreach ($item->product->product_image as $images)
                                        <img style="float:left;width:40px;height: 40px" src="{{ url('/storage/'.$images->image) }}" >
                                        @break
                                        @endforeach
                                        <label style=" float: left; padding: 5px;margin-bottom:0;font-weight:500">
                       {{ $item->product->name }}  <br>           
 
 
    <h6 style="margin: 0;">
        ৳ {{ $item->product->price - $item->product->discount }} 
       <i class="fa fa-times"></i>
       {{ $item->quantity }}                         &nbsp; 
       <a href="{{ route('increase',$item->id) }}" <i class="fa fa-plus" style="color:#fff;background:#074488;padding:2px" onclick="IncrementFunction('Mquantity-value1685','5d79099fcdf499f12b79770834c0164a')"></i></a>
       <a href="{{ route('decrease',$item->id) }}" <i class="fa fa-minus" style="color:#fff;background:#d00;padding:2px" onclick="DecrementFunction('Mquantity-value1685','5d79099fcdf499f12b79770834c0164a');"></i></a>
       <a href="{{ route('remove',$item->id) }}"><i class="fas fa-trash"></i></a>
    </h6>
</label>
                                    </td>

                                     

                                 

                                    <td style="width: 35%;text-align: right;padding:10px !important;text-align:right;font-family: 'Open Sans', sans-serif;
font-size: 14px;"> 
                                         ৳ {{ ($item->product->price - $item->product->discount) * $item->quantity }}
                                         @php
                                             $sub_total += ($item->product->price - $item->product->discount) * $item->quantity
                                         @endphp   
                                    </td>
                                     
                                </tr>

                                @endforeach
                                                                <tr>
                                <td colspan="2" style="border:0;padding:20px !important"></td>
                            </tr>
                            <tr class="active">
                                <td style="padding:10px !important;text-align:left;font-family: 'Open Sans', sans-serif;
font-size: 14px;"> Sub Total</td>
                                <td style="padding:10px !important;text-align:right;font-family: 'Open Sans', sans-serif;
font-size: 14px;"> 	৳  {{ $sub_total }}</td>
                            </tr>

                            <tr>
                                <td style="padding:10px !important;text-align:left;font-family: 'Open Sans', sans-serif;
font-size: 14px;"> Delivery Cost</td>
                                <td style="padding:10px !important;text-align:right;font-family: 'Open Sans', sans-serif;
font-size: 14px;" id="CustomerDeliveryPoint"> 00 </td>
                            </tr>


                            <tr class="active">
                        <input id="TotalPtk" type="hidden" value="{{ $sub_total }}">

                        <td style="padding:10px !important;text-align:left;font-family: 'Open Sans', sans-serif;
font-size: 14px;"> Grand Total</td>
                        <td style="padding:10px !important;text-align:right;font-family: 'Open Sans', sans-serif;
font-size: 14px;" id="GrandOrderTk">

                                 ৳  {{ $sub_total }}</td>
                        </tr>

                        </tbody>
                    </table>




                </div>
            </div>

        </div>
        </div>

            </div>
</div>
</section>

<script>
function UpdateOrderInfo(obj) {
if (obj == 1) {
    delivery_amount = 60;
} else if (obj == 2) {
    delivery_amount = 100;
}else if (obj == 3) {
    delivery_amount = 150;
} else {
    delivery_amount = 0;
}
total_order_tk = document.getElementById("TotalPtk").value
if (total_order_tk) {
    total_tk = Number(total_order_tk) + Number(delivery_amount);
    document.getElementById("CustomerDeliveryPoint").innerHTML = ' ৳ ' + delivery_amount;
    
document.getElementById("travel_cost").value = delivery_amount;
    document.getElementById("GrandOrderTk").innerHTML = ' ৳ ' + total_tk;
}

}



function CartDataRemoveR(Obj)
{

serverPage = '#' + Obj;
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function ()
{
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
    {
        if (xmlhttp.responseText != 0) {
            document.getElementById("CustomerOrderData").innerHTML = xmlhttp.responseText;
            cartStatus();
        } else {
            window.location.href = "#";
        }
    }
}
xmlhttp.send(null);

}

</script>

<script>
    function getInputValue(){
        // Selecting the input element and get its value 
        var inputVal = document.getElementById("TotalPtk").value;
        
        // Displaying the value
        document.getElementById('subforcontroller').value = inputVal;
    }
</script>

<script>
function IncrementFunctionR(Obj, rowid) {

var x = document.getElementById(Obj).innerHTML;
var quantity = Number(x) + 1;
serverPage = '#' + rowid + '/' + quantity;
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function ()
{
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
    {
        document.getElementById("CustomerOrderData").innerHTML = xmlhttp.responseText;
        cartStatus();
    }
}
xmlhttp.send(null);


}
function DecrementFunctionR(Obj, rowid) {
var x = document.getElementById(Obj).innerHTML;
var quantity = Number(x) - 1;
if (quantity >= 1) {
    document.getElementById(Obj).innerHTML = quantity;

    serverPage = '#' + rowid + '/' + quantity;
    xmlhttp.open("GET", serverPage);
    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById("CustomerOrderData").innerHTML = xmlhttp.responseText;
            cartStatus();
        }
    }
    xmlhttp.send(null);
}


}


function cartStatus()
{

serverPage = '';
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function ()
{
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
    {
        var obj = JSON.parse(xmlhttp.responseText);
        document.getElementById("totalCartItems2").innerHTML = obj.total_items + ' Items';
        
          document.getElementById("MtotalCartItemsBlank").style.background = "#f00";
   
         document.getElementById("MtotalCartItems").innerHTML = obj.total_items;     
         
         document.getElementById("MtotalCartItemsBlank2").style.background = "#f00";
       
         document.getElementById("MtotalCartItems2").innerHTML = obj.total_items;    
        
        
        document.getElementById("CartDetailsTotal").innerHTML = obj.total_amount + ' Tk.';
        document.getElementById("MtotalCartItems").innerHTML = obj.total_items;

        obj_place = document.getElementById("DeliAddress").value;

        if (obj_place == 1) {
            delivery_amount = 60;
        } else if (obj_place == 2) {
            delivery_amount = 100;
        } else if (obj_place ==3 {
            delivery_amount = 150;
        } else {
            delivery_amount = 0;
        }
        total_order_tk = document.getElementById("TotalPtk").value
        if (total_order_tk) {
            total_tk = Number(total_order_tk) + Number(delivery_amount);
            document.getElementById("CustomerDeliveryPoint").innerHTML = ' ৳ ' + delivery_amount;
            document.getElementById("GrandOrderTk").innerHTML = ' ৳ ' + total_tk;
        }


    }
}
xmlhttp.send(null);

}


</script>

            <br><br><br><br> 
            <br><br><br><br> 
            <br><br><br><br> 
            <br><br><br><br> 
@endsection