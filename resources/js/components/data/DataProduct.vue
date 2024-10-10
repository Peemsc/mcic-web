<template>
  <div class="col-lg-9">
    <div class="row g-4">
      <div
        class="col-sm-4 col-6"
        v-for="(items, index) in dataTable"
        :key="index"
      >
        <div class="card-product">
          <a href="product-detail.html" class="card-link"></a>
          <span class="label recommend">โปรโมชั่น</span>
          <span class="label discount">
            ลด<br />
            40%
          </span>
          <div class="card-photo">
            <div
              class="photo"
              :style="{ 'background-image': `url(${items.image})` }"
            >
              <img src="assets/img/thumb/frame-100x103.png" alt="" />
            </div>
          </div>
          <div class="card-body">
            <p>
              {{ items.productName }}
            </p>
            <div class="price blue">
              {{ items.price }}
              <span class="discount">{{ items.productName }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--card-product-->
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
        // {
        //   order: "7",
        //   image: "assets/img/thumb/photo-240x220--2.jpg",
        //   productName: "ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
        //   price: "฿99.00",
        //   fullPrice: "฿178",
        //   totalValue: "",
        //   totalPrice: "฿ 3,450.00",
        // },
        // {
        //   order: "8",
        //   image: "assets/img/thumb/photo-240x220--3.jpg",
        //   productName: "ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
        //   price: "฿99.00",
        //   fullPrice: "฿178",
        //   totalValue: "",
        //   totalPrice: "฿ 3,450.00",
        // },
        // {
        //   order: "9",
        //   image: "assets/img/thumb/photo-240x220--2.jpg",
        //   productName: "ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
        //   price: "฿99.00",
        //   fullPrice: "฿178",
        //   totalValue: "",
        //   totalPrice: "฿ 3,450.00",
        // },
        // {
        //   order: "10",
        //   image: "assets/img/thumb/photo-240x220--3.jpg",
        //   productName: "ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
        //   price: "฿99.00",
        //   fullPrice: "฿178",
        //   totalValue: "",
        //   totalPrice: "฿ 3,450.00",
        // },
      ],
    };
  },
};
</script>

<style>
</style>