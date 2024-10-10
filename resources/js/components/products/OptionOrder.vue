<template>
  <div class="table-responsive">
    <table class="table table-data table-hover form xl">
      <thead class="dark">
        <tr>
          <th class="w-80">#</th>
          <th class="w-80">รูปภาพ</th>
          <th class="w-100">ชื่อสินค้า</th>
          <th class="w-165">ราคา</th>
          <th class="w-165">ตัวเลือก</th>
          <th class="w-165">จำนวน</th>
          <th>ราคารวม</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr
          class="align-middle"
          v-for="(items, index) in dataTable"
          :key="index"
        >
          <td>{{ items.order }}</td>
          <td>
            <a class="photo" href="/products-detail">
              <img class="fit" :src="items.image" alt="" />
            </a>
          </td>
          <td class="td-infos">
            <a href="/products-detail">
              <p>{{ items.productName }}</p>
              <span class="badge">โปรโมชั่น</span>
            </a>
          </td>
          <td class="nowrap">
            <div class="price">
              {{ items.price }}
              <span class="discount">{{ items.fullPrice }}</span>
            </div>
          </td>
          <td>
            <select class="form-select sm">
              <option>แพ็ค/12</option>
            </select>
          </td>
          <td>
            <input
              type="text"
              class="form-control sm"
              :value="items.totalValue"
              name=""
            />
          </td>
          <td class="nowrap">
            <strong>{{ items.totalPrice }}</strong>
          </td>
          <td><span class="arrow"></span></td>
        </tr>
      </tbody>
    </table>
  </div>

  <ul class="pagination">
                <li class="arrow">
                    <a href="#"><span class="icons prev double"></span></a>
                </li>
                <li class="arrow">
                    <a href="#"><span class="icons prev"></span></a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">5</a></li>
                <li class="arrow">
                    <a href="#"><span class="icons next"></span></a>
                </li>
                <li class="arrow">
                    <a href="#"><span class="icons next double"></span></a>
                </li>
            </ul>

            <div class="d-flex py-4">
                <a class="btn btn-xl w-580 mx-auto" href="#">จองสินค้า ฿10,650.00</a>
            </div>
</template>

<script>
export default {
  data() {
    return {
      dataTable: [
        {
          order: "1",
          image: "assets/img/thumb/photo-240x220--1.jpg",
          productName: "ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
          price: "฿99.00",
          fullPrice: "฿178",
          totalValue: "50",
          totalPrice: "฿ 3,450.00",
        },
        {
          order: "2",
          image: "assets/img/thumb/photo-240x220--1.jpg",
          productName: "ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
          price: "฿99.00",
          fullPrice: "฿178",
          totalValue: "50",
          totalPrice: "฿ 3,450.00",
        },
        {
          order: "3",
          image: "assets/img/thumb/photo-240x220--1.jpg",
          productName: "ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
          price: "฿99.00",
          fullPrice: "฿178",
          totalValue: "50",
          totalPrice: "฿ 3,450.00",
        },
        {
          order: "4",
          image: "assets/img/thumb/photo-240x220--2.jpg",
          productName: "ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
          price: "฿99.00",
          fullPrice: "฿178",
          totalValue: "50",
          totalPrice: "฿ 3,450.00",
        },
        {
          order: "5",
          image: "assets/img/thumb/photo-240x220--3.jpg",
          productName: "ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
          price: "฿99.00",
          fullPrice: "฿178",
          totalValue: "",
          totalPrice: "฿ 3,450.00",
        },
        {
          order: "6",
          image: "assets/img/thumb/photo-240x220--3.jpg",
          productName: "ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
          price: "฿99.00",
          fullPrice: "฿178",
          totalValue: "",
          totalPrice: "฿ 3,450.00",
        },
        {
          order: "7",
          image: "assets/img/thumb/photo-240x220--2.jpg",
          productName: "ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
          price: "฿99.00",
          fullPrice: "฿178",
          totalValue: "",
          totalPrice: "฿ 3,450.00",
        },
        {
          order: "8",
          image: "assets/img/thumb/photo-240x220--3.jpg",
          productName: "ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
          price: "฿99.00",
          fullPrice: "฿178",
          totalValue: "",
          totalPrice: "฿ 3,450.00",
        },
        {
          order: "9",
          image: "assets/img/thumb/photo-240x220--2.jpg",
          productName: "ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
          price: "฿99.00",
          fullPrice: "฿178",
          totalValue: "",
          totalPrice: "฿ 3,450.00",
        },
        {
          order: "10",
          image: "assets/img/thumb/photo-240x220--3.jpg",
          productName: "ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
          price: "฿99.00",
          fullPrice: "฿178",
          totalValue: "",
          totalPrice: "฿ 3,450.00",
        },
      ],
    };
  },
};
</script>

<style lang="scss" scoped >
// .table-responsive {
//   overflow-x: hidden;
// }
// .table-data thead th:first-child,
// .table-data tbody td:first-child {
//   text-align: center;
//   min-width: 60px;
//   vertical-align: middle;
// }
// @media (max-width: 1199px) {
//   .table-data thead th:first-child,
//   .table-data tbody td:first-child {
//     min-width: 40px;
//     vertical-align: top;
//   }
// }
// .table-data .w-80 {
//    width: 80px !important;
//    min-width: 80px !important;
//  }
</style>
