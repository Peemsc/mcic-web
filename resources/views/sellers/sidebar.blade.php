<div class="setting-sidebar">
    <div class="user-infos">
        <avatar-sidebar-seller></avatar-sidebar-seller>

        <button class="btn btn-icon navbar-admin" type="button" data-bs-target="#navsetting" data-bs-toggle="collapse"
            aria-expanded="false">
            <span class="group">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>
    </div>

    <div id="navsetting" class="collapse">
        <ul class="nav nav-setting" >
            <li class="{{ Request::is('seller/profile') ? 'active' : '' }}">
                <a href="/seller/profile">
                    <span class="icons icon-list"></span>
                    ภาพรวม
                </a>
            </li>
            <li class="{{ Request::is('seller/tripplan') ? 'active' : '' }}">
                <a data-bs-toggle="collapse" href="#nav_tripplan" aria-expanded="false">
                    <span class="icons icon-calendar"></span>
                    ทริปแพลน
                </a>

                <div id="nav_tripplan" class="collapse" data-bs-parent=".nav-setting">
                    <ul class="nav">
                        <li class="{{ Request::is('seller/tripplan') ? 'active' : '' }}">
                            <a href="/seller/tripplan">
                                รายการนัดพบ
                            </a>
                        </li>
                        <li>
                            <a href="trip-plan-history.html">
                                ประวัติการนัดพบ
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li>
                <a href="order-purchase.html">
                    <span class="icons icon-receipt"></span>
                    ใบจอง
                    <span class="badge">01</span>
                </a>
            </li>

            <li>
                <a href="notifications.html">
                    <span class="icons icon-notification"></span>
                    การแจ้งเตือน
                    <span class="badge">01</span>
                </a>
            </li>

            <li>
                <a href="monitor.html">
                    <span class="icons icon-monitor"></span>
                    Monitor
                </a>
            </li>

            <li>
                <a href="update-stock.html">
                    <span class="icons icon-box"></span>
                    กำหนดขั้นต่ำสินค้า
                </a>
            </li>

            <li>
                <a data-bs-toggle="collapse" href="#nav_order" aria-expanded="false">
                    <span class="icons icon-bill"></span>
                    เกี่ยวกับคำสั่งซื้อ
                </a>

                <div id="nav_order" class="collapse" data-bs-parent=".nav-setting">
                    <ul class="nav">
                        <li>
                            <a href="order-delivery-note.html">
                                ใบส่งสินค้า <span class="badge">01</span>
                            </a>
                        </li>
                        <li>
                            <a href="order-by-customer.html">
                                เลือกตามลูกค้า <span class="badge">01</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li>
                <a href="my-customer.html">
                    <span class="icons icon-handshake"></span>
                    เกี่ยวกับลูกค้าที่ดูแล
                </a>
            </li>


            <li>
                <a data-bs-toggle="collapse" href="#nav_setting" aria-expanded="false">
                    <span class="icons icon-setting"></span>
                    ตั้งค่า
                </a>
                <div id="nav_setting" class="collapse" data-bs-parent=".nav-setting">
                    <ul class="nav">
                        <li><a href="chanage-password.html">เปลี่ยนรหัสผ่าน</a></li>
                        <li><a href="return-policy.html">นโยบายการคืนสินค้า</a></li>
                        <li><a href="deactivate-account.html">ขอลบบัญชี</a></li>
                    </ul>
                </div>
            </li>

            <logout-seller></logout-seller>

        </ul>
    </div>
    <!--collapse-->
</div>
<!--setting-sidebar-->
