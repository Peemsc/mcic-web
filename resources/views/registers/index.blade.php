@extends('layouts.signin')

@section('title')

@section('body-class')
@section('body-style')

@section('stylesheet')
@endsection

@section('content')
<div class="section-body h-auto"> 
    <div class="container">
        <div class="row pt-4 pt-md-5 mt-2">
            <div class="col-lg-4 mb-5">
                <div class="d-flex vstack gap-sm-2">
                    <h3 class="fs-32">ลงทะเบียน</h3>
                    <p class="fs-20">เอกสารที่ต้องเตรียมก่อนการลงทะเบียน</p>

                    <div class="d-block mt-2">
                        <a class="btn btn-outline btn-xl" href="/signin-customer"><span class="px-3">ลงชื่อเข้าใช้</span></a>
                    </div>
                </div>
                
            </div><!--col-lg-4-->
            <div class="col-lg-8">
                <div class="row g-4 g-xl-5">
                    <div class="col-md-6">
                        <div class="card-infos p-4 wow fadeInUp">
                            <div class="img w-180 mb-1">
                                <img class="w-100" src="{{asset('assets/img/thumb/photo-400x382--1.jpg')}}" alt="">
                            </div>  
                            
                            <h4 class="mb-3">บุคคลธรรมดา</h4>

                            <ul class="mb-4 grey-800">
                                <li>สำเนาทะเบียนพาณิชย์ </li>
                                <li>สำเนาบัตรประจำตัวประชาชน</li>
                                <li>เอกสารสำเนาทะเบียนบ้าน</li>
                                <li>รูปถ่ายหน้าร้าน</li>
                            </ul>

                            <a href="/register/step-1" class="btn btn-lg w-100">ลงทะเบียนบุคคลธรรมดา</a>
                        </div><!--card-infos-->
                    </div>

                    <div class="col-md-6">
                        <div class="card-infos p-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="img w-180 mb-1">
                                <img class="w-100" src="{{asset('assets/img/thumb/photo-400x382--2.jpg')}}" alt="">
                            </div> 

                            <h4 class="mb-3">นิติบุคคล</h4>
                            
                            <ul class="mb-4 grey-800">
                                <li>สสำเนาหนังสือรับรองบริษัท (อายุไม่เกิน 6 เดือน)</li>
                                <li>สำเนาภพ.20</li>
                                <li>สำเนาทะเบียนพาณิชย์ (ถ้ามี)</li>
                                <li>รูปถ่ายหน้าร้าน</li>
                                <li>สำเนาบัตรประจำตัวประชาชนผู้มีอำนาจลงนามตามหน้าหนังสือรับรอง บจก. </li>
                                <li>สำเนาทะเบียนบ้านผู้มีอำนาจลงนามตามหน้าหนังสือ รับรอง บจก. </li>
                            </ul>

                            <a href="/juristic/register/step-1" class="btn btn-lg w-100">ลงทะเบียนนิติบุคคล</a>
                        </div><!--card-infos-->
                    </div>
                </div><!--row-->
                
            </div><!--col-lg-8-->
        </div><!--row-->

        <ul class="nav nav-copyright">
            <li>Copyright © 2022 MCIC. All rights reserved.</li>
            <li><span class="vr d-none d-md-block"></span></li>
            <li><a href="#">Term of Service</a></li>
            <li><span class="vr"></span></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
    </div><!--container-->
     
</div><!--section-body-->
@endsection
@section('page_script')
@endsection

</html>
