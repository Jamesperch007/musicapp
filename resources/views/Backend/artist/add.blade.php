@extends('Backend.main')
@section('Artist-active','active')
@section('Content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add New Artist Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add New Artist </li>
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
                                <h3 class="card-title">ADD New Artist  Details</h3>
                            </div>
                            <form method="POST" action="{{route('artist.store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Artist Name</label>
                                                <input type="text" class="form-control" id="exampleInputName" name="artist_name" placeholder="ENTER artist name" value="{{old('artist_name')}}">
                                            </div>
                                            @error('artist_name')
                                            <div class="text-red">{{ $message }}</div>

                                            @enderror
                                        </div>
                                    <div class="row">
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
                                                <label for="exampleInputEmail1">Nick Name</label>
                                                <input type="text" class="form-control" id="exampleInputName" name="nick_name" placeholder="ENTER Nick Name" value="{{old('nick_name')}}">
                                            </div>
                                            @error('nick_name')
                                            <div class="text-red">{{ $message }}</div>

                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Age</label>
                                                <input type="text" class="form-control" id="exampleInputName" name="age" placeholder="ENTER Age" value="{{old('age')}}">
                                            </div>
                                            @error('age')
                                            <div class="text-red">{{ $message }}</div>

                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Awards</label>
                                                <input type="text" class="form-control" id="exampleInputName" name="awards" placeholder="ENTER awards" value="{{old('awards')}}">
                                            </div>
                                            @error('awards')
                                            <div class="text-red">{{ $message }}</div>

                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Social Media</label>
                                                <input type="text" class="form-control" id="exampleInputName" name="social_media" placeholder="ENTER social media" value="{{old('social_media')}}">
                                            </div>
                                            @error('social_media')
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
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Description</label>
                                                <textarea class="form-control" name="description" id="description" > {{ old('description') }}</textarea>
                                            </div>
                                            @error('description')

                                            <div class="text-red">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="exampleInputFile"> Music</label>
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
                                        <audio src=""  alt="">
                                    </div>



                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="exampleInputFile">Status</label>
                                                <div class="input-group">
                                                    <select name="status" id="status"
                                                            class="form-control @error('status') is-invalid @enderror">
                                                        <option value="active"  {{ old('status') == "active" ? 'selected' : '' }}>
                                                            Publish
                                                        </option>
                                                        <option value="inactive"  {{ old('status') == "inactive" ? 'selected' : '' }}>
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
                                    <a href="{{route('artist.index')}}" type="submit" class="btn btn-danger" style="float:right;"><i class="fa fa-minus-circle" style="padding-right:5px"></i>Cancel</a>
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

        $('#img').on('change',function (ev) {
            var reader = new FileReader();

            reader.onload = function(ev) {
                $('#img_prv').attr('src',ev.target.result).csscss('width','100%').css('height','auto')
            }
            reader.readAsDataURL(this.files[0]);
        })
        $('#img1').on('change',function (ev) {
            var reader = new FileReader();

            reader.onload = function(ev) {
                $('#img_prv1').attr('src',ev.target.result).csscss('width','100%').css('height','auto')
            }
            reader.readAsDataURL(this.files[0]);
        })
    </script>
@endsection
