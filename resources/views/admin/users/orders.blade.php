@extends('admin.layouts.master')

@section('content')

    @include('admin.includes.breadcrumb',['var'=>'Show-All-Sub-Categories','link'=>'

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
                                <th style="text-align: center; vertical-align: middle;">Q</th>
                                <th style="text-align: center; vertical-align: middle;">price</th>
                                <th style="text-align: center; vertical-align: middle;">User_ID</th>
                                <th style="text-align: center; vertical-align: middle;" >Total-Price</th>
                                <th style="text-align: center; vertical-align: middle;">Oder id</th>
                                <th style="text-align: center; vertical-align: middle;">Operation</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($orders as $order)
                                <tr>
                                    @foreach($order->products as $product)
                                        <td>{{$product->name}}{{count($order->products)}}</td>
                                        <td>{{$product->sale_price}}</td>
                                        <th scope="row" style="text-align: center; vertical-align: middle;">{{$order->user->name}}</th>
                                        <td style="text-align: center; vertical-align: middle;">{{$order->total_price}}</td>
                                        <td style="text-align: center; vertical-align: middle;">{{$order->id}}</td>

                                        <td style="text-align: center; vertical-align: middle;">
                                            <a style="margin-bottom: 5px" href="#" class='btn btn-primary btn-with-icon'>
                                                Show Detail</a>
                                        </td>
                                    @endforeach


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
@endsection
