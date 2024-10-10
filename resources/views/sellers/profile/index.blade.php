@extends('layouts.sellers.profile')

@section('title')


@section('body-class')
@section('body-style')

@section('stylesheet')
@endsection

@section('content')
    <div class="section-setting">
        <div class="container">

            @include('sellers.sidebar')

            <profile-seller></profile-seller>
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
            searching: false,
            lengthChange: false,
            responsive: false,
            paging: false,
            info: false,
        });
        $(".dataTable").parent().addClass("dataTable-scrollbar");
    </script>
@endsection
