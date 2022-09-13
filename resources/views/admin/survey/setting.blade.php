@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <form action="{{route('admin.website.updated', $setting->id)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>
                                        <strong>Web Setting</strong>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-md-3 text-right">Site Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="site_name" class="form-control" value="{{$setting->site_name}}" placeholder="Site Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-right">Title</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="title" cols="30" rows="2" placeholder="Title">{{$setting->title}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-right">Content</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="content" cols="30" rows="2" placeholder="Content">{{$setting->content}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label text-right">Background Image</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" onChange="mainImage(this)" name="image" class="custom-file-input">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label text-right">Current Background Image</label>
                                        <div class="col-md-9">
                                            <img width="100" height="100" src="@if($setting->image) {{asset($setting->image)}} @else {{ asset('demomedia/demo.jpg') }}@endif" id="image">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-right">Success Page Title</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="success_title" cols="30" rows="2"  placeholder="Success Page Title">{{$setting->success_title}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-right">Success Page Content</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="success_content" cols="30" rows="2"  placeholder="Success Page Content">{{$setting->success_content}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-right">Success file Title</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="success_file_content" cols="30" rows="2"  placeholder="Success file Title">{{$setting->success_file_content}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-right">Success Bottom Content</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="success_botton_content" cols="30" rows="2"  placeholder="Success Bottom Content">{{$setting->success_botton_content}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-right">Home Page Terms</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="home_page_terms" cols="30" rows="3"  placeholder="Home Page Terms">{{$setting->home_page_terms}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3 col-form-label text-right"></div>
                                        <div class="col-md-9">
                                            <button type="submit" class="btn btn-info">Update Website</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@stop

@section('script')
    <script>
        
        function mainImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image').attr('src', e.target.result)
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
@endsection