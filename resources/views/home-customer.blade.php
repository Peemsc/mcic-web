@extends('layouts.customers.main')

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

            <home-product-slide></home-product-slide>
            <!--swiper-overflow-->
        </div>
        <!--container-->
    </div>
    <!--section-->

    <div class="section py-lg-5 py-4">
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

          <div class="pb-5">
            <home-category></home-category>
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

           <home-recommend></home-recommend>
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
       <home-best-seller></home-best-seller>

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
