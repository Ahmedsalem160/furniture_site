@extends('site.default.main')

@section('content')

    <!-- Breadcrumb Section Begin -->

    @include('site.includes.breadcrumb',['title'=>"profile",'nav'=>"<a href=''><i class=''></i> Home</a>
                        <a href='./agents.html'>Agents</a>    <span>Profile</span>"])

    <!-- Breadcrumb Section End -->

    <!-- Property Section Begin -->
{{--    @foreach($properties as $property)--}}
    <section class="property-section profile-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="{{asset('assets/img/front/property/property-1.jpg')}}">
{{--                            <div class="label">{{$property->company}}</div>--}}
                        </div>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price">$ 289.0<span>/month</span></div>
                            <h5><a href="#">Home in Merrick Way</a></h5>
                            <p><span class="icon_pin_alt"></span> 3 Middle Winchendon Rd, Rindge, NH 03461</p>
                            <ul>
                                <li><i class="fa fa-object-group"></i> 2, 283</li>
                                <li><i class="fa fa-bathtub"></i> 03</li>
                                <li><i class="fa fa-bed"></i> 05</li>
                                <li><i class="fa fa-automobile"></i> 01</li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="{{asset('assets/img/front/property/posted-by/pb-1.jpg')}}" alt="">
                                        <h6>Ashton Kutcher</h6>
                                    </div>
                                    <div class="pa-text">
                                        123-455-688
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                @endforeach--}}


                <div class="col-lg-12">
                    <div class="property-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#" class="icon"><span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Section End -->
@stop
