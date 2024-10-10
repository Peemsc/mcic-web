@extends('layouts.sellers.main')

@section('title')


@section('body-class')
@section('body-style')

@section('stylesheet')
@endsection

@section('content')
    <!--section-banner-->
    <div class="section-banner">
        <banner-index></banner-index>
        <!--end-section-banner-->
    </div>
    <div class="navbar-introduce wow fadeIn">
        <div class="container">
            <div class="card-introduce wow fadeIn">
                <span class="icons">
                    <img src="{{ asset('assets/img/icons/icon-free-shipping.svg') }}" alt="">
                </span>
                <h6>ช้อปครบ <span class="nowrap">499.- ส่งฟรี</span></h6>
            </div>
            <!--card-menu-->

            <span class="vr"></span>

            <div class="card-introduce wow fadeIn">
                <span class="icons">
                    <img src="{{ asset('assets/img/icons/icon-authentic.svg') }}" alt="">
                </span>
                <h6>สินค้าของแท้ 100%</h6>
            </div>
            <!--card-menu-->

            <span class="vr"></span>

            <div class="card-introduce wow fadeIn">
                <span class="icons">
                    <img src="{{ asset('assets/img/icons/icon-fast-shipping.svg') }}" alt="">
                </span>
                <h6>ส่งเร็วทันใจ</h6>
            </div>
            <!--card-menu-->

            <span class="vr"></span>

            <div class="card-introduce wow fadeIn">
                <span class="icons">
                    <img src="{{ asset('assets/img/icons/icon-return-2.svg') }}" alt="">
                </span>
                <h6>เปลี่ยน/คืนภายได้<span class="nowrap">ใน 14 วัน</span></h6>
            </div>
            <!--card-menu-->
        </div>
        <!--container-->
    </div>
    <!--navbar-service-->

    <div class="section py-xl-5 py-4">
        <div class="container">
            <div class="title-main wow fadeIn">
                <span class="icons">
                    <img class="w-56" src="{{ asset('assets/img/icons/icon-new-arrivals.svg') }}" alt="">
                </span>
                <div class="textgroup">
                    <h6>New Arrivals</h6>
                    <h2>สินค้ามาใหม่</h2>
                </div>
            </div>
            <!--title-main-->

            <div class="swiper-overflow wow fadeIn">
                <div class="swiper-container swiper-pd-new">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card-product">
                                <a href="/products-detail" class="card-link"></a>
                                <span class="label recommend">ใหม่!</span>
                                <span class="label discount">
                                    ลด<br>
                                    40%
                                </span>
                                <div class="card-photo">
                                    <div class="photo"
                                        style="background-image: url({{ asset('assets/img/thumb/photo-240x220--1.jpg') }});">
                                        <img src="{{ asset('assets/img/thumb/frame-100x103.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        ดีแคช มูฟวิ่ง แฮร์ สเปรย์ นัมเบอร์ 30
                                        สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล....
                                    </p>
                                    <div class="price blue">
                                        ฿99.00 <span class="discount">฿178</span>
                                    </div>
                                </div>
                            </div>
                            <!--card-product-->
                        </div>
                        <!--swiper-slide-->

                        <div class="swiper-slide">
                            <div class="card-product">
                                <a href="/products-detail" class="card-link"></a>
                                <span class="label recommend">ใหม่!</span>
                                <span class="label discount">
                                    ลด<br>
                                    40%
                                </span>
                                <div class="card-photo">
                                    <div class="photo"
                                        style="background-image: url({{ asset('assets/img/thumb/photo-240x220--2.jpg') }});">
                                        <img src="{{ asset('assets/img/thumb/frame-100x103.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        ดีแคช มูฟวิ่ง แฮร์ สเปรย์ นัมเบอร์ 30
                                        สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล....
                                    </p>
                                    <div class="price blue">
                                        ฿99.00 <span class="discount">฿178</span>
                                    </div>
                                </div>
                            </div>
                            <!--card-product-->
                        </div>
                        <!--swiper-slide-->

                        <div class="swiper-slide">
                            <div class="card-product">
                                <a href="/products-detail" class="card-link"></a>
                                <span class="label recommend">ใหม่!</span>
                                <span class="label discount">
                                    ลด<br>
                                    40%
                                </span>
                                <div class="card-photo">
                                    <div class="photo"
                                        style="background-image: url({{ asset('assets/img/thumb/photo-240x220--3.jpg') }});">
                                        <img src="{{ asset('assets/img/thumb/frame-100x103.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        ดีแคช มูฟวิ่ง แฮร์ สเปรย์ นัมเบอร์ 30
                                        สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล....
                                    </p>
                                    <div class="price blue">
                                        ฿99.00 <span class="discount">฿178</span>
                                    </div>
                                </div>
                            </div>
                            <!--card-product-->
                        </div>
                        <!--swiper-slide-->

                        <div class="swiper-slide">
                            <div class="card-product">
                                <a href="/products-detail" class="card-link"></a>
                                <span class="label recommend">ใหม่!</span>
                                <span class="label discount">
                                    ลด<br>
                                    40%
                                </span>
                                <div class="card-photo">
                                    <div class="photo"
                                        style="background-image: url({{ asset('assets/img/thumb/photo-240x220--4.jpg') }});">
                                        <img src="{{ asset('assets/img/thumb/frame-100x103.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        ดีแคช มูฟวิ่ง แฮร์ สเปรย์ นัมเบอร์ 30
                                        สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล....
                                    </p>
                                    <div class="price blue">
                                        ฿99.00 <span class="discount">฿178</span>
                                    </div>
                                </div>
                            </div>
                            <!--card-product-->
                        </div>
                        <!--swiper-slide-->

                        <div class="swiper-slide">
                            <div class="card-product">
                                <a href="/products-detail" class="card-link"></a>
                                <span class="label recommend">ใหม่!</span>
                                <span class="label discount">
                                    ลด<br>
                                    40%
                                </span>
                                <div class="card-photo">
                                    <div class="photo"
                                        style="background-image: url({{ asset('assets/img/thumb/photo-240x220--1.jpg') }});">
                                        <img src="assets/img/thumb/frame-100x103.png" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        ดีแคช มูฟวิ่ง แฮร์ สเปรย์ นัมเบอร์ 30
                                        สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล....
                                    </p>
                                    <div class="price blue">
                                        ฿99.00 <span class="discount">฿178</span>
                                    </div>
                                </div>
                            </div>
                            <!--card-product-->
                        </div>
                        <!--swiper-slide-->
                    </div>
                    <!--swiper-wrapper-->
                </div>
                <!--swiper-container-->

                <div class="swiper-pagination pd-new d-none"></div>

                <div class="swiper-button-group">
                    <div class="swiper-button swiper-button-prev lg pd-new"></div>
                    <div class="swiper-button swiper-button-next lg pd-new"></div>
                </div>

            </div>
            <!--swiper-overflow-->
        </div>
        <!--container-->
    </div>
    <!--section-->

    <div class="section bg-light py-lg-5 py-4">
        <div class="container">
            <div class="title-main style-2 wow fadeIn">
                <span class="icons">
                    <img class="w-60" src="{{ asset('assets/img/icons/icon-category.svg') }}" alt="">
                </span>
                <div class="textgroup">
                    <h5>เลือกช้อปตาม</h5>
                    <h2>แคตตาล็อกสินค้า</h2>
                </div>
            </div>
            <!--title-main-->

            <div class="row g-3">
                <div class="col-sm-7 col-lg-5 col-6">
                    <div class="card-menu xl">
                        <a href="/products-catagory" class="card-link"></a>
                        <div class="card-photo">
                            <div class="photo"
                                style="background-image: url({{ asset('assets/img/thumb/photo-1000x671--1.jpg') }});">
                            </div>
                        </div>
                        <div class="card-body">
                            <span class="vr" style="background-color: #325FA4;"></span>
                            <h3>ผลิตภัณฑ์สีผม</h3>
                        </div>
                    </div>
                    <!--card-menu-->
                </div>

                <div class="col-sm-5 col-6 d-block d-lg-none">
                    <div class="card-menu lg wow fadeIn">
                        <a href="/products-catagory" class="card-link"></a>
                        <div class="card-photo">
                            <div class="photo"
                                style="background-image: url({{ asset('assets/img/thumb/photo-680x776--1.jpg') }});">
                            </div>
                        </div>
                        <div class="card-body">
                            <span class="vr" style="background-color: #71B4DA;"></span>
                            <h4>ผลิตภัณฑ์บำรุงเส้นผม</h4>
                        </div>
                    </div>
                    <!--card-menu-->
                </div>

                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-lg-5 d-none d-lg-block">
                            <div class="card-menu lg wow fadeIn">
                                <a href="/products-catagory" class="card-link"></a>
                                <div class="card-photo">
                                    <div class="photo"
                                        style="background-image: url({{ asset('assets/img/thumb/photo-680x776--1.jpg') }});">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <span class="vr" style="background-color: #71B4DA;"></span>
                                    <h4>ผลิตภัณฑ์บำรุงเส้นผม</h4>
                                </div>
                            </div>
                            <!--card-menu-->
                        </div>
                        <div class="col-lg-7">
                            <div class="row card-xs-group g-3">
                                <div class="col-lg-6 col-sm-3 col-6">
                                    <div class="card-menu sm wow fadeIn">
                                        <a href="/products-catagory" class="card-link"></a>
                                        <div class="card-photo">
                                            <div class="photo"
                                                style="background-image:url({{ asset('assets/img/thumb/photo-440x344--1.jpg') }});">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span class="vr" style="background-color: #FECA46;"></span>
                                            <h6>ผลิตภัณฑ์ยืด/ดัด</h6>
                                        </div>
                                    </div>
                                    <!--card-menu-->
                                </div>
                                <div class="col-lg-6 col-sm-3 col-6">
                                    <div class="card-menu sm wow fadeIn">
                                        <a href="/products-catagory" class="card-link"></a>
                                        <div class="card-photo">
                                            <div class="photo"
                                                style="background-image:url({{ asset('assets/img/thumb/photo-440x344--2.jpg') }});">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span class="vr" style="background-color: #00A3FF;"></span>
                                            <h6>ผลิตภัณฑ์จัดแต่งทรงผม</h6>
                                        </div>
                                    </div>
                                    <!--card-menu-->
                                </div>
                                <div class="col-lg-6 col-sm-3 col-6">
                                    <div class="card-menu sm wow fadeIn">
                                        <a href="/products-catagory" class="card-link"></a>
                                        <div class="card-photo">
                                            <div class="photo"
                                                style="background-image:url({{ asset('assets/img/thumb/photo-440x344--3.jpg') }});">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span class="vr" style="background-color: #EF35B0;"></span>
                                            <h6>อุปกรณ์ทำผม</h6>
                                        </div>
                                    </div>
                                    <!--card-menu-->
                                </div>
                                <div class="col-lg-6 col-sm-3 col-6">
                                    <div class="card-menu sm wow fadeIn">
                                        <a href="/products-catagory" class="card-link"></a>
                                        <div class="card-photo">
                                            <div class="photo"
                                                style="background-image:url({{ asset('assets/img/thumb/photo-440x344--4.jpg') }});">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span class="vr" style="background-color: #89660B;"></span>
                                            <h6>ผลิตภัณฑ์สำหรับผู้ชาย</h6>
                                        </div>
                                    </div>
                                    <!--card-menu-->
                                </div>
                            </div>
                            <!--row-->
                        </div>
                    </div>
                    <!--row-->
                </div>
                <!--col-md-7-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
    <!--section-->

    <div class="section py-xl-5 py-4">
        <div class="container">
            <div class="title-main wow fadeIn">
                <span class="icons">
                    <img class="w-45" src="{{ asset('assets/img/icons/icon-like.svg') }}" alt="">
                </span>
                <div class="textgroup">
                    <h6>Recommended</h6>
                    <h2>สินค้าแนะนำ</h2>
                </div>
            </div>
            <!--title-main-->

            <div class="row">
                <div class="col-lg-6 mb-lg-5">
                    <div class="card-product highlight recommended wow fadeIn">
                        <a href="/products-detail" class="card-link"></a>
                        <div class="card-photo has-line">
                            <div class="photo"
                                style="background-image: url({{ asset('assets/img/thumb/photo-240x220--3.jpg') }});">
                            </div>
                        </div>

                        <div class="img-recommended">
                            <img src="{{ asset('assets/img/thumb/img-recommended.jpg') }}" alt="">
                        </div>

                        <div class="card-body ps">
                            <h3>ดีแคช แม็กซ์ สปีด ฟลอรัล
                                คัลเลอร์ส คอนดิชันเนอร์</h3>

                            <div class="price blue">
                                ฿39.00
                            </div>

                            <button class="btn">SHOP NOW</button>
                        </div>
                        <!--card-body-->
                    </div>
                    <!--card-promotion-->
                </div>
                <!--col-md-6-->

                <div class="col-lg-6 mb-lg-5">
                    <div class="card-product highlight recommended wow fadeIn">
                        <a href="/products-detail" class="card-link"></a>
                        <div class="card-photo has-line">
                            <div class="photo"
                                style="background-image: url({{ asset('assets/img/thumb/photo-240x220--2.jpg') }});">
                            </div>
                        </div>

                        <div class="img-recommended">
                            <img src="{{ asset('assets/img/thumb/img-recommended.jpg') }}" alt="">
                        </div>

                        <div class="card-body ps">
                            <h3>ดีแคช แม็กซ์ สปีด ฟลอรัล
                                คัลเลอร์ส คอนดิชันเนอร์</h3>

                            <div class="price blue">
                                ฿39.00
                            </div>

                            <button class="btn">SHOP NOW</button>
                        </div>
                        <!--card-body-->
                    </div>
                    <!--card-promotion-->
                </div>
                <!--col-md-6-->
            </div>
            <!--row-->

            <div class="row g-4">
                <div class="col-sm-3 col-6">
                    <div class="card-product wow fadeIn">
                        <a href="/products-detail" class="card-link"></a>
                        <span class="label recommend">แนะนำ</span>
                        <span class="label discount">
                            ลด<br>
                            40%
                        </span>
                        <div class="card-photo">
                            <div class="photo"
                                style="background-image: url({{ asset('assets/img/thumb/photo-240x220--1.jpg') }});">
                                <img src="{{ asset('assets/img/thumb/frame-100x103.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <p>
                                ดีแคช มูฟวิ่ง แฮร์ สเปรย์ นัมเบอร์ 30
                                สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล....
                            </p>
                            <div class="price blue">
                                ฿99.00 <span class="discount">฿178</span>
                            </div>
                        </div>
                    </div>
                    <!--card-product-->
                </div>
                <!--col-6-->

                <div class="col-sm-3 col-6">
                    <div class="card-product wow fadeIn">
                        <a href="/products-detail" class="card-link"></a>
                        <span class="label recommend">แนะนำ</span>
                        <div class="card-photo">
                            <div class="photo"
                                style="background-image: url({{ asset('assets/img/thumb/photo-240x220--2.jpg') }});">
                                <img src="{{ asset('assets/img/thumb/frame-100x103.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <p>
                                ดีแคช มูฟวิ่ง แฮร์ สเปรย์ นัมเบอร์ 30
                                สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล....
                            </p>
                            <div class="price blue">
                                ฿99.00
                            </div>
                        </div>
                    </div>
                    <!--card-product-->
                </div>
                <!--col-6-->

                <div class="col-sm-3 col-6">
                    <div class="card-product wow fadeIn">
                        <a href="/products-detail" class="card-link"></a>
                        <span class="label recommend">แนะนำ</span>
                        <div class="card-photo">
                            <div class="photo"
                                style="background-image: url({{ asset('assets/img/thumb/photo-240x220--3.jpg') }});">
                                <img src="{{ asset('assets/img/thumb/frame-100x103.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <p>
                                ดีแคช มูฟวิ่ง แฮร์ สเปรย์ นัมเบอร์ 30
                                สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล....
                            </p>
                            <div class="price blue">
                                ฿99.00
                            </div>
                        </div>
                    </div>
                    <!--card-product-->
                </div>
                <!--col-6-->

                <div class="col-sm-3 col-6">
                    <div class="card-product wow fadeIn">
                        <a href="/products-detail" class="card-link"></a>
                        <span class="label recommend">แนะนำ</span>
                        <div class="card-photo">
                            <div class="photo"
                                style="background-image: url({{ asset('assets/img/thumb/photo-240x220--4.jpg') }});">
                                <img src="{{ asset('assets/img/thumb/frame-100x103.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <p>
                                ดีแคช มูฟวิ่ง แฮร์ สเปรย์ นัมเบอร์ 30
                                สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล....
                            </p>
                            <div class="price blue">
                                ฿99.00
                            </div>
                        </div>
                    </div>
                    <!--card-product-->
                </div>
                <!--col-6-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
    <!--section-->

    <div class="section-title bg wow fadeIn">
        <div class="background" style="background-image: url({{ asset('assets/img/thumb/title-bg-1.jpg') }});"></div>
        <div class="container">
            <div class="textgroup">
                <h3>สินค้าขายดี</h3>
                <h5 class="orange">ประจำแบรนด์</h5>
            </div>

            <div class="img-right wow fadeInUp">
                <img src="{{ asset('assets/img/thumb/title-bar-icon-1.png') }}" alt="">
            </div>
        </div>
        <!--container-->
    </div>

    <div class="section">
        <div class="container">
            <ul class="nav nav-tabs nav-fill normal brands mb-4 wow fadeIn">
                <li>
                    <a class="active" data-bs-toggle="tab" data-bs-target="#home-tab-pane">แบรนด์ที่ 1</a>
                </li>
                <li>
                    <a data-bs-toggle="tab" data-bs-target="#home-tab-pane">แบรนด์ที่ 2</a>
                </li>
                <li>
                    <a data-bs-toggle="tab" data-bs-target="#home-tab-pane">แบรนด์ที่ 3</a>
                </li>
                <li>
                    <a data-bs-toggle="tab" data-bs-target="#home-tab-pane">แบรนด์ที่ 4</a>
                </li>
                <li>
                    <a data-bs-toggle="tab" data-bs-target="#home-tab-pane">แบรนด์ที่ 5</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active show">
                    <div class="card-product highlight bestseller mb-lg-5 mb-4 wow fadeIn">
                        <a href="/products-detail" class="card-link"></a>
                        <div class="card-photo has-line">
                            <div class="photo"
                                style="background-image: url({{ asset('assets/img/thumb/photo-240x220--3.jpg') }});">
                            </div>
                        </div>

                        <div class="number">01</div>

                        <div class="card-body ps">
                            <h3>ดีแคช แม็กซ์ สปีด ฟลอรัล
                                คัลเลอร์ส คอนดิชันเนอร์</h3>

                            <div class="price blue">
                                ฿39.00
                            </div>

                            <button class="btn">SHOP NOW</button>
                        </div>
                        <!--card-body-->
                    </div>
                    <!--card-product-->

                    <div class="row g-2">
                        <div class="col-sm-3 col-6">
                            <div class="card-product shadow wow fadeIn">
                                <a href="/products-detail" class="card-link"></a>
                                <span class="label discount">
                                    ลด<br>
                                    40%
                                </span>
                                <div class="card-photo">
                                    <div class="photo"
                                        style="background-image: url({{ asset('assets/img/thumb/photo-240x220--1.jpg') }});">
                                        <img src="{{ asset('assets/img/thumb/frame-100x103.png') }}" alt="">
                                    </div>
                                </div>

                                <div class="number">02</div>

                                <div class="card-body">
                                    <p>
                                        ดีแคช มูฟวิ่ง แฮร์ สเปรย์ นัมเบอร์ 30
                                        สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล....
                                    </p>
                                    <div class="price blue">
                                        ฿99.00 <span class="discount">฿178</span>
                                    </div>
                                </div>
                            </div>
                            <!--card-product-->
                        </div>
                        <!--col-6-->

                        <div class="col-sm-3 col-6">
                            <div class="card-product shadow wow fadeIn">
                                <a href="/products-detail" class="card-link"></a>
                                <span class="label discount">
                                    ลด<br>
                                    40%
                                </span>
                                <div class="card-photo">
                                    <div class="photo"
                                        style="background-image: url({{ asset('assets/img/thumb/photo-240x220--2.jpg') }});">
                                        <img src="{{ asset('assets/img/thumb/frame-100x103.png') }}" alt="">
                                    </div>
                                </div>

                                <div class="number">03</div>

                                <div class="card-body">
                                    <p>
                                        ดีแคช มูฟวิ่ง แฮร์ สเปรย์ นัมเบอร์ 30
                                        สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล....
                                    </p>
                                    <div class="price blue">
                                        ฿99.00
                                    </div>
                                </div>
                            </div>
                            <!--card-product-->
                        </div>
                        <!--col-6-->

                        <div class="col-sm-3 col-6">
                            <div class="card-product shadow wow fadeIn">
                                <a href="/products-detail" class="card-link"></a>
                                <span class="label discount">
                                    ลด<br>
                                    40%
                                </span>
                                <div class="card-photo">
                                    <div class="photo"
                                        style="background-image: url({{ asset('assets/img/thumb/photo-240x220--3.jpg') }});">
                                        <img src="{{ asset('assets/img/thumb/frame-100x103.png') }}" alt="">
                                    </div>
                                </div>

                                <div class="number">04</div>

                                <div class="card-body">
                                    <p>
                                        ดีแคช มูฟวิ่ง แฮร์ สเปรย์ นัมเบอร์ 30
                                        สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล....
                                    </p>
                                    <div class="price blue">
                                        ฿99.00
                                    </div>
                                </div>
                            </div>
                            <!--card-product-->
                        </div>
                        <!--col-6-->

                        <div class="col-sm-3 col-6">
                            <div class="card-product shadow wow fadeIn">
                                <a href="/products-detail" class="card-link"></a>
                                <span class="label discount">
                                    ลด<br>
                                    40%
                                </span>
                                <div class="card-photo">
                                    <div class="photo"
                                        style="background-image: url({{ asset('assets/img/thumb/photo-240x220--4.jpg') }});">
                                        <img src="{{ asset('assets/img/thumb/frame-100x103.png') }}" alt="">
                                    </div>
                                </div>

                                <div class="number">05</div>

                                <div class="card-body">
                                    <p>
                                        ดีแคช มูฟวิ่ง แฮร์ สเปรย์ นัมเบอร์ 30
                                        สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล....
                                    </p>
                                    <div class="price blue">
                                        ฿99.00
                                    </div>
                                </div>
                            </div>
                            <!--card-product-->
                        </div>
                        <!--col-6-->
                    </div>
                    <!--row-->
                </div>
                <!--tab-pane-->
            </div>
            <!--tab-content-->
        </div>
        <!--container-->

        <div class="p-2 p-sm-4"></div>
    </div>
    <!--section-->

    <div class="section-title bg wow fadeIn">
        <div class="background" style="background-image: url({{ asset('assets/img/thumb/title-bg-2.jpg') }});"></div>
        <div class="container">
            <div class="textgroup d-flex">
                <div class="icon">
                    <img class="w-100" src="{{ asset('assets/img/icons/icon-percentage.svg') }}" alt="">
                </div>
                <div>
                    <h3>สินค้าโปรโมชั่น</h3>
                    <h5>ดีลเด็ดสุดคุ้ม</h5>
                </div>
            </div>

            <div class="img-right wow fadeInUp pt-3">
                <img src="{{ asset('assets/img/thumb/title-bar-icon-2.png') }}" alt="">
            </div>
        </div>
        <!--container-->
    </div>

    {{-- promotion --}}
    <promotion-vue></promotion-vue>
    <!--section-->
    <view-all></view-all>
    <div class="section py-xl-5 py-4 bg-light">
        <div class="container">
            <div class="title-main wow fadeIn">
                <span class="icons">
                    <img class="w-60" src="{{ asset('assets/img/icons/icon-article.png') }}" alt="">
                </span>
                <div class="textgroup">
                    <h6>Blog</h6>
                    <h2>เรื่องราวที่น่าสนใจ</h2>
                </div>
            </div>
            <!--title-main-->
            <div class="row gy-4 gy-md-5">
                <div class="col-md-4 col-sm-6">
                    <div class="card-blog wow fadeIn">
                        <a href="/content-details" class="card-link"></a>
                        <div class="card-photo">
                            <div class="photo"
                                style="background-image: url({{ asset('assets/img/thumb/photo-800x473--1.jpg') }});">
                                <img src="{{ asset('assets/img/thumb/frame-100x59.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <h4>Color for everyone</h4>
                            <p>ด้วยสูตรลับเฉพาะพิเศษ วิจัยจากห้อง LAB ผสานความชำนาญมา
                                นับ 30 ปี จนได้รับความไว้วางใจจากผู้ใช้งานทั่วประเทศ สีผมขายดีอั...</p>
                        </div>
                    </div>
                    <!--card-blog-->
                </div>
                <!--col-md-4-->

                <div class="col-md-4 col-sm-6">
                    <div class="card-blog wow fadeIn">
                        <a href="/content-details" class="card-link"></a>
                        <div class="card-photo">
                            <div class="photo"
                                style="background-image: url({{ asset('assets/img/thumb/photo-800x473--2.jpg') }});">
                                <img src="{{ asset('assets/img/thumb/frame-100x59.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <h4>Color for everyone</h4>
                            <p>ด้วยสูตรลับเฉพาะพิเศษ วิจัยจากห้อง LAB ผสานความชำนาญมา
                                นับ 30 ปี จนได้รับความไว้วางใจจากผู้ใช้งานทั่วประเทศ สีผมขายดีอั...</p>
                        </div>
                    </div>
                    <!--card-blog-->
                </div>
                <!--col-md-4-->

                <div class="col-md-4 col-sm-6">
                    <div class="card-blog wow fadeIn">
                        <a href="/content-details" class="card-link"></a>
                        <div class="card-photo">
                            <div class="photo"
                                style="background-image: url({{ asset('assets/img/thumb/photo-800x473--3.jpg') }});">
                                <img src="{{ asset('assets/img/thumb/frame-100x59.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <h4>Color for everyone</h4>
                            <p>ด้วยสูตรลับเฉพาะพิเศษ วิจัยจากห้อง LAB ผสานความชำนาญมา
                                นับ 30 ปี จนได้รับความไว้วางใจจากผู้ใช้งานทั่วประเทศ สีผมขายดีอั...</p>
                        </div>
                    </div>
                    <!--card-blog-->
                </div>
                <!--col-md-4-->
            </div>
            <!--row-->

            <div class="d-flex py-5 mb-4 wow fadeIn">
                <a class="btn btn-xl mx-auto" href="/contents">
                    <span class="px-5">ดูทั้งหมด</span>
                </a>
            </div>

        </div>
        <!--container-->
    </div>
@endsection
<!--section-->

<!--page-->





@section('page_script')

    <script>
        const base_url = '{{ url('/') }}'
        // var myModal = new bootstrap.Modal(document.getElementById('deliveryModal'))
        // myModal.show();

        var swiperPdNew = new Swiper('.swiper-pd-new', {
            slidesPerView: 4,
            spaceBetween: 20,
            slidesPerGroup: 1,
            speed: 800,
            loop: true,
            /*autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },*/
            observer: true,
            effect: 'slide',
            observeParents: true,
            watchOverflow: true,
            pagination: {
                el: '.swiper-pagination.pd-new',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next.pd-new',
                prevEl: '.swiper-button-prev.pd-new',
            },
            breakpoints: {

                767: {
                    slidesPerView: 4,
                },
                670: {
                    slidesPerView: 3,
                },
                0: {
                    slidesPerView: 2,
                }
            }
        });
    </script>
@endsection
