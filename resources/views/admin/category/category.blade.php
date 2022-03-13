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

<h1 class="mt-4">Category</h1>
<strong>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create Category
    </button>
</strong>
<div class="container">
    <div class="list-group">
        <table class="table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key=>$category)
                <tr>
                    <td scope="row">{{ $key+1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('category.update.view',$category->id) }}">Update</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<hr>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('category.create') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                    <input name="name" type="name" class="form-control" id="exampleInputName" aria-describedby="NameHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input name="description" type="text" class="form-control" id="exampleInputDescription" aria-describedby="DescriptionHelp">
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

