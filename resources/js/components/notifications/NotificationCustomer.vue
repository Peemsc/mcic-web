<template>
  <div>
    <h2 class="fs-25 fw-semibold">การแจ้งเตือน</h2>

    <div class="notification-option">
      <ul class="nav notify-header">
        <li class="select notify-toggle">เลือก</li>
        <li>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="a"
              v-model="allSelected"
            />
            <label class="form-check-label" for="a"> เลือกทั้งหมด </label>
          </div>
        </li>
        <li class="vr"></li>
        <li>
          <span @click="clearSelection" class="icons icon-delete"></span>
          ลบที่เลือก
        </li>
        <li>
          <span class="icons icon-eye"></span>
          เปิดอ่าน
        </li>
        <li class="cancel notify-toggle">ยกเลิก</li>
      </ul>
      <!--notify-header-->
      <div class="notify-body">
        <table class="table table-notify table-hover">
          <tr data-url="promotion.html">
            <td class="td-check">
              <input
                class="form-check-input text-none"
                type="checkbox"
                value=""
              />
            </td>

            <td class="td-icon">
              <span class="icons">
                <img
                  class="svg-js"
                  src="/assets/img/icons/icon-promotion.svg"
                  alt=""
                />
              </span>
            </td>
            <td class="td-info">
              <div class="infos">
                <div>
                  <h4>โปรโมชั่น</h4>
                  <p>สินค้าลดมากกว่า 40% บิวตี้ไอเทมลดอีกมากมาย!</p>
                </div>
                <p class="date">1/5/2565 16:00</p>
              </div>
            </td>
          </tr>

          <tr data-url="sales.html">
            <td class="td-check">
              <input
                class="form-check-input text-none"
                type="checkbox"
                value=""
              />
            </td>

            <td class="td-icon">
              <span class="icons">
                <img
                  class="svg-js"
                  src="/assets/img/icons/icon-calendar.svg"
                  alt=""
                />
              </span>
            </td>
            <td class="td-info">
              <div class="infos">
                <div>
                  <h4>มีปฏิทินนัดพบใหม่!</h4>
                  <p>ดูรายละเอียด!</p>
                </div>
                <p class="date">1/5/2565 16:00</p>
              </div>
            </td>
          </tr>

          <tr data-url="rewards-coupon.html">
            <td class="td-check">
              <input
                class="form-check-input text-none"
                type="checkbox"
                value=""
              />
            </td>

            <td class="td-icon">
              <span class="icons">
                <img
                  class="svg-js"
                  src="/assets/img/icons/icon-point-circle.svg"
                  alt=""
                />
              </span>
            </td>
            <td class="td-info">
              <div class="infos">
                <div>
                  <h4>คุณได้รับ 100 คะแนน</h4>
                  <p>ได้รับคะแนนจากคำสั่งซื้อ DN2020020123</p>
                </div>
                <p class="date">1/5/2565 16:00</p>
              </div>
            </td>
          </tr>

          <tr data-url="#">
            <td class="td-check">
              <input
                class="form-check-input text-none"
                type="checkbox"
                value=""
              />
            </td>

            <td class="td-icon">
              <span class="icons">
                <img
                  class="svg-js"
                  src="/assets/img/icons/icon-truck.svg"
                  alt=""
                />
              </span>
            </td>
            <td class="td-info">
              <div class="infos">
                <div>
                  <h4>จัดส่งสำเร็จ</h4>
                  <p>คำสั่งซื้อ DN2020020123 จัดส่งสำเร็จแล้ว</p>
                </div>
                <p class="date">1/5/2565 16:00</p>
              </div>
            </td>
          </tr>

          <tr data-url="#">
            <td class="td-check">
              <input
                class="form-check-input text-none"
                type="checkbox"
                value=""
              />
            </td>

            <td class="td-icon">
              <span class="icons">
                <img
                  class="svg-js"
                  src="/assets/img/icons/icon-receipt-blue.svg"
                  alt=""
                />
              </span>
            </td>
            <td class="td-info">
              <div class="infos">
                <div>
                  <h4>ผู้ขายเปิดใบของให้คุณ</h4>
                  <p>ดูรายละเอียด!</p>
                </div>
                <p class="date">1/5/2565 16:00</p>
              </div>
            </td>
          </tr>

          <tr data-url="#">
            <td class="td-check">
              <input
                class="form-check-input text-none"
                type="checkbox"
                value=""
              />
            </td>

            <td class="td-icon">
              <span class="icons" style="background-color: #ffd8d8">
                <img
                  class="svg-js"
                  src="/assets/img/icons/icon-reserved.svg"
                  alt=""
                />
              </span>
            </td>
            <td class="td-info">
              <div class="infos">
                <div>
                  <h4>คำสั่งซื้อของคุณถูกยกเลิก</h4>
                  <p>คำสั่งซื้อ DN2020020123 ถูกยกเลิก</p>
                </div>
                <p class="date">1/5/2565 16:00</p>
              </div>
            </td>
          </tr>

          <tr data-url="#">
            <td class="td-check">
              <input
                class="form-check-input text-none"
                type="checkbox"
                value=""
              />
            </td>

            <td class="td-icon">
              <span class="icons" style="background-color: #ffecd7">
                <img
                  class="svg-js"
                  src="/assets/img/icons/icon-dollar-circle.svg"
                  alt=""
                />
              </span>
            </td>
            <td class="td-info">
              <div class="infos">
                <div>
                  <h4>คำขอเครดิต</h4>
                  <p>เจ้าหน้าที่อนุมัติเครดิตที่คุณขอแล้ว</p>
                </div>
                <p class="date">1/5/2565 16:00</p>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <!--notify-body-->
    </div>
    <!--setting-content-->
  </div>
</template>

<script>
export default {
  data() {
    return {
      allSelected: false,
    };
  },
  methods: {
    clearSelection() {
      this.allSelected = false;
    },
    // clearSelection() {
    //   this.allSelected = false;
    //   this.items.forEach((item) => {
    //     item.selected = false;
    //   });
    // },
  },
};
</script>

<style>
</style>