<template>
  <div class="setting-content">
    <div class="d-block">
      <img class="w-100" src="/assets/img/thumb/photo-1920x375.jpg" alt="" />
    </div>

    <div class="hgroup">
      <h2 class="fs-25 fw-semibold">สินค้าเพิ่มเข้าใหม่</h2>
      <a class="btn ms-auto" href="/customers/stock/update">อัพเดตสต็อก</a>
    </div>

    <div class="table-responsive min-width-670">
      <table class="table table-data table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>รูปภาพ</th>
            <th>ชื่อสินค้า</th>
            <th>ราคา</th>
            <th>จำนวน</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(items, index) in data" :key="index">
            <td>1</td>
            <td>
              <div class="photo">
                <img class="fit" :src="items.image" alt="" />
              </div>
            </td>
            <td>
              <p>ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL</p>
              <span class="badge">โปรโมชั่น</span>
            </td>
            <td>
              <div class="price">฿99.00 <span class="discount">฿178</span></div>
            </td>
            <td>50</td>
            <td><span class="arrow-right"></span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--table-responsive-->
  </div>
  <!--setting-content-->
</template>

<script>
export default {
  data() {
    return {
      data: [
        {
          image: "../assets/img/thumb/photo-240x220--1.jpg",
        },
        {
          image: "../assets/img/thumb/photo-240x220--2.jpg",
        },
        {
          image: "../assets/img/thumb/photo-240x220--3.jpg",
        },
      ],
    };
  },
};
</script>

<style>
</style>