@extends('Backend.main')
@section('Album-active','active')
@section('Content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add New Album Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add New Album </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">ADD New Album Details</h3>
                        </div>
                        <form method="POST" action="{{route('album.store')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Album Name</label>
                                            <input type="text" class="form-control" id="exampleInputName" name="album_name" placeholder="ENTER Album name" value="{{old('album_name')}}">
                                        </div>
                                        @error('album_name')
                                        <div class="text-red">{{ $message }}</div>

                                        @enderror
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Artist Name</label>
                                                    <input type="text" class="form-control" id="exampleInputName" name="artist_name" placeholder="ENTER Artist name" value="{{old('artist_name')}}">
                                                </div>
                                                @error('artist_name')
                                                <div class="text-red">{{ $message }}</div>

                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Slug</label>
                                                    <input type="text" class="form-control" id="exampleInputName" name="slug" placeholder="ENTER Slug" value="{{old('slug')}}">
                                                </div>
                                                @error('slug')
                                                <div class="text-red">{{ $message }}</div>

                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Genre</label>
                                                    <input type="text" class="form-control" id="exampleInputName" name="genre" placeholder="ENTER Genre" value="{{old('genre')}}">
                                                </div>
                                                @error('genre')
                                                <div class="text-red">{{ $message }}</div>

                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Release Date</label>
                                                    <input type="date" class="form-control" id="exampleInputName" name="release_date" placeholder="ENTER Release Date" value="{{old('release_date')}}">
                                                </div>
                                                @error('release_date')
                                                <div class="text-red">{{ $message }}</div>

                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Language</label>
                                                    <input type="text" class="form-control" id="exampleInputName" name="language" placeholder="ENTER Language" value="{{old('language')}}">
                                                </div>
                                                @error('language')
                                                <div class="text-red">{{ $message }}</div>

                                                @enderror
                                            </div>



                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="exampleInputFile"> Image</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="img" name="image">
                                                            <label class="custom-file-label" for="exampleInputFile">CHOOSE IMAGE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('image')
                                                <div class="text-red">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <div class="col-md-4 mt-3" id="display_original_image">
                                                <img src="" style="max-width: 300px;max-height: 350px" class="img_prv" id="img_prv" alt="">
                                            </div>


                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Music</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="audio" name="audio">
                                                            <label class="custom-file-label" for="exampleInputFile">CHOOSE AUDIO</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('audio')
                                                <div class="text-red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mt-3" id="display_original_audio">
                                                <audio src="" alt=""></audio>
                                            </div>




                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Description</label>
                                                    <textarea class="form-control" name="description" id="description"> {{ old('description') }}</textarea>
                                                </div>
                                                @error('description')

                                                <div class="text-red">{{ $message }}</div>
                                                @enderror
                                            </div>




                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Status</label>
                                                    <div class="input-group">
                                                        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                                            <option value="active" {{ old('status') == "active" ? 'selected' : '' }}>
                                                                Publish
                                                            </option>
                                                            <option value="inactive" {{ old('status') == "inactive" ? 'selected' : '' }}>
                                                                Un-Publish
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle" style="padding-right:5px"></i>Add</button>
                                        <a href="{{route('album.index')}}" type="submit" class="btn btn-danger" style="float:right;"><i class="fa fa-minus-circle" style="padding-right:5px"></i>Cancel</a>
                                    </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('scripts')
<script>
    CKEDITOR.replace('description');
    CKEDITOR.replace('description1');

    $('#img').on('change', function(ev) {
        var reader = new FileReader();

        reader.onload = function(ev) {
            $('#img_prv').attr('src', ev.target.result).csscss('width', '100%').css('height', 'auto')
        }
        reader.readAsDataURL(this.files[0]);
    })
    $('#img1').on('change', function(ev) {
        var reader = new FileReader();

        reader.onload = function(ev) {
            $('#img_prv1').attr('src', ev.target.result).csscss('width', '100%').css('height', 'auto')
        }
        reader.readAsDataURL(this.files[0]);
    })

    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = document.getElementById("audio").files[0].name;
        var nextSibling = e.target.nextElementSibling
        nextSibling.innerText = fileName
    });
</script>
@endsection