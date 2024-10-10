<template>
  <div class="section-product d-flex mt-lg-4 mt-3">
    <!--sidebar-->
    <MenuGridVue></MenuGridVue>
    <!--sidebar-->
    <div class="content">
      <div class="row g-4">
        <div class="col-xl-3 col-sm-4 col-6" v-for="(items,index) in dataTable" :key="index">
          <div class="card-product">
            <a href="/products-detail" class="card-link"></a>
            <span class="label recommend">แนะนำ</span>
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
              <div class="price">{{ items.price }} <span class="discount">{{ items.fullPrice }}</span></div>
            </div>
          </div>
          <!--card-product-->
        </div>
      </div>
      <!--row-->
    </div>
    <!--content-->
  </div>
</template>

<script>
import MenuGridVue from "./MenuGrid.vue";
export default {
  data() {
    return {
      clear: "",
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
  components: { MenuGridVue },
  async beforeMount() {
    this.ClearData();
  },
  methods: {
    ClearData() {
      this.clear = "";
      console.log(this.clear, "click");
    },
  },
};
</script>

<style>
</style>