<template>
  <!-- <pre>{{ data.result }}</pre> -->
  <div class="setting-content">
    <div class="card-banner">
      <div class="photo">
        <input
          type="file"
          accept="image/*"
          ref="fileInput"
          :v-model="selectedFile"
          style="display: none"
          @change="displayImage"
        />
        <button @click="editImage" class="btn btn-upload">
          <span class="icons"></span>
        </button>
      </div>
      <img v-if="imageSrc" ref="image" :src="imageSrc" />
    </div>

    <div class="user-infos main">
      <div
        class="avatar"
        style="background-image: url({{ data.result?.image }})"
      ></div>
      <div class="info">
        <h2>{{ data.result?.name }} <span class="icons icon-edit"></span></h2>
        <p :v-model="phoneFormat">{{ phoneFormat }}</p>
      </div>

      <button class="btn btn-outline edit ms-auto" >
        <a href="/customers/profile/edit">แก้ไขข้อมูล</a>
      </button>
    </div>
    <!--user-infos-->

    <div class="d-block px-xl-5 py-4">
      <div class="row g-xl-4 g-3">
        <div class="col-md-4">
          <div class="card-total">
            <div class="card-icon blue">
              <img
                class="svg-js"
                src="../../../../public/assets/img/icons/icon-point.svg"
                alt=""
              />
            </div>
            <div class="card-body">
              <p>คะแนนสะสม</p>
              <h3>500</h3>
            </div>
          </div>
        </div>
        <!--col-md-4-->

        <div class="col-md-4">
          <div class="card-total">
            <div class="card-icon orange">
              <img
                class="svg-js"
                src="../../../../public/assets/img/icons/icon-dollar.svg"
                alt=""
              />
            </div>
            <div class="card-body">
              <p>เครดิตที่ใช้ได้</p>
              <h3>60,000</h3>
            </div>
          </div>
        </div>
        <!--col-md-4-->

        <div class="col-md-4">
          <div class="card-total">
            <div class="card-icon coupon">
              <img
                class="svg-js"
                src="../../../../public/assets/img/icons/nav/icon-coupon.svg"
                alt=""
              />
            </div>
            <div class="card-body">
              <p>คูปองส่วนลด</p>
              <h3>13</h3>
            </div>
          </div>
        </div>
        <!--col-md-4-->
      </div>
      <!--row-->
    </div>
    <!--d-block-->

    <div class="d-block px-xl-5 py-3">
      <h3 class="fs-25 fw-semibold">สรุปยอดสั่งซื้อ</h3>

      <div class="chart-box my-3">
        <div class="row align-items-center">
          <div class="col-6">
            <div class="legend-item">
              <span class="square"></span>
              ยอดสั่งซื้อ
            </div>
          </div>
          <div class="col-6 d-flex">
            <select class="form-select ms-auto mw-185">
              <option>ปี 2565</option>
            </select>
          </div>
        </div>
        <!--row-->

        <div class="d-block pt-3">
          <img
            class="w-100"
            src="../../../../public/assets/img/thumb/chart-1500x610.jpg"
            alt=""
          />
        </div>
      </div>
      <!--chart-box-->
    </div>
    <!--d-block-->
  </div>
  <!--setting-content-->
</template>


<script>
export default {
  data() {
    return {
      phoneFormat: "",
      selectedFile: null,
      imageSrc: null,
      cropper: null,
      data: {},
      // name: '',
    };
  },
  async mounted() {
    this.data = JSON.parse(localStorage.getItem("getLoginCustomer"));
    this.formatPhone();
  },
  methods: {
    editImage() {
      this.$refs.fileInput.click();
    },
    displayImage() {
      const reader = new FileReader();
      reader.onload = (event) => {
        this.imageSrc = event.target.result;
        this.cropper = new Cropper(this.$refs.image, {
          aspectRatio: 1,
          crop: () => {
            // handle crop event
          },
        });
      };
      reader.readAsDataURL(this.selectedFile);
    },
    formatPhone() {
      this.phoneFormat = this.data.result.phone.replace(
        /(\d{3})(\d{3})(\d{4})/,
        "$1 $2 $3"
      );
    },
  },
};
</script>

<style>
</style>