<template>
  <div class="setting-content">
    <div class="d-flex py-4">
      <a class="link-item black ms-auto" href="profile-modify-upload.html">
        <span class="icon">
          <img
            class="w-100"
            src="../../../../public/assets/img/icons/icon-document.svg"
            alt=""
          />
        </span>
        แก้ไขเอกสารที่อัพโหลด
      </a>
    </div>
    <form class="form form-700 mx-auto" method="post" autocomplete="off">
      <div class="row g-2 g-md-4">
        <div class="col-12 f-flex">
          <div class="card-upload">
            <div class="image-upload preview">
              <div
                class="photo"
                style="
                  background-image: url(../../../../public/assets/img/thumb/avatar-1.png);
                "
              ></div>

              <p class="btn-upload">แก้ไขรูปภาพ</p>
            </div>

            <div class="controls" style="display: none">
              <input type="file" name="contact_image_1" />
            </div>
          </div>
          <!--card-upload-->
        </div>
        <div class="col-12">
          <div class="form-group">
            <input
              type="email"
              class="form-control"
              name="email"
              placeholder="example@example.com"
              required
            />
            <span class="icons float icon-checker right"></span>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              name="phone"
              placeholder="หมายเลขโทรศัพท์"
              required
            />
            <span class="icons float icon-checker right"></span>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              name="name"
              placeholder="ชื่อ - นามสกุล"
              required
            />
            <span class="icons float icon-checker right"></span>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              name="lineID"
              placeholder="Line ID"
              required
            />
            <span class="icons float icon-checker right"></span>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              name="code"
              placeholder="รหัสผู้แนะนำ(ถ้ามี)"
            />
            <span class="icons float icon-checker right"></span>
          </div>
        </div>
      </div>
      <!--row-->

      <div class="buttons d-flex gap-2 gap-md-3">
        <a class="btn btn-outline btn-xl w-220" href="/customers/profile"
          >ยกเลิก</a
        >
        <button class="btn btn-xl w-100" type="submit">บันทึก</button>
      </div>
    </form>
  </div>
  <!--setting-content-->
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      phone: "",
      email: "",
      name: "",
      image: "",
      userToken: "",
    };
  },
  methods: {
    async updateProfile() {
      const payload = {
        phone: this.phone,
        password: this.password,
        name: this.name,
        image: this.image,
      };
      try {
        axios({
          method: "post",
          url: "/api/customer/profile/update",
          headers: { Authorization: this.userToken },
          data: payload,
        })
          .then((response) => {
            const update = response.data;
            if (update.message === "success") this.posts[index].saved = true;
          })
          .catch((error) => {
            console.log(error);
          });
      } catch (error) {}
    },
  },
};
</script>

<style>
</style>
