@extends('layouts.customers.main')

@section('title')

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
        <banner-index></banner-index>
    </div>

    <div class="section section-body">
        <div class="container">
            <ol class="breadcrumb d-flex d-lg-none">
                <li><a href="/">หน้าแรก</a></li>
                <li class="active"><span>ทั้งหมด</span></li>
            </ol>

            <div class="hgroup-filter grid-view no-search">
                <h3 class="my-auto">ตัวเลือกการสั่งซื้อ</h3>
                <div class="button-list-grid ms-auto">
                    <a class="btn btn-xl" href="/products-catagory">
                        <img class="icons svg-js" src="{{ asset('assets/img/icons/icon-list.svg') }}" alt="">
                    </a>
                    <a class="btn btn-xl active" href="/products-catagorygrid">
                        <img class="icons svg-js" src="{{ asset('assets/img/icons/icon-grid.svg') }}" alt="">
                    </a>

                    <a class="btn btn-xl filter" href="#offcanvas_sidebar" data-bs-toggle="offcanvas">
                        <img class="icons svg-js" src="{{ asset('assets/img/icons/icon-filters.svg') }}" alt="">
                    </a>
                </div>

            </div>
            <!--hgroup-filter-->

            <hr class="mb-0 mt-2">

            <option-order-grid></option-order-grid>
            <!--section-product-->
        </div>
        <!--container-->

    </div>
    <!--section-body-->


@endsection

@section('page_script')
    <script>
        // var myModal = new bootstrap.Modal(document.getElementById('deliveryModal'))
        // myModal.show();  

        $('.nstSlider').nstSlider({
            "crossable_handles": false,
            "left_grip_selector": ".leftGrip",
            "right_grip_selector": ".rightGrip",
            "value_bar_selector": ".bar",
            "value_changed_callback": function(cause, leftValue, rightValue) {
                $(this).parent().find('.leftLabel').text(leftValue);
                $(this).parent().find('.rightLabel').text(rightValue);
            }
        });

        $(window).resize(function() {
            $('.nstSlider').nstSlider("refresh");
        });
    </script>
@endsection
