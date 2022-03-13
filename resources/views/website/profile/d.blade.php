@extends('website.profile')
@section('profile')
<div class="col-xs-12 maa-9"> 
    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12" style="background: #ECECEC"> 
       
    </div>
                                     <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12" style="padding: 0;margin-top: 20px">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 ">
            <a href="{{ route('p.orders') }}" class="category-singel">
                Total Order 
            </a>
        </div>
      
        <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 ">
            <a href="#" class="category-singel">
                Pending 
            </a>
        </div>
        
        <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 ">
            <a href="#" class="category-singel">
                Order Processing  
            </a>
        </div>
        
          <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 ">
            <a href="#" class="category-singel">
                Courier 
            </a>
        </div>
        
          <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 ">
            <a href="#" class="category-singel">
                Deliverd 
            </a>
        </div>
       
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection