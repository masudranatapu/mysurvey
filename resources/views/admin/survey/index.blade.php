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
                                <h3>
                                    <strong>Survey</strong>
                                    <span class="badge bg-blue">{{ $survey->count() }}</span>
                                </h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">SL No</th>
                                            <th class="text-center">firstname</th>
                                            <th class="text-center">lastname</th>
                                            <th class="text-center">email</th>
                                            <th class="text-center">ownhome</th>
                                            <th class="text-center">phone</th>
                                            <th class="text-center">zipcode</th>
                                            <th class="text-center">electricitybill</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($survey as $key => $sur)
                                            <tr>
                                                <td class="text-center">{{ $key + 1 }}</td>
                                                <td>{{$sur->firstname }}</td>
                                                <td>{{$sur->lastname }}</td>
                                                <td>
                                                    <a href="mailto::{{$sur->email }}">{{$sur->email }}</a>
                                                </td>
                                                <td>
                                                    @if($sur->ownhome == 1)
                                                        <span class="badge bg-success">Own House</span>
                                                    @endif
                                                </td>
                                                <td><a href="tel:{{$sur->phone }}">{{$sur->phone }}</a></td>
                                                <td>{{$sur->zipcode }}</td>
                                                <td>{{$sur->electricitybill }} $</td>
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