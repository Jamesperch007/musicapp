@extends('Backend.main')
@section('Contact-active','active')
@section('Content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Register</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        

                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>User Name</th>
                                <th>Password</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($Registerdetail)
                                @foreach($Registerdetail as $key => $value)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$value->full_name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->user_name}}</td>
                                        <td>{{$value->password}}</td>
                                        
                                        <!--  -->
                                        
                                        
                                        <td><span class="badge bg-danger">{{$value->status}}</span></td>
                                        <td>
                                            

                                            <form action="{{ route('register.destroy',$value->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger "
                                                        type="submit"
                                                        onclick="return confirm('Do you really want to delete this item');">
                                                    <i class="fa fa-trash"></i></button>
                                            </form>


                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    </div>

@endsection
