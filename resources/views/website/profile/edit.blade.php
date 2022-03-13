@extends('website.profile')
@section('profile')
<div class="col-xs-12 maa-9"> 
    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12" style="background: #ECECEC"> 
        <h4 style="margin-bottom: 5px;margin-top: 10px;color: #4BB9CF;font-weight: bold;"><i class="fa fa-user-secret"></i> Profile Setting</h4>
    </div>
    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12" style="margin-top: 20px;background: #ECECEC;padding: 10px">


        <form action="{{ route('p.update') }}" method="POST">
            @csrf
            <div class="form-group">
              <label >Name</label>
              <input type="name" name="name" value="{{ $user->name }}" class="form-control" >
            </div>
            <div class="form-group">
              <label >Phone</label>
              <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" >
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" value="{{ $user->email }}" class="form-control" >
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" value="{{ $user->password }}" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>



    </div>
</div>
@endsection