<template>
  <div>
    <div class="sidebar">
      <div class="card-blog-relate">
        <div class="card-header">
          <h5>ข่าวสารที่เกี่ยวข้อง</h5>
        </div>
        <!--card-header-->
        <ul class="card-body" v-for="(items, index) in data" :key="index">
          <li>
            <a href="#" class="card-link"></a>
            <div class="card-photo">
              <div
                class="photo"
                :style="{ 'background-image': `url(${items.image})` }"
              ></div>
            </div>

            <div class="textgroup">
              <p>{{ items.description }}</p>
              <p><span class="readmore">อ่านต่อ</span></p>
            </div>
          </li>
        </ul>
        <!--card-body-->
      </div>
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
          description: "Heading Lorem ipsumdolor sit amet, consectetur adi...",
        },
        {
          image: "assets/img/thumb/photo-800x473--2.jpg",
          description: "Heading Lorem ipsumdolor sit amet, consectetur adi...",
        },
        {
          image: "assets/img/thumb/photo-800x473--3.jpg",
          description: "Heading Lorem ipsumdolor sit amet, consectetur adi...",
        },
        {
          image: "assets/img/thumb/photo-800x473--4.jpg",
          description: "Heading Lorem ipsumdolor sit amet, consectetur adi...",
        },
        {
          image: "assets/img/thumb/photo-800x473--5.jpg",
          description: "Heading Lorem ipsumdolor sit amet, consectetur adi...",
        },
      ],
    };
  },
};
</script>

<style>
</style>