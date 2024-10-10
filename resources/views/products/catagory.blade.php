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
    <!--section-banner-->

    <div class="section section-body">
        <div class="container">
            <ol class="breadcrumb  d-flex d-lg-none">
                <li><a href="/">หน้าแรก</a></li>
                <li class="active"><span>ทั้งหมด</span></li>
            </ol>


            <div class="hgroup-filter">
                <h3 class="my-auto">ตัวเลือกการสั่งซื้อ</h3>
                <div class="button-list-grid ms-auto">
                    <a class="btn btn-xl active" href="/products-catagory">
                        <img class="icons svg-js" src="{{ asset('assets/img/icons/icon-list.svg') }}" alt="">
                    </a>
                    <a class="btn btn-xl" href="/products-catagorygrid">
                        <img class="icons svg-js" src="{{ asset('assets/img/icons/icon-grid.svg') }}" alt="">
                    </a>
                </div>
            </div>
            <!--hgroup-filter-->

            <hr class="mb-0 mt-2">
            {{-- filter --}}
            <div class="hgroup-filter d-block">
                <filter-product></filter-product>
            </div>

      
            <option-order></option-order>
            <!--table-responsive-->

           
        </div>
        <!--container-->

    </div>
    <!--section-body-->


@endsection
@section('page_script')

    <script>
        // var myModal = new bootstrap.Modal(document.getElementById('deliveryModal'))
        // myModal.show();  
    </script>
@endsection
