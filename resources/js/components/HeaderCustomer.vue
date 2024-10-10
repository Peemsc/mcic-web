<template>
  <div class="navbar-toppage">
    <div class="container">
      <ul class="nav nav-general">
        <li>
          <a class="btn xs" href="/" target="_blank">
            <span class="icons icon-app"></span>
            ดาวน์โหลดแอป
          </a>
        </li>
        <li>
          <div class="btn xs credit">
            <span
              data-bs-toggle="tooltip"
              data-bs-placement="bottom"
              title="เครดิตคงเหลือ"
              >Cr. ฿ 50,000
            </span>
            <span class="vr"></span>
            <span
              class="red"
              data-bs-toggle="tooltip"
              data-bs-placement="bottom"
              title="ยอดค้างชำระ"
              >฿ 10,000</span
            >
          </div>
        </li>
        <li>
          <div class="dropdown lang">
            <a data-bs-toggle="dropdown" data-bs-display="static" href="/">
              <span class="icons flag-th"></span>
            </a>
            <div class="dropdown-menu">
              <a href="#"><span class="icons flag-th"></span>ไทย</a>
              <a href="#"><span class="icons flag-en"></span>English</a>
            </div>
          </div>
          <!--dropdown-->
        </li>
      </ul>
    </div>
  </div>
  <div class="navbar-main">
    <div class="container">
      <div class="navbar-brand">
        <a href="/">
          <img src="/assets/img/logo.svg" alt="" />
        </a>
      </div>

      <ul class="nav nav-main">
        <li>
          <a href="/">
            หน้าแรก
            <span class="line-animate"></span>
          </a>
        </li>
        <li class="dropdown lv-1">
          <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
            แคตตาล็อก
            <span class="line-animate"></span>
          </a>
          <div class="dropdown-menu">
            <ul class="nav nav-dropdown">
              <li class="nav-title lv-1">
                <span><span class="arrow"></span>แคตตาล็อก</span>
              </li>
              <li><a href="/all-catalog">ทั้งหมด</a></li>
              <li class="dropdown lv-2">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static"
                  >ผลิตภัณฑ์สีผม</a
                >
                <div class="dropdown-menu">
                  <ul class="nav nav-dropdown">
                    <li class="nav-title lv-2">
                      <span><span class="arrow"></span>ผลิตภัณฑ์สีผม</span>
                    </li>
                    <li><a href="#">สีธรรมชาติ</a></li>
                    <li><a href="#">สีแฟชั่น</a></li>
                    <li><a href="#">แชมพูปิดผมขาว</a></li>
                    <li><a href="#">ไฮเปอร์ครีม</a></li>
                    <li><a href="#">ผงฟอกสีผม</a></li>
                    <li><a href="#">Subcat ผงฟอก</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="#">ผลิตภัณฑ์ยืด/ดัด</a></li>
              <li><a href="#">ผลิตภัณฑ์บำรุงเส้นผม</a></li>
              <li><a href="#">จัดแต่งทรงผม</a></li>
              <li><a href="#">อุปกรณ์ทำผม</a></li>
              <li><a href="#">ผลิตผลิตภัณฑ์สำหรับผู้ชาย</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#">
            เรื่องราวที่น่าสนใจ
            <span class="line-animate"></span>
          </a>
        </li>
        <li>
          <a href="contact.html">
            ติดต่อเรา
            <span class="line-animate"></span>
          </a>
        </li>
      </ul>

      <ul class="nav nav-general ms-auto">
        <li class="dropdown search">
          <a
            href="#"
            data-bs-toggle="dropdown"
            data-bs-display="static"
            data-bs-auto-close="outside"
          >
            <span class="icons icon-search"></span>
          </a>
          <div class="dropdown-menu search">
            <div class="form-group search">
              <span class="icons float left icon-search"></span>
              <span class="icons float right icon-close"></span>
              <input
                type="text"
                class="form-control"
                value="ดีแคช"
                data-bs-toggle="dropdown"
                data-bs-display="static"
              />
              <!-- data-bs-auto-close="outside"-->

              <div class="dropdown-menu">
                <div class="card-result">
                  <div class="card-photo">
                    <img src="/assets/img/thumb/photo-240x220--1.jpg" />
                  </div>
                  <div class="card-body">
                    <p>
                      <span class="blue">ดีแคช</span> มูฟวิ่ง แฮร์ สเปรย์
                      นัมเบอร์ 30 สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล.
                    </p>
                    <p class="fw-medium m-0">฿69.00</p>
                  </div>
                </div>
                <!--card-result-->

                <div class="card-result">
                  <div class="card-photo">
                    <img src="/assets/img/thumb/photo-240x220--2.jpg" />
                  </div>
                  <div class="card-body">
                    <p>
                      <span class="blue">ดีแคช</span> มูฟวิ่ง แฮร์ สเปรย์
                      นัมเบอร์ 30 สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล.
                    </p>
                    <p class="fw-medium m-0">฿69.00</p>
                  </div>
                </div>
                <!--card-result-->

                <div class="card-result">
                  <div class="card-photo">
                    <img src="/assets/img/thumb/photo-240x220--3.jpg" />
                  </div>
                  <div class="card-body">
                    <p>
                      <span class="blue">ดีแคช</span> มูฟวิ่ง แฮร์ สเปรย์
                      นัมเบอร์ 30 สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล.
                    </p>
                    <p class="fw-medium m-0">฿69.00</p>
                  </div>
                </div>
                <!--card-result-->

                <div class="card-result">
                  <div class="card-photo">
                    <img src="/assets/img/thumb/photo-240x220--3.jpg" />
                  </div>
                  <div class="card-body">
                    <p>
                      <span class="blue">ดีแคช</span> มูฟวิ่ง แฮร์ สเปรย์
                      นัมเบอร์ 30 สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล.
                    </p>
                    <p class="fw-medium m-0">฿69.00</p>
                  </div>
                </div>
                <!--card-result-->

                <div class="card-result">
                  <div class="card-photo">
                    <img src="/assets/img/thumb/photo-240x220--3.jpg" />
                  </div>
                  <div class="card-body">
                    <p>
                      <span class="blue">ดีแคช</span> มูฟวิ่ง แฮร์ สเปรย์
                      นัมเบอร์ 30 สตรอง แอนด์ ฮาร์ด โฮลด์ 320 มล.
                    </p>
                    <p class="fw-medium m-0">฿69.00</p>
                  </div>
                </div>
                <!--card-result-->
              </div>
              <!--dropdown-men-->
            </div>
          </div>
          <!--dropdown-men-->
        </li>
        <li>
          <a href="/cart">
            <span class="icons icon-bag">
              <span class="badge">10</span>
            </span>
          </a>
        </li>
        <li>
          <a @click="checkLogin">
            <span class="icons icon-user" style="cursor: pointer"></span>
          </a>
        </li>
        <li>
          <a class="btn receipt" href="/order-payment.html">
            <span class="icons icon-receipt"></span>
            ชำระเงิน
          </a>
        </li>
        <li class="nav-menu">
          <button class="btn btn-icon navbar-toggle" type="button">
            <span class="group">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </button>
        </li>
      </ul>
    </div>
    <!--container-->
  </div>
</template>

<script>
export default {
  data() {
    return {
      isLoggedin: false,
    };
  },
  methods: {
    checkLogin() {
      let isLoggedin = localStorage.getItem("getLoginCustomer");
      this.isLoggedin = isLoggedin;
      if (this.isLoggedin) {
        window.location.href = "/customers/profile";
      } else {
        window.location.href = "/signin-customer";
        localStorage.clear();
      }
    },
  },
};
</script>

<style>
</style>
