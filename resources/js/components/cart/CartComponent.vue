<template>
  <div>
    <div class="table-check-all">
      <div class="form-check">
        <input
          class="form-check-input"
          type="checkbox"
          id="select-all"
          v-model="allSelected"
          @change="toggleAll"
        />
        <label class="form-check-label" for="select-all">เลือกทั้งหมด</label>
      </div>
    </div>
    <ul
      class="tables table-body cart"
      v-for="(item, index) in items"
      :key="index"
    >
      <td class="photo">
        <div class="d-flex">
          <div class="form-check">
            <input class="form-check-input" v-model="item.selected" @change="toggleOne" type="checkbox" id="a1" />
            <label class="form-check-label" for="a1"></label>
          </div>

          <div class="card-photo">
            <div
              class="photo"
              :style="{ 'background-image': `url(${item.image})` }"
            ></div>
          </div>
        </div>
      </td>

      <li class="info" data-title="สินค้า">
        <div class="d-flex vstack">
          <h6>ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL</h6>
          <p class="price">฿69.00 <span class="discount">฿178</span></p>
          <span class="badge orange">โปรโมชั่น</span>
          <span class="delete">ลบสินค้า</span>
        </div>
      </li>

      <li class="option" data-title="ตัวเลือก">
        <select class="form-select">
          <option>แพ็ค/12</option>
        </select>
      </li>

      <li class="qty" data-title="จำนวน">
        <input type="text" class="form-control" value="50" name="" />
      </li>

      <li class="total" data-title="ราคารวม">
        <span>฿ 3,450.00</span>
      </li>
    </ul>

    <div class="cart-row">
      <h6>ส่วนลดใบสั่งจอง</h6>
      <a href="#" data-bs-toggle="modal" data-bs-target="#couponModal"
        >เลือกส่วนลด</a
      >
    </div>

    <div class="d-flex">
      <div class="summary-box">
        <h3 class="fs-32">สรุปที่ต้องชำระ</h3>
        <table class="table-summary">
          <tr>
            <th>ราคาสินค้าทั้งหมด</th>
            <td>฿ 10,650.00</td>
          </tr>
          <tr>
            <th>ค่าจัดส่ง</th>
            <td>฿ 0.00</td>
          </tr>
          <tr>
            <th>ภาษีมูลค่าเพิ่ม</th>
            <td>฿ 745.50</td>
          </tr>
          <!--tr>
                        <th>ส่วนลดใบสั่งจอง <span class="red">ชื่อส่วนลด</span></th>
                        <td class="red">-฿ 200.00</td>
                    </tr>
                    <tr>
                        <th>ส่วนลดใบสั่งจอง <span class="red">ชื่อส่วนลด</span></th>
                        <td class="red">-฿ 200.00</td>
                    </tr-->
          <tr class="total">
            <th>รวมทั้งสิ้น</th>
            <td>฿ 11,495.50</td>
          </tr>
        </table>

        <div class="d-block py-4">
          <a class="btn btn-xl w-100" href="checkout-discount-coupon.html"
            >สั่งจองสินค้า</a
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      allSelected: false,
      // selected: false,
      items: [
        {
          title: "ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
          price: 178,
          discount: 109,
          priceWhenDiscount: null,
          image: "assets/img/thumb/photo-240x220--1.jpg",
        }
      ],
    };
  },
  async mounted() {
    await this.selectAll();
  },
  methods: {
    toggleAll() {
      this.items.forEach(item => {
        item.selected = this.allSelected
      })
    },
    toggleOne() {
      this.allSelected = this.items.every(item => item.selected)
    }
  },
};
</script>

<style>
</style>