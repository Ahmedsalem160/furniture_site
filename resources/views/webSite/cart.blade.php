@extends('webSite.layouts.master')
@section('content')
<!-- Start Cart  -->
<div class="cart-box-main">
    @if(Session::has('error'))
        <div class="alert alert-sm alert-danger alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{!! session('error') !!}</strong>
        </div>
    @endif

    @if(Session::has('success'))
        <div class="alert alert-sm alert-success alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{!! session('success') !!}</strong>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Images</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $total_mount=0; $quantity=0; ?>
                    @foreach($orders as $order)

                            <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="img-fluid" src="{{$order->product->image}}" alt="" />
                                    </a>
                                </td>
                                <td class="name-pr">
                                    {{$order->product->name}}
                                </td>
                                <td class="price-pr">
                                    <p> {{$order->product->sale_price}} $</p>
                                </td>
                                <td class="quantity-box">

                                    <input type="text" disabled size="4" value="{{$order->quantity}}" min="0" step="1" class="c-input-text qty text">

                                </td>
                                <td class="total-pr">
                                    <p> {{$order->product->sale_price*$order->quantity}} $</p>
                                </td>
                                <td class="remove-pr">
                                    <a href="{{route('delete.order',$order->id)}}">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php $total_mount = $total_mount + ($order->product->sale_price*$order->quantity);
                              $quantity= $quantity + $order->quantity;
                        ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>


            <!-- document closed-->


    <div class="row my-5">
        <div class="col-lg-12 col-sm-12">
            <div class="update-box">
                <div class="col-12 d-flex shopping-box"><a href="{{route('get.cat')}}" class="ml-auto btn hvr-hover">Update Card</a>
                </div>
            </div>
        </div>
        <br>
        <div class="col-lg-12 col-sm-6">
            <div class="order-box">
                <h3 class="text-center ">Order summary</h3>
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Quantity</h5>
                        <div class="ml-auto h5">  {{$quantity}} Qe </div>
                    </div>
                    <hr>

                    <div class="d-flex gr-total">
                        <h5>Total</h5>
                        <div class="ml-auto h5"> {{number_format($total_mount,2,",",".")}}  $ </div>
                    </div>
            </div>
            <hr class="my-1">

            <div class="col-12 d-flex shopping-box"><a href="" class="ml-auto btn hvr-hover">Apply Order</a>
            </div>
        </div>
    </div>

    </div>
</div>
<!-- End Cart -->
@endsection
@section('js')

@endsection
