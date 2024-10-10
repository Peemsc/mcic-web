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
                    <h3>กำหนดรหัสผ่านใหม่</h3>
                    <p class="m-0">กำหนดรหัสผ่านของคุณ ไม่น้อยกว่า 8 ตัวอักษร<br>
                        ไม่ควรเป็นรหัสที่คาดเดาได้ง่าย</p>
                </div>

                <form class="form d-flex vstack gap-3">
                    <div class="form-group">
                        <input type="password" class="form-control lg pw" name="password1" placeholder="รหัสผ่าน" required>
                        <span class="icons float icon-eye right"></span>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control lg pw" name="password2" placeholder="ยืนยันรหัสผ่าน"
                            required>
                        <span class="icons float icon-eye right"></span>
                    </div>

                    <div class="forn-group pt-2">
                        <button class="btn btn-xl w-100" type="submit">
                            ยืนยัน
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
    </script>
@endsection
