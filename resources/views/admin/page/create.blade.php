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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>
                                            <strong>Pages Create</strong>
                                        </h3>
                                    </div>
                                    <div class="col-md-6 text-center"></div>
                                    <div class="col-md-3"></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{route('admin.pages.store')}}" method="POST" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-md-2 text-right">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="name" placeholder="Page Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 text-right">Details</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control summernote" name="details" placeholder="Details"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 text-right">Status</label>
                                        <div class="col-md-10">
                                            <select name="status" class="form-control">
                                                <option value="" disabled>Select One</option>
                                                <option value="1" selected>Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Create Page</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('script')
    <script>
        $(function () {
            // Summernote
            $('.summernote').summernote()
        });
    </script>
@endsection