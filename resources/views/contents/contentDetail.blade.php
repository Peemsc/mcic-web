@extends('layouts.customers.main')

@section('title')

@section('body-class')
@section('body-style')

@section('stylesheet')
@endsection

@section('content')
    <div class="section pt-3">
        <div class="container">
            <ol class="breadcrumb pt-2">
                <li><a href="/">หน้าแรก</a></li>
                <li class="active"><span>เรื่องราวที่น่าสนใจ</span></li>
            </ol>
            <h2 class="fs-40 mb-md-5 mb-4">Color for everyone</h2>

            <banner-contentdetail></banner-contentdetail>

            <div class="blog-details wow fadeIn">

                <content-detail></content-detail>
                <!--content-->

                <sidebar-detail></sidebar-detail>
                <!--sidebar-->

            </div>
            <!--blog-details-->

        </div>
        <!--container-->
    </div>
    <!--section-body-->
@endsection
@section('page_script')

@endsection
