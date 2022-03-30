@extends('admin.admin_master')

@section('admin')
    <div class="py-12">
        <div class="container">
            <div class="row">
<h4> Contact  page </h4>
               
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
                            <a href="{{route('add.contant')}}"><button class="btn btn-info">Add Contact  </button>  </a>    
                        </div>



                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">Sl </th>
                                    <th scope="col"  width="15%">Contact Adress</th>
                                    <th scope="col" width="25%">Contact email</th>
                                    <th scope="col" width="25%">Contact phone</th>
                                    <th scope="col" width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=1)

                                @foreach ($contacts as $con)
                                    <tr>
                                        <th scope="row">{{$i++ }}  </th>
                                        <td>{{ $con->address }}</td>
                                        <td>{{ $con->email }}</td>
                                        <td>{{ $con->phone }}</td>
                                        <td>
                                            <a href="{{ url('contact/edit/' . $con->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ url('contact/delete/' . $con->id) }}"
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
