@extends('layouts.customers.main')

@section('body-class')
@section('body-style')

@section('stylesheet')
@endsection



@section('content')

    <div class="section-banner">
        <div class="section section-breadcrumb d-none d-lg-block">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">หน้าแรก</a></li>
                    <li class="active"><span>ทั้งหมด</span></li>
                </ol>
            </div>
        </div>
        {{-- <banner-index></banner-index> --}}
    </div>
    <div class="section section-body">
       <product-detail ></product-detail>
        <!--container-->
    </div>
    <!--section-body-->

@endsection

@section('page_script')
    <script>
        // var myModal = new bootstrap.Modal(document.getElementById('deliveryModal'))
        // myModal.show();

        $(".btn .icon-heart").click(function() {
            $(this).toggleClass('fill');
        });

        $(window).on("load", function() {
            var galleryThumbs = new Swiper('.gallery-thumbs', {
                spaceBetween: 10,
                slidesPerView: 4,
                loop: false,
                effect: 'slide',
                watchSlidesVisibility: true,
                observeParents: true,
                watchOverflow: true,
                /*simulateTouch:false,*/
                navigation: {
                    nextEl: '.swiper-button-next.gallery-thumb',
                    prevEl: '.swiper-button-prev.gallery-thumb',
                }
            });
            var gallery = new Swiper('.gallery-top', {
                slidesPerView: 1,
                spaceBetween: 10,
                speed: 500,
                loop: false,
                observer: true,
                effect: 'slide',
                observeParents: true,
                watchOverflow: true,
                thumbs: {
                    swiper: galleryThumbs,
                },
                pagination: {
                    el: '.swiper-pagination.gallery',
                    clickable: true,
                },
            });
        });
    </script>
@endsection
