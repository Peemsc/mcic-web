<template>
  <div class="setting-content">
    <div class="back-history">
      <a href="/customers/stock">
        <span class="icons"></span>
        ย้อนกลับ
      </a>
    </div>

    <div class="search-signout ">
      <a href="/customers/stock/update">
        <span class="icons"></span>
        ออกจากระบบค้นหา
      </a>
    </div>

    <div class="dataTables-box stock">
      <a class="btn btn-save ms-auto" href="/customers/stock">บันทึก</a>

      <table class="dataTables table table-data table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>รูปภาพ</th>
            <th>รหัส</th>
            <th>ชื่อสินค้า</th>
            <th></th>
            <th>คงเหลือ</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(items, index) in data" :key="index">
            <td>{{items.num}}</td>
            <td>
              <div class="photo w-48">
                <img
                  class="fit"
                  :src="items.image"
                  alt=""
                />
              </div>
            </td>
            <td>{{items.id}}</td>
            <td class="td-info">{{items.productName}}</td>
            <td><span class="arrow down"></span></td>
            <td>
              <input type="text" class="form-control qty red" value="10" />
            </td>
            <td>
              <div class="dropdown option">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                  <span class="icons"></span>
                </a>
                <div class="dropdown-menu">
                  <a href="#">เพิ่มเข้าตะกร้า</a>
                  <a href="#">สั่งซื้อเพิ่มเลย!</a>
                </div>
              </div>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>
              <div class="photo w-48">
                <img
                  class="fit"
                  src="/assets//img/thumb/photo-240x220--2.jpg"
                  alt=""
                />
              </div>
            </td>
            <td>1885111181058</td>
            <td class="td-info">ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL</td>
            <td><span class="arrow down"></span></td>
            <td>
              <input type="text" class="form-control qty red" value="10" />
            </td>
            <td>
              <div class="dropdown option">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                  <span class="icons"></span>
                </a>
                <div class="dropdown-menu">
                  <a href="#">เพิ่มเข้าตะกร้า</a>
                  <a href="#">สั่งซื้อเพิ่มเลย!</a>
                </div>
              </div>
            </td>
          </tr>

          <tr>
            <td>3</td>
            <td>
              <div class="photo w-48">
                <img
                  class="fit"
                  src="/assets//img/thumb/photo-240x220--3.jpg"
                  alt=""
                />
              </div>
            </td>
            <td>1224411181058</td>
            <td class="td-info">ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL</td>
            <td></td>
            <td>
              <input type="text" class="form-control qty" value="40" />
            </td>
            <td>
              <div class="dropdown option">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                  <span class="icons"></span>
                </a>
                <div class="dropdown-menu">
                  <a href="#">เพิ่มเข้าตะกร้า</a>
                  <a href="#">สั่งซื้อเพิ่มเลย!</a>
                </div>
              </div>
            </td>
          </tr>

          <tr>
            <td>4</td>
            <td>
              <div class="photo w-48">
                <img
                  class="fit"
                  src="/assets//img/thumb/photo-240x220--1.jpg"
                  alt=""
                />
              </div>
            </td>
            <td>1224411193058</td>
            <td class="td-info">ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL</td>
            <td></td>
            <td>
              <input type="text" class="form-control qty" value="40" />
            </td>
            <td>
              <div class="dropdown option">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                  <span class="icons"></span>
                </a>
                <div class="dropdown-menu">
                  <a href="#">เพิ่มเข้าตะกร้า</a>
                  <a href="#">สั่งซื้อเพิ่มเลย!</a>
                </div>
              </div>
            </td>
          </tr>

          <tr>
            <td>5</td>
            <td>
              <div class="photo w-48">
                <img
                  class="fit"
                  src="/assets//img/thumb/photo-240x220--2.jpg"
                  alt=""
                />
              </div>
            </td>
            <td>1224411193058</td>
            <td class="td-info">ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL</td>
            <td></td>
            <td>
              <input type="text" class="form-control qty" value="50" />
            </td>
            <td>
              <div class="dropdown option">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                  <span class="icons"></span>
                </a>
                <div class="dropdown-menu">
                  <a href="#">เพิ่มเข้าตะกร้า</a>
                  <a href="#">สั่งซื้อเพิ่มเลย!</a>
                </div>
              </div>
            </td>
          </tr>

          <tr>
            <td>6</td>
            <td>
              <div class="photo w-48">
                <img
                  class="fit"
                  src="/assets//img/thumb/photo-240x220--3.jpg"
                  alt=""
                />
              </div>
            </td>
            <td>1224424193058</td>
            <td class="td-info">ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL</td>
            <td></td>
            <td>
              <input type="text" class="form-control qty" value="60" />
            </td>
            <td>
              <div class="dropdown option">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                  <span class="icons"></span>
                </a>
                <div class="dropdown-menu">
                  <a href="#">เพิ่มเข้าตะกร้า</a>
                  <a href="#">สั่งซื้อเพิ่มเลย!</a>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--dataTables-box-->
  </div>
  <!--setting-content-->
</template>

<script>
export default {
  data() {
    return {
      data: [
        {
          num: 1,
          image: "/assets/img/thumb/photo-240x220--1.jpg",
          id: "18851144281058",
          productName: "	ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL",
        },
      ],
    };
  },
};
</script>

<style>
</style>