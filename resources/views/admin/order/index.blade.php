@extends('admin.master')
@section('content')
<div class="container">
    
<table class="table table-borderedstriped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>Order ID</th>
            <th>Customer's Name</th>
            <th>Customer's Phone</th>
            <th>Area</th>
            <th>Address</th>
            <th>Total</th>
            <th>View</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($orders as $item)
            <tr class="bg-danger-light">
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->phone }}</td>
                <td>
                    @if ($item->area ==1 )
                    Inside Dhaka
                    @elseif ($item->area == 2)
                    Outside Dhaka
                    @else
                    Outside Home Address
                    @endif
                </td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->total }}</td>
                <td><a class="btn btn-dark" href="{{ route('order.detalis',$item->id) }}">View</a></td>
                <td>
                    @if ($item->status != "Canceled")

                    @if ($item->status != "Confimed")
                    <a class="btn btn-danger" href="{{ route('order.cancle',$item->id) }}">Cancle</a>
                    <a class="btn btn-success" href="{{ route('order.done',$item->id) }}">Confirm</a>
                    @endif
                    <a class="btn btn-info" href="#">Shiped</a>
                                            
                    @endif
                    
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
</div>
@endsection