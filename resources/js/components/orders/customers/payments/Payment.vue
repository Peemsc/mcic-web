<template>
  <div class="setting-content">
    <h2 class="fs-25 fw-semibold">ชำระเงิน</h2>

    <ul class="nav nav-tabs nav-line-tabs">
      <li>
        <a class="active" data-bs-toggle="tab" href="#tab1">
          ใบวางบิล
          <span class="line-animate"></span>
        </a>
      </li>

      <li>
        <a data-bs-toggle="tab" href="#tab2">
          แจ้งชำระ
          <span class="line-animate"></span>
        </a>
      </li>

      <li>
        <a data-bs-toggle="tab" href="#tab3">
          ใบเสร็จรับเงิน
          <span class="line-animate"></span>
        </a>
      </li>
    </ul>

    <div class="tab-content">
      <div id="tab1" class="tab-pane active">
        <div class="payment-amount">
          <p>เรียกเก็บ</p>
          <h5>฿ 24,588.00</h5>

          <span class="vr"></span>

          <p>ค้างชำระ</p>
          <h5 class="red">฿ 24,588.00</h5>
        </div>
        <div class="table-wraper-xl">
          <table class="dataTables table table-data table-hover fw-light xl">
            <thead>
              <tr>
                <th>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="a0"
                      name="bill"
                    />
                    <label class="form-check-label" for="a0"></label>
                  </div>
                </th>
                <th>เลขที่ใบวางบิล</th>
                <th>เลขที่ใบแจ้งหนี้</th>
                <th>สินค้า</th>
                <th>ราคา</th>
                <th>วันที่ชำระ</th>
                <th>วันที่</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="a1"
                      name="bill"
                      checked
                    />
                    <label class="form-check-label" for="a1"></label>
                  </div>
                </td>
                <td class="text-start fw-semibold">BL2020020001</td>
                <td>INV2020020121</td>
                <td>3 รายการ</td>
                <td>฿ 8,196.00</td>
                <td class="red">30/6/2565</td>
                <td>04/6/2565</td>
              </tr>

              <tr>
                <td>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="a2"
                      name="bill"
                      checked
                    />
                    <label class="form-check-label" for="a2"></label>
                  </div>
                </td>
                <td class="text-start fw-semibold">BL2020020002</td>
                <td>INV2020020122</td>
                <td>3 รายการ</td>
                <td>฿ 11,495.50</td>
                <td class="red">30/6/2565</td>
                <td>04/6/2565</td>
              </tr>

              <tr>
                <td>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="a3"
                      name="bill"
                    />
                    <label class="form-check-label" for="a3"></label>
                  </div>
                </td>
                <td class="text-start fw-semibold">BL2020020002</td>
                <td>INV2020020123</td>
                <td>3 รายการ</td>
                <td>฿ 11,295.50</td>
                <td class="red">30/6/2565</td>
                <td>04/6/2565</td>
              </tr>
            </tbody>
          </table>

          <div class="buttons d-flex">
            <a href="order-payment-detail.html" class="btn btn-lg w-265"
              >ชำระเงิน</a
            >
          </div>
        </div>
      </div>
      <!--tab-pane-->

      <!--==================[End] tab1 ================-->

      <div id="tab2" class="tab-pane">
        <div class="payment-amount">
          <p>เรียกเก็บ</p>
          <h5>฿ 24,588.00</h5>

          <span class="vr"></span>

          <p>ค้างชำระ</p>
          <h5 class="red">฿ 16,192.00</h5>
        </div>

        <div class="table-wraper-xl">
          <table class="dataTables table table-data table-hover fw-light xl">
            <thead>
              <tr>
                <th class="text-start">เลขที่ชำระเงิน</th>
                <th>ยอดชำระ</th>
                <th>วิธีชำระเงิน</th>
                <th>สถานะการชำระ</th>
                <th>วันที่</th>
              </tr>
            </thead>
            <tbody>
              <tr
                data-bs-toggle="offcanvas"
                data-bs-target="#paymentTransferBill"
              >
                <td class="text-start fw-semibold">2020020000</td>
                <td>฿ 8,396.00</td>
                <td>เช็ค</td>
                <td><span class="badge blue fs-14">แจ้งชำระเงิน</span></td>
                <td>04/6/2565</td>
              </tr>

              <tr
                data-bs-toggle="offcanvas"
                data-bs-target="#paymentWatingBill"
              >
                <td class="text-start fw-semibold">2020020001</td>
                <td>฿ 8,396.00</td>
                <td>PromptPay</td>
                <td><span class="badge orange fs-14">รอตรวจสอบ</span></td>
                <td>04/6/2565</td>
              </tr>

              <tr
                data-bs-toggle="offcanvas"
                data-bs-target="#paymentWatingBill"
              >
                <td class="text-start fw-semibold">2020020002</td>
                <td>฿ 8,396.00</td>
                <td>PromptPay</td>
                <td><span class="badge orange fs-14">รอตรวจสอบ</span></td>
                <td>04/6/2565</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--tab-pane-->

      <!--==================[End] tab2 ================-->

      <div id="tab3" class="tab-pane">
        <div class="payment-amount">
          <p>เรียกเก็บ</p>
          <h5>฿ 24,588.00</h5>

          <span class="vr"></span>

          <p>ค้างชำระ</p>
          <h5 class="red">฿ 16,192.00</h5>
        </div>

        <div class="table-wraper-xl">
          <table class="dataTables table table-data table-hover fw-light xl">
            <thead>
              <tr>
                <th class="text-start">เลขที่ชำระเงิน</th>
                <th>อ้างอิง</th>
                <th>ยอดชำระ</th>
                <th>วิธีชำระเงิน</th>
                <th>สถานะการชำระ</th>
                <th>วันที่สำเร็จ</th>
              </tr>
            </thead>
            <tbody>
              <tr data-bs-toggle="offcanvas" data-bs-target="#receiptBill">
                <td class="text-start fw-semibold">2020020000</td>
                <td>INV2020020123</td>
                <td>฿ 8,396.00</td>
                <td>เช็ค</td>
                <td><span class="badge green fs-14">สำเร็จ</span></td>
                <td>04/6/2565</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--tab-pane-->

      <!--==================[End] tab3 ================-->
    </div>
    <!--tab-content-->
  </div>
  <!--setting-content-->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="paymentTransferBill">
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
      <div class="d-flex align-items-center mt-4">
        <h5 class="fs-16 fw-semibold">ใบวางบิล</h5>

        <a class="fw-semibold link-blue ms-auto" href="#">ดูใบวางบิล</a>
      </div>

      <table class="table-summary mt-2 fs-14">
        <tbody>
          <tr class="black">
            <th>เลขที่เอกสาร</th>
            <td>BL2020020000</td>
          </tr>
          <tr class="black">
            <th>สินค้า</th>
            <td>3 รายการ</td>
          </tr>
          <tr class="black">
            <th>ราคา</th>
            <td class="fw-semibold">฿ 8,396.00</td>
          </tr>

          <tr>
            <th colspan="2">
              <hr class="my-2" />
            </th>
          </tr>

          <tr class="black">
            <th>เลขที่เอกสาร</th>
            <td>BL2020020000</td>
          </tr>
          <tr class="black">
            <th>สินค้า</th>
            <td>3 รายการ</td>
          </tr>
          <tr class="black">
            <th>ราคา</th>
            <td class="fw-semibold">฿ 8,396.00</td>
          </tr>

          <tr>
            <th colspan="2">
              <hr class="my-2" />
            </th>
          </tr>
        </tbody>
      </table>

      <h5 class="fs-16 fw-semibold mt-2">ส่วนลดใบลดหนี้</h5>

      <div class="card-coupon-product mt-3">
        <table>
          <tbody>
            <tr>
              <td>เลขที่เอกสาร</td>
              <td><strong>CN2020020123</strong></td>
            </tr>
            <tr>
              <td>ราคาส่วนลด</td>
              <td><strong>฿ 3,509.60</strong></td>
            </tr>
            <tr>
              <td>วันที่</td>
              <td>04/6/2565</td>
            </tr>
            <tr>
              <td>อ้างอิงใบแจ้งปัญหา</td>
              <td>CLAIM20220605</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h5 class="fs-16 fw-semibold mt-4">สรุปที่ต้องชำระ</h5>
      <table class="table-summary mt-2 fs-14">
        <tbody>
          <tr class="black">
            <th>ราคาสินค้าทั้งหมด</th>
            <td>฿ 16,792.00</td>
          </tr>
          <tr>
            <th>ค่าจัดส่ง</th>
            <td>฿ 100.00</td>
          </tr>
          <tr>
            <th>ภาษีมูลค่าเพิ่ม</th>
            <td>฿ 1,175.44</td>
          </tr>
          <tr>
            <th>ส่วนลดใบสั่งจอง <span class="red">ชื่อส่วนลด</span></th>
            <td class="red">- ฿ 200.00</td>
          </tr>
          <tr>
            <th>ส่วนลดใบสั่งจอง <span class="red">ชื่อส่วนลด</span></th>
            <td class="red">- ฿ 200.00</td>
          </tr>
          <tr>
            <th>ส่วนลดจากระบบ <span class="red">ชื่อส่วนลด</span></th>
            <td class="red">- ฿ 200.00</td>
          </tr>
          <tr>
            <th>ส่วนลดใบลดหนี้</th>
            <td class="red">-฿ 3,509.60</td>
          </tr>
          <tr>
            <th>ส่วนลดโปรโมชั่นท้ายบิล</th>
            <td class="red">-฿ 100.00</td>
          </tr>

          <tr class="total">
            <th class="fs-16">รวมทั้งสิ้น</th>
            <td class="fs-16">฿ 13,657.84</td>
          </tr>

          <tr>
            <th colspan="2">
              <hr class="my-2" />
            </th>
          </tr>

          <tr class="black fs-16">
            <th class="fw-medium">ช่องทางชำระเงิน</th>
            <td class="fw-medium blue">เช็ค</td>
          </tr>
        </tbody>
      </table>

      <div class="buttons fill">
        <a class="btn btn-lg" href="order-payment-cheque-attach-file.html"
          >แจ้งชำระเงิน</a
        >
      </div>
      <div class="d-block p-4"></div>
    </div>
    <!--offcanvas-body-->
  </div>
  <!--offcanvas-->

  <div class="offcanvas offcanvas-end" tabindex="-1" id="paymentWatingBill">
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
      <div class="alert alert-blue text-center">
        <h6>รอเจ้าหน้าที่ตรวจสอบการชำระเงิน</h6>
      </div>
      <div class="d-flex align-items-center mt-4">
        <h5 class="fs-16 fw-semibold">ใบวางบิล</h5>

        <a class="fw-semibold link-blue ms-auto" href="#">ดูใบวางบิล</a>
      </div>

      <table class="table-summary mt-2 fs-14">
        <tbody>
          <tr class="black">
            <th>เลขที่เอกสาร</th>
            <td>BL2020020000</td>
          </tr>
          <tr class="black">
            <th>สินค้า</th>
            <td>3 รายการ</td>
          </tr>
          <tr class="black">
            <th>ราคา</th>
            <td class="fw-semibold">฿ 8,396.00</td>
          </tr>

          <tr>
            <th colspan="2">
              <hr class="my-2" />
            </th>
          </tr>

          <tr class="black">
            <th>เลขที่เอกสาร</th>
            <td>BL2020020000</td>
          </tr>
          <tr class="black">
            <th>สินค้า</th>
            <td>3 รายการ</td>
          </tr>
          <tr class="black">
            <th>ราคา</th>
            <td class="fw-semibold">฿ 8,396.00</td>
          </tr>

          <tr>
            <th colspan="2">
              <hr class="my-2" />
            </th>
          </tr>
        </tbody>
      </table>

      <h5 class="fs-16 fw-semibold mt-2">ส่วนลดใบลดหนี้</h5>

      <div class="card-coupon-product mt-3">
        <table>
          <tbody>
            <tr>
              <td>เลขที่เอกสาร</td>
              <td><strong>CN2020020123</strong></td>
            </tr>
            <tr>
              <td>ราคาส่วนลด</td>
              <td><strong>฿ 3,509.60</strong></td>
            </tr>
            <tr>
              <td>วันที่</td>
              <td>04/6/2565</td>
            </tr>
            <tr>
              <td>อ้างอิงใบแจ้งปัญหา</td>
              <td>CLAIM20220605</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h5 class="fs-16 fw-semibold mt-4">สรุปที่ต้องชำระ</h5>
      <table class="table-summary mt-2 fs-14">
        <tbody>
          <tr class="black">
            <th>ราคาสินค้าทั้งหมด</th>
            <td>฿ 16,792.00</td>
          </tr>
          <tr>
            <th>ค่าจัดส่ง</th>
            <td>฿ 100.00</td>
          </tr>
          <tr>
            <th>ภาษีมูลค่าเพิ่ม</th>
            <td>฿ 1,175.44</td>
          </tr>
          <tr>
            <th>ส่วนลดใบสั่งจอง <span class="red">ชื่อส่วนลด</span></th>
            <td class="red">- ฿ 200.00</td>
          </tr>
          <tr>
            <th>ส่วนลดใบสั่งจอง <span class="red">ชื่อส่วนลด</span></th>
            <td class="red">- ฿ 200.00</td>
          </tr>
          <tr>
            <th>ส่วนลดจากระบบ <span class="red">ชื่อส่วนลด</span></th>
            <td class="red">- ฿ 200.00</td>
          </tr>
          <tr>
            <th>ส่วนลดใบลดหนี้</th>
            <td class="red">-฿ 3,509.60</td>
          </tr>
          <tr>
            <th>ส่วนลดโปรโมชั่นท้ายบิล</th>
            <td class="red">-฿ 100.00</td>
          </tr>

          <tr class="total">
            <th class="fs-16">รวมทั้งสิ้น</th>
            <td class="fs-16">฿ 13,657.84</td>
          </tr>

          <tr>
            <th colspan="2">
              <hr class="my-2" />
            </th>
          </tr>

          <tr class="black fs-16">
            <th class="fw-medium">ช่องทางชำระเงิน</th>
            <td class="fw-medium blue">PromptPay</td>
          </tr>
        </tbody>
      </table>
      <div class="d-block p-4"></div>
    </div>
    <!--offcanvas-body-->
  </div>
  <!--offcanvas-->

  <div class="offcanvas offcanvas-end" tabindex="-1" id="receiptBill">
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
      <div class="alert alert-blue text-start">
        <div class="d-flex align-items-center py-1">
          <div>
            <p class="fw-semibold m-0">ชำระเงินสำเร็จ</p>
            <p class="fs-12 grey m-0">สำเร็จเมื่อ : 04/6/2565</p>
          </div>

          <a class="btn ms-auto" href="#" target="_blank">ดาวน์โหลดใบเสร็จ</a>
        </div>
        <!--d-flex-->
      </div>
      <h5 class="fs-16 fw-semibold mt-4">ใบวางบิล</h5>

      <table class="table-summary mt-2 fs-14">
        <tbody>
          <tr class="black">
            <th>เลขที่เอกสาร</th>
            <td>BL2020020000</td>
          </tr>
          <tr class="black">
            <th>สินค้า</th>
            <td>3 รายการ</td>
          </tr>
          <tr class="black">
            <th>ราคา</th>
            <td class="fw-semibold">฿ 8,396.00</td>
          </tr>

          <tr>
            <th colspan="2">
              <hr class="my-2" />
            </th>
          </tr>

          <tr class="black">
            <th>เลขที่เอกสาร</th>
            <td>BL2020020000</td>
          </tr>
          <tr class="black">
            <th>สินค้า</th>
            <td>3 รายการ</td>
          </tr>
          <tr class="black">
            <th>ราคา</th>
            <td class="fw-semibold">฿ 8,396.00</td>
          </tr>

          <tr>
            <th colspan="2">
              <hr class="my-2" />
            </th>
          </tr>
        </tbody>
      </table>

      <h5 class="fs-16 fw-semibold mt-2">ส่วนลดใบลดหนี้</h5>

      <div class="card-coupon-product mt-3">
        <table>
          <tbody>
            <tr>
              <td>เลขที่เอกสาร</td>
              <td><strong>CN2020020123</strong></td>
            </tr>
            <tr>
              <td>ราคาส่วนลด</td>
              <td><strong>฿ 3,509.60</strong></td>
            </tr>
            <tr>
              <td>วันที่</td>
              <td>04/6/2565</td>
            </tr>
            <tr>
              <td>อ้างอิงใบแจ้งปัญหา</td>
              <td>CLAIM20220605</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h5 class="fs-16 fw-semibold mt-4">สรุปที่ต้องชำระ</h5>
      <table class="table-summary mt-2 fs-14">
        <tbody>
          <tr class="black">
            <th>ราคาสินค้าทั้งหมด</th>
            <td>฿ 16,792.00</td>
          </tr>
          <tr>
            <th>ค่าจัดส่ง</th>
            <td>฿ 100.00</td>
          </tr>
          <tr>
            <th>ภาษีมูลค่าเพิ่ม</th>
            <td>฿ 1,175.44</td>
          </tr>
          <tr>
            <th>ส่วนลดใบสั่งจอง <span class="red">ชื่อส่วนลด</span></th>
            <td class="red">- ฿ 200.00</td>
          </tr>
          <tr>
            <th>ส่วนลดใบสั่งจอง <span class="red">ชื่อส่วนลด</span></th>
            <td class="red">- ฿ 200.00</td>
          </tr>
          <tr>
            <th>ส่วนลดจากระบบ <span class="red">ชื่อส่วนลด</span></th>
            <td class="red">- ฿ 200.00</td>
          </tr>
          <tr>
            <th>ส่วนลดใบลดหนี้</th>
            <td class="red">-฿ 3,509.60</td>
          </tr>
          <tr>
            <th>ส่วนลดโปรโมชั่นท้ายบิล</th>
            <td class="red">-฿ 100.00</td>
          </tr>

          <tr class="total">
            <th class="fs-16">รวมทั้งสิ้น</th>
            <td class="fs-16">฿ 13,657.84</td>
          </tr>

          <tr>
            <th colspan="2">
              <hr class="my-2" />
            </th>
          </tr>

          <tr class="black fs-16">
            <th class="fw-medium">ช่องทางชำระเงิน</th>
            <td class="fw-medium blue">เช็ค</td>
          </tr>
        </tbody>
      </table>
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