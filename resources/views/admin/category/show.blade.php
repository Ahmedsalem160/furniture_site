@extends('admin.layouts.master')

@section('content')

    @include('admin.includes.breadcrumb',['var'=>'Show-All-Categories','link'=>'
        <a href="{{route(\'category-create\')}}" class="btn btn-primary">Add More Categories</a>
'])

    <!-- row opened -->
    <div class="row row-sm">
        <!--div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">All Categories</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 tx-gray-500 mb-2">Categories Data ... </p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 text-md-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>sub_Category</th>
                                <th>PHOTO</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{$category->id}}</th>
                                <td>{{$category->name}}</td>
                                <td> <a href="{{route('sub-category-show',[$category->id])}}" class="btn btn-primary">Sub_Categories</a> </td>
                                <td>PHOTO</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>
    <!-- row closed -->
    @stop
