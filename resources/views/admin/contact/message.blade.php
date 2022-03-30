@extends('admin.admin_master')

@section('admin')
    <div class="py-12">
        <div class="container">
            <div class="row">
<h4> Admin Message  </h4>
               
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


                        <div class="card-header">Message  
                        </div>



                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">Sl </th>
                                    <th scope="col"  width="15%">Name</th>
                                    <th scope="col" width="25%">Email</th>
                                    <th scope="col" width="25%">Subject</th>
                                    <th scope="col" width="15%">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=1)

                                @foreach ($messages as $message)
                                    <tr>
                                        <th scope="row">{{$i++ }}  </th>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>{{ $message->message }}</td>

                                        <td>
                                            <a href="{{ url('message/delete/' . $message->id) }}"
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
