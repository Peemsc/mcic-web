@extends('layouts.signin')

@section('title')

@section('body-class')
@section('body-style')

@section('stylesheet')
@endsection

@section('content')
    <step-one-seller></step-one-seller>
    <!--section-->
@endsection

@section('page_script')
    <script>
        /*var myModal = new bootstrap.Modal(document.getElementById('planMasterPlanModal'))
            myModal.show()*/

        $('form').each(function() {
            $(this).validate({
                rules: {
                    phone: {
                        number: true,
                        minlength: 9,
                        maxlength: 10,
                    },
                    password1: {
                        minlength: 8,
                    },
                    password2: {
                        minlength: 8,
                        equalTo: '[name="password1"]'
                    }
                }
            });
        });

        $('.form-control.digit').val("");
        $('.form-control.digit').keyup(function() {

            if (this.value.length == this.maxLength) {
                $(this).parent().next().find('.digit').focus();
            }
        });

        $('#successModal').on('hidden.bs.modal', function(e) {
            window.location.replace("/register-personal-step-3");
        });
    </script>
@endsection
