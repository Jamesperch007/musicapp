@extends('Backend.main')
@section('Genre-active','active')
@section('Content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add New Genre Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add New Genre </li>
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
                                <h3 class="card-title">ADD New Genre  Details</h3>
                            </div>
                            <form method="POST" action="{{route('genre.store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Title</label>
                                                <input type="text" class="form-control" id="exampleInputName" name="title" placeholder="ENTER Title" value="{{old('title')}}">
                                            </div>
                                            @error('title')
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
                                                <textarea class="form-control" name="description"  maxlength="500" id="description" > {{ old('description') }}</textarea>
                                            </div>
                                            @error('description')

                                            <div class="text-red">{{ $message }}</div>
                                            @enderror
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
                                    <a href="{{route('genre.index')}}" type="submit" class="btn btn-danger" style="float:right;"><i class="fa fa-minus-circle" style="padding-right:5px"></i>Cancel</a>
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
