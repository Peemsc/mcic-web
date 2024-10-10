<template>
  <div class="row blog-highlight-box">
    <div class="col-lg-5" v-for="(items, index) in mainHighlight" :key="index" >
      <div class="card-blog">
        <a href="content-detail.html" class="card-link"></a>
        <div class="card-photo">
          <div
            class="photo"
            :style="
              {'background-image': `url(${items.image})`}
            "
          >
            <img src="assets/img/thumb/frame-100x59.png" alt="" />
          </div>
        </div>
        <div class="card-body">
          <h3>{{ items.title }}</h3>
          <p class="fs-20">
            {{ items.description }}
          </p>
        </div>
      </div>
      <!--card-blog-->
    </div>
    <!--col-md-5-->
    <div class="col-lg-7 d-flex vstack" >
      <div class="card-blog rows" v-for="(item,index) in highlight" :key="index">
        <a href="content-detail.html" class="card-link"></a>
        <div class="card-photo">
          <div
            class="photo"
            :style="{'background-image': `url(${item.image})`}"
          >
            <img src="assets/img/thumb/frame-100x82.png" alt="" />
          </div>
        </div>
        <div class="card-body">
          <h4>{{ item.title }}</h4>
          <p>
            {{ item.description }}
          </p>
        </div>
      </div>
      <!--card-blog-->
    </div>
    <!--col-md-7-->
  </div>
</template>

<script>
export default {
  data() {
    return {
      mainHighlight: [
        {
          title: "Color for everyone",
          image: "assets/img/thumb/photo-1000x590--1.jpg",
          description: "ด้วยสูตรลับเฉพาะพิเศษ วิจัยจากห้อง LAB ผสานความชำนาญมา นับ 30 ปี จนได้รับความไว้วางใจจากผู้ใช้งานทั่วประเทศ สีผมขายดีอั...",
        },
      ],
      highlight: [
        {
          title: "Box hair colour vs salon hair colour: Wh...",
          image: "assets/img/thumb/photo-400x330--1.jpg",
          description: "Creative curves & disruptive Valley at ramps ecosystem infrastructure backing seed round bandwidth series",
        },
        {
          title: "Box hair colour vs salon hair colour: Wh...",
          image: "assets/img/thumb/photo-400x330--2.jpg",
          description: "Creative curves & disruptive Valley at ramps ecosystem infrastructure backing seed round bandwidth series",
        },
        {
          title: "Box hair colour vs salon hair colour: Wh...",
          image: "assets/img/thumb/photo-400x330--3.jpg",
          description: "Creative curves & disruptive Valley at ramps ecosystem infrastructure backing seed round bandwidth series",
        },
      ],
    };
  },
};
</script>

<style>
</style>