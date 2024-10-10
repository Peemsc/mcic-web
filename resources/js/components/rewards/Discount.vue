<template>
  <div class="setting-content" id="reward">
    <h2 class="fs-25 fw-semibold">คะแนน / คูปอง</h2>

    <ul class="nav nav-tabs">
      <li class="w-30"><a href="/customers/reward-coupon">คะแนนของคุณ</a></li>
      <li class="w-30">
        <a class="active" href="/customers/reward-coupon/discounts">คูปองส่วนลด</a>
      </li>
    </ul>

    <ul class="nav nav-tabs nav-line-tabs">
      <li>
        <a class="active" data-bs-toggle="tab" href="#tabCoupon1">
          คูปองส่วนลด
          <span class="line-animate"></span>
        </a>
      </li>

      <li>
        <a data-bs-toggle="tab" href="#tabCoupon2">
          คูปองสินค้า
          <span class="line-animate"></span>
        </a>
      </li>

      <li>
        <a data-bs-toggle="tab" href="#tabCoupon3">
          คูปองระบบ
          <span class="line-animate"></span>
        </a>
      </li>
    </ul>

    <div class="tab-content tab-coupon-content pt-1">
      <div id="tabCoupon1" class="tab-pane active">
        <div class="row gy-3">
          <div class="col-md-6">
            <div class="card-coupon border">
              <div class="card-photo">
                <span class="icons"></span>
                <p>฿200</p>
              </div>
              <div class="card-body">
                <div>
                  <p><small>โค้ดส่วนลด</small></p>
                  <h4>฿200 Discount</h4>
                </div>
                <a class="link" href="#">เงื่อนไข</a>
              </div>

              <div class="circle left"></div>
              <div class="circle right"></div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card-coupon border">
              <div class="card-photo">
                <span class="icons"></span>
                <p>฿200</p>
              </div>
              <div class="card-body">
                <div>
                  <p><small>โค้ดส่วนลด</small></p>
                  <h4>฿200 Discount</h4>
                </div>
                <a class="link" href="#">เงื่อนไข</a>
              </div>

              <div class="circle left"></div>
              <div class="circle right"></div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card-coupon border">
              <div class="card-photo">
                <span class="icons"></span>
                <p>฿200</p>
              </div>
              <div class="card-body">
                <div>
                  <p><small>โค้ดส่วนลด</small></p>
                  <h4>฿200 Discount</h4>
                </div>
                <a class="link" href="#">เงื่อนไข</a>
              </div>

              <div class="circle left"></div>
              <div class="circle right"></div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card-coupon border">
              <div class="card-photo">
                <span class="icons"></span>
                <p>฿200</p>
              </div>
              <div class="card-body">
                <div>
                  <p><small>โค้ดส่วนลด</small></p>
                  <h4>฿200 Discount</h4>
                </div>
                <a class="link" href="#">เงื่อนไข</a>
              </div>

              <div class="circle left"></div>
              <div class="circle right"></div>
            </div>
          </div>
        </div>
        <!--row-->
      </div>
      <!--tab-pane-->

      <!--===============[End] คูปองส่วนลด ==============-->

      <div id="tabCoupon2" class="tab-pane">
        <div class="row coupon-amount gx-5">
          <div class="col-xl-7 col-left">
            <div class="d-flex vstack gap-3">
              <div class="card-coupon-product active">
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
              </div>

              <div class="card-coupon-product">
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
              </div>

              <div class="card-coupon-product">
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
              </div>
            </div>
            <!--d-flex-->

            <div class="d-block p-xl-5"></div>
          </div>
          <!--col-lg-7-->

          <div class="col-xl-5 col-right">
            <div class="box-inner">
              <h3 class="fs-25 fw-semibold mb-3">รายการสินค้าในคูปอง</h3>

              <div class="d-flex vstack">
                <div class="cart-mini">
                  <div class="card-photo">
                    <div
                      class="photo"
                      style="
                        background-image: url(../img/thumb/photo-240x220--1.jpg);
                      "
                    ></div>
                  </div>

                  <div class="card-body">
                    <h5 class="fs-14">
                      ออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - N...
                    </h5>
                    <div class="price">
                      ฿69.00 <span class="discount">฿138</span>
                    </div>
                    <h6 class="blue">จำนวน 20 แพ็ค/12</h6>
                  </div>
                </div>

                <div class="cart-mini">
                  <div class="card-photo">
                    <div
                      class="photo"
                      style="
                        background-image: url(../img/thumb/photo-240x220--2.jpg);
                      "
                    ></div>
                  </div>

                  <div class="card-body">
                    <h5 class="fs-14">
                      ออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - N...
                    </h5>
                    <div class="price">
                      ฿69.00 <span class="discount">฿138</span>
                    </div>
                    <h6 class="blue">จำนวน 20 แพ็ค/6</h6>
                  </div>
                </div>

                <h5 class="fs-16 fw-semibold my-3">สรุปส่วนลด</h5>

                <table class="table-amount">
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
              <!--vstack-->
            </div>
            <!--box-inner-->
          </div>
        </div>
        <!--row-->
      </div>
      <!--tab-pane-->

      <!--===============[End] คูปองสินค้า ==============-->

      <div id="tabCoupon3" class="tab-pane">
        <div class="row gy-3">
          <div class="col-md-6">
            <div class="card-coupon border">
              <div class="card-photo">
                <span class="icons"></span>
                <p>฿200</p>
              </div>
              <div class="card-body">
                <div>
                  <p><small>โค้ดส่วนลด</small></p>
                  <h4>฿200 Discount</h4>
                </div>
                <a class="link" href="#">เงื่อนไข</a>
              </div>

              <div class="circle left"></div>
              <div class="circle right"></div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card-coupon border">
              <div class="card-photo">
                <span class="icons"></span>
                <p>฿200</p>
              </div>
              <div class="card-body">
                <div>
                  <p><small>โค้ดส่วนลด</small></p>
                  <h4>฿200 Discount</h4>
                </div>
                <a class="link" href="#">เงื่อนไข</a>
              </div>

              <div class="circle left"></div>
              <div class="circle right"></div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card-coupon border">
              <div class="card-photo">
                <span class="icons"></span>
                <p>฿200</p>
              </div>
              <div class="card-body">
                <div>
                  <p><small>โค้ดส่วนลด</small></p>
                  <h4>฿200 Discount</h4>
                </div>
                <a class="link" href="#">เงื่อนไข</a>
              </div>

              <div class="circle left"></div>
              <div class="circle right"></div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card-coupon border">
              <div class="card-photo">
                <span class="icons"></span>
                <p>฿200</p>
              </div>
              <div class="card-body">
                <div>
                  <p><small>โค้ดส่วนลด</small></p>
                  <h4>฿200 Discount</h4>
                </div>
                <a class="link" href="#">เงื่อนไข</a>
              </div>

              <div class="circle left"></div>
              <div class="circle right"></div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card-coupon border">
              <div class="card-photo">
                <span class="icons"></span>
                <p>฿200</p>
              </div>
              <div class="card-body">
                <div>
                  <p><small>โค้ดส่วนลด</small></p>
                  <h4>฿200 Discount</h4>
                </div>
                <a class="link" href="#">เงื่อนไข</a>
              </div>

              <div class="circle left"></div>
              <div class="circle right"></div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card-coupon border">
              <div class="card-photo">
                <span class="icons"></span>
                <p>฿200</p>
              </div>
              <div class="card-body">
                <div>
                  <p><small>โค้ดส่วนลด</small></p>
                  <h4>฿200 Discount</h4>
                </div>
                <a class="link" href="#">เงื่อนไข</a>
              </div>

              <div class="circle left"></div>
              <div class="circle right"></div>
            </div>
          </div>
        </div>
        <!--row-->
      </div>
      <!--tab-pane-->

      <!--===============[End] คูปองระบบ ==============-->
    </div>
    <!--tab-content-->
  </div>
  <!--setting-content-->
</template>

<script>
export default {};
</script>

<style>
</style>