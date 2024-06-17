@extends('Backend.main')
@section('Content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit About Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit About </li>
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
                                <h3 class="card-title">Edit About  Details</h3>
                            </div>
                            <form method="POST" action="{{route('about.update',$Aboutdetail->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Title</label>
                                                <input type="text" class="form-control" id="exampleInputName" name="title" placeholder="ENTER Title" value="{{$Aboutdetail->title}}">
                                            </div>
                                            @error('title')
                                            <div class="text-red">{{ $message }}</div>

                                            @enderror
                                        </div>
                                        

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="exampleInputFile">Image</label>
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
                                        <div class="col-sm-4" id="display_original_image">
                                            <div class="row">
                                                <div class="col-6">
                                                    <span class="badge bg-success mb-2">Recently uploaded</span>
                                                    @if($Aboutdetail->image == "noimg.jpg")
                                                        <div>
                                                            <span >No Image Uploaded</span>
                                                        </div>

                                                    @else
                                                        <img src="{{ asset('upload/About/'.$Aboutdetail->image) }}"
                                                             class="img-thumbnail"
                                                             style="width: 100%;height: 200px;object-fit: cover" alt="">
                                                    @endif
                                                </div>
                                                <div class="col-4">
                                                    <span class="badge bg-primary mb-2">Image preview</span>
                                                    <img src="" style="max-width: 100%;max-height: 350px"
                                                         class="img-thumbnail" id="img_prv" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Description</label>
                                                <textarea class="form-control" name="description" id="description" > {{html_entity_decode($Aboutdetail->description) }}</textarea>
                                            </div>
                                            @error('description')

                                            <div class="text-red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="exampleInputFile">Status</label>
                                                <div class="input-group">
                                                    <select name="status" id="status"
                                                            class="form-control @error('status') is-invalid @enderror">
                                                        <option value="active" {{$Aboutdetail->status=='active'? 'selected' : ""}}>Publish</option>
                                                        <option value="inactive" {{$Aboutdetail->status=='inactive'? 'selected' : ""}}>Un-Publish</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-pencil-alt" style="padding-right:5px"></i>Update</button>
                                    <a href="{{route('about.index')}}" type="submit" class="btn btn-danger" style="float:right;"><i class="fa fa-minus-circle" style="padding-right:5px"></i>Cancel</a>
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
