@extends('admin.admin_master')

@section('admin')
    <div class="py-12">
        <div class="container">
            <div class="row">
<h4> Home Slider</h4>
               
                <br>
                <br>
                <div class="col-md-12">
                    <div class="card">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif


                        <div class="card-header"> All Slider
                            <a href="{{route('add.slider')}}"><button class="btn btn-info">Add slider  </button>  </a>    
                        </div>



                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">Sl </th>
                                    <th scope="col"  width="15%">Slider Title</th>
                                    <th scope="col" width="25%"> Descrition</th>
                                    <th scope="col"  width="15%"> Image</th>
                                    <th scope="col" width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=1)

                                @foreach ($sliders as $slider)
                                    <tr>
                                        <th scope="row">{{$i++ }}  </th>
                                        <td>{{ $slider->title }}</td>
                                        <td>{{ $slider->description }}</td>

                                        <td> <img src="{{ asset($slider->image) }}" style="height: 40px;  width:70px; ">
                                        </td>



                                        <td>
                                            <a href="{{ url('slider/edit/' . $slider->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ url('slider/delete/' . $slider->id) }}"
                                                onclick="return confirm('Are you sure to Delete')"
                                                class="btn btn-danger">Delete</a>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>

            </div>


        </div>













    </div>
@endsection






















{{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div> --}}
