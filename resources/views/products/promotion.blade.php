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
                    <li class="active"><span>สินค้าโปรโมชั่นทั้งหมด</span></li>
                </ol>
            </div>
        </div>
        <banner-promotion></banner-promotion>
    </div>

    <!--section-banner-->

    <div class="section pt-lg-5">
        <div class="container">
            <ol class="breadcrumb py-3 d-flex d-lg-none">
                <li><a href="index.html">หน้าแรก</a></li>
                <li class="active"><span>สินค้าโปรโมชั่นทั้งหมด</span></li>
            </ol>

            <promotion-vue></promotion-vue>
            <!--promotion-lists-->
            <hr class="mb-0 mt-2">
            <!--==================[End]=================-->

            <div class="promotion-lists">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card-category">
                            <h3>ผลิตภัณฑ์<br>
                                บำรุงเส้นผม</h3>
                            <div class="card-photo">
                                <img src="assets/img/thumb/female-hair-shape.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!--col-lg-3-->

                    <data-product></data-product>
                    <!--card-product-->

                </div>
                <!--row-->
            </div>
            <!--promotion-lists-->

            <!--==================[End]=================-->

            <div class="promotion-lists">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card-category">
                            <h3>อุปกรณ์ทำผม</h3>
                            <div class="card-photo">
                                <img src="assets/img/thumb/hair-dryer.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!--col-lg-3-->

                    <data-product></data-product>
                    <!--card-product-->

                </div>
                <!--promotion-lists-->

                <!--==================[End]=================-->

            </div>
            <!--container-->
        </div>
    </div>
    <!--section-->
@endsection
@section('page_script')

@endsection
