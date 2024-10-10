@extends('layouts.signin')

@section('title')

@section('body-class')
@section('body-style')

@section('stylesheet')
@endsection

@section('content')
    <div class=" bg-blue">
        <signin-seller></signin-seller>
        <!--section-body-->
    </div>

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
