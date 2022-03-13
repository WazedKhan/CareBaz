@extends('admin.master')
@section('content')
    {{-- <div class="container"> --}}
        <section class="page-section" id="services">
            <div class="container pt-5">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Images</h2>
                </div>
                <form action="{{ route('product.image.new',$id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formFileDisabled" class="form-label">Upload New Product Images("Image Size Should Be 800x800")</label>
                        <input type="file" class="form-control" name="image[]" multiple >
                        <button type="submit" class="btn btn-primary m-1">Submit</button>
                    </div>
    
                      
                </form>
                <div class="row text-center">
                    @foreach ($images as $image)
                        <div class="col-md-4 border border-primary">
                            <img src="{{ url('/storage/'.$image->image) }}" height="300" width="300">
                            <div>
                                
                            <a href="{{ route('product.image.delete',$image->id) }}" class="btn btn-danger">Delete</a>
                            <form action="{{ route('product.image.update',$image->id) }}" method="post" enctype="multipart/form-data">
                                @method("PATCH")
                                @csrf
                                <div class="mb-3">
                                    <label for="formFileDisabled" class="form-label">Change the photo</label>
                                    <input type="file" class="form-control" name="image" multiple>
                                </div>
                                <button class="btn btn-warning" type="submit">Update</button>
                            </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    {{-- </div> --}}
@endsection