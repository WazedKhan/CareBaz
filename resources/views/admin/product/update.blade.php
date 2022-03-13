@extends('admin.master')
@section('content')
<div class="container">
    <form action="{{ route('product.update',$product->id) }}" method="post">
        @method("PATCH")
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product Name</label>
            <input name="name" value="{{ $product->name }}" type="name" class="form-control" id="exampleInputName" aria-describedby="NameHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input name="description" value="{{ $product->description }}" type="text" class="form-control" id="exampleInputDescription" aria-describedby="DescriptionHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Orginal Price</label>
            <input name="price" value="{{ $product->price }}" type="number" class="form-control" id="exampleInputDescription" aria-describedby="DescriptionHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Stock</label>
            <input name="stock" value="{{ $product->stock }}" type="number" class="form-control" id="exampleInputDescription" aria-describedby="DescriptionHelp">
        </div>
        {{-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Limited</label>
            <select name="category_id" class="form-select" aria-label="Default select example">
                <option class="text-danger" value="{{ $product->limited }}" selected>
                    @if ($product->limited == 1)
                    True
                    @else
                    False
                    @endif
                </option>
                <hr>
                    @if ($product->limited == 1)
                    <option value="0">False</option>
                    @else
                    <option value="1">True</option>
                    @endif
            </select>
        </div> --}}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category</label>
            <select name="category_id" class="form-select" aria-label="Default select example">
                <option class="text-danger" value="{{ $product->category->id }}" selected>{{ $product->category->name }}</option>
                <hr>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection