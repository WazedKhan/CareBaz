@extends('admin.master')
@section('content')
<div class="container">
<form action="{{ route('category.update',$category->id) }}" method="post">
    @method("PATCH")
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Category Name</label>
        <input name="name" value="{{ $category->name }}" type="name" class="form-control" id="exampleInputName" aria-describedby="NameHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <input textarea name="description" value="{{ $category->description }}" type="text" class="form-control" id="exampleInputDescription" aria-describedby="DescriptionHelp">
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection