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


            <credit-note></credit-note>

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

        var dataTables = $('.dataTables').DataTable({
            "dom": '<lf<t>ip>',
            language: {
                paginate: {
                    'previous': '<span class="arrow-left"></span>',
                    'next': '<span class="arrow-right"></span>'
                }
            },
            searching: false,
            lengthChange: false,
            responsive: false,
        });

        $(".dataTable").parent().addClass("dataTable-scrollbar");

        $(".dataTables_info, .dataTables_paginate").each(function() {
            $(this).wrapAll("<div class='dataTable-footer'></div>");
        });
    </script>
@endsection
