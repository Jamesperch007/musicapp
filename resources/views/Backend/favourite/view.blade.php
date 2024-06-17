@extends('Backend.main')
@section('Favourite Songs-active','active')
@section('Content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Favourite Songs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Favourite Songs</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('favourite.create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New Favourite songs details</a>

                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Song Name</th>
                                <th>Genre</th>
                                <th>Artist Name</th>
                                <th>Image</th>
                                <th>Audio</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($Favouritesongs)
                            @foreach($Favouritesongs as $key => $value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->song_name}}</td>
                                <td>{{$value->genre}}</td>
                                <td>{{$value->artist_name}}</td>
                                <td>
                                    @if($value->image == "noimg.jpg")
                                    No Image upload
                                    @else
                                    <img src="{{ asset('upload/Favourite/'.$value->image) }}" width="100px" height="80px" style="object-fit: cover" alt="">
                                    @endif

                                </td>
                                <td>
                                    @if($value->audio == "audio.mp3")
                                    No Audio upload
                                    @else
                                    <audio controls>
                                        <source src="{{ asset('upload/Favourite/' . $value->audio) }}" type="audio/{{ pathinfo($value->audio, PATHINFO_EXTENSION) }}">
                                        Your browser does not support the audio element.
                                    </audio>
                                    @endif
                                </td>

                                <!--  -->


                                <td><span class="badge bg-danger">{{$value->status}}</span></td>
                                <td>
                                    <a href="{{ route('favourite.edit',$value->id) }}" class="btn btn-primary mb-1"> <i class="fa fa-pen"></i></a>

                                    <form action="{{ route('favourite.destroy',$value->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger " type="submit" onclick="return confirm('Do you really want to delete this item');">
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