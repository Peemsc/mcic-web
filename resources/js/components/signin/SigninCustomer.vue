<template>
    <div class="section-body section-signin">
        <div class="background d-none d-lg-block" style="background-image: url(assets/img/thumb/img-signin-normal.png)">
        </div>

        <div class="container">
            <div class="card-signin">
                <ul class="nav card-header">
                    <li class="active">
                        <a href="/signin-customer"><span>ผู้ใช้ทั่วไป</span></a>
                    </li>
                    <li>
                        <a href="/signin-juristic"><span>สำหรับผู้ขาย</span></a>
                    </li>
                </ul>

                <div class="card-body">
                    <div class="hgroup">
                        <h3>ลงชื่อเข้าใช้</h3>
                        <p>
                            ป้อนรายละเอียดของคุณเพื่อลงชื่อเข้าใช้<span class="nowrap">บัญชีในฐานะผู้ใช้ทั่วไป</span>
                        </p>
                    </div>

                    <img class="img d-sm-block d-lg-none" src="/assets/img/thumb/img-signin-normal.png'" alt="" />

                    <form class="form d-flex vstack gap-3">
                        <div class="form-group">
                            <input type="tel" class="form-control lg" placeholder="เบอร์โทรศัพท์" name="phone"
                                v-model="phone" autocomplete="off" required />
                            <span class="icons float icon-checker right"></span>
                            <span v-if="errorMessageEmail !== ''" style="color: red;">{{ errorMessageEmail }}</span>
                        </div>

                        <div class="form-group">
                            <input :type="typePassword" class="form-control lg pw focus" name="password" v-model="password"
                                @keypress.enter="login" placeholder="รหัสผ่าน" required />
                            <span class="icons float icon-eye right"  @click="togglePassword"></span>
                        </div>

                        <!-- <div class="form-group input-error">
                            <input type="password" class="form-control lg pw" placeholder="">
                            <span class="icons float icon-eye right"></span>
                        </div> -->

                        <div class="form-group ms-auto">
                            <a class="fw-normal" href="/forgot-password">ลืมรหัสผ่าน</a>
                        </div>

                        <div class="forn-group pt-4">
                            <button class="btn btn-xl w-100" type="button" @click="login">
                                เข้าใช้งาน
                            </button>
                        </div>

                        <div class="form-group text-center">
                            หากคุณยังไม่มีบัญชีผู้ใช้
                            <a class="fw-normal" href="/register">ลงทะเบียน</a>
                        </div>
                    </form>
                </div>
            </div>

            <ul class="nav nav-copyright">
                <li>Copyright © 2022 MCIC. All rights reserved.</li>
                <li><span class="vr d-none d-md-block"></span></li>
                <li><a href="#">Term of Service</a></li>
                <li><span class="vr"></span></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
        <!--container-->
    </div>
</template>

<script>
export default {
    data() {
        return {
            phone: "",
            password: "",
            // access_token: "",
            // customer_id: "",
            // name: "",
            typePassword: 'password',
            errorMessagePhone: '',
            errorMessagePassword: '',
            reg: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,24}))$/
        };
    },
    methods: {
        togglePassword() {
            if (this.typePassword === 'password') {
                this.typePassword = 'text'
            } else {
                this.typePassword = 'password'
            }
        },
        async login() {
            const payload = {
                phone: this.phone,
                password: this.password,
                // access_token: this.access_token,
                // customer_id: this.customer_id,
                // name: this.name,
            };
            // const payload = JSON.stringify(temp)
            try {
                await axios({
                    method: "post",
                    url: "/api/customer/auth/login",
                    headers: { "Content-Type": "application/json" },
                    data: payload,
                }).then((response) => {
                    const data = response.data;
                    // console.log("login", data);
                    if (data.statusCode === 200) {
                        localStorage.setItem("getLoginCustomer", JSON.stringify(data));
                        localStorage.setItem(
                            "TokenCustomer",
                           data.result.access_token
                        );

                        localStorage.getItem("getLoginCustomer");
                        localStorage.getItem("TokenCustomer");
                        window.location.href = "/";
                        // console.log("login success", data);
                    }
                    else {
                        data.message = this.errorMessagePhone
                    }
                });
            } catch (error) {
                console.log(message, "message");
            }
        },
    },
};
</script>

<style></style>
