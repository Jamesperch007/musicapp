@extends('Backend.main')
@section('Content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Contact Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Contact </li>
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
                                <h3 class="card-title">Edit Contact  Details</h3>
                            </div>
                            <form method="POST" action="{{route('contact.update',$Contactdetail->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="ENTER Name" value="{{$Contactdetail->name}}">
                                            </div>
                                            @error('name')
                                            <div class="text-red">{{ $message }}</div>

                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="text" class="form-control" id="exampleInputName" name="email" placeholder="ENTER Email" value="{{$Contactdetail->email}}">
                                            </div>
                                            @error('email')
                                            <div class="text-red">{{ $message }}</div>

                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Subject</label>
                                                <input type="text" class="form-control" id="exampleInputName" name="subject" placeholder="ENTER Subject" value="{{$Contactdetail->subject}}">
                                            </div>
                                            @error('subject')
                                            <div class="text-red">{{ $message }}</div>

                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Message</label>
                                                <textarea class="form-control" name="message" id="message" > {{html_entity_decode($Contactdetail->message) }}</textarea>
                                            </div>
                                            @error('message')

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
                                                        <option value="active" {{$Contactdetail->status=='active'? 'selected' : ""}}>Publish</option>
                                                        <option value="inactive" {{$Contactdetail->status=='inactive'? 'selected' : ""}}>Un-Publish</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-pencil-alt" style="padding-right:5px"></i>Update</button>
                                    <a href="{{route('contact.index')}}" type="submit" class="btn btn-danger" style="float:right;"><i class="fa fa-minus-circle" style="padding-right:5px"></i>Cancel</a>
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
