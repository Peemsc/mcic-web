<div class="setting-sidebar">
    <div class="user-infos">

        <avatar-sidebar-customers></avatar-sidebar-customers>

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
        <ul class="nav nav-setting">
            <li
                class="{{ Request::is('customers/profile') ? 'active' : '' }} ? {{ Request::is('customers/profile/edit') ? 'active' : '' }}">
                <a href="/customers/profile">
                    <span class="icons icon-user"></span>
                    ข้อมูลส่วนตัว
                </a>
            </li>

            <li
                class="{{ Request::is('customers/stock') ? 'active' : '' }} ? {{ Request::is('customers/stock/update') ? 'active' : '' }}">
                <a href="/customers/stock">
                    <span class="icons icon-task"></span>
                    สต็อกสินค้า
                </a>
            </li>

            <li class="{{ Request::is('customers/notification') ? 'active' : '' }}">
                <a href="/customers/notification">
                    <span class="icons icon-notification"></span>
                    การแจ้งเตือน
                    <span class="badge">01</span>
                </a>
            </li>

            <li class="{{ Request::is('customers/reward-coupon') ? 'active' : '' }}">
                <a href="/customers/reward-coupon">
                    <span class="icons icon-coupon"></span>
                    คะแนน / คูปอง
                </a>
            </li>

            <li class="{{ Request::is('customers/credits') ? 'active' : '' }}">
                <a href="/customers/credits">
                    <span class="icons icon-dollar"></span>
                    เครดิตร้านค้า
                </a>
            </li>

            <li
                class="{{ Request::is('customers/orders/purchase') ? 'active' : '' }} ? {{ Request::is('customers/orders/delivery') ? 'active' : '' }} 
            ? {{ Request::is('customers/orders/payment') ? 'active' : '' }} ? {{ Request::is('customers/orders/credit') ? 'active' : '' }}">
                <a data-bs-toggle="collapse" href="#nav_order" aria-expanded="false">
                    <span class="icons icon-bill"></span>
                    เกี่ยวกับคำสั่งซื้อ
                </a>

                <div id="nav_order" class="collapse" data-bs-parent=".nav-setting">
                    <ul class="nav">
                        <li class="{{ Request::is('customers/orders/purchase') ? 'active' : '' }} ">
                            <a href="/customers/orders/purchase">
                                ใบจองสินค้า <span class="badge">01</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('customers/orders/delivery') ? 'active' : '' }}">
                            <a href="/customers/orders/delivery">
                                ใบส่งสินค้า <span class="badge">01</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('customers/orders/payment') ? 'active' : '' }}">
                            <a href="/customers/orders/payment">
                                ชำระเงิน <span class="badge">01</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('customers/orders/credit') ? 'active' : '' }}">
                            <a href="/customers/orders/credit">
                                ใบลดหนี้ <span class="badge">01</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="sales.html">
                    <span class="icons icon-salesman"></span>
                    เกี่ยวกับฝ่ายขาย
                </a>
            </li>

            <li>
                <a href="favourite.html">
                    <span class="icons icon-heart"></span>
                    รายการโปรด
                </a>
            </li>

            <li>
                <a href="recently.html">
                    <span class="icons icon-eye"></span>
                    สินค้าที่ดูล่าสุด
                </a>
            </li>

            <li>
                <a href="address.html">
                    <span class="icons icon-home"></span>
                    จัดการที่อยู่
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

            <logout-customer></logout-customer>
        </ul>
    </div>
    <!--collapse-->
</div>
