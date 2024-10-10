<template>
  <div class="setting-content bg-none">
    <div class="card-setting">
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
        <img ref="image" :src="imageSrc" />
      </div>

      <div class="user-infos main">
        <div
          class="avatar"
          style="background-image: url({{ profile.result?.image }})"
        ></div>
        <div class="info">
          <h2>{{ profile.result?.name }} <span class="icons icon-edit"></span></h2>
          <p :v-model="phoneFormat">{{ phoneFormat }}</p>
        </div>

        <button class="btn btn-outline edit ms-auto">
          <a href="/customers/profile/edit">แก้ไขข้อมูล</a>
        </button>
      </div>
      <!--user-infos-->

      <div class="d-block px-xl-5 py-4">
        <div class="row g-xl-4 g-3">
          <div class="col-md-4">
            <div class="card-total has-bg">
              <div class="card-icon">
                <img
                  class="svg-js w-100"
                  src="/assets/img/icons/icon-profile.svg"
                  alt=""
                />
              </div>
              <div class="card-body">
                <p>ลูกค้า</p>
                <h3>10</h3>
              </div>
            </div>
          </div>
          <!--col-md-4-->

          <div class="col-md-4">
            <div class="card-total has-bg">
              <div class="card-icon">
                <img
                  class="svg-js w-100"
                  src="/assets/img/icons/icon-reserved-checked.svg"
                  alt=""
                />
              </div>
              <div class="card-body">
                <p>คำสั่งซื้อ</p>
                <h3>30</h3>
              </div>
            </div>
          </div>
          <!--col-md-4-->

          <div class="col-md-4">
            <div class="card-total has-bg">
              <div class="card-icon">
                <img
                  class="svg-js w-100"
                  src="/assets/img/icons/nav/icon-handshake.svg"
                  alt=""
                />
              </div>
              <div class="card-body">
                <p>นัดพบสำเร็จ</p>
                <h3>20</h3>
              </div>
            </div>
          </div>
          <!--col-md-4-->
        </div>
        <!--row-->
      </div>
      <!--d-block-->
    </div>
    <!--card-setting-->

    <div class="card-setting">
      <div class="hgroup p-0 pb-3">
        <h4 class="fs-20 fw-semibold">นัดพบที่กำลังจะถึง</h4>

        <a class="btn btn-add ms-auto" href="trip-plan-add.html">
          <span class="icons icon-plus"></span>
          สร้างนัดพบ
        </a>
      </div>

      <div class="table-wraper-xl">
        <table class="dataTables table table-data table-hover fw-light xl">
          <thead>
            <tr>
              <th class="text-start">#</th>
              <th>วันที่นัดหมาย</th>
              <th>เวลานัดหมาย</th>
              <th>ลูกค้า</th>
              <th>เรื่องนัดพบ</th>
              <th>ช่องทางพบลูกค้า</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-start"><strong>1</strong></td>
              <td>จ. 5 ก.ค. 2565</td>
              <td>13:00 - 13:20</td>
              <td>Jenny Wilson</td>
              <td>นัดเก็บเงินกับลูกค้า</td>
              <td><span class="badge blue">เดินทาง</span></td>
              <td><span class="arrow-right"></span></td>
            </tr>

            <tr>
              <td class="text-start"><strong>2</strong></td>
              <td>จ. 5 ก.ค. 2565</td>
              <td>13:00 - 13:20</td>
              <td>Jenny Wilson</td>
              <td>นัดเก็บเงินกับลูกค้า</td>
              <td><span class="badge blue">เดินทาง</span></td>
              <td><span class="arrow-right"></span></td>
            </tr>

            <tr>
              <td class="text-start"><strong>3</strong></td>
              <td>จ. 5 ก.ค. 2565</td>
              <td>13:00 - 13:20</td>
              <td>Jenny Wilson</td>
              <td>นัดเก็บเงินกับลูกค้า</td>
              <td><span class="badge blue">โทร/ติดตาม</span></td>
              <td><span class="arrow-right"></span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--table-wraper-xl-->

      <div class="d-flex">
        <a class="link-next" href="#">
          <span class="link">ทริปแพลน</span>
          <span class="icons icon-next"></span>
        </a>
      </div>
    </div>
    <!--card-setting-->

    <div class="card-setting">
      <div class="hgroup p-0 pb-3">
        <h4 class="fs-20 fw-semibold">ใบจองสินค้าใหม่</h4>

        <a class="btn btn-add ms-auto" href="order-purchase-add.html">
          <span class="icons icon-plus"></span>
          สร้างใบจอง
        </a>
      </div>

      <div class="table-wraper-xl">
        <table class="dataTables table table-data table-hover fw-light xl">
          <thead>
            <tr>
              <th class="text-start">#</th>
              <th>สินค้า</th>
              <th>ราคา</th>
              <th>สถานะคำสั่งซื้อ</th>
              <th>สถานะการจัดส่ง</th>
              <th>ผู้สั่งจอง</th>
              <th>เวลาสั่งซื้อ</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-start"><strong>2020020123</strong></td>
              <td>3 รายการ</td>
              <td>฿ 11,295.50</td>
              <td><span class="badge blue">รอดำเนินการ</span></td>
              <td><span class="badge blue">รอดำเนินการ</span></td>
              <td><span class="badge blue border">คุณ</span></td>
              <td>1/6/2565 15:00</td>
              <td><span class="arrow-right"></span></td>
            </tr>

            <tr>
              <td class="text-start"><strong>2020020123</strong></td>
              <td>3 รายการ</td>
              <td>฿ 11,495.50</td>
              <td><span class="badge blue">รอดำเนินการ</span></td>
              <td><span class="badge blue">รอดำเนินการ</span></td>
              <td><span class="badge blue border">คุณ</span></td>
              <td>1/6/2565 15:00</td>
              <td><span class="arrow-right"></span></td>
            </tr>

            <tr>
              <td class="text-start"><strong>2020020123</strong></td>
              <td>3 รายการ</td>
              <td>฿ 11,295.50</td>
              <td><span class="badge red">ยกเลิก</span></td>
              <td><span class="badge red">ไม่สำเร็จ</span></td>
              <td><span class="badge blue border">คุณ</span></td>
              <td>1/6/2565 15:00</td>
              <td><span class="arrow-right"></span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--table-wraper-xl-->

      <div class="d-flex">
        <a class="link-next" href="#">
          <span class="link">ดูทั้งหมด</span>
          <span class="icons icon-next"></span>
        </a>
      </div>
    </div>
    <!--card-setting-->
  </div>
  <!--setting-content-->
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      phoneFormat: '',
      selectedFile: null,
      imageSrc: null,
      cropper: null,
      // data: {},
      profile: {},
      // name: '',
    };
  },
  async created(){
    this.getProfileSeller();
  },
  async mounted() {
    // this.data = JSON.parse(localStorage.getItem("getLoginSeller"));
    this.profile = JSON.parse(sessionStorage.getItem("GetProfile"));
    this.formatPhone();
    // console.log(this.phoneFormat,'phone');
  },
  methods: {
    async getProfileSeller() {
      try {
        let response = await axios
          .get(`/api/sale/profile`, {
            headers: {
              "Content-Type": "application/json",
              Authorization: "Bearer " + localStorage.getItem("TokenSeller"),
            },
          })
          .then((response) => {
            const profile = response.data;
            if (profile.statusCode === 200) {
              sessionStorage.setItem("GetProfile", JSON.stringify(profile));
            } else {
              {
                {
                  this.profile.message.error;
                }
              }
            }
          });
        return response;
      } catch (error) {
        console.log(error);
      }
    },
    editImage() {
      this.$refs.fileInput.click();
    },
    displayImage() {
      const reader = new FileReader();
      reader.onload = (event) => {
        this.imageSrc = event.target.result.image;
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
      this.phoneFormat = this.profile.result?.phone.replace(
        /(\d{3})(\d{3})(\d{4})/,
        "$1 $2 $3"
      );
    },
  },
};
</script>

<style>
</style>
