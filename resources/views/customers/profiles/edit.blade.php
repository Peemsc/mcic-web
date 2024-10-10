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

            <profile-edit></profile-edit>
        </div>
        <!--container-->
    </div>
    <!--section-setting-->

@endsection

@section('page_script')
    <script>
        var successModal = new bootstrap.Modal('#successModal');

        $('form').each(function() {
            $(this).validate({
                rules: {
                    phone: {
                        number: true,
                        minlength: 9,
                        maxlength: 10,
                    }
                },
                submitHandler: function(form) {
                    successModal.show();
                    setTimeout($.proxy(function() {
                        window.location.href = 'profile.html';
                    }, this), 2000);
                }
            });
        });
    </script>
@endsection
