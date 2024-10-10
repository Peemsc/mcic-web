<template>
  <div class="setting-content">
    <h2 class="fs-25">ใบจองสินค้า</h2>

    <ul class="nav nav-tabs nav-line-tabs">
      <li>
        <a class="active" data-bs-toggle="tab" href="#tab1">
          กำลังดำเนินการ
          <span class="line-animate"></span>
        </a>
      </li>

      <li>
        <a data-bs-toggle="tab" href="#tab2">
          Hold
          <span class="line-animate"></span>
        </a>
      </li>

      <li>
        <a data-bs-toggle="tab" href="#tab3">
          ยกเลิก
          <span class="line-animate"></span>
        </a>
      </li>
    </ul>

    <div class="tab-content">
      <div id="tab1" class="tab-pane active">
        <div class="table-wraper-xl">
          <table class="dataTables table table-data table-hover fw-light xl">
            <thead>
              <tr>
                <th class="text-start">เลขที่ใบจอง</th>
                <th>สินค้า</th>
                <th>ราคา</th>
                <th>สถานะคำสั่งซื้อ</th>
                <th>สถานะการจัดส่ง</th>
                <th>ผู้สั่งจอง</th>
                <th>เวลาสั่งซื้อ</th>
              </tr>
            </thead>
            <tbody>
              <tr data-bs-toggle="offcanvas" data-bs-target="#orderInProgress">
                <td class="text-start fw-semibold">18851144281058</td>
                <td>3 รายการ</td>
                <td>฿ 11,295.50</td>
                <td><span class="badge blue fs-14">รอดำเนินการ</span></td>
                <td><span class="badge blue fs-14">รอดำเนินการ</span></td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565 15:00</td>
              </tr>

              <tr data-bs-toggle="offcanvas" data-bs-target="#orderInProgress">
                <td class="text-start fw-semibold">1885114428000</td>
                <td>2 รายการ</td>
                <td>฿ 11,295.50</td>
                <td><span class="badge blue fs-14">รอดำเนินการ</span></td>
                <td><span class="badge blue fs-14">รอดำเนินการ</span></td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565 15:00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--tab-pane-->

      <!--==================[End] tab1 ================-->

      <div id="tab2" class="tab-pane">
        <div class="table-wraper-xl">
          <table class="dataTables table table-data table-hover fw-light xl">
            <thead>
              <tr>
                <th class="text-start">เลขที่ใบจอง</th>
                <th>สินค้า</th>
                <th>ราคา</th>
                <th>สถานะคำสั่งซื้อ</th>
                <th>สถานะการจัดส่ง</th>
                <th>ผู้สั่งจอง</th>
                <th>เวลาสั่งซื้อ</th>
              </tr>
            </thead>
            <tbody>
              <tr data-bs-toggle="offcanvas" data-bs-target="#orderHold">
                <td class="text-start fw-semibold">18851144281058</td>
                <td>3 รายการ</td>
                <td>฿ 11,295.50</td>
                <td><span class="badge orange fs-14">Hold</span></td>
                <td><span class="badge orange fs-14">Hold</span></td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565 15:00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--tab-pane-->

      <!--==================[End] tab2 ================-->

      <div id="tab3" class="tab-pane">
        <div class="table-wraper-xl">
          <table class="dataTables table table-data table-hover fw-light xl">
            <thead>
              <tr>
                <th class="text-start">เลขที่ใบจอง</th>
                <th>สินค้า</th>
                <th>ราคา</th>
                <th>สถานะคำสั่งซื้อ</th>
                <th>สถานะการจัดส่ง</th>
                <th>ผู้สั่งจอง</th>
                <th>เวลาสั่งซื้อ</th>
              </tr>
            </thead>
            <tbody>
              <tr data-bs-toggle="offcanvas" data-bs-target="#orderCancel">
                <td class="text-start fw-semibold">18851144281058</td>
                <td>3 รายการ</td>
                <td>฿ 11,295.50</td>
                <td><span class="badge red fs-14">ยกเลิก</span></td>
                <td><span class="badge red fs-14">ยกเลิก</span></td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565 15:00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--tab-pane-->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="orderInProgress">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title">รายละเอียด</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
          ></button>
        </div>
        <div class="offcanvas-body">
          <div class="card-address md">
            <div class="card-icons">
              <span class="icons icon-home"></span>
            </div>
            <div class="card-body">
              <h5>ที่อยู่ในการจัดส่ง</h5>
              <p class="m-0">
                Beauty Lift, 098 787 6543<br />
                3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร
                10240
              </p>
            </div>
          </div>
          <!--card-address-->

          <div class="card-address md">
            <div class="card-icons">
              <span class="icons icon-receipt"></span>
            </div>
            <div class="card-body">
              <h5>ที่อยู่ใบกำกับภาษี</h5>
              <p class="m-0">
                Beauty Lift, 098 787 6543<br />
                เลขที่ผู้เสียภาษี : 1234566585555<br />
                3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร
                10240
              </p>
            </div>
          </div>
          <!--card-address-->

          <h5 class="fs-16 mt-4">รายการสินค้า</h5>
          <div class="cart-mini sm">
            <div class="card-photo">
              <div
                class="photo"
                style="background-image: url(../img/thumb/photo-240x220--1.jpg)"
              ></div>
            </div>

            <div class="card-body">
              <h5>อออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - NATURAL</h5>
              <div class="d-flex gap-1 mt-1">
                <div class="price me-2">
                  ฿69.00 <span class="discount">฿138</span>
                </div>

                <span class="badge promotion">โปรโมชั่น</span>
                <span class="badge instock">มีสินค้า</span>
                <span class="badge waiting">รอสินค้า</span>
              </div>

              <div class="d-flex justify-content-between pt-1">
                <span>จำนวน 50 แพ็ค/12</span>
                <span>฿ 3,450.00</span>
              </div>
            </div>
          </div>
          <!--cart-mini-->

          <div class="cart-mini sm">
            <div class="card-photo">
              <div
                class="photo"
                style="background-image: url(../img/thumb/photo-240x220--2.jpg)"
              ></div>
            </div>

            <div class="card-body">
              <h5>ดีแคช เอ็กซ์พีเรียนซ์ เคราติน คัลเลอร์ ครีม - NATURAL</h5>
              <div class="d-flex gap-1 mt-1">
                <div class="price me-2">฿95.00</div>

                <span class="badge waiting">รอสินค้า</span>
              </div>

              <div class="d-flex justify-content-between pt-1">
                <span>จำนวน 50 แพ็ค/12</span>
                <span>฿ 4,750.00</span>
              </div>

              <div class="d-flex justify-content-between">
                <span class="fw-medium green fs-12">พร้อมจอง 20</span>
                <span class="grey-800 fs-12">฿ 1,900.00</span>
              </div>
            </div>
          </div>
          <!--cart-mini-->

          <div class="cart-mini sm">
            <div class="card-photo">
              <div
                class="photo"
                style="background-image: url(../img/thumb/photo-240x220--3.jpg)"
              ></div>
            </div>

            <div class="card-body">
              <h5>ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL</h5>
              <div class="d-flex gap-1 mt-1">
                <div class="price me-2">
                  ฿49.00 <span class="discount">฿138</span>
                </div>

                <span class="badge instock">มีสินค้า</span>
              </div>

              <div class="d-flex justify-content-between pt-1">
                <span>จำนวน 50 แพ็ค/6</span>
                <span>฿ 2,450.00</span>
              </div>
            </div>
          </div>
          <!--cart-mini-->

          <h5 class="fs-16 mt-4">คูปองสินค้า</h5>
          <div class="cart-mini sm">
            <div class="card-photo">
              <div
                class="photo"
                style="background-image: url(../img/thumb/photo-240x220--1.jpg)"
              ></div>
            </div>

            <div class="card-body">
              <h5>อออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - NATURAL</h5>
              <div class="d-flex gap-1 mt-1">
                <div class="price me-2">฿69.00</div>
              </div>

              <div class="d-flex pt-1">
                <span>จำนวน 50 แพ็ค/12</span>
              </div>
            </div>
          </div>
          <!--cart-mini-->

          <div class="cart-mini sm">
            <div class="card-photo">
              <div
                class="photo"
                style="background-image: url(../img/thumb/photo-240x220--2.jpg)"
              ></div>
            </div>

            <div class="card-body">
              <h5>ดีแคช เอ็กซ์พีเรียนซ์ เคราติน คัลเลอร์ ครีม - NATURAL</h5>
              <div class="d-flex gap-1 mt-1">
                <div class="price me-2">฿95.00</div>
              </div>

              <div class="d-flex pt-1">
                <span>จำนวน 50 แพ็ค/6</span>
              </div>
            </div>
          </div>
          <!--cart-mini-->

          <h5 class="fs-16 mt-4">สรุปที่ต้องชำระ</h5>

          <table class="table-summary mt-2 fs-14">
            <tbody>
              <tr class="black">
                <th>ราคาสินค้าทั้งหมด</th>
                <td>฿ 10,650.00</td>
              </tr>
              <tr>
                <th>รวมราคาคูปองทั้งหมด</th>
                <td>฿ 3,280.00</td>
              </tr>
              <tr>
                <th>ส่วนลดคูปองสินค้า</th>
                <td class="red">- ฿ 3,280.00</td>
              </tr>
              <tr>
                <th>ค่าจัดส่ง</th>
                <td>฿ 100.00</td>
              </tr>
              <tr>
                <th>ภาษีมูลค่าเพิ่ม</th>
                <td>฿ 745.50</td>
              </tr>

              <tr class="total">
                <th>รวมทั้งสิ้น</th>
                <td>฿ 11,495.50</td>
              </tr>
            </tbody>
          </table>

          <hr />

          <table class="table-summary mt-2 fs-14">
            <tbody>
              <tr>
                <th>เวลาสั่งซื้อ</th>
                <td>1/6/2565 15:00</td>
              </tr>
              <tr>
                <th>เวลาชำระเงิน</th>
                <td>-</td>
              </tr>
              <tr>
                <th>เวลาส่งสินค้า</th>
                <td>-</td>
              </tr>
              <tr>
                <th>เวลาที่คำสั่งซื้อสำเร็จ</th>
                <td>-</td>
              </tr>
            </tbody>
          </table>

          <div class="buttons fill">
            <button
              class="btn btn-outline red btn-xl"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#cancelOrder"
            >
              ยกเลิกใบจองนี้
            </button>
          </div>
        </div>
        <!--offcanvas-body-->
      </div>
      <!--offcanvas-->

      <div class="offcanvas offcanvas-end" tabindex="-1" id="cancelOrder">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title">ยกเลิกใบสั่งซื้อนี้</h5>
          <button
            type="button"
            class="btn-close back"
            data-bs-toggle="offcanvas"
            data-bs-target="#orderInProgress"
          ></button>
        </div>
        <div class="offcanvas-body">
          <h5 class="fs-20 mb-2">สินค้าที่สามารถยกเลิกได้</h5>
          <div class="cart-mini sm">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="x1"
              />
              <label class="form-check-label" for="x1"> เลือกทั้งหมด </label>
            </div>
          </div>
          <div class="cart-mini sm">
            <div class="card-check">
              <input class="form-check-input" type="checkbox" value="" />
            </div>
            <div class="card-photo">
              <div
                class="photo"
                style="background-image: url(../img/thumb/photo-240x220--1.jpg)"
              ></div>
            </div>

            <div class="card-body">
              <h5>อออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - NATURAL</h5>
              <div class="d-flex gap-1 mt-1">
                <div class="price me-2">
                  ฿69.00 <span class="discount">฿138</span>
                </div>

                <span class="badge waiting">รอสินค้า</span>
              </div>

              <div class="d-flex justify-content-between pt-1">
                <span>จำนวน 50 แพ็ค/12</span>
                <span>฿ 3,450.00</span>
              </div>
            </div>
          </div>
          <!--cart-mini-->

          <div class="cart-mini sm">
            <div class="card-check">
              <input class="form-check-input" type="checkbox" value="" />
            </div>
            <div class="card-photo">
              <div
                class="photo"
                style="background-image: url(../img/thumb/photo-240x220--2.jpg)"
              ></div>
            </div>

            <div class="card-body">
              <h5>ดีแคช เอ็กซ์พีเรียนซ์ เคราติน คัลเลอร์ ครีม - NATURAL</h5>
              <div class="d-flex gap-1 mt-1">
                <div class="price me-2">฿95.00</div>

                <span class="badge instock">มีสินค้า</span>
              </div>

              <div class="d-flex justify-content-between pt-1">
                <span>จำนวน 50 แพ็ค/12</span>
                <span>฿ 4,750.00</span>
              </div>

              <div class="d-flex justify-content-between">
                <span class="fw-medium green fs-12">พร้อมจอง 20</span>
                <span class="grey-800 fs-12">฿ 1,900.00</span>
              </div>
            </div>
          </div>
          <!--cart-mini-->

          <h5 class="fs-16 mt-4 mb-2">สรุป</h5>

          <table class="table-summary mt-2 fs-14">
            <tbody>
              <tr>
                <th>ราคาสินค้าทั้งหมด</th>
                <td>฿ 2,850.00</td>
              </tr>
              <tr>
                <th>ค่าจัดส่ง</th>
                <td>฿ 50.00</td>
              </tr>
              <tr>
                <th>ภาษีมูลค่าเพิ่ม</th>
                <td>฿ 199.50</td>
              </tr>
              <tr class="total">
                <th class="fs-16">รวมทั้งสิ้น</th>
                <td class="fs-16">฿ 3,099.50</td>
              </tr>
            </tbody>
          </table>

          <div class="buttons fill">
            <button
              class="btn btn-lg"
              type="button"
              data-bs-dismiss="offcanvas"
            >
              ยืนยันการยกเลิก
            </button>
          </div>
        </div>
        <!--offcanvas-body-->
      </div>
      <!--offcanvas-->

      <div class="offcanvas offcanvas-end" tabindex="-1" id="orderHold">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title">รายละเอียด</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
          ></button>
        </div>
        <div class="offcanvas-body">
          <div class="alert alert-blue">
            รอเจ้าหน้าที่ยกเลิก Hold หรือ ยกเลิกใบจอง
          </div>

          <div class="card-address md">
            <div class="card-icons">
              <span class="icons icon-home"></span>
            </div>
            <div class="card-body">
              <h5>ที่อยู่ในการจัดส่ง</h5>
              <p class="m-0">
                Beauty Lift, 098 787 6543<br />
                3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร
                10240
              </p>
            </div>
          </div>
          <!--card-address-->

          <div class="card-address md">
            <div class="card-icons">
              <span class="icons icon-receipt"></span>
            </div>
            <div class="card-body">
              <h5>ที่อยู่ใบกำกับภาษี</h5>
              <p class="m-0">
                Beauty Lift, 098 787 6543<br />
                เลขที่ผู้เสียภาษี : 1234566585555<br />
                3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร
                10240
              </p>
            </div>
          </div>
          <!--card-address-->

          <h5 class="fs-16 mt-4">รายการสินค้า</h5>
          <div class="cart-mini sm">
            <div class="card-photo">
              <div
                class="photo"
                style="background-image: url(../img/thumb/photo-240x220--1.jpg)"
              ></div>
            </div>

            <div class="card-body">
              <h5>อออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - NATURAL</h5>
              <div class="d-flex gap-1 mt-1">
                <div class="price me-2">
                  ฿69.00 <span class="discount">฿138</span>
                </div>

                <span class="badge promotion">โปรโมชั่น</span>
                <span class="badge instock">มีสินค้า</span>
                <span class="badge waiting">รอสินค้า</span>
              </div>

              <div class="d-flex justify-content-between pt-1">
                <span>จำนวน 50 แพ็ค/12</span>
                <span>฿ 3,450.00</span>
              </div>
            </div>
          </div>
          <!--cart-mini-->

          <div class="cart-mini sm">
            <div class="card-photo">
              <div
                class="photo"
                style="background-image: url(../img/thumb/photo-240x220--2.jpg)"
              ></div>
            </div>

            <div class="card-body">
              <h5>ดีแคช เอ็กซ์พีเรียนซ์ เคราติน คัลเลอร์ ครีม - NATURAL</h5>
              <div class="d-flex gap-1 mt-1">
                <div class="price me-2">฿95.00</div>

                <span class="badge waiting">รอสินค้า</span>
              </div>

              <div class="d-flex justify-content-between pt-1">
                <span>จำนวน 50 แพ็ค/12</span>
                <span>฿ 4,750.00</span>
              </div>

              <div class="d-flex justify-content-between">
                <span class="fw-medium green fs-12">พร้อมจอง 20</span>
                <span class="grey-800 fs-12">฿ 1,900.00</span>
              </div>
            </div>
          </div>
          <!--cart-mini-->

          <div class="cart-mini sm">
            <div class="card-photo">
              <div
                class="photo"
                style="background-image: url(../img/thumb/photo-240x220--3.jpg)"
              ></div>
            </div>

            <div class="card-body">
              <h5>ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL</h5>
              <div class="d-flex gap-1 mt-1">
                <div class="price me-2">
                  ฿49.00 <span class="discount">฿138</span>
                </div>

                <span class="badge instock">มีสินค้า</span>
              </div>

              <div class="d-flex justify-content-between pt-1">
                <span>จำนวน 50 แพ็ค/6</span>
                <span>฿ 2,450.00</span>
              </div>
            </div>
          </div>
          <!--cart-mini-->

          <h5 class="fs-16 mt-4">คูปองสินค้า</h5>
          <div class="cart-mini sm">
            <div class="card-photo">
              <div
                class="photo"
                style="background-image: url(../img/thumb/photo-240x220--1.jpg)"
              ></div>
            </div>

            <div class="card-body">
              <h5>อออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - NATURAL</h5>
              <div class="d-flex gap-1 mt-1">
                <div class="price me-2">฿69.00</div>
              </div>

              <div class="d-flex pt-1">
                <span>จำนวน 50 แพ็ค/12</span>
              </div>
            </div>
          </div>
          <!--cart-mini-->

          <div class="cart-mini sm">
            <div class="card-photo">
              <div
                class="photo"
                style="background-image: url(../img/thumb/photo-240x220--2.jpg)"
              ></div>
            </div>

            <div class="card-body">
              <h5>ดีแคช เอ็กซ์พีเรียนซ์ เคราติน คัลเลอร์ ครีม - NATURAL</h5>
              <div class="d-flex gap-1 mt-1">
                <div class="price me-2">฿95.00</div>
              </div>

              <div class="d-flex pt-1">
                <span>จำนวน 50 แพ็ค/6</span>
              </div>
            </div>
          </div>
          <!--cart-mini-->

          <h5 class="fs-16 mt-4">สรุปที่ต้องชำระ</h5>

          <table class="table-summary mt-2 fs-14">
            <tbody>
              <tr class="black">
                <th>ราคาสินค้าทั้งหมด</th>
                <td>฿ 10,650.00</td>
              </tr>
              <tr>
                <th>รวมราคาคูปองทั้งหมด</th>
                <td>฿ 3,280.00</td>
              </tr>
              <tr>
                <th>ส่วนลดคูปองสินค้า</th>
                <td class="red">- ฿ 3,280.00</td>
              </tr>
              <tr>
                <th>ค่าจัดส่ง</th>
                <td>฿ 100.00</td>
              </tr>
              <tr>
                <th>ภาษีมูลค่าเพิ่ม</th>
                <td>฿ 745.50</td>
              </tr>

              <tr class="total">
                <th>รวมทั้งสิ้น</th>
                <td>฿ 11,495.50</td>
              </tr>
            </tbody>
          </table>

          <hr />

          <table class="table-summary mt-2 fs-14">
            <tbody>
              <tr>
                <th>เวลาสั่งซื้อ</th>
                <td>1/6/2565 15:00</td>
              </tr>
              <tr>
                <th>เวลาชำระเงิน</th>
                <td>-</td>
              </tr>
              <tr>
                <th>เวลาส่งสินค้า</th>
                <td>-</td>
              </tr>
              <tr>
                <th>เวลาที่คำสั่งซื้อสำเร็จ</th>
                <td>-</td>
              </tr>
            </tbody>
          </table>

          <div class="d-block p-4"></div>
        </div>
        <!--offcanvas-body-->
      </div>
      <!--offcanvas-->

      <div class="offcanvas offcanvas-end" tabindex="-1" id="orderCancel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title">รายละเอียด</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
          ></button>
        </div>
        <div class="offcanvas-body">
          <div class="card-address md">
            <div class="card-icons">
              <span class="icons icon-home"></span>
            </div>
            <div class="card-body">
              <h5>ที่อยู่ในการจัดส่ง</h5>
              <p class="m-0">
                Beauty Lift, 098 787 6543<br />
                3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร
                10240
              </p>
            </div>
          </div>
          <!--card-address-->

          <div class="card-address md">
            <div class="card-icons">
              <span class="icons icon-receipt"></span>
            </div>
            <div class="card-body">
              <h5>ที่อยู่ใบกำกับภาษี</h5>
              <p class="m-0">
                <span class="black fw-normal"
                  >เลขที่ผู้เสียภาษี : 1234566585555</span
                ><br />
                Beauty Lift, 098 787 6543<br />
                3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร
                10240
              </p>
            </div>
          </div>
          <!--card-address-->

          <h5 class="fs-16 mt-4">รายการสินค้า</h5>
          <div class="cart-mini sm">
            <div class="card-photo">
              <div
                class="photo"
                style="background-image: url(../img/thumb/photo-240x220--1.jpg)"
              ></div>
            </div>

            <div class="card-body">
              <h5>อออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - NATURAL</h5>
              <div class="d-flex gap-1 mt-1">
                <div class="price me-2">
                  ฿69.00 <span class="discount">฿138</span>
                </div>

                <span class="badge promotion">โปรโมชั่น</span>
                <span class="badge instock">มีสินค้า</span>
              </div>

              <div class="d-flex justify-content-between pt-1">
                <span>จำนวน 50 แพ็ค/12</span>
                <span>฿ 3,450.00</span>
              </div>
            </div>
          </div>
          <!--cart-mini-->

          <div class="cart-mini sm">
            <div class="card-photo">
              <div
                class="photo"
                style="background-image: url(../img/thumb/photo-240x220--2.jpg)"
              ></div>
            </div>

            <div class="card-body">
              <h5>ดีแคช เอ็กซ์พีเรียนซ์ เคราติน คัลเลอร์ ครีม - NATURAL</h5>
              <div class="d-flex gap-1 mt-1">
                <div class="price me-2">฿95.00</div>

                <span class="badge waiting">รอสินค้า</span>
              </div>

              <div class="d-flex justify-content-between pt-1">
                <span>จำนวน 50 แพ็ค/12</span>
                <span>฿ 4,750.00</span>
              </div>

              <div class="d-flex justify-content-between">
                <span class="fw-medium green fs-12">พร้อมจอง 20</span>
                <span class="grey-800 fs-12">฿ 1,900.00</span>
              </div>
            </div>
          </div>
          <!--cart-mini-->

          <div class="cart-mini sm">
            <div class="card-photo">
              <div
                class="photo"
                style="background-image: url(../img/thumb/photo-240x220--3.jpg)"
              ></div>
            </div>

            <div class="card-body">
              <h5>ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL</h5>
              <div class="d-flex gap-1 mt-1">
                <div class="price me-2">
                  ฿49.00 <span class="discount">฿138</span>
                </div>

                <span class="badge instock">มีสินค้า</span>
              </div>

              <div class="d-flex justify-content-between pt-1">
                <span>จำนวน 50 แพ็ค/6</span>
                <span>฿ 2,450.00</span>
              </div>
            </div>
          </div>
          <!--cart-mini-->

          <h5 class="fs-16 mt-4">สรุปที่ต้องชำระ</h5>
          <table class="table-summary mt-2 fs-14">
            <tbody>
              <tr class="black">
                <th>ราคาสินค้าทั้งหมด</th>
                <td>฿ 10,650.00</td>
              </tr>
              <tr>
                <th>ค่าจัดส่ง</th>
                <td>฿ 100.00</td>
              </tr>
              <tr>
                <th>ภาษีมูลค่าเพิ่ม</th>
                <td>฿ 745.50</td>
              </tr>
              <tr>
                <th>ส่วนลดใบสั่งจอง <span class="red">ชื่อส่วนลด</span></th>
                <td class="red">- ฿ 200.00</td>
              </tr>
              <tr>
                <th>ส่วนลดใบสั่งจอง <span class="red">ชื่อส่วนลด</span></th>
                <td class="red">- ฿ 200.00</td>
              </tr>

              <tr class="total">
                <th>รวมทั้งสิ้น</th>
                <td>฿ 11,295.50</td>
              </tr>
            </tbody>
          </table>

          <hr />

          <table class="table-summary mt-2 fs-14">
            <tbody>
              <tr>
                <th>เวลาสั่งซื้อ</th>
                <td>1/6/2565 15:00</td>
              </tr>
              <tr>
                <th>เวลาชำระเงิน</th>
                <td>-</td>
              </tr>
              <tr>
                <th>เวลาส่งสินค้า</th>
                <td>-</td>
              </tr>
              <tr>
                <th>เวลาที่คำสั่งซื้อสำเร็จ</th>
                <td>-</td>
              </tr>
            </tbody>
          </table>
          <div class="buttons fill">
            <button
              class="btn btn-lg"
              type="button"
              data-bs-dismiss="offcanvas"
            >
              ซื้ออีกครั้ง
            </button>
          </div>
          <div class="d-block p-4"></div>
        </div>
        <!--offcanvas-body-->
      </div>
      <!--offcanvas-->
      <!--==================[End] tab3 ================-->
    </div>
    <!--tab-content-->
  </div>
  <!--setting-content-->
</template>

<script>
export default {
  data() {
    return {};
  },
};
</script>

<style>
</style>