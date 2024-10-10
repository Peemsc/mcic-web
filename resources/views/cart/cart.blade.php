@extends('layouts.customers.cart')

@section('title')

@section('body-class')
@section('body-style')

@section('stylesheet')
@endsection

@section('content')
    <div class="section-body">
        <div class="container">
            <div class="section-header">
                <ol class="breadcrumb">
                    <li><a href="index.html">หน้าแรก</a></li>
                    <li class="active">
                        <span>ตะกร้าสินค้า</span>
                    </li>
                </ol>

                <h2>ตะกร้าสินค้า</h2>
            </div>
            <!--section-header-->

            <div class="d-block p-sm-2"></div>

            <cart-component></cart-component>

        </div>
        <!--container-->

    </div>
    <!--section-body-->
    <div class="modal modal-coupon fade" id="couponModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-light">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                <div class="modal-body p-0">
                    <h3 class="fs-32 text-center">คูปองของฉัน</h3>
                    <ul class="nav nav-tabs nav-pretty">
                        <li><a class="active" data-bs-toggle="tab" href="#tab_coupon_1"><span>คูปองส่วนลด</span></a></li>
                        <li><a href="#tab_coupon_2" data-bs-toggle="tab"><span>คูปองสินค้า</span></a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="tab_coupon_1" class="tab-pane show active">
                            <div class="alert text-center">
                                <span class="icons icon-info"></span>
                                ระบบจะแสดงเฉพาะคูปองที่สามารถใช้ได้เท่านั้น
                            </div>

                            <div class="d-flex vstack gap-2">
                                <div class="card-coupon">
                                    <div class="card-photo">
                                        <span class="icons"></span>
                                        <p>฿200</p>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <p><small>โค้ดส่วนลด</small></p>
                                            <h4>฿200 Discount</h4>
                                        </div>
                                        <button class="btn use" type="button" data-title="ใช้"></button>
                                    </div>
                                </div>

                                <div class="card-coupon">
                                    <div class="card-photo">
                                        <span class="icons"></span>
                                        <p>฿200</p>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <p><small>โค้ดส่วนลด</small></p>
                                            <h4>฿200 Discount</h4>
                                        </div>
                                        <button class="btn use active" type="button" data-title="ใช้"></button>
                                    </div>
                                </div>

                                <div class="card-coupon">
                                    <div class="card-photo">
                                        <span class="icons"></span>
                                        <p>฿200</p>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <p><small>โค้ดส่วนลด</small></p>
                                            <h4>฿200 Discount</h4>
                                        </div>
                                        <button class="btn use active" type="button" data-title="ใช้"></button>
                                    </div>
                                </div>

                                <div class="card-coupon disabled">
                                    <div class="card-photo">
                                        <span class="icons"></span>
                                        <p>฿200</p>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <p><small>โค้ดส่วนลด</small></p>
                                            <h4>฿200 Discount</h4>
                                        </div>
                                        <button class="btn use" type="button" data-title="ใช้"></button>
                                    </div>
                                </div>

                            </div>

                            <div class="buttons fill pb-0">
                                <button class="btn btn-outline btn-lg" type="button"
                                    data-bs-dismiss="modal">ยกเลิก</button>
                                <a class="btn btn-lg" href="cart-discount-coupon.html">ตกลง</a>
                            </div>

                        </div>
                        <!--tab-pane-->

                        <!--=============[End] คูปองส่วนลด ==============-->

                        <div id="tab_coupon_2" class="tab-pane">
                            <div class="d-flex vstack gap-3">
                                <div class="card-coupon-product" data-bs-toggle="modal"
                                    data-bs-target="#productCouponInfoModal1">
                                    <div class="d-flex">
                                        <div class="icons icon-doc"></div>
                                        <table>
                                            <tr>
                                                <td>เลขที่</td>
                                                <td>COU20200111111</td>
                                            </tr>
                                            <tr>
                                                <td>มูลค่ารวม</td>
                                                <td><strong>฿ 3,509.60</strong></td>
                                            </tr>
                                            <tr>
                                                <td>จำนวนสินค้า</td>
                                                <td><strong>2 รายการ</strong></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="d-flex pt-2">
                                        <button class="btn btn-link choose active" type="button">
                                            <span>เลือกแล้ว</span>
                                        </button>
                                    </div>

                                </div>

                                <div class="card-coupon-product" data-bs-toggle="modal"
                                    data-bs-target="#productCouponInfoModal2">
                                    <div class="d-flex">
                                        <div class="icons icon-doc"></div>
                                        <table>
                                            <tr>
                                                <td>เลขที่</td>
                                                <td>COU20200111111</td>
                                            </tr>
                                            <tr>
                                                <td>มูลค่ารวม</td>
                                                <td><strong>฿ 3,509.60</strong></td>
                                            </tr>
                                            <tr>
                                                <td>จำนวนสินค้า</td>
                                                <td><strong>2 รายการ</strong></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="d-flex pt-2">
                                        <button class="btn btn-link choose" type="button">
                                            <span>เลือกคูปองสินค้านี้</span>
                                        </button>
                                    </div>

                                </div>

                                <div class="card-coupon-product" data-bs-toggle="modal"
                                    data-bs-target="#productCouponInfoModal2">
                                    <div class="d-flex">
                                        <div class="icons icon-doc"></div>
                                        <table>
                                            <tr>
                                                <td>เลขที่</td>
                                                <td>COU20200111111</td>
                                            </tr>
                                            <tr>
                                                <td>มูลค่ารวม</td>
                                                <td><strong>฿ 3,509.60</strong></td>
                                            </tr>
                                            <tr>
                                                <td>จำนวนสินค้า</td>
                                                <td><strong>2 รายการ</strong></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="d-flex pt-2">
                                        <button class="btn btn-link choose" type="button">
                                            <span>เลือกคูปองสินค้านี้</span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <!--vstack-->

                            <div class="buttons fill pb-0">
                                <button class="btn btn-outline btn-lg" type="button"
                                    data-bs-dismiss="modal">ยกเลิก</button>
                                <!--button class="btn btn-lg disabled" type="button">ตกลง</button-->
                                <a class="btn btn-lg" href="cart-product-coupon.html">ตกลง</a>
                            </div>
                        </div>
                        <!--tab-pane-->

                        <!--=============[End] คูปองสินค้า ==============-->
                    </div>
                    <!--tab-content-->
                </div>
                <!--modal-body-->
            </div>
            <!--modal-content-->
        </div>
        <!--modal-dialog-->
    </div><!-- Modal -->

    <div class="modal modal-coupon product fade" id="productCouponInfoModal1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-light">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                <div class="modal-body p-0">
                    <h3 class="fs-32 text-center">คูปองของฉัน</h3>
                    <ul class="nav nav-tabs nav-pretty">
                        <li class="nav-discount"><a href="#" data-bs-dismiss="modal"><span>คูปองส่วนลด</span></a>
                        </li>
                        <li class="nav-product"><a class="active" href="#"
                                data-bs-dismiss="modal"><span>คูปองสินค้า</span></a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="d-flex vstack gap-3">
                            <div class="card-coupon-product infos">


                                <h4 class="text-center">
                                    <a class="goback" data-bs-toggle="modal" href="#couponModal"><span
                                            class="icons"></span></a>
                                    รายการสินค้าในคูปอง
                                </h4>

                                <div class="cart-mini">
                                    <div class="card-photo">
                                        <div class="photo"
                                            style="background-image: url(assets/img/thumb/photo-240x220--1.jpg);"></div>
                                    </div>

                                    <div class="card-body">
                                        <h5>ออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - N...</h5>
                                        <div class="price">
                                            ฿69.00 <span class="discount">฿138</span>
                                        </div>
                                        <h6 class="blue">จำนวน 20 แพ็ค/12</h6>
                                    </div>
                                </div>

                                <div class="cart-mini">
                                    <div class="card-photo">
                                        <div class="photo"
                                            style="background-image: url(assets/img/thumb/photo-240x220--2.jpg);"></div>
                                    </div>

                                    <div class="card-body">
                                        <h5>ออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - N...</h5>
                                        <div class="price">
                                            ฿69.00 <span class="discount">฿138</span>
                                        </div>
                                        <h6 class="blue">จำนวน 20 แพ็ค/6</h6>
                                    </div>
                                </div>

                                <div class="d-block p-2"></div>

                                <h5 class="fs-16 fw-semibold my-2">สรุปส่วนลด</h5>

                                <table>
                                    <tr>
                                        <td>ราคารวม</td>
                                        <td>฿ 3,280.00</td>
                                    </tr>
                                    <tr class="total">
                                        <td>รวมทั้งสิ้น</td>
                                        <td><strong>฿ 3,280.00</strong></td>
                                    </tr>
                                </table>

                            </div>
                            <!--card-coupon-product-->
                        </div>
                        <!--vstack-->

                        <div class="buttons fill pb-0">
                            <button class="btn btn-outline red btn-xl" type="button"
                                data-bs-dismiss="modal">ยกเลิกการเลือกคูปองสินค้านี้</button>
                        </div>
                    </div>
                    <!--tab-content-->
                </div>
                <!--modal-body-->
            </div>
            <!--modal-content-->
        </div>
        <!--modal-dialog-->
    </div><!-- Modal -->

    <div class="modal modal-coupon product fade" id="productCouponInfoModal2">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-light">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                <div class="modal-body p-0">
                    <h3 class="fs-32 text-center">คูปองของฉัน</h3>
                    <ul class="nav nav-tabs nav-pretty">
                        <li class="nav-discount"><a href="#" data-bs-dismiss="modal"><span>คูปองส่วนลด</span></a>
                        </li>
                        <li class="nav-product"><a class="active" href="#"
                                data-bs-dismiss="modal"><span>คูปองสินค้า</span></a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="d-flex vstack gap-3">
                            <div class="card-coupon-product infos">


                                <h4 class="text-center">
                                    <a class="goback" data-bs-toggle="modal" href="#couponModal"><span
                                            class="icons"></span></a>
                                    รายการสินค้าในคูปอง
                                </h4>

                                <div class="cart-mini">
                                    <div class="card-photo">
                                        <div class="photo"
                                            style="background-image: url(assets/img/thumb/photo-240x220--1.jpg);"></div>
                                    </div>

                                    <div class="card-body">
                                        <h5>ออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - N...</h5>
                                        <div class="price">
                                            ฿69.00 <span class="discount">฿138</span>
                                        </div>
                                        <h6 class="blue">จำนวน 20 แพ็ค/12</h6>
                                    </div>
                                </div>

                                <div class="cart-mini">
                                    <div class="card-photo">
                                        <div class="photo"
                                            style="background-image: url(assets/img/thumb/photo-240x220--2.jpg);"></div>
                                    </div>

                                    <div class="card-body">
                                        <h5>ออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - N...</h5>
                                        <div class="price">
                                            ฿69.00 <span class="discount">฿138</span>
                                        </div>
                                        <h6 class="blue">จำนวน 20 แพ็ค/6</h6>
                                    </div>
                                </div>

                                <div class="d-block p-2"></div>

                                <h5 class="fs-16 fw-semibold my-2">สรุปส่วนลด</h5>

                                <table>
                                    <tr>
                                        <td>ราคารวม</td>
                                        <td>฿ 3,280.00</td>
                                    </tr>
                                    <tr class="total">
                                        <td>รวมทั้งสิ้น</td>
                                        <td><strong>฿ 3,280.00</strong></td>
                                    </tr>
                                </table>

                            </div>
                            <!--card-coupon-product-->
                        </div>
                        <!--vstack-->

                        <div class="buttons fill pb-0">
                            <button class="btn btn-xl" type="button"
                                data-bs-dismiss="modal">ยืนยันเลือกคูปองสินค้านี้</button>
                        </div>
                    </div>
                    <!--tab-content-->
                </div>
                <!--modal-body-->
            </div>
            <!--modal-content-->
        </div>
        <!--modal-dialog-->
    </div><!-- Modal -->
@endsection
@section('page_script')
    <script>
        /*var myModal = new bootstrap.Modal(document.getElementById('productCouponInfoModal1'))
            myModal.show()*/

        var $couponModal = new bootstrap.Modal('#couponModal');

        $(".nav-pretty .nav-discount a").click(function() {
            $couponModal.show();
            $('.modal .nav-pretty a[href="#tab_coupon_1"]').tab('show');

        });
        $(".modal .nav-product a").click(function() {
            $couponModal.show();
            $('.modal .nav-pretty a[href="#tab_coupon_2"]').tab('show');
        });
    </script>
@endsection
