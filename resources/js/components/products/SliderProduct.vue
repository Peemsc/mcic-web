<template>
  <div>
    <div class="product-gallery">
      <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
          <div
            class="swiper-slide"
            v-for="(items, index) in dataImage"
            :key="index"
          >
            <a
              class="photo"
              data-fancybox
              :href="items.imageBg"
              :style="{ 'background-image': `url(${items.imageBg})` }"
            >
              <img :src="items.image" alt="" />
            </a>
          </div>
        </div>
        <!--swiper-wrapper-->
      </div>
      <!--gallery-top-->

      <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
          <div
            class="swiper-slide"
            v-for="(item, index) in dataImage"
            :key="index"
          >
            <div
              class="photo"
              :style="{ 'background-image': `url(${item.imageBg})` }"
            >
              <img :src="item.image" alt="" />
            </div>
          </div>
        </div>
        <!--swiper-wrapper-->
      </div>
      <!--gallery-thumbs-->
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      dataImage: [
        {
          imageBg: "assets/img/thumb/photo-1400x1300.jpg",
          image: "assets/img/thumb/frame-100x100.png",
        },
        {
          imageBg: "assets/img/thumb/photo-1400x1300.jpg",
          image: "assets/img/thumb/frame-100x100.png",
        },
        {
          imageBg: "assets/img/thumb/photo-1400x1300.jpg",
          image: "assets/img/thumb/frame-100x100.png",
        },
        {
          imageBg: "assets/img/thumb/photo-1400x1300.jpg",
          image: "assets/img/thumb/frame-100x100.png",
        },
        {
          imageBg: "assets/img/thumb/photo-1400x1300.jpg",
          image: "assets/img/thumb/frame-100x100.png",
        },
        {
          imageBg: "assets/img/thumb/photo-1400x1300.jpg",
          image: "assets/img/thumb/frame-100x100.png",
        },
      ],
    };
  },
};
</script>

<style lang="scss">
.img-show-product {
  background-image: image(imageBg);
}
</style>
