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
                    <li class="active"><span>เรื่องราวที่น่าสนใจ</span></li>
                </ol>
            </div>
        </div>
        <banner-index></banner-index>
    </div>

    <!--section-banner-->

    <div class="section py-lg-5">
        <div class="container">
            <ol class="breadcrumb py-3 d-flex d-lg-none">
                <li><a href="/">หน้าแรก</a></li>
                <li class="active"><span>เรื่องราวที่น่าสนใจ</span></li>
            </ol>

            <highlight-content></highlight-content>
            <!--row-->

            <hr class="my-5 opacity-10">

            <h3 class="fs-32 mb-4">เรื่องราวอื่นๆ</h3>

            <other-content></other-content>
            <!--row-->

            <div class="page-footer mt-5">
                <ul class="pagination">
                    <li class="arrow">
                        <a href="#"><span class="icons prev double"></span></a>
                    </li>
                    <li class="arrow">
                        <a href="#"><span class="icons prev"></span></a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">5</a></li>
                    <li class="arrow">
                        <a href="#"><span class="icons next"></span></a>
                    </li>
                    <li class="arrow">
                        <a href="#"><span class="icons next double"></span></a>
                    </li>
                </ul>

                <div class="page-number">
                    <p>หน้า</p>
                    <input type="text" class="form-control" value="1">
                    <p>จาก 5</p>
                </div>
            </div>
        </div>
        <!--container-->
    </div>
    <!--section-body-->
@endsection
@section('page_script')

@endsection
