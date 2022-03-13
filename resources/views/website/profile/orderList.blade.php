@extends('website.profile')
@section('profile')

                                    
                                    
    <div class="col-xs-12 maa-9"> 
                                 
                                                                 
                                
                                
        <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 table-responsive" style="padding: 0;margin-top: 0">
            
            
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>Date</th>
                        <th>Order ID</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th>Product</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $item)
                        <tr>
                            <td scope="row">{{ $item->created_at }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->total }} tk</td>
                            <td>Pending</td>
                            <td>{{ $item->cart->count() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
            
            

        </div>
        
    </div>
@endsection