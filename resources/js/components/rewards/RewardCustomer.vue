<template>
  <div class="setting-content" v-if="tab === 'reward'">
    <h2 class="fs-25 fw-semibold">คะแนน / คูปอง</h2>

    <ul class="nav nav-tabs">
      <li class="w-30">
        <a class="active" @click="tabSwitched('reward')" value="reward"
          >คะแนนของคุณ</a
        >
      </li>
      <li class="w-30">
        <a @click="tabSwitched('discount')" value="discount">คูปองส่วนลด</a>
      </li>
    </ul>

    <ul class="nav nav-tabs nav-line-tabs">
      <li>
        <a class="active" data-bs-toggle="tab" href="#redeemPoints1">
          แลกคะแนน
          <span class="line-animate"></span>
        </a>
      </li>

      <li>
        <a data-bs-toggle="tab" href="#redeemPoints2">
          แลกแล้ว
          <span class="line-animate"></span>
        </a>
      </li>
    </ul>

    <div class="tab-content pt-1">
      <div id="redeemPoints1" class="tab-pane show active">
        <div class="row g-3 g-xl-4 mb-5">
          <div class="col-sm-4">
            <div class="card-points">
              <p class="mb-0">คะแนนสะสม</p>
              <h3>500 แต้ม</h3>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="swiper-overflow">
              <div class="swiper-container swiper-gallery">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img
                      class="w-100"
                      src="/assets/img/thumb/photo-1500x780--1.jpg"
                      alt=""
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      class="w-100"
                      src="/assets/img/thumb/photo-1500x780--1.jpg"
                      alt=""
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      class="w-100"
                      src="/assets/img/thumb/photo-1500x780--1.jpg"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!--swiper-container-->

              <div class="swiper-pagination gallery"></div>
              <div class="swiper-button swiper-button-prev gallery"></div>
              <div class="swiper-button swiper-button-next gallery"></div>
            </div>
            <!--swiper-overflow-->
          </div>
        </div>
        <!--row-->

        <h3 class="fs-20 fw-semibold mb-3">สิทธิพิเศษแนะนำ</h3>
        <div class="scrollbar-wrapper privilege mb-4">
          <div class="scrollbar-content">
            <div class="card-privilege w-20">
              <a href="#" class="card-link"></a>
              <div class="card-photo">
                <div
                  class="photo"
                  style="
                    background-image: url(/assets/img/thumb/photo-240x220--1.jpg);
                  "
                >
                  <img src="/assets/img/thumb/frame-100x86.png" />
                </div>
              </div>
              <div class="card-body">
                <p>ชื่อของราวัล สิทธิพิเศษแนะนำ สิทธิพิเศษแนะนำ</p>

                <div class="d-flex">
                  <div class="point">
                    <span class="icons"></span>
                    100
                  </div>
                  <div class="qty">1 ชิ้น</div>
                </div>
                <!--d-flex-->
              </div>
              <!--card-body-->
            </div>
            <!--card-privilege-->

            <div class="card-privilege w-20">
              <a href="#" class="card-link"></a>
              <div class="card-photo">
                <div
                  class="photo"
                  style="
                    background-image: url(/assets/img/thumb/photo-240x220--2.jpg);
                  "
                >
                  <img src="/assets/img/thumb/frame-100x86.png" />
                </div>
              </div>
              <div class="card-body">
                <p>ชื่อของราวัล สิทธิพิเศษแนะนำ สิทธิพิเศษแนะนำ</p>

                <div class="d-flex">
                  <div class="point">
                    <span class="icons"></span>
                    100
                  </div>
                  <div class="qty">1 ชิ้น</div>
                </div>
                <!--d-flex-->
              </div>
              <!--card-body-->
            </div>
            <!--card-privilege-->

            <div class="card-privilege w-20">
              <a href="#" class="card-link"></a>
              <div class="card-photo">
                <div
                  class="photo"
                  style="
                    background-image: url(/assets/img/thumb/photo-240x220--3.jpg);
                  "
                >
                  <img src="/assets/img/thumb/frame-100x86.png" />
                </div>
              </div>
              <div class="card-body">
                <p>ชื่อของราวัล สิทธิพิเศษแนะนำ สิทธิพิเศษแนะนำ</p>

                <div class="d-flex">
                  <div class="point">
                    <span class="icons"></span>
                    100
                  </div>
                  <div class="qty">1 ชิ้น</div>
                </div>
                <!--d-flex-->
              </div>
              <!--card-body-->
            </div>
            <!--card-privilege-->

            <div class="card-privilege w-20">
              <a href="#" class="card-link"></a>
              <div class="card-photo">
                <div
                  class="photo"
                  style="
                    background-image: url(/assets/img/thumb/photo-240x220--4.jpg);
                  "
                >
                  <img src="/assets/img/thumb/frame-100x86.png" />
                </div>
              </div>
              <div class="card-body">
                <p>ชื่อของราวัล สิทธิพิเศษแนะนำ สิทธิพิเศษแนะนำ</p>

                <div class="d-flex">
                  <div class="point">
                    <span class="icons"></span>
                    100
                  </div>
                  <div class="qty">1 ชิ้น</div>
                </div>
                <!--d-flex-->
              </div>
              <!--card-body-->
            </div>
            <!--card-privilege-->

            <div class="card-privilege w-20">
              <a href="#" class="card-link"></a>
              <div class="card-photo">
                <div
                  class="photo"
                  style="
                    background-image: url(/assets/img/thumb/photo-240x220--5.jpg);
                  "
                >
                  <img src="/assets/img/thumb/frame-100x86.png" />
                </div>
              </div>
              <div class="card-body">
                <p>ชื่อของราวัล สิทธิพิเศษแนะนำ สิทธิพิเศษแนะนำ</p>

                <div class="d-flex">
                  <div class="point">
                    <span class="icons"></span>
                    100
                  </div>
                  <div class="qty">1 ชิ้น</div>
                </div>
                <!--d-flex-->
              </div>
              <!--card-body-->
            </div>
            <!--card-privilege-->
          </div>
          <!--scrollbar-content-->
        </div>
        <!--scrollbar-wrapper-->

        <h3 class="fs-20 fw-semibold mb-4">สำหรับคุณ</h3>

        <div class="row g-2">
          <div class="col-12">
            <div class="card-privilege border">
              <a href="#" class="card-link"></a>
              <div class="card-photo">
                <div
                  class="photo"
                  style="
                    background-image: url(/assets/img/thumb/photo-240x220--5.jpg);
                  "
                >
                  <img src="/assets/img/thumb/frame-100x86.png" />
                </div>
              </div>
              <div class="card-body">
                <p>ชื่อของราวัล สิทธิพิเศษแนะนำ สิทธิพิเศษแนะนำ</p>

                <div class="d-flex">
                  <div class="point">
                    <span class="icons"></span>
                    100
                  </div>
                  <div class="qty">1 ชิ้น</div>
                </div>
                <!--d-flex-->
              </div>
              <!--card-body-->
            </div>
            <!--card-privilege-->
          </div>

          <div class="col-12">
            <div class="card-privilege border">
              <a href="#" class="card-link"></a>
              <div class="card-photo">
                <div
                  class="photo"
                  style="
                    background-image: url(/assets/img/thumb/photo-240x220--4.jpg);
                  "
                >
                  <img src="/assets/img/thumb/frame-100x86.png" />
                </div>
              </div>
              <div class="card-body">
                <p>ชื่อของราวัล สิทธิพิเศษแนะนำ สิทธิพิเศษแนะนำ</p>

                <div class="d-flex">
                  <div class="point">
                    <span class="icons"></span>
                    100
                  </div>
                  <div class="qty">1 ชิ้น</div>
                </div>
                <!--d-flex-->
              </div>
              <!--card-body-->
            </div>
            <!--card-privilege-->
          </div>

          <div class="col-12">
            <div class="card-privilege border disabled">
              <a href="#" class="card-link"></a>
              <div class="card-photo">
                <div
                  class="photo"
                  style="
                    background-image: url(/assets/img/thumb/photo-240x220--2.jpg);
                  "
                >
                  <img src="/assets/img/thumb/frame-100x86.png" />
                </div>
              </div>
              <div class="card-body">
                <p>ชื่อของราวัล สิทธิพิเศษแนะนำ สิทธิพิเศษแนะนำ</p>

                <div class="d-flex">
                  <div class="point">
                    <span class="icons"></span>
                    100
                  </div>
                  <div class="qty">1 ชิ้น</div>
                </div>
                <!--d-flex-->
                <p class="fs-15 red pt-2 mb-0">คะแนนไม่พอ</p>
              </div>
              <!--card-body-->
            </div>
            <!--card-privilege-->
          </div>
        </div>
        <!--row-->
      </div>
      <!--tab-pane-->

      <!--===============[End] แลกคะแนน ==============-->

      <div id="redeemPoints2" class="tab-pane">
        <div class="row g-2">
          <div class="col-12">
            <div class="card-privilege border">
              <a href="#" class="card-link"></a>
              <div class="card-photo">
                <div
                  class="photo"
                  style="
                    background-image: url(/assets/img/thumb/photo-240x220--5.jpg);
                  "
                >
                  <img src="/assets/img/thumb/frame-100x86.png" />
                </div>
              </div>
              <div class="card-body">
                <p>ชื่อของราวัล สิทธิพิเศษแนะนำ สิทธิพิเศษแนะนำ</p>

                <div class="d-flex">
                  <div class="point">
                    <span class="icons"></span>
                    100
                  </div>
                  <div class="qty">1 ชิ้น</div>
                </div>
                <!--d-flex-->
              </div>
              <!--card-body-->
            </div>
            <!--card-privilege-->
          </div>

          <div class="col-12">
            <div class="card-privilege border">
              <a href="#" class="card-link"></a>
              <div class="card-photo">
                <div
                  class="photo"
                  style="
                    background-image: url(/assets/img/thumb/photo-240x220--4.jpg);
                  "
                >
                  <img src="/assets/img/thumb/frame-100x86.png" />
                </div>
              </div>
              <div class="card-body">
                <p>ชื่อของราวัล สิทธิพิเศษแนะนำ สิทธิพิเศษแนะนำ</p>

                <div class="d-flex">
                  <div class="point">
                    <span class="icons"></span>
                    100
                  </div>
                  <div class="qty">1 ชิ้น</div>
                </div>
                <!--d-flex-->
              </div>
              <!--card-body-->
            </div>
            <!--card-privilege-->
          </div>
        </div>
        <!--row-->
      </div>
      <!--tab-pane-->

      <!--===============[End] แลกแล้ว ==============-->
    </div>
    <!--tab-content-->
  </div>

  <!-- =================================คูปองส่วนลด================================== -->

  <div class="setting-content" v-if="tab === 'discount'">
    <h2 class="fs-25 fw-semibold">คะแนน / คูปอง</h2>

    <ul class="nav nav-tabs">
      <li class="w-30">
        <a @click="tabSwitched('reward')" value="reward">คะแนนของคุณ</a>
      </li>
      <li class="w-30">
        <a class="active" @click="tabSwitched('discount')" value="discount"
          >คูปองส่วนลด</a
        >
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
export default {
  data() {
    return {
      tab: "reward",
      value: "",
    };
  },
  methods: {
    tabSwitched(tabs) {
      this.tab = tabs;
    },
  },
};
</script>

<style>
</style>