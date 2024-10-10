<template>
  <div>
    <div class="form row g-lg-4 g-2">
      <div class="col-12 d-flex mb-2">
        <span
          class="link-blue ms-auto"
          @click="ClearData"
          style="cursor: pointer"
          >Clear (1)</span
        >
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="form-group">
          <select class="form-select">
            <option value="1">ผลิตภัณฑ์ทั้งหมด</option>
            <option value="2">1</option>
            <option value="3">2</option>
          </select>
        </div>
      </div>
      <!--col-lg-3-->

      <div class="col-lg-3 col-sm-6">
        <div class="form-group">
          <select class="form-select">
            <option value="1">สีทั้งหมด</option>
            <option value="2">1</option>
            <option value="3">2</option>
          </select>
        </div>
      </div>
      <!--col-lg-3-->

      <div class="col-lg-3 col-sm-6">
        <div class="form-group">
          <select class="form-select">
            <option value="1">฿ 0-1000</option>
            <option value="2">1</option>
            <option value="3">2</option>
          </select>
        </div>
      </div>
      <!--col-lg-3-->

      <div class="col-lg-3 col-sm-6">
        <div class="form-group">
          <select class="form-select">
            <option value="1">แบรนด์ทั้งหมด</option>
            <option value="2">1</option>
            <option value="3">2</option>
          </select>
        </div>
      </div>
      <!--col-lg-3-->
    </div>
    <!--row-->
  </div>
  <!--hgroup-filter-->
</template>

<script>
export default {
  data() {
    return {
      clear: "",
    };
  },
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