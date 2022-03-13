@extends('admin.master')
@section('content')
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>SL No</th>
                <th>Product Name</th>
                <th>Product Price(1)</th>
                <th>Product Discount</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($carts as $key=>$item)
                <tr>
                    <td scope="row">{{ $key+1 }}</td>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->product->price }}</td>
                    <td>{{ $item->product->discount }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->quantity*($item->product->price-$item->product->discount) }}</td>
                </tr>
                @endforeach
            </tbody>
    </table>
@endsection