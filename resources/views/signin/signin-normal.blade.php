@extends('layouts.signin')

@section('title')

@section('body-class')
@section('body-style')

@section('stylesheet')
@endsection

@section('content')
    <div class="bg-blue">
        <signin-customer></signin-customer>
    </div>
    <!--section-body-->

@endsection
@section('page_script')
    <script>
        /*var myModal = new bootstrap.Modal(document.getElementById('planMasterPlanModal'))
                myModal.show()*/

        // $('form').each(function() {
        //     $(this).validate({
        //         rules: {
        //             phone: {
        //                 number: true,
        //                 minlength: 9,
        //                 maxlength: 10,
        //             }
        //         }
        //     });
        // });
    </script>
@endsection
