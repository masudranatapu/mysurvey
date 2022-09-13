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
                                    <div class="col-md-2">
                                        <h3>
                                            <strong>Pages</strong>
                                            <span class="badge bg-blue">{{ $pages->count() }}</span>
                                        </h3>
                                    </div>
                                    <div class="col-md-7 text-center"></div>
                                    <div class="col-md-3 text-right">
                                        <a href="{{route('admin.pages.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Create Page</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">SL No</th>
                                            <th class="text-center">Page Name</th>
                                            <th class="text-center">Details</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pages as $key => $page)
                                            <tr>
                                                <td class="text-center">{{ $key + 1 }}</td>
                                                <td>{{$page->name}}</td>
                                                <td>{!! substr($page->details, 0,  25) !!}</td>
                                                <td>
                                                    @if($page->status == 1)
                                                        <span class="badge bg-success">Active</span>
                                                    @else
                                                        <span class="badge bg-info">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a title="Edit page" href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-info">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <button title="Delete Blog" class="btn btn-danger waves-effect" type="button" onclick="deleteData({{ $page->id }})">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <form id="delete-form-{{ $page->id }}" action="{{ route('admin.pages.destroy', $page->id) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('script')
    <script src="{{ asset('massage/sweetalert/sweetalert.all.js') }}"></script>
    <script type="text/javascript">
        function deleteData(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    // event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endsection