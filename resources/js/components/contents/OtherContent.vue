<template>
  <div>
    <div class="row gy-4 gy-md-5">
      <div class="col-md-4" v-for="(items, index) in data" :key="index">
        <div class="card-blog">
          <a href="content-detail.html" class="card-link"></a>
          <div class="card-photo">
            <div
              class="photo"
              :style="{ 'background-image': `url(${items.image})` }"
            >
              <img src="assets/img/thumb/frame-100x59.png" alt="" />
            </div>
          </div>
          <div class="card-body">
            <h4>{{ items.title }}</h4>
            <p>
              {{ items.description }}
            </p>
          </div>
        </div>
        <!--card-blog-->
      </div>
      <!--col-md-4-->
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      data: [
        {
          image: "assets/img/thumb/photo-800x473--1.jpg",
          title: "Color for everyone",
          description:
            "ด้วยสูตรลับเฉพาะพิเศษ วิจัยจากห้อง LAB ผสานความชำนาญมา นับ 30 <br/> ปีจนได้รับความไว้วางใจจากผู้ใช้งานทั่วประเทศ สีผมขายดีอั...",
        },
        {
          image: "assets/img/thumb/photo-800x473--2.jpg",
          title: "Color for everyone",
          description:
            "ด้วยสูตรลับเฉพาะพิเศษ วิจัยจากห้อง LAB ผสานความชำนาญมา นับ 30 <br/> ปีจนได้รับความไว้วางใจจากผู้ใช้งานทั่วประเทศ สีผมขายดีอั...",
        },
        {
          image: "assets/img/thumb/photo-800x473--3.jpg",
          title: "Color for everyone",
          description:
            "ด้วยสูตรลับเฉพาะพิเศษ วิจัยจากห้อง LAB ผสานความชำนาญมา นับ 30 <br/> ปีจนได้รับความไว้วางใจจากผู้ใช้งานทั่วประเทศ สีผมขายดีอั...",
        },
        {
          image: "assets/img/thumb/photo-800x473--4.jpg",
          title: "Color for everyone",
          description:
            "ด้วยสูตรลับเฉพาะพิเศษ วิจัยจากห้อง LAB ผสานความชำนาญมา นับ 30 <br/> ปีจนได้รับความไว้วางใจจากผู้ใช้งานทั่วประเทศ สีผมขายดีอั...",
        },
        {
          image: "assets/img/thumb/photo-800x473--5.jpg",
          title: "Color for everyone",
          description:
            "ด้วยสูตรลับเฉพาะพิเศษ วิจัยจากห้อง LAB ผสานความชำนาญมา นับ 30 <br/> ปีจนได้รับความไว้วางใจจากผู้ใช้งานทั่วประเทศ สีผมขายดีอั...",
        },
        {
          image: "assets/img/thumb/photo-800x473--6.jpg",
          title: "Color for everyone",
          description:
            "ด้วยสูตรลับเฉพาะพิเศษ วิจัยจากห้อง LAB ผสานความชำนาญมา นับ 30 <br/> ปีจนได้รับความไว้วางใจจากผู้ใช้งานทั่วประเทศ สีผมขายดีอั...",
        },
        {
          image: "assets/img/thumb/photo-800x473--7.jpg",
          title: "Color for everyone",
          description:
            "ด้วยสูตรลับเฉพาะพิเศษ วิจัยจากห้อง LAB ผสานความชำนาญมา นับ 30 <br/> ปีจนได้รับความไว้วางใจจากผู้ใช้งานทั่วประเทศ สีผมขายดีอั...",
        },
        {
          image: "assets/img/thumb/photo-800x473--8.jpg",
          title: "Color for everyone",
          description:
            "ด้วยสูตรลับเฉพาะพิเศษ วิจัยจากห้อง LAB ผสานความชำนาญมา นับ 30 <br/> ปีจนได้รับความไว้วางใจจากผู้ใช้งานทั่วประเทศ สีผมขายดีอั...",
        },
        {
          image: "assets/img/thumb/photo-800x473--9.jpg",
          title: "Color for everyone",
          description:
            "ด้วยสูตรลับเฉพาะพิเศษ วิจัยจากห้อง LAB ผสานความชำนาญมา นับ 30 <br/> ปีจนได้รับความไว้วางใจจากผู้ใช้งานทั่วประเทศ สีผมขายดีอั...",
        },
      ],
    };
  },
};
</script>

<style>
</style>