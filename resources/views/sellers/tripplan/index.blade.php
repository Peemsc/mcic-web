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

            <tripplan-seller></tripplan-seller>
        </div>
        <!--container-->
    </div>
    <!--section-setting-->

@endsection

@section('page_script')
    <script>
        $(document).on('click', '.card-appointment', function() {
            var show = $(this).data('show');

            $(show).addClass("active").siblings().removeClass("active");
        });

        $('.card-appointment').on('click', function() {
            $('.card-appointment').removeClass('active');
            $(this).addClass('active');
        });

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
                    $('#appointmentPhoneCancel').find('.btn-close').click();
                }
            });
        });

        $(".calendar-inline").datepicker({
            /*language: "th", */
            inline: true,
            autoclose: true,
            todayHighlight: true,
            format: "dd/mm/yyyy"
        });
        $(".datetime").datepicker({
            /*language: "th", */
            autoclose: true,
            todayHighlight: true,
            format: "dd/mm/yyyy"
        });

        $('#confirmModal').on('hidden.bs.modal', function(e) {
            // $('#appointmentCancel').find('.btn-close').click();
            setTimeout($.proxy(function() {
                window.location.href = 'trip-plan-2.html';
            }, this), 2000);
        });


        var swipergallery = new Swiper('.swiper-calendar', {
            slidesPerView: 7,
            spaceBetween: 0,
            slidesPerGroup: 2,
            speed: 800,
            loop: false,
            observer: true,
            effect: 'slide',
            observeParents: true,
            watchOverflow: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1500: {
                    slidesPerView: 7,
                },
                1200: {
                    slidesPerView: 6,
                },
                1025: {
                    slidesPerView: 5,
                },
                700: {
                    slidesPerView: 7,
                },
                400: {
                    slidesPerView: 4,
                },
                0: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
@endsection
