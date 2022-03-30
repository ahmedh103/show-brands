<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Category <b> </b>

            {{-- {{ __('Dashboard') }} --}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
@if (session('success'))
    

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session('success')}}</strong> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          @endif


                        <div class="card-header"> All Catogery </div>



                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Sl No</th>
                                    <th scope="col">Category   Name</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
{{-- @php($i=1) --}}

@foreach (  $categories as $data)
    


                                <tr>
                                    <th scope="row">{{$categories->firstItem()+$loop->index }}  </th>
                                    <td>{{  $data-> category_name }}</td>
                                    <td> {{  $data->user->name }}     	</td>

                                   
                                    <td>
                                        @if ( $data-> created_at ==Null)
                                        
                                      <span  class="text-danger">No Date</span>
                                        @else
                                        {{ Carbon\Carbon::parse( $data-> created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                         <a href="{{url('category/edit/'. $data->id) }}"  class="btn btn-info">Edit</a>   
                                         <a href="{{ url('softdelete/category/'.$data->id) }}"  class="btn btn-danger">Delete</a> 
                                    </td>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $categories->links()}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header"> Add Catogery </div>
                        <div class="card-body">
                            <form action="{{ route('store.category') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input type="text" name="category_name" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('category_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary" style="background-color: black;">Add
                                    Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>








<!-- trash part   -->



        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">



                        <div class="card-header"> Trach List </div>



                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Sl No</th>
                                    <th scope="col">Category   Name</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
{{-- @php($i=1) --}}

@foreach (  $trachCat as $data)
    


                                <tr>
                                    <th scope="row">{{$categories->firstItem()+$loop->index }}  </th>
                                    <td>{{  $data-> category_name }}</td>
                                    <td> {{  $data->user->name }}     	</td>

                                   
                                    <td>
                                        @if ( $data-> created_at ==Null)
                                        
                                      <span  class="text-danger">No Date</span>
                                        @else
                                        {{ Carbon\Carbon::parse( $data-> created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                         <a href="{{url('category/restore/'. $data->id) }}"  class="btn btn-info">Restore</a>   
                                         <a href="{{url('pdelete/category/'. $data->id) }}"  class="btn btn-danger">P Delete</a> 
                                    </td>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $trachCat->links()}}
                    </div>
                </div>
                <div class="col-md-4">
                  
            </div>


        </div>


<!-- End trach  -->











    </div>

</x-app-layout>























{{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div> --}}
