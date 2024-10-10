<template>
  <div id="offcanvas_sidebar" class="sidebar offcanvas offcanvas-start">
    <p>
      <span class="link-blue fs-14" @click="ClearData" style="cursor: pointer"
        >Clear (1)</span
      >
    </p>
    <div class="filter-row first">
      <h3>ผลิตภัณฑ์สีผม</h3>
      <div class="accordion-filter" id="accordion_01">
        <ul class="nav nav-accordion">
          <li>
            <h5 data-bs-toggle="collapse" data-bs-target="#menu_1_1">
              สีธรรมชาติ
            </h5>
            <div id="menu_1_1" class="collapse" data-bs-parent="#accordion_01">
              <ul class="nav nav-subcat">
                <li class="active"><span>Master mass</span></li>
                <li><span>Experience</span></li>
                <li><span>Optimus</span></li>
                <li><span>Pro Master</span></li>
              </ul>
            </div>
            <!--collapse-->
          </li>

          <li>
            <h5 data-bs-toggle="collapse" data-bs-target="#menu_1_2">
              สีแฟชั่น
            </h5>
            <div id="menu_1_2" class="collapse" data-bs-parent="#accordion_01">
              <ul class="nav nav-subcat">
                <li><span>Text... 1</span></li>
                <li><span>Text... 2</span></li>
              </ul>
            </div>
            <!--collapse-->
          </li>

          <li>
            <h5 data-bs-toggle="collapse" data-bs-target="#menu_1_3">
              แชมพูปิดผมขาว
            </h5>
            <div id="menu_1_3" class="collapse" data-bs-parent="#accordion_01">
              <ul class="nav nav-subcat">
                <li><span>Text... 1</span></li>
                <li><span>Text... 2</span></li>
              </ul>
            </div>
            <!--collapse-->
          </li>

          <li>
            <h5 data-bs-toggle="collapse" data-bs-target="#menu_1_4">
              ไฮเปอร์ครีม
            </h5>
            <div id="menu_1_4" class="collapse" data-bs-parent="#accordion_01">
              <ul class="nav nav-subcat">
                <li><span>Text... 1</span></li>
                <li><span>Text... 2</span></li>
              </ul>
            </div>
            <!--collapse-->
          </li>

          <li>
            <h5 data-bs-toggle="collapse" data-bs-target="#menu_1_5">
              ผงฟอกสีผม
            </h5>
            <div id="menu_1_5" class="collapse" data-bs-parent="#accordion_01">
              <ul class="nav nav-subcat">
                <li><span>Text... 1</span></li>
                <li><span>Text... 2</span></li>
              </ul>
            </div>
            <!--collapse-->
          </li>

          <li>
            <h5 data-bs-toggle="collapse" data-bs-target="#menu_1_6">
              Subcat ผงฟอก
            </h5>
            <div id="menu_1_6" class="collapse" data-bs-parent="#accordion_01">
              <ul class="nav nav-subcat">
                <li><span>Text... 1</span></li>
                <li><span>Text... 2</span></li>
              </ul>
            </div>
            <!--collapse-->
          </li>
        </ul>
      </div>
      <!--accordion_01-->
    </div>
    <!--filter-row-->

    <div class="filter-row">
      <h3>ผลิตภัณฑ์ยืด ดัด</h3>
      <div class="accordion-filter" id="accordion_02">
        <ul class="nav nav-accordion">
          <li>
            <h5 data-bs-toggle="collapse" data-bs-target="#menu_2_1">
              ยืด ดัด
            </h5>
            <div id="menu_2_1" class="collapse" data-bs-parent="#accordion_02">
              <ul class="nav nav-subcat">
                <li><span>Text... 1</span></li>
                <li><span>Text... 2</span></li>
              </ul>
            </div>
            <!--collapse-->
          </li>
        </ul>
      </div>
      <!--accordion_02-->
    </div>
    <!--filter-row-->

    <div class="filter-row">
      <h3>ผลิตภัณฑ์จัดแต่งทรงผม</h3>
      <div class="accordion-filter" id="accordion_03">
        <ul class="nav nav-accordion">
          <li>
            <h5 data-bs-toggle="collapse" data-bs-target="#menu_3_1">
              จัดแต่งทรง
            </h5>
            <div id="menu_3_1" class="collapse" data-bs-parent="#accordion_03">
              <ul class="nav nav-subcat">
                <li><span>Text... 1</span></li>
                <li><span>Text... 2</span></li>
              </ul>
            </div>
            <!--collapse-->
          </li>
        </ul>
      </div>
      <!--accordion_03-->
    </div>
    <!--filter-row-->

    <div class="filter-row">
      <h3>ผลิตภัณฑ์บำรุงเส้นผม</h3>
      <div class="accordion-filter" id="accordion_04">
        <ul class="nav nav-accordion">
          <li>
            <h5 data-bs-toggle="collapse" data-bs-target="#menu_4_1">
              จัดแต่งทรง
            </h5>
            <div id="menu_4_1" class="collapse" data-bs-parent="#accordion_04">
              <ul class="nav nav-subcat">
                <li><span>แชมพู</span></li>
                <li><span>ทรีทเมนท์</span></li>
                <li><span>ลีฟออน</span></li>
                <li><span>เซรั่มออยส์</span></li>
                <li><span>แชมพูม่วง</span></li>
              </ul>
            </div>
            <!--collapse-->
          </li>
        </ul>
      </div>
      <!--accordion_04-->
    </div>
    <!--filter-row-->

    <div class="filter-row">
      <h3>อุปกรณ์ทำผม</h3>
      <h5>อุปกรณ์ทำผม</h5>
    </div>
    <!--filter-row-->

    <div class="filter-row">
      <h3>ผลิตภัณฑ์สำหรับผู้ชาย</h3>
      <div class="accordion-filter" id="accordion_05">
        <ul class="nav nav-accordion">
          <li>
            <h5 data-bs-toggle="collapse" data-bs-target="#menu_5_1">โกน</h5>
            <div id="menu_5_1" class="collapse" data-bs-parent="#accordion_05">
              <ul class="nav nav-subcat">
                <li><span>Text... 1</span></li>
                <li><span>Text... 2</span></li>
              </ul>
            </div>
            <!--collapse-->
          </li>

          <li>
            <h5 data-bs-toggle="collapse" data-bs-target="#menu_5_2">
              Clipper
            </h5>
            <div id="menu_5_2" class="collapse" data-bs-parent="#accordion_05">
              <ul class="nav nav-subcat">
                <li><span>Text... 1</span></li>
                <li><span>Text... 2</span></li>
              </ul>
            </div>
            <!--collapse-->
          </li>
        </ul>
      </div>
      <!--accordion_05-->
    </div>
    <!--filter-row-->

    <div class="filter-row">
      <h3>ราคา</h3>
      <div class="nstSlider-box">
        <div class="nstSlider-range">
          <span class="leftLabel"></span>
          <span>-</span>
          <span class="rightLabel"></span>
        </div>
        <div
          class="nstSlider"
          data-range_min="0"
          data-range_max="10000"
          data-cur_min="300"
          data-cur_max="3000"
        >
          <div class="bar"></div>
          <div class="leftGrip"></div>
          <div class="rightGrip"></div>
        </div>
      </div>
      <!--nstSlider-box-->
    </div>
    <!--filter-row-->

    <div class="filter-row">
      <h3>แบรนด์</h3>
      <ul class="nav nav-brands">
        <li><a href="#">DCASH</a></li>
        <li><a href="#">NEXT POWER</a></li>
      </ul>
    </div>
    <!--filter-row-->
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>