@extends('admin.master')
@section('content')
<h1>Dashboard</h1>
<div class="container">
    <div class="container">
        <div class="row">
          <div class="col-sm">
            <form action="{{ route('bannar') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="exampleFormControlFile1">Banner -1</label>
                    <input type="file" class="form-control-file" name="banner">
                    <input type="text" name="bannar_no" value="bannar_1" hidden>
                </div>
                <button class="form-control m-1 btn btn-info" type="submit">Add</button>
            </form>
          </div>
          <div class="col-sm">
            <form action="{{ route('bannar') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="exampleFormControlFile1">Banner -1</label>
                    <input type="file" class="form-control-file" name="banner">
                    <input type="text" name="bannar_no" value="bannar_2" hidden>
                </div>
                <button class="form-control m-1 btn btn-info" type="submit">Add</button>
            </form>
          </div>
          <div class="col-sm">
            <form action="{{ route('bannar') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="exampleFormControlFile1">Banner -1</label>
                    <input type="file" class="form-control-file" name="banner">
                    <input type="text" name="bannar_no" value="bannar_3" hidden>
                </div>
                <button class="form-control m-1 btn btn-info" type="submit">Add</button>
            </form>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-5">
          <div class="col-sm">
            <form action="{{ route('number') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="exampleFormControlFile1">Number -1</label>
                    <input class="form-comtrol" type="text" name="number_no" value="number_1" hidden>
                    <input class="form-comtrol" type="text" name="number" value="{{ $info->number_1 }}" >
                </div>
                <button class="form-control m-1 btn btn-info" type="submit">Change</button>
            </form>
          </div>
          <div class="col-sm">
            <form action="{{ route('number') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="exampleFormControlFile1">Number -2</label>
                    <input class="form-comtrol" type="text" name="number_no" value="number_2" hidden>
                    <input class="form-comtrol" type="text" name="number" value="{{ $info->number_2 }}" >
                </div>
                <button class="form-control m-1 btn btn-info" type="submit">Change</button>
            </form>
          </div>
          <div class="col-sm">
            <form action="{{ route('number') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="exampleFormControlFile1">Number -2</label>
                    <input class="form-comtrol" type="text" name="number_no" value="number_3" hidden>
                    <input class="form-comtrol" type="text" name="number" value="{{ $info->number_3 }}" >
                </div>
                <button class="form-control m-1 btn btn-info" type="submit">Change</button>
            </form>
          </div>
          <div class="col-sm">
            <form action="{{ route('number') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="exampleFormControlFile1">bkash</label>
                    <input class="form-comtrol" type="text" name="number_no" value="bkash" hidden>
                    <input class="form-comtrol" type="text" name="number" value="{{ $info->bkash }}" >
                </div>
                <button class="form-control m-1 btn btn-info" type="submit">Change</button>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection