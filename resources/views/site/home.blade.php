@extends('site.default.main')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="hs-slider owl-carousel">
                <div class="hs-item set-bg" data-setbg="{{asset('assets/img/front/hero/hero-1.jpg')}}">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hc-inner-text">
                                <div class="hc-text">
                                    <h4>Balaji Symphony</h4>
                                    <p><span class="icon_pin_alt"></span> Panvel, Navi Mumbai</p>
                                    <div class="label">For Rent</div>
                                    <h5>$ 65.0<span>/month</span></h5>
                                </div>
                                <div class="hc-widget">
                                    <ul>
                                        <li><i class="fa fa-object-group"></i> 2, 283</li>
                                        <li><i class="fa fa-bathtub"></i> 03</li>
                                        <li><i class="fa fa-bed"></i> 05</li>
                                        <li><i class="fa fa-automobile"></i> 01</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hs-item set-bg" data-setbg="{{asset('assets/img/front/hero/hero-2.jpg')}}">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hc-inner-text">
                                <div class="hc-text">
                                    <h4>Balaji Symphony</h4>
                                    <p><span class="icon_pin_alt"></span> Panvel, Navi Mumbai</p>
                                    <div class="label">For Rent</div>
                                    <h5>$ 65.0<span>/month</span></h5>
                                </div>
                                <div class="hc-widget">
                                    <ul>
                                        <li><i class="fa fa-object-group"></i> 2, 283</li>
                                        <li><i class="fa fa-bathtub"></i> 03</li>
                                        <li><i class="fa fa-bed"></i> 05</li>
                                        <li><i class="fa fa-automobile"></i> 01</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hs-item set-bg" data-setbg="{{asset('assets/img/front/hero/hero-3.jpg')}}">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hc-inner-text">
                                <div class="hc-text">
                                    <h4>Balaji Symphony</h4>
                                    <p><span class="icon_pin_alt"></span> Panvel, Navi Mumbai</p>
                                    <div class="label">For Rent</div>
                                    <h5>$ 65.0<span>/month</span></h5>
                                </div>
                                <div class="hc-widget">
                                    <ul>
                                        <li><i class="fa fa-object-group"></i> 2, 283</li>
                                        <li><i class="fa fa-bathtub"></i> 03</li>
                                        <li><i class="fa fa-bed"></i> 05</li>
                                        <li><i class="fa fa-automobile"></i> 01</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Property Section Begin -->
    <section class="property-section latest-property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h4>Latest PROPERTY</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="property-controls">
                        <ul>
                            <li data-filter="all">All</li>
                            <li data-filter=".apart">Apartment</li>
                            <li data-filter=".house">House</li>
                            <li data-filter=".office">Office</li>
                            <li data-filter=".hotel">Hotel</li>
                            <li data-filter=".restaurent">Restaurent</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row property-filter">
                <div class="col-lg-4 col-md-6 mix all house">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="{{asset('assets/img/front/property/property-1.jpg')}}">
                            <div class="label">For rent</div>
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
                <div class="col-lg-4 col-md-6 mix all restaurent hotel">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="{{asset('assets/img/front/property/property-2.jpg')}}">
                            <div class="label c-red">For rent</div>
                        </div>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price">$ 289.0</div>
                            <h5><a href="#">Unimont Aurum</a></h5>
                            <p><span class="icon_pin_alt"></span> Gut No.102, Opp. HP Petrol Pump, Karjat</p>
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
                <div class="col-lg-4 col-md-6 mix all apart office">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="{{asset('assets/img/front/property/property-2.jpg')}}">
                            <div class="label c-red">For rent</div>
                        </div>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price">$ 289.0</div>
                            <h5><a href="#">Vrindavan Flora</a></h5>
                            <p><span class="icon_pin_alt"></span> No. 15, 16, 17-1A And 17-2, Rasayani, Rasayani</p>
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
                <div class="col-lg-4 col-md-6 mix all hotel restaruent">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="{{asset('assets/img/front/property/property-4.jpg')}}">
                            <div class="label c-red">For rent</div>
                        </div>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price">$ 289.0</div>
                            <h5><a href="#">Shramik Vaibhav</a></h5>
                            <p><span class="icon_pin_alt"></span> 12 Pt at Shedung, Panvel, Raigarh, Navi Mumbai</p>
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
                <div class="col-lg-4 col-md-6 mix all office hotel">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="{{asset('assets/img/front/property/property-5.jpg')}}">
                            <div class="label c-magenta">For rent</div>
                        </div>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price">$ 289.0</div>
                            <h5><a href="#">Poddar Wondercity</a></h5>
                            <p><span class="icon_pin_alt"></span> Badlapur East, Beyond Thane</p>
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
                <div class="col-lg-4 col-md-6 mix house apart office">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="{{asset('assets/img/front/property/property-6.jpg')}}">
                            <div class="label">For rent</div>
                        </div>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price">$ 289.0<span>/month</span></div>
                            <h5><a href="#">GoldCrest Residency</a></h5>
                            <p><span class="icon_pin_alt"></span> No.7, Sector- 11, Ghansoli, Mumbai, Navi Mumbai</p>
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
            </div>
        </div>
    </section>
    <!-- Property Section End -->

    <!-- Chooseus Section Begin -->
    <section class="chooseus-section spad set-bg" data-setbg="{{asset('assets/img/front/chooseus/chooseus-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="chooseus-text">
                        <div class="section-title">
                            <h4>Why choose us</h4>
                        </div>
                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="chooseus-features">
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="{{asset('assets/img/front/chooseus/chooseus-icon-1.png')}}" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Find your future home</h5>
                                <p>We help you find a new home by offering a smart real estate.</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="{{asset('assets/img/front/chooseus/chooseus-icon-2.png')}}" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Buy or rent homes</h5>
                                <p>Millions of houses and apartments in your favourite cities</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="{{asset('assets/img/front/chooseus/chooseus-icon-3.png')}}" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Experienced agents</h5>
                                <p>Find an agent who knows your market best</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="{{asset('assets/img/front/chooseus/chooseus-icon-4.png')}}" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>List your own property</h5>
                                <p>Sign up now and sell or rent your own properties</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->

    <!-- Categories Section Begin -->
    <section class="categories-section">
        <div class="cs-item-list">
            <div class="cs-item set-bg" data-setbg="{{asset('assets/img/front/categories/cat-1.jpg')}}">
                <div class="cs-text">
                    <h5>Apartment</h5>
                    <span>230 property</span>
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="{{asset('assets/img/front/categories/cat-2.jpg')}}">
                <div class="cs-text">
                    <h5>Villa</h5>
                    <span>230 property</span>
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="{{asset('assets/img/front/categories/cat-3.jpg')}}">
                <div class="cs-text">
                    <h5>House</h5>
                    <span>230 property</span>
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="{{asset('assets/img/front/categories/cat-4.jpg')}}">
                <div class="cs-text">
                    <h5>Restaurent</h5>
                    <span>230 property</span>
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="{{asset('assets/img/front/categories/cat-5.jpg')}}">
                <div class="cs-text">
                    <h5>Office</h5>
                    <span>230 property</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

@stop