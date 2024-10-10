@extends('layouts.signin')

@section('title')

@section('body-class')
@section('body-style')

@section('stylesheet')
@endsection

@section('content')
<div class="section section-full"> 
    <div class="container"> 
        <div class="card-infos full w-700 mt-md-5 mt-4" style="flex-direction: unset;">
            
            <div class="d-flex vstack m-auto text-center">
                <div class="img w-160">
                    <img class="w-100" src="{{asset('assets/img/icons/icon-success.gif')}}" alt="">
                </div>

                <h4 class="fs-28 mb-3">ลงทะเบียนสำเร็จ</h4>
                <p class="mb-1">
                    กรุณารอเจ้าหน้าที่อนุมัติบัญชีของคุณ<br class="d-block d-md-none">
                    และจะแจ้งเตือนผ่านอีเมลและไลน์
                </p>
                <p class="mb-lg-5 mb-4">
                    <span class="red">
                        กรุณาติดตาม Line Officia<br class="d-block d-md-none">
                        เพื่อให้การลงทะเบียนสมบูรณ์
                    </span>
                </p>
                
                <button class="btn btn-xl w-100 mb-4" type="button">
                    ติดตาม Line Official
                </button>

                <p><a class="link" href="/signin-customer">เข้าสู่ระบบ</a></p>
            </div>

        </div><!--card-infos-->
    </div><!--container-->
</div><!--section-->
@endsection

@section('page_script')

@endsection
