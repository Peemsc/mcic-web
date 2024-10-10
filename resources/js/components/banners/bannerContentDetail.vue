<template>
  <div class="d-block wow fadeIn">
    <a href="/" data-fancybox="gallery">
      <img class="w-100" :src="image" alt="" />
    </a>
  </div>
</template>

<script>
export default {
  data() {
    return {
      image: "assets/img/thumb/photo-1500x690.jpg",
    };
  },
};
</script>

<style>
</style>
