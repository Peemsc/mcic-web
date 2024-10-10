<template>
  <div class="setting-content">
    <h2 class="fs-25 fw-semibold mb-1">คำสั่งซื้อทั้งหมด</h2>
    <h4 class="fs-18 fw-medium grey-800">ใบส่งของ/ใบแจ้งหนี้/ใบกำกับภาษี</h4>

    <ul class="nav nav-tabs nav-line-tabs has-scroll">
      <li>
        <a class="active" data-bs-toggle="tab" href="#tab1">
          กำลังเตรียมจัดส่ง
          <span class="line-animate"></span>
        </a>
      </li>

      <li>
        <a data-bs-toggle="tab" href="#tab2">
          อยู่ระหว่างขนส่ง
          <span class="line-animate"></span>
        </a>
      </li>

      <li>
        <a data-bs-toggle="tab" href="#tab3">
          รอตรวจสอบ
          <span class="line-animate"></span>
        </a>
      </li>

      <li>
        <a data-bs-toggle="tab" href="#tab4">
          สำเร็จ
          <span class="line-animate"></span>
        </a>
      </li>

      <li>
        <a data-bs-toggle="tab" href="#tab5">
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
                <th class="text-start">#</th>
                <th>ลูกค้า</th>
                <th>ราคา</th>
                <th>สถานะ</th>
                <th>ผู้สั่งจอง</th>
                <th>Update</th>
              </tr>
            </thead>
            <tbody>
              <tr
                data-bs-toggle="offcanvas"
                data-bs-target="#orderPrepareToShip"
              >
                <td class="text-start fw-semibold">DN2020020123</td>
                <td>Jenny Wilson</td>
                <td class="fw-normal">฿ 11,295.50</td>
                <td><span class="badge blue fs-14">รอจัดส่ง</span></td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565</td>
              </tr>
              <tr
                data-bs-toggle="offcanvas"
                data-bs-target="#orderPrepareToShip"
              >
                <td class="text-start fw-semibold">DN2020020124</td>
                <td>Brooklyn Simmons</td>
                <td class="fw-normal">฿ 8,196.00</td>
                <td><span class="badge blue fs-14">รอจัดส่ง</span></td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565</td>
              </tr>
              <tr
                data-bs-toggle="offcanvas"
                data-bs-target="#orderPrepareToShip"
              >
                <td class="text-start fw-semibold">DN2020020125</td>
                <td>Jenny Wilson</td>
                <td class="fw-normal">฿ 8,196.00</td>
                <td><span class="badge blue fs-14">รอจัดส่ง</span></td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565</td>
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
                <th class="text-start">#</th>
                <th>ลูกค้า</th>
                <th>ราคา</th>
                <th>สถานะ</th>
                <th>ผู้สั่งจอง</th>
                <th>Update</th>
              </tr>
            </thead>
            <tbody>
              <tr
                data-bs-toggle="offcanvas"
                data-bs-target="#orderInTransit
                                        "
              >
                <td class="text-start fw-semibold">DN2020020123</td>
                <td>Jenny Wilson</td>
                <td class="fw-normal">฿ 11,295.50</td>
                <td><span class="badge blue fs-14">กำลังจัดส่ง</span></td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565</td>
              </tr>
              <tr data-bs-toggle="offcanvas" data-bs-target="#orderInTransit">
                <td class="text-start fw-semibold">DN2020020124</td>
                <td>Brooklyn Simmons</td>
                <td class="fw-normal">฿ 8,196.00</td>
                <td><span class="badge blue fs-14">กำลังจัดส่ง</span></td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565</td>
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
                <th class="text-start">#</th>
                <th>ลูกค้า</th>
                <th>ราคา</th>
                <th>สถานะ</th>
                <th>ผู้สั่งจอง</th>
                <th>Update</th>
              </tr>
            </thead>
            <tbody>
              <tr
                data-bs-toggle="offcanvas"
                data-bs-target="#orderWaitingForCheck_1

                                        "
              >
                <td class="text-start fw-semibold">DN2020020123</td>
                <td>Jenny Wilson</td>
                <td class="fw-normal">฿ 11,295.50</td>
                <td><span class="badge orange fs-14">ตรวจรับสินค้า</span></td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565</td>
              </tr>
              <tr
                data-bs-toggle="offcanvas"
                data-bs-target="#orderWaitingForCheck_2"
              >
                <td class="text-start fw-semibold">DN2020020124</td>
                <td>Brooklyn Simmons</td>
                <td class="fw-normal">฿ 8,196.00</td>
                <td>
                  <span class="badge orange fs-14">กำลังตรวจสอบแจ้งปัญหา</span>
                </td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--tab-pane-->

      <!--==================[End] tab3 ================-->

      <div id="tab4" class="tab-pane">
        <div class="table-wraper-xl">
          <table class="dataTables table table-data table-hover fw-light xl">
            <thead>
              <tr>
                <th class="text-start">#</th>
                <th>ลูกค้า</th>
                <th>ราคา</th>
                <th>สถานะ</th>
                <th>ผู้สั่งจอง</th>
                <th>Update</th>
              </tr>
            </thead>
            <tbody>
              <tr data-bs-toggle="offcanvas" data-bs-target="#orderSuccess">
                <td class="text-start fw-semibold">DN2020020110</td>
                <td>Jenny Wilson</td>
                <td class="fw-normal">฿ 11,295.50</td>
                <td><span class="badge green fs-14">จัดส่งสำเร็จ</span></td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565</td>
              </tr>

              <tr data-bs-toggle="offcanvas" data-bs-target="#orderSuccess">
                <td class="text-start fw-semibold">DN2020020111</td>
                <td>Guy Hawkins</td>
                <td class="fw-normal">฿ 8,196.00</td>
                <td><span class="badge green fs-14">จัดส่งสำเร็จ</span></td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565</td>
              </tr>

              <tr data-bs-toggle="offcanvas" data-bs-target="#orderSuccess">
                <td class="text-start fw-semibold">DN2020020112</td>
                <td>Savannah Nguyen</td>
                <td class="fw-normal">฿ 8,196.00</td>
                <td><span class="badge green fs-14">จัดส่งสำเร็จ</span></td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565</td>
              </tr>

              <tr data-bs-toggle="offcanvas" data-bs-target="#orderSuccess">
                <td class="text-start fw-semibold">DN2020020113</td>
                <td>Jacob Jones</td>
                <td class="fw-normal">฿ 11,295.50</td>
                <td><span class="badge green fs-14">จัดส่งสำเร็จ</span></td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565</td>
              </tr>

              <tr data-bs-toggle="offcanvas" data-bs-target="#orderSuccess">
                <td class="text-start fw-semibold">DN2020020114</td>
                <td>Kristin Watson</td>
                <td class="fw-normal">฿ 11,295.50</td>
                <td><span class="badge green fs-14">จัดส่งสำเร็จ</span></td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--tab-pane-->

      <!--==================[End] tab4 ================-->

      <div id="tab5" class="tab-pane">
        <div class="table-wraper-xl">
          <table class="dataTables table table-data table-hover fw-light xl">
            <thead>
              <tr>
                <th class="text-start">#</th>
                <th>ลูกค้า</th>
                <th>ราคา</th>
                <th>สถานะ</th>
                <th>ผู้สั่งจอง</th>
                <th>Update</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-start fw-semibold">DN2020020110</td>
                <td>Jenny Wilson</td>
                <td class="fw-normal">฿ 11,295.50</td>
                <td>
                  <span class="badge red fs-14">ยกเลิกโดยเจ้าหน้าที่</span>
                </td>
                <td>
                  <span class="badge blue border">คุณ</span>
                </td>
                <td>1/6/2565</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--tab-pane-->

      <!--==================[End] tab5 ================-->
    </div>
    <!--tab-content-->
  </div>
  <!--setting-content-->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="orderPrepareToShip">
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
            3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร 10240
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
            3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร 10240
          </p>
        </div>
      </div>
      <!--card-address-->

      <h5 class="fs-16 fw-semibold mt-4">รายการสินค้า</h5>
      <div class="cart-mini sm">
        <div class="card-photo">
          <div
            class="photo"
            style="
              background-image: url(/assets/img/thumb/photo-240x220--1.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>อออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">฿69.00</div>
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
            style="
              background-image: url(/assets/img/thumb/photo-240x220--2.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>ดีแคช เอ็กซ์พีเรียนซ์ เคราติน คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">฿95.00</div>
          </div>

          <div class="d-flex justify-content-between pt-1">
            <span>จำนวน 20 แพ็ค/6</span>
            <span>฿ 1,900.00</span>
          </div>
        </div>
      </div>
      <!--cart-mini-->

      <div class="cart-mini sm">
        <div class="card-photo">
          <div
            class="photo"
            style="
              background-image: url(/assets/img/thumb/photo-240x220--3.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">฿49.00</div>
          </div>

          <div class="d-flex justify-content-between pt-1">
            <span>จำนวน 50 แพ็ค/6</span>
            <span>฿ 2,450.00</span>
          </div>
        </div>
      </div>
      <!--cart-mini-->

      <h5 class="fs-16 fw-semibold mt-4">สรุปที่ต้องชำระ</h5>
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
      <div class="d-block p-4"></div>
    </div>
    <!--offcanvas-body-->
  </div>
  <!--offcanvas-->

  <div class="offcanvas offcanvas-end" tabindex="-1" id="orderInTransit">
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
      <div class="card-delivery">
        <h5>สถานะการจัดส่ง</h5>
        <p>คำสั่งซื้อสำเร็จ</p>

        <ul class="status">
          <li>
            กำลังจัดส่ง<br />
            <small>8/6/2565 08:45</small>
          </li>
        </ul>
      </div>
      <div class="card-address md">
        <div class="card-icons">
          <span class="icons icon-home"></span>
        </div>
        <div class="card-body">
          <h5>ที่อยู่ในการจัดส่ง</h5>
          <p class="m-0">
            Beauty Lift, 098 787 6543<br />
            3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร 10240
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
            3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร 10240
          </p>
        </div>
      </div>
      <!--card-address-->

      <h5 class="fs-16 fw-semibold mt-4">รายการสินค้า</h5>
      <div class="cart-mini sm">
        <div class="card-photo">
          <div
            class="photo"
            style="
              background-image: url(/assets/img/thumb/photo-240x220--1.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>อออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">
              ฿69.00 <span class="discount">฿138</span>
            </div>
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
            style="
              background-image: url(/assets/img/thumb/photo-240x220--2.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>ดีแคช เอ็กซ์พีเรียนซ์ เคราติน คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">฿95.00</div>
          </div>

          <div class="d-flex justify-content-between pt-1">
            <span>จำนวน 50 แพ็ค/6</span>
            <span>฿ 4,750.00</span>
          </div>
        </div>
      </div>
      <!--cart-mini-->

      <div class="cart-mini sm">
        <div class="card-photo">
          <div
            class="photo"
            style="
              background-image: url(/assets/img/thumb/photo-240x220--3.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">
              ฿49.00 <span class="discount">฿138</span>
            </div>
          </div>

          <div class="d-flex justify-content-between pt-1">
            <span>จำนวน 50 แพ็ค/6</span>
            <span>฿ 2,450.00</span>
          </div>
        </div>
      </div>
      <!--cart-mini-->

      <h5 class="fs-16 fw-semibold mt-4">คูปองสินค้า</h5>
      <div class="cart-mini sm">
        <div class="card-photo">
          <div
            class="photo"
            style="
              background-image: url(/assets/img/thumb/photo-240x220--1.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>อออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">฿69.00</div>
          </div>

          <div class="d-flex pt-1">
            <span>จำนวน 20 แพ็ค/12</span>
          </div>
        </div>
      </div>
      <!--cart-mini-->

      <div class="cart-mini sm">
        <div class="card-photo">
          <div
            class="photo"
            style="
              background-image: url(/assets/img/thumb/photo-240x220--2.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>ดีแคช เอ็กซ์พีเรียนซ์ เคราติน คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">฿95.00</div>
          </div>

          <div class="d-flex pt-1">
            <span>จำนวน 20 แพ็ค/6</span>
          </div>
        </div>
      </div>
      <!--cart-mini-->

      <h5 class="fs-16 fw-semibold mt-4">สรุปที่ต้องชำระ</h5>
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

  <div
    class="offcanvas offcanvas-end"
    tabindex="-1"
    id="orderWaitingForCheck_1"
  >
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
        <strong class="fs-16">กรุณาตรวจและยอมรับสินค้าทั้งหมด</strong><br />
        หากคุณไม่กดยอมรับสินค้าภายใน 3 วันระบบจะยืนยันอัตโนมัติ
      </div>
      <div class="card-delivery">
        <h5>สถานะการจัดส่ง</h5>
        <p>คำสั่งซื้อสำเร็จ</p>

        <ul class="status">
          <li>
            กำลังจัดส่ง<br />
            <small>8/6/2565 08:45</small>
          </li>
        </ul>
      </div>
      <div class="card-address md">
        <div class="card-icons">
          <span class="icons icon-home"></span>
        </div>
        <div class="card-body">
          <h5>ที่อยู่ในการจัดส่ง</h5>
          <p class="m-0">
            Beauty Lift, 098 787 6543<br />
            3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร 10240
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
            3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร 10240
          </p>
        </div>
      </div>
      <!--card-address-->

      <h5 class="fs-16 fw-semibold mt-4">รายการสินค้า</h5>
      <div class="cart-mini sm">
        <div class="card-photo">
          <div
            class="photo"
            style="
              background-image: url(/assets/img/thumb/photo-240x220--1.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>อออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">
              ฿69.00 <span class="discount">฿138</span>
            </div>
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
            style="
              background-image: url(/assets/img/thumb/photo-240x220--2.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>ดีแคช เอ็กซ์พีเรียนซ์ เคราติน คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">฿95.00</div>
          </div>

          <div class="d-flex justify-content-between pt-1">
            <span>จำนวน 50 แพ็ค/6</span>
            <span>฿ 4,750.00</span>
          </div>
        </div>
      </div>
      <!--cart-mini-->

      <div class="cart-mini sm">
        <div class="card-photo">
          <div
            class="photo"
            style="
              background-image: url(/assets/img/thumb/photo-240x220--3.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">
              ฿49.00 <span class="discount">฿138</span>
            </div>
          </div>

          <div class="d-flex justify-content-between pt-1">
            <span>จำนวน 50 แพ็ค/6</span>
            <span>฿ 2,450.00</span>
          </div>
        </div>
      </div>
      <!--cart-mini-->

      <h5 class="fs-16 fw-semibold mt-4">คูปองสินค้า</h5>
      <div class="cart-mini sm">
        <div class="card-photo">
          <div
            class="photo"
            style="
              background-image: url(/assets/img/thumb/photo-240x220--1.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>อออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">฿69.00</div>
          </div>

          <div class="d-flex pt-1">
            <span>จำนวน 20 แพ็ค/12</span>
          </div>
        </div>
      </div>
      <!--cart-mini-->

      <div class="cart-mini sm">
        <div class="card-photo">
          <div
            class="photo"
            style="
              background-image: url(/assets/img/thumb/photo-240x220--2.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>ดีแคช เอ็กซ์พีเรียนซ์ เคราติน คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">฿95.00</div>
          </div>

          <div class="d-flex pt-1">
            <span>จำนวน 20 แพ็ค/6</span>
          </div>
        </div>
      </div>
      <!--cart-mini-->

      <h5 class="fs-16 fw-semibold mt-4">สรุปที่ต้องชำระ</h5>
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

      <div class="buttons d-flex gap-2 gap-md-3">
        <a class="btn btn-outline btn-lg w-135" href="claim.html">แจ้งปัญหา</a>
        <button
          class="btn btn-lg w-100"
          type="button"
          data-bs-target="#confirmModal"
          data-bs-toggle="modal"
        >
          ฉันตรวจสอบและยอมรับ
        </button>
      </div>
      <div class="d-block p-4"></div>
    </div>
    <!--offcanvas-body-->
  </div>
  <!--offcanvas-->

  <div
    class="offcanvas offcanvas-end"
    tabindex="-1"
    id="orderWaitingForCheck_2"
  >
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
      <a class="alert alert-red danger text-start" href="claim-detail.html">
        <strong class="fs-16">รายละเอียดแจ้งปัญหา</strong>
        <span class="arrow ms-auto">
          <img
            class="svg-js white"
            src="/assets/img/icons/icon-arrow-tail.svg"
            alt=""
          />
        </span>
      </a>

      <div class="card-delivery">
        <h5>สถานะการจัดส่ง</h5>
        <p>คำสั่งซื้อสำเร็จ</p>

        <ul class="status">
          <li>
            จัดส่งสำเร็จ<br />
            <small>8/6/2565 08:45</small>
          </li>
        </ul>
      </div>
      <div class="card-address md">
        <div class="card-icons">
          <span class="icons icon-home"></span>
        </div>
        <div class="card-body">
          <h5>ที่อยู่ในการจัดส่ง</h5>
          <p class="m-0">
            Beauty Lift, 098 787 6543<br />
            3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร 10240
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
            3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร 10240
          </p>
        </div>
      </div>
      <!--card-address-->

      <h5 class="fs-16 fw-semibold mt-4">รายการสินค้า</h5>
      <div class="cart-mini sm">
        <div class="card-photo">
          <div
            class="photo"
            style="
              background-image: url(/assets/img/thumb/photo-240x220--1.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>อออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">
              ฿69.00 <span class="discount">฿138</span>
            </div>
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
            style="
              background-image: url(/assets/img/thumb/photo-240x220--2.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>ดีแคช เอ็กซ์พีเรียนซ์ เคราติน คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">฿95.00</div>
          </div>

          <div class="d-flex justify-content-between pt-1">
            <span>จำนวน 50 แพ็ค/6</span>
            <span>฿ 4,750.00</span>
          </div>
        </div>
      </div>
      <!--cart-mini-->

      <div class="cart-mini sm">
        <div class="card-photo">
          <div
            class="photo"
            style="
              background-image: url(/assets/img/thumb/photo-240x220--3.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">
              ฿49.00 <span class="discount">฿138</span>
            </div>
          </div>

          <div class="d-flex justify-content-between pt-1">
            <span>จำนวน 50 แพ็ค/6</span>
            <span>฿ 2,450.00</span>
          </div>
        </div>
      </div>
      <!--cart-mini-->

      <h5 class="fs-16 fw-semibold mt-4">สรุปที่ต้องชำระ</h5>
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
            <td>8/6/2565 09:00</td>
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

  <div class="offcanvas offcanvas-end" tabindex="-1" id="orderSuccess">
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
      <div class="card-delivery">
        <h5>สถานะการจัดส่ง</h5>
        <p>คำสั่งซื้อสำเร็จ</p>

        <ul class="status">
          <li>
            จัดส่งสำเร็จ<br />
            <small>8/6/2565 08:45</small>
          </li>
        </ul>
      </div>
      <div class="card-address md">
        <div class="card-icons">
          <span class="icons icon-home"></span>
        </div>
        <div class="card-body">
          <h5>ที่อยู่ในการจัดส่ง</h5>
          <p class="m-0">
            Beauty Lift, 098 787 6543<br />
            3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร 10240
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
            3/68 ซ.25 ถ.นวมินทร์ แขวงนวลจันทร์ เขตบึงกุ่ม กรุงเทพมหานคร 10240
          </p>
        </div>
      </div>
      <!--card-address-->

      <h5 class="fs-16 fw-semibold mt-4">รายการสินค้า</h5>
      <div class="cart-mini sm">
        <div class="card-photo">
          <div
            class="photo"
            style="
              background-image: url(/assets/img/thumb/photo-240x220--1.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>อออพติมัส ออร์แกนิค เฟรช คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">
              ฿69.00 <span class="discount">฿138</span>
            </div>
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
            style="
              background-image: url(/assets/img/thumb/photo-240x220--2.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>ดีแคช เอ็กซ์พีเรียนซ์ เคราติน คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">฿95.00</div>
          </div>

          <div class="d-flex justify-content-between pt-1">
            <span>จำนวน 50 แพ็ค/6</span>
            <span>฿ 4,750.00</span>
          </div>
        </div>
      </div>
      <!--cart-mini-->

      <div class="cart-mini sm">
        <div class="card-photo">
          <div
            class="photo"
            style="
              background-image: url(/assets/img/thumb/photo-240x220--3.jpg);
            "
          ></div>
        </div>

        <div class="card-body">
          <h5>ดีแคช มาสเตอร์ แมส คัลเลอร์ ครีม - NATURAL</h5>
          <div class="d-flex gap-1 mt-1">
            <div class="price me-2">
              ฿49.00 <span class="discount">฿138</span>
            </div>
          </div>

          <div class="d-flex justify-content-between pt-1">
            <span>จำนวน 50 แพ็ค/6</span>
            <span>฿ 2,450.00</span>
          </div>
        </div>
      </div>
      <!--cart-mini-->

      <h5 class="fs-16 fw-semibold mt-4">สรุปที่ต้องชำระ</h5>
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
            <td>3/6/2565 08:45</td>
          </tr>
          <tr>
            <th>เวลาส่งสินค้า</th>
            <td>8/6/2565 09:00</td>
          </tr>
          <tr>
            <th>เวลาที่คำสั่งซื้อสำเร็จ</th>
            <td>10/6/2565 12:36</td>
          </tr>
        </tbody>
      </table>

      <div class="buttons fill">
        <button class="btn btn-lg" type="button" data-bs-dismiss="offcanvas">
          ซื้ออีกครั้ง
        </button>
      </div>
      <div class="d-block p-4"></div>
    </div>
    <!--offcanvas-body-->
  </div>
  <!--offcanvas-->
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