<template>
  <div class="setting-content column">
    <div class="col-left">
      <div class="d-flex align-items-center">
        <h2 class="fs-25 fw-semibold">ทริปแพลน</h2>

        <div class="d-flex ms-auto">
          <button
            class="btn btn-outline calendar grey"
            data-bs-toggle="modal"
            data-bs-target="#calendarModal"
          >
            <span class="icons icon-calendar"></span>
          </button>

          <a class="btn ms-2" href="trip-plan-add.html">สร้างนัดพบ</a>
        </div>
      </div>
      <!--d-flex-->

      <div class="swiper-overflow calendar py-2">
        <div class="swiper-container swiper-calendar">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="calendar-item active">
                <p>ศ</p>
                <h5>1</h5>
                <p>ก.ค.</p>
                <span class="dot"></span>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="calendar-item">
                <p>ส</p>
                <h5>2</h5>
                <p>ก.ค.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="calendar-item has-bg">
                <p>อ</p>
                <h5>3</h5>
                <p>ก.ค.</p>
                <span class="dot"></span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="calendar-item has-bg">
                <p>จ</p>
                <h5>4</h5>
                <p>ก.ค.</p>
                <span class="dot"></span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="calendar-item">
                <p>อ</p>
                <h5>5</h5>
                <p>ก.ค.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="calendar-item">
                <p>พ</p>
                <h5>6</h5>
                <p>ก.ค.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="calendar-item">
                <p>พฤ</p>
                <h5>7</h5>
                <p>ก.ค.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="calendar-item">
                <p>ศ</p>
                <h5>8</h5>
                <p>ก.ค.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="calendar-item">
                <p>ส</p>
                <h5>9</h5>
                <p>ก.ค.</p>
              </div>
            </div>
          </div>
        </div>
        <!--swiper-container-->

        <div class="swiper-button swiper-button-prev">
          <span class="icons"></span>
        </div>
        <div class="swiper-button swiper-button-next">
          <span class="icons"></span>
        </div>
      </div>
      <!--swiper-overflow-->

      <h3 class="fs-20 fw-semibold mb-3">ปฏิทินนัดพบ</h3>
      <div class="d-flex">
        <h6 class="fs-16">15/6/2565</h6>
        <span class="fs-13 ms-auto grey">2 รายการ</span>
      </div>

      <div class="alert alert-red my-4">
        กรุณา Check in / Check out บนแอปพลิเคชั่น
      </div>

      <div class="card-appointment active" data-show=".meeting-01">
        <a href="#appointmentDetails" class="card-link target"></a>
        <p class="date">13:00 - 13:20</p>
        <h3>Jenny Wilson</h3>
        <p>นัดเก็บเงินกับลูกค้า</p>

        <div class="d-flex pt-3">
          <p class="m-0">จำนวนเงิน 50,000 บาท</p>
          <p class="m-0 ms-auto">
            <span class="icons icon-link"></span>
            <a class="link" href="#">ใบเสร็จ</a>
          </p>
        </div>

        <div class="status-list">
          <div class="badge status">เดินทาง</div>
        </div>
      </div>
      <!--card-appointment-->

      <div class="card-appointment" data-show=".meeting-01">
        <a href="#appointmentDetails" class="card-link target"></a>
        <p class="date">13:00 - 13:20</p>
        <h3>Jenny Wilson</h3>
        <p>นัดเก็บเงินกับลูกค้า</p>

        <div class="d-flex pt-3">
          <p class="m-0">จำนวนเงิน 50,000 บาท</p>
          <p class="m-0 ms-auto">
            <span class="icons icon-link"></span>
            <a class="link" href="#">ใบเสร็จ</a>
          </p>
        </div>

        <div class="status-list">
          <div class="badge status">เดินทาง</div>
        </div>
      </div>
      <!--card-appointment-->

      <div class="card-appointment" data-show=".meeting-02">
        <a href="#appointmentDetails" class="card-link target"></a>
        <p class="date">13:00 - 13:20</p>
        <h3>Jenny Wilson</h3>
        <p>นัดเก็บเงินกับลูกค้า</p>

        <div class="d-flex pt-3">
          <p class="m-0">จำนวนเงิน 50,000 บาท</p>
          <p class="m-0 ms-auto">
            <span class="icons icon-link"></span>
            <a class="link" href="#">ใบเสร็จ</a>
          </p>
        </div>

        <div class="status-list">
          <div class="badge status">โทร / ติดตาม</div>
        </div>
      </div>
      <!--card-appointment-->
    </div>
    <!--col-left-->

    <div class="col-right">
      <div id="appointmentDetails" class="section-target"></div>

      <div class="appointment-details">
        <div class="tab-pane meeting-01 active">
          <div class="d-flex">
            <h2 class="fs-25 fw-semibold">รายละเอียดนัดพบ</h2>
            <a
              href="#appointmentCancel"
              data-bs-toggle="offcanvas"
              class="link-red fs-14 ms-auto"
              >ยกเลิก</a
            >
          </div>

          <hr class="hr-32x3-blue" />

          <div class="badge status confirm mb-2 active">เดินทาง</div>

          <div class="article fs-14">
            <p class="m-0">09:00น. - 09:20น.</p>
            <h4 class="fs-18 blue fw-semibold">นัดเก็บเช็ค 2 ใบ</h4>

            <p class="my-3">เลขที่เช็ค 2564109998,2564109999</p>
            <p>
              <span class="icons icon-link"></span>
              <a class="link" href="#">ใบเสร็จ</a>
            </p>

            <hr />

            <h4 class="fs-16 fw-semibold pt-2">ที่อยู่นัดพบ</h4>

            <p>
              300/4 ซ.66-68 ถ.นวมินทร์ แขวงคลองกุ่ม เขตบึงกุ่ม กรุงเทพมหานคร
              10240
            </p>

            <div class="map-search">
              <div class="search-option d-flex">
                <button class="btn btn-map route" type="button"></button>
              </div>

              <iframe
                class="h-240"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.0888390794103!2d100.40586521541081!3d13.713068990372548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e297c6f2377be1%3A0xd7393eb1d51cb378!2sThe%20Mall%20Bangkae!5e0!3m2!1sen!2sth!4v1667019326583!5m2!1sen!2sth"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>

            <hr />

            <h4 class="fs-16 fw-semibold">ข้อมูลติดต่อ</h4>

            <div class="user-infos">
              <span
                class="avatar w-24 mb-auto"
                style="background-image: url(../img/thumb/avatar-1.png)"
              ></span>
              <div>
                <h6 class="fs-14">Jenny Wilson</h6>
                <p class="fs-13">080 123 4567</p>
              </div>
            </div>

            <div class="p-4"></div>
          </div>
          <!--article-->
        </div>
        <!--tab-pane-->

        <div class="tab-pane meeting-02">
          <div class="d-flex">
            <h2 class="fs-25 fw-semibold">รายละเอียดนัดพบ</h2>
            <a
              href="#appointmentCancel"
              data-bs-toggle="offcanvas"
              class="link-red fs-14 ms-auto"
              >ยกเลิก</a
            >
          </div>

          <hr class="hr-32x3-blue" />

          <div class="badge status confirm mb-2 active">โทร/ติดตาม</div>

          <div class="article fs-14">
            <p class="m-0">09:00น. - 09:20น.</p>
            <h4 class="fs-18 blue fw-semibold">นัดเก็บเช็ค 2 ใบ</h4>

            <p class="my-3">เลขที่เช็ค 2564109998,2564109999</p>
            <p>
              <span class="icons icon-link"></span>
              <a class="link" href="#">ใบเสร็จ</a>
            </p>

            <hr />

            <h4 class="fs-16 fw-semibold pt-2">ที่อยู่นัดพบ</h4>

            <p>
              300/4 ซ.66-68 ถ.นวมินทร์ แขวงคลองกุ่ม เขตบึงกุ่ม กรุงเทพมหานคร
              10240
            </p>

            <div class="map-search">
              <div class="search-option d-flex">
                <button class="btn btn-map route" type="button"></button>
              </div>

              <iframe
                class="h-240"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.0888390794103!2d100.40586521541081!3d13.713068990372548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e297c6f2377be1%3A0xd7393eb1d51cb378!2sThe%20Mall%20Bangkae!5e0!3m2!1sen!2sth!4v1667019326583!5m2!1sen!2sth"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>

            <hr />

            <h4 class="fs-16 fw-semibold">ข้อมูลติดต่อ</h4>

            <div class="user-infos">
              <span
                class="avatar w-24 mb-auto"
                style="background-image: url(../img/thumb/avatar-1.png)"
              ></span>
              <div>
                <h6 class="fs-14">Jenny Wilson</h6>
                <p class="fs-13">080 123 4567</p>
              </div>
            </div>

            <button
              class="btn btn-outline w-100 mt-4"
              data-bs-target="#appointmentPhoneCancel"
              data-bs-toggle="offcanvas"
            >
              เพิ่มสถานะ โทร/ติดตาม
            </button>

            <div class="p-4"></div>
          </div>
          <!--article-->
        </div>
        <!--tab-pane-->
      </div>
      <!--appointment-details-->
    </div>
    <!--col-right-->
  </div>
  <!--setting-content-->
</template>

<script>
export default {};
</script>

<style>
</style>