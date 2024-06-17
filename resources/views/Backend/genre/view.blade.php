@extends('Backend.main')
@section('Genre-active','active')
@section('Content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Genre</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Genre</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('genre.create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New Genre details</a>

                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($Genredetails)
                                @foreach($Genredetails as $key => $value)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$value->title}}</td>
                                        <td>{{$value->slug}}</td>
                                        <td>
                                            @if($value->image == "noimg.jpg")
                                                No Image upload
                                            @else
                                                <img src="{{ asset('upload/Genre/'.$value->image) }}" width="100px" height="80px" style="object-fit: cover" alt="">
                                            @endif

                                        </td>
                                        <!--  -->
                                        <td> {{ \Str::limit(strip_tags(html_entity_decode($value->description)),20,$ends="...") }} </td>
                                        
                                        <td><span class="badge bg-danger">{{$value->status}}</span></td>
                                        <td>
                                            <a href="{{ route('genre.edit',$value->id) }}" class="btn btn-primary mb-1"> <i class="fa fa-pen"></i></a>

                                            <form action="{{ route('genre.destroy',$value->id) }}" method="POST">
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
