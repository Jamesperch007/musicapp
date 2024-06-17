@extends('Backend.main')
@section('Album-active','active')
@section('Content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Album</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Album</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('album.create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New Album details</a>

                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Album Name</th>
                                <th>Slug</th>
                                <th>Artist Name</th>
                                <th>Genre</th>
                                <th>Release Date</th>
                                <th>Language</th>
                                <th>Image</th>
                                <th>Audio</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($Albumdetail)
                            @foreach($Albumdetail as $key => $value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->album_name}}</td>
                                <td>{{$value->slug}}</td>
                                <td>{{$value->artist_name}}</td>
                                <td>{{$value->genre}}</td>
                                <td>{{$value->release_date}}</td>
                                <td>{{$value->language}}</td>
                                <td>
                                    @if($value->image == "noimg.jpg")
                                    No Image upload
                                    @else
                                    <img src="{{ asset('upload/Album/'.$value->image) }}" width="100px" height="80px" style="object-fit: cover" alt="">
                                    @endif

                                </td>
                                <td>
                                    @if($value->audio == "audio.mp3")
                                    No Audio upload
                                    @else
                                    <audio controls>
                                        <source src="{{ asset('upload/Album/' . $value->audio) }}" type="audio/{{ pathinfo($value->audio, PATHINFO_EXTENSION) }}">
                                        Your browser does not support the audio element.
                                    </audio>
                                    @endif
                                </td>

                                <td> {{ \Str::limit(strip_tags(html_entity_decode($value->description)),20,$ends="...") }} </td>


                                <td><span class="badge bg-danger">{{$value->status}}</span></td>
                                <td>
                                    <a href="{{ route('album.edit',$value->id) }}" class="btn btn-primary mb-1"> <i class="fa fa-pen"></i></a>

                                    <form action="{{ route('album.destroy',$value->id) }}" method="POST">
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