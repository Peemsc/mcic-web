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
                    <h3>ลืมรหัสผ่าน</h3>
                    <p class="m-0">กรอกหมายเลขโทรศัพท์ที่คุณลงทะเบียนไว้</p>
                </div>

                <form class="form d-flex vstack gap-3">
                    <div class="form-group">
                        <input type="text" class="form-control lg" name="phone" placeholder="หมายเลขโทรศัพท์" required>
                        <span class="icons float icon-checker right"></span>
                    </div>

                    <div class="forn-group pt-2">
                        <button class="btn btn-xl w-100" type="submit">
                            รับรหัส OTP
                        </button>
                    </div>

                    <div class="form-group text-center mt-auto">
                        หากคุณจำบัญชีผู้ใช้ได้ <a class="fw-normal text-underline"
                            href="/signin-customer">ลงชื่อเข้าใช้</a>
                    </div>

                </form>

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
        /*var myModal = new bootstrap.Modal(document.getElementById('planMasterPlanModal'))
                        myModal.show()*/
        $('form').each(function() {
            $(this).validate({
                rules: {
                    phone: {
                        number: true,
                        minlength: 9,
                        maxlength: 10,
                    }
                }
            });
        });
    </script>
@endsection
