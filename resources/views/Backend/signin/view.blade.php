@extends('Backend.main')
@section('Contact-active','active')
@section('Content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> signin</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> signin</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <a href="{{route('signin.create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New Contact details</a> -->

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
                            @if($Signindetail)
                                @foreach($Signindetail as $key => $value)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$value->full_name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->user_name}}</td>
                                        <td>{{$value->password}}</td>
                                        
                                        
                                        
                                        <td><span class="badge bg-danger">{{$value->status}}</span></td>
                                        <td>
                                            <!-- <a href="{{ route('signin.edit',$value->id) }}" class="btn btn-primary mb-1"> <i class="fa fa-pen"></i></a> -->

                                            <form action="{{ route('signin.destroy',$value->id) }}" method="POST">
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
