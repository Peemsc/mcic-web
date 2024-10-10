@extends('layouts.customers.profile')

@section('title')


@section('body-class')
@section('body-style')

@section('stylesheet')
@endsection

@section('content')
    <div class="section-setting">
        <div class="container">

            @include('customers.sidebar')

            <stock-customer></stock-customer>
        </div>
        <!--container-->
    </div>
    <!--section-setting-->

@endsection

@section('page_script')
@endsection
