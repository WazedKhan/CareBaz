@extends('welcome')
@section('content')
<section class="details_section">
    <div class="container" style="padding-right: 0  !important;;">
        <div class="row" style="margin-right: 0">
    

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-sm-offset-2  col-md-offset-2  col-xl-offset-2" style="padding-left: 5px;padding-right: 5px; padding-top: 30px;">
                    <div class="btn btn-success" style="width: 100%; margin-bottom: 10px;border-radius: 0;font-size: 16px;font-weight: bold;white-space: pre-wrap;">আপনার অর্ডারটি সফলভাবে সবমিট হয়েছে আমাদের কল সেন্টার থেকে ফোন করে আপনার অর্ডারটি কনফার্ম করা হবে।</div>
                    <div class="panel panel-info" style="border-color: #ddd;">
                        <!--<div class="panel-heading">-->
                        <!--    <strong style="font-size: 16px;color: #000;"> Order Information  </strong>-->
                        <!--<a id="btnExportPrint" href="#" class=" pull-right" style="color: #d00; font-size: 16px;font-weight: bold;">Download</a>    -->
                        <!--</div>-->
                        <div class="panel-body " style="padding: 0">


                            <table class="table table-bordered" style="margin-top: 0px;margin-bottom: 0px;" id="printTable">
                                <thead>
          <tr class="t-fp">
            <th>
            <strong style="font-size: 16px;color: #000;"> Order Information  </strong>    
            </th> 
            <th class=" text-center">
              <a id="btnExportPrint" href="#" style="color: #d00; font-size: 20px;font-weight: bold;">Download</a> 
            </th>
        </tr>
        <tr class="t-fp2" style="display:none">
            <th colspan="2" class="text-center">
                <strong class="p-title" style="font-size: 40px !important;color: #006fa6;">Online Shop  </strong>  <br>
            <strong class="p-title2" style="font-size: 25px !important;color: #000;"> Order Information  </strong>    
            </th> 
            
        </tr>
        
                                    <tr>
                                        <th>Product</th> 
                                        <th>Price</th>
                                    </tr>
                                </thead>    
                                <tbody id="CustomerOrderData">

                                    
                                        @foreach ($cart as $item)
                                        <tr style="cursor: pointer">
                                            <td> 
                                                @foreach ($item->product->product_image as $images)
                                                <img style="width: 60px;" class="img-responsive" src="{{ url('/storage/'.$images->image) }}">
                                                @endforeach
                                                 
                                                {{ $item->product->name }} <br><strong>
                                                ৳ {{ $item->product->price - $item->product->discount }} ✖ 
                                                {{ $item->quantity }}  
</strong>
                                            </td>

                                            <td> 
                                              ৳ {{ ($item->product->price - $item->product->discount)*$item->quantity }}  
                                            </td>
                                             
                                        </tr>
                                        @endforeach

                                                                        <tr>
                                        <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Delivery Cost</td>
                                        <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold">  ৳ @if ($order->area == 1)
                                            60
                                        @elseif($order->area == 2)
                                        100
                                        @else
                                        150
                                        @endif</td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Total</td>
                                        <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold">  ৳ {{ $order->total }}</td>
                                    </tr>

                                   <tr>
                                        <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Order Number</td>
                                        <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> {{ $order->id }} </td> 
                                    </tr>
                                        
                                   <tr>
                                        <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Payment Method</td>
                                        <td style="padding:10px !important;text-align:left;font-size:16px;font-weight:bold"> Cash On Delivery </td> 
                                    </tr>
                                         
                                </tbody>
                            </table>




                        </div>
                    </div>

                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title"><i class="fa fa-money"> </i> MyWallet</h4>
        </div>
        <div class="modal-body" id="ModalC">
          <p>সম্মানিত ক্রেতা, আপনার MyWallet এ টাকার পরিমান 
          0 
          টাকা.আপনি চাইলে এই টাকা হতে আপনার এই অর্ডার এর টাকা পরিশোধ করতে পারবেন. আপনি কি পরিশোধ করতে ইচ্ছুক ?</p>
       
       
      <div class="col-sm-12 col-xs-12">
    <label class="radio-inline " style="    padding-left: 0;">
      <input type="radio" name="optradio" value="1"><strong> Yes</strong>
    </label>
      <label class="radio-inline" style="padding: 20px;">
    <label class="radio-inline" style="    padding-left: 0;">
      <input type="radio" name="optradio" value="0"> <strong> No</strong>
    </label> 
    <a style="margin-left: 30px;" href="javascript:void(0)" class="btn btn-info" onclick="WalletPaymentRequest();">Submit</a>
    </label></div>   
   
        </div>
        <div class="modal-footer" style="border:0">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  

 <script>
  function WalletPaymentRequest(){
      obj =  $('input[name="optradio"]:checked').val();
      if(obj){
          var order_id = '93924';
      console.log(obj);
      console.log(order_id);
      
      serverPage = '#' + obj + '/' + order_id;
      console.log(serverPage);
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("ModalC").innerHTML = "Your Wallet Payment Request Successfully Send";
            }
        }
        xmlhttp.send(null);
        
      
      }else{
          alert("Please checked any 1 option");
      }
  }
    $(window).on('load', function() {
        var x = '0';
        console.log(x);
        if(x>0){
         $('#myModal').modal('show');
        }
    }); 


				 
						 function printData()
						{
					    	$("table").css({"width": "100%"});
							$("table").css({"border": "solid #ddd","border-width": "1px 0 0 1px"});
							$("table th").css({"border": "solid #ddd","border-width": "0 1px 1px 0"});
							$("table td").css({"border": "solid #ddd","border-width": "0 1px 1px 0"});
							
							$("table .t-fp2 th p-title").css({"font-size": "40px  !important"});
							$("table .t-fp2 th p-title2").css({"font-size": "25px !important"});
							
							$("table td img").css({"width": "30px"});
							  $("table .t-fp").hide();
							  $("table .t-fp2").show();
						   var divToPrint=document.getElementById("printTable");
						   newWin= window.open("");
						   newWin.document.write(divToPrint.outerHTML);
						   newWin.print();
						   newWin.close();
						}

						$('#btnExportPrint').on('click',function(){
						printData();
						})
				

                            $("#btnExport").click(function(e) {
							   $("table .t-fp").hide();
							   
							  
							  
                    let file = new Blob([$('.user_sms_content_area_data').html()], {type:"application/vnd.ms-excel"});
                            let url = URL.createObjectURL(file);
                            let a = $("<a />", {
                            href: url,
                                    download: "filename.xls"}).appendTo("body").get(0).click();
                            e.preventDefault();
                    });
				</script>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 5px;padding-right: 5px;padding-bottom: 100px;padding-top: 20px">

                    <center>   
                        <a href="{{ route('home') }}" class="btn btn-info" style="background: #0083C4;border:0;color:#fff;font-weight: bold;padding:10px 70px;border-radius:0"> আরো শপিং করুন </a>
                    </center>
                </div>
            
        </div>
    </div>
</section>
@endsection