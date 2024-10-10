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


            <credit-store></credit-store>

            <!--setting-content-->


        </div>
        <!--container-->
    </div>
    <!--section-setting-->

@endsection

@section('page_script')
    <script>
        // var myModal = new bootstrap.Modal(document.getElementById('deliveryModal'))
        // myModal.show(); 


        $(".form").validate({
            rules: {
                credit: {
                    required: true,
                },
                reason: {
                    required: true,
                }
            }
        });

        $('.form input').on('blur', function() {
            $('.form button').prop('disabled', false);
        });
    </script>
@endsection
