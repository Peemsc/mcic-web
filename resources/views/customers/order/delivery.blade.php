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


            <delivery-customer></delivery-customer>

            <!--setting-content-->


        </div>
        <!--container-->
    </div>
    <!--section-setting-->

@endsection

@section('page_script')
    <script>
        // var myModal = new bootstrap.Modal(document.getElementById('successModal'))
        // myModal.show(); 

        var dataTables = $('.dataTables').DataTable({
            "dom": '<lf<t>ip>',
            language: {
                searchPlaceholder: "ค้นหา",
                search: '<i class="icons icon-search"></i>',
                infoEmpty: '',
                infoFiltered: '',
                paginate: {
                    'previous': '<span class="arrow-left"></span>',
                    'next': '<span class="arrow-right"></span>'
                }
            },
            lengthChange: false,
            responsive: false,
        });

        $(".dataTable").parent().addClass("dataTable-scrollbar");
        $(".dataTables_filter input").addClass("form-control normal");

        $(".dataTables_filter").each(function() {
            $(this).wrap("<div class='dataTable-option top-right'></div>");
        });
        $(".dataTables_info, .dataTables_paginate").each(function() {
            $(this).wrapAll("<div class='dataTable-footer'></div>");
        });

        // 
        $('#confirmModal').on('hidden.bs.modal', function(e) {
            $('#orderWaitingForCheck_1').find('.btn-close').click();
        });
    </script>
@endsection
