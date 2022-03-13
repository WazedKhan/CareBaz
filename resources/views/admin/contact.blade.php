@extends('admin.master')
@section('content')
    <div class="list-group">
        
        @foreach ($texts as $item)
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ $item->user->name }}</h5>
                <small>{{ $item->user->email }}</small>
            </div>
            <p class="mb-1">Message: {{ $item->text }}</p>
            <small>Phone: {{ $item->user->phone }}</small>
        </a>
        @endforeach
        
    </div>
@endsection