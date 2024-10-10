<template>
  <div class="setting-content column">
    <div class="col-left">
      <div class="d-flex align-items-end">
        <h2 class="fs-25 fw-semibold">เครดิตร้านค้า</h2>
        <span class="red fw-semibold ms-auto">Due date 30 วัน</span>
      </div>

      <div class="card-credit">
        <p>เครดิตที่ใช้ได้</p>
        <h3>
          <span class="icons">
            <img class="svg-js" src="/assets/img/icons/icon-dollar.svg" alt="" />
          </span>
          60,000
        </h3>
        <p class="total">เครดิตรวม ฿ 100,000</p>
      </div>

      <h4 class="fs-18 fw-semibold d-flex">
        <span class="icons w-24">
          <img src="/assets/img/icons/icon-history.svg" alt="" />
        </span>
        ประวัติการขอเครดิต
      </h4>

      <table class="table fs-14 fw-light mt-2">
        <tr>
          <td>
            <h5 class="fs-16 red">ไม่อนุมัติ</h5>
            <p class="m-0">1/5/2565 15:34</p>
          </td>
          <td class="text-end">
            <h5 class="fs-16 fw-semibold red">฿ 200,000</h5>
            <p class="m-0">CR20220600034</p>
          </td>
        </tr>

        <tr>
          <td>
            <h5 class="fs-16 green">อนุมัติ</h5>
            <p class="m-0">1/5/2565 15:34</p>
          </td>
          <td class="text-end">
            <h5 class="fs-16 fw-semibold green">฿ 50,000</h5>
            <p class="m-0">CR20220600034</p>
          </td>
        </tr>

        <tr>
          <td>
            <h5 class="fs-16 green">อนุมัติ</h5>
            <p class="m-0">1/5/2565 15:34</p>
          </td>
          <td class="text-end">
            <h5 class="fs-16 fw-semibold green">฿ 50,000</h5>
            <p class="m-0">CR20220600034</p>
          </td>
        </tr>

        <tr>
          <td>
            <h5 class="fs-16 blue">ชำระหนี้ตรงเวลา</h5>
            <p class="m-0">1/5/2565 15:34</p>
          </td>
          <td class="text-end">
            <h5 class="fs-16 fw-semibold blue">฿ 5,000</h5>
            <p class="m-0">CR20220600034</p>
          </td>
        </tr>
      </table>
    </div>
    <!--col-left-->
    <div class="col-right">
      <h2 class="fs-25 fw-semibold">ขอเครดิตเพิ่ม</h2>

      <div class="card-credit-progress">
        <div class="d-flex">
          <p>เครดิตที่ใช้ไป</p>
          <p class="ms-auto">เครดิตที่ใช้ไป</p>
        </div>
        <!--d-flex-->

        <div class="d-flex">
          <h5>฿ 40,000</h5>
          <h5 class="ms-auto">฿ 40,000</h5>
        </div>
        <!--d-flex-->

        <div class="progress">
          <div
            class="progress-bar"
            role="progressbar"
            style="width: 25%"
            aria-valuenow="25"
            aria-valuemin="0"
            aria-valuemax="100"
          ></div>
        </div>

        <div class="d-block text-center">
          <h5 class="total">เครดิตรวม <span class="black">฿ 100,000</span></h5>
        </div>
      </div>
      <!--card-credit-progress-->

      <h2 class="fs-18 fw-semibold mb-4">รายละเอียดการขอเพิ่มเครดิต</h2>

      <form
        class="form d-flex vstack gap-3"
      >
        <div class="form-group">
          <input
            type="text"
            class="form-control"
            name="credit"
            placeholder="จำนวนเครดิตที่จะขอเพิ่ม"
          />
        </div>

        <div class="form-group">
          <textarea
            class="form-control"
            placeholder="reason"
            name="reason"
          ></textarea>
        </div>

        <div class="form-group mt-2">
          <button class="btn btn-lg w-100" type="button" disabled>
            ยืนยันขอเครดิต
          </button>
        </div>
      </form>
    </div>
    <!--col-right-->
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>