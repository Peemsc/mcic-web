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

            <div class="setting-content">
                <notification-customer></notification-customer>
            </div>

        </div>
        <!--container-->
    </div>
    <!--section-setting-->

@endsection

@section('page_script')
    <script>
        $(".notify-toggle").click(function() {
            $('.notify-header').toggleClass('active');
            $('.notify-body').toggleClass('active');
        });

        $(function() {
            $(".table-notify tr[data-url]").click(function() {
                location.href = $(this).attr("url");
            });
        });
    </script>
@endsection
