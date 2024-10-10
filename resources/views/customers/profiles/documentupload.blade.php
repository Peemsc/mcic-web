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

            <div class="setting-content">
                <div class="back-history d-flex">
                    <a href="/customers/profile/edit">
                        <span class="icons"></span>
                        ย้อนกลับ
                    </a>
                </div>

                <h2 class="fs-25 fw-semibold">แก้ไขเอกสารที่อัพโหลด</h2>

                <div class="row g-4 my-3">
                    <div class="col-xl-3 col-md-4">
                        <div class='file-input button h-200 -chosen'>
                            <div class="file-edit"></div>
                            <input type='file' accept="image/png, image/gif, image/jpeg">

                            <div class="group">
                                <div class="icons"></div>
                                <h6>สำเนาทะเบียนพาณิชย์ </h6>
                                <span class='label' data-js-label>Example.jpeg</label>
                            </div>
                        </div>
                    </div>
                    <!--col-lg-4-->

                    <div class="col-xl-3 col-md-4">
                        <div class='file-input button -chosen h-200'>
                            <div class="file-edit"></div>
                            <input type='file' accept="image/png, image/gif, image/jpeg">

                            <div class="group">
                                <div class="icons"></div>
                                <h6>สำเนาบัตรประจำตัวประชาชน</h6>
                                <span class='label' data-js-label>Example.jpeg</label>
                            </div>
                        </div>
                    </div>
                    <!--col-lg-4-->

                    <div class="col-xl-3 col-md-4">
                        <div class='file-input button h-200 -chosen error'>
                            <div class="file-edit"></div>
                            <input type='file' accept="image/png, image/gif, image/jpeg">

                            <div class="group">
                                <div class="icons"></div>
                                <h6>เอกสารสำเนาทะเบียนบ้าน</h6>
                                <span class='label' data-js-label>เลือกไฟล์หรือลากมาวางที่นี่</label>
                            </div>
                        </div>
                    </div>
                    <!--col-lg-4-->

                    <div class="col-xl-3 col-md-4">
                        <div class='file-input button h-200'>
                            <div class="file-edit"></div>
                            <input type='file' accept="image/png, image/gif, image/jpeg">

                            <div class="group">
                                <div class="icons"></div>
                                <h6>รูปถ่ายหน้าร้าน </h6>
                                <span class='label' data-js-label>เลือกไฟล์หรือลากมาวางที่นี่</label>
                            </div>
                        </div>
                    </div>
                    <!--col-lg-4-->

                </div>
                <!--row-->

                <div class="d-flex pt-3 pb-4">
                    <button class="btn btn-lg w-265 mx-auto" data-bs-toggle="modal"
                        data-bs-target="#successModal">ยืนยันการแก้ไข</button>
                </div>

            </div>
            <!--setting-content-->
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
