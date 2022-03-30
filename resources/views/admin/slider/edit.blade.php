@extends('admin.admin_master')

@section('admin')


@if (session('success'))
    

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session('success')}}</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  @endif

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Slider</h2>
        </div>

        <div class="card-body">
            <form action="{{ url('slider/update/'.$slider->id) }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <input type="hidden"  name="old_image" value="{{$slider->image }}">
                <div class="form-group">
                    <label for="exampleFormControlInput1">SLider Title</label>
                    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Enter Title"
                    value="{{$slider->title}}"
                    >
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>

               

        
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"
                   >{{ $slider->description }}</textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                   @enderror
                    
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1"
                    value="{{$slider->image}}"
                    >
                    @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div  class="form-group"> <img src="{{ asset($slider->image )  }}" style="width:400px;  height:400px ">    </div>


                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update
                        Brand</button>
                </div>
            </form>
        </div>
    </div>

    
     
</div>












@endsection