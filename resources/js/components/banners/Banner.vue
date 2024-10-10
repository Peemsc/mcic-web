<template>

    <div class="swiper-container swiper-banner has-shadow">
      <div class="swiper-wrapper">
        <div v-for="items in image" :key="items" class="swiper-slide">
          <a href="/">
            <img class="w-100" :src="items" alt="" />
          </a>
        </div>
      </div>
    </div>
    <!--swiper-container-->

    <div class="swiper-pagination banner"></div>

    <!-- <div class="swiper-button swiper-button-prev banner"></div>
    <div class="swiper-button swiper-button-next banner"></div> -->
</template>

<script>
export default {
  name: "Banner",
  data() {
    return {
      image: [
        "assets/img/thumb/photo-1920x555.jpg",
        "assets/img/thumb/photo-1920x555.jpg",
        "assets/img/thumb/photo-1920x555.jpg",
      ],
      introduces: ["assets/img/thumb/Introduce.png"],
    };
  },
};
</script>

<style >

</style>