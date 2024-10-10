@extends('layouts.signin')

@section('title')

@section('body-class')
@section('body-style')

@section('stylesheet')
@endsection

@section('content')

    <div class="section-body">
        <div class="container h-100">
            <div class="card-infos full w-700">
                <div class="hgroup">
                    <div class="img w-104">
                        <img class="w-100" src="img/icons/icon-user-otp.svg" alt="">
                    </div>
                    <h3>กรอก OTP</h3>
                    <p class="m-0">เราได้ส่งรหัสยืนยันให้คุณที่เบอร์ <strong>0801234567</strong> แล้ว <br>โปรดตรวจสอบ</p>
                </div>

                <div class="form vstack gap-3">
                    <div class="form-digit hstack gap-2">
                        <div class="form-group">
                            <input type="text" class="form-control digit numbersOnly" maxlength="1" pattern="[0-9]*"
                                inputmode="numeric" name="digit">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control digit numbersOnly" maxlength="1" pattern="[0-9]*"
                                inputmode="numeric" name="digit">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control digit numbersOnly" maxlength="1" pattern="[0-9]*"
                                inputmode="numeric" name="digit">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control digit numbersOnly" maxlength="1" pattern="[0-9]*"
                                inputmode="numeric" name="digit">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control digit numbersOnly" maxlength="1" pattern="[0-9]*"
                                inputmode="numeric" name="digit">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control digit numbersOnly" maxlength="1" pattern="[0-9]*"
                                inputmode="numeric" name="digit">
                        </div>
                    </div>


                    <div class="forn-group d-flex mt-3">
                        <button class="btn btn-xl w-200" type="button" data-bs-toggle="modal"
                            data-bs-target="#successModal">
                            ยืนยัน
                        </button>
                    </div>

                    <div class="form-group text-center mt-auto">
                        หากคุณจำบัญชีผู้ใช้ได้ <a class="fw-normal text-underline"
                            href="/signin-customer">ลงชื่อเข้าใช้</a>
                    </div>


                </div>
                <!--form-->

            </div>
            <!--card-infos-->

            <ul class="nav nav-copyright">
                <li>Copyright © 2022 MCIC. All rights reserved.</li>
                <li><span class="vr d-none d-md-block"></span></li>
                <li><a href="#">Term of Service</a></li>
                <li><span class="vr"></span></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
        <!--container-->

    </div>
    <!--section-body-->

@endsection
@section('page_script')
    <script>
        /*var myModal = new bootstrap.Modal(document.getElementById('successModal'))
        myModal.show()*/

        $('.form-control.digit').val("");
        $('.form-control.digit').keyup(function() {

            if (this.value.length == this.maxLength) {
                $(this).parent().next().find('.digit').focus();
            }
        });
    </script>
@endsection
