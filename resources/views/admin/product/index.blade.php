@extends('admin.master')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>Product List</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-info m-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create Product
</button>
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Original Price</th>
                    <th>Discounted Price</th>
                    <th>Stock</th>
                    <th>Limited</th>
                    <th>Active For Sale</th>
                    <th>Actions</th>
                    <th>Add Discount In Taka</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key=>$product)
                    <tr>
                        <td scope="row">{{ $key }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td class="text-danger">
                            @if ($product->discount != 0)
                                {{ $product->price - $product->discount }}
                            @else
                                {{ $product->price }}
                            @endif
                        </td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            @if ($product->limited==0)
                                False
                            @else
                                True
                            @endif
                        </td>
                        <td>
                            @if ($product->active_for_sale==0)
                                False
                            @else
                                True
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('product.update.view',$product->id) }}">Update</a>
                            <a class="btn btn-danger" href="{{ route('product.delete',$product->id) }}">Delete</a>
                            <a class="btn btn-info" href="{{ route('product.image',$product->id) }}">Images</a>
                        </td>
                        <td>
                            <form action="{{ route('product.discount',$product->id) }}" method="post">
                                @csrf
                                @method("PATCH")
                                <div class="mb-3">
                                    <input name="discount" value="{{ ($product->discount) }}"
                                    type="number" class="form-control" >
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('product.create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                    <input name="name" type="name" class="form-control" id="exampleInputName" aria-describedby="NameHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Price</label>
                    <input name="price" type="number" class="form-control" id="exampleInputDescription" aria-describedby="DescriptionHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tax</label>
                    <input name="tax" value="2" type="number" class="form-control" id="exampleInputDescription" aria-describedby="DescriptionHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input name="description" type="text" class="form-control" id="exampleInputDescription" aria-describedby="DescriptionHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Discount</label>
                    <input name="discount" type="number" class="form-control" id="exampleInputDescription" placeholder="give product discount in taka">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Stock</label>
                    <input name="stock" type="number" class="form-control" id="exampleInputDescription" aria-describedby="DescriptionHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Category</label>
                    <select name="category_id" class="form-select" aria-label="Default select example">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Limited</label>
                    <select name="limited" class="form-select" aria-label="Default select example">    
                        <option value="0">False</option>
                        <option value="1">True</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label">Selete Product Images</label>
                    <input type="file" class="form-control" name="image[]" multiple>
                </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection