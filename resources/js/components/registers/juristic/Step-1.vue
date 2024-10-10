<template>
    <div class="section section-full">
        <div class="container">
            <div class="register-header">
                <div class="cols left" @click="onClickCurrentPage">
                    <h2>ลงทะเบียนนิติบุคคล</h2>
                </div>
                <div class="cols right">
                    <ul class="nav nav-step">
                        <li class="active">
                            <a @click="tabSwitched('step-1')">
                                <span class="number">1</span>
                                ข้อมูลส่วนตัว
                            </a>
                        </li>
                        <li>
                            <a @click="tabSwitched('step-2')">
                                <span class="number">2</span>
                                ยืนยันตัวตน
                            </a>
                        </li>
                        <li>
                            <a @click="tabSwitched('step-3')">
                                <span class="number">3</span>
                                อัพโหลดเอกสาร
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--register-header-->

            <!-- step-1 -->
            <form class="form" v-if="tab === 'step-1'">
                <div class="row pt-4 pt-md-5 mt-2">
                    <div class="col-lg-4 text-center text-lg-start">
                        <h3 class="fs-32 mb-2">ข้อมูลส่วนตัว</h3>
                        <p>กรุณากรอกข้อมูลให้ครบถ้วนและสมบูรณ์</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-700">
                            <div class="row g-2 g-md-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control lg" name="email" v-model="email"
                                            placeholder="example@example.com" required />
                                        <span class="icons float icon-checker right"></span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control lg" v-model="phone" name="phone"
                                            placeholder="หมายเลขโทรศัพท์" required />
                                        <span class="icons float icon-checker right"></span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control lg" name="name" v-model="name"
                                            placeholder="ชื่อ - นามสกุล" required />
                                        <span class="icons float icon-checker right"></span>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control lg" name="lineID" v-model="social_line_id"
                                            placeholder="Line ID" required />
                                        <span class="icons float icon-checker right"></span>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control lg" name="code" v-model="recommend_code"
                                            placeholder="รหัสผู้แนะนำ(ถ้ามี)" />
                                        <span class="icons float icon-checker right"></span>
                                    </div>
                                </div>
                            </div>
                            <!--row-->
                        </div>
                        <!--form-700-->
                    </div>
                    <!--col-lg-8-->
                </div>
                <!--row-->

                <hr class="grey-200" />

                <div class="row">
                    <div class="col-lg-4 text-center text-lg-start">
                        <h3 class="fs-32 mb-2">กำหนดรหัสผ่าน</h3>
                        <p>
                            กำหนดรหัสผ่านของคุณ ไม่น้อยกว่า 8 ตัวอักษร<br />
                            ไม่ควรเป็นรหัสที่คาดเดาได้ง่าย
                        </p>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-700">
                            <div class="row g-2 g-md-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control lg pw" name="password1"
                                            placeholder="รหัสผ่าน" v-model="password" required />
                                        <span class="icons float icon-eye right"></span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control lg pw" name="password2"
                                            placeholder="ยืนยันรหัสผ่าน" required />
                                        <span class="icons float icon-eye right"></span>
                                    </div>
                                </div>
                            </div>
                            <!--row-->

                            <div class="buttons d-flex gap-2 gap-md-3">
                                <a class="btn btn-outline btn-xl w-220" href="/signin-customer">ยกเลิก</a>
                                <button class="btn btn-xl w-100" type="button" @click="register">สร้างบัญชีผู้ใช้</button>
                            </div>
                        </div>
                        <!--form-700-->
                    </div>
                    <!--col-lg-8-->
                </div>
                <!--row-->
            </form>

            <!-- step-2 -->
            <form class="form" v-if="tab === 'step-2'">
                <div class="row pt-4 pt-md-5 mt-2">
                    <div class="col-lg-4 text-center text-lg-start">
                        <h3 class="fs-32 mb-2">กรอก OTP</h3>
                        <p>
                            เราได้ส่งรหัสยืนยันให้คุณแล้ว
                            <strong>{{ dataCheckOtp.phone }}</strong><br />
                            โปรดตรวจสอบ
                        </p>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-425">
                            <div class="img w-104 mx-auto">
                                <img class="w-100" src="assets/img/icons/icon-user-otp.svg" alt="" />
                            </div>
                            <div class="form-digit hstack gap-2">
                                <div class="form-group">
                                    <input v-model="dataCheckOtp.code[0]" type="text" class="form-control digit numbersOnly"
                                        maxlength="1" pattern="[0-9]*" inputmode="numeric" name="digit" />
                                </div>
                                <div class="form-group">
                                    <input v-model="dataCheckOtp.code[1]" type="text" class="form-control digit numbersOnly"
                                        maxlength="1" pattern="[0-9]*" inputmode="numeric" name="digit" />
                                </div>
                                <div class="form-group">
                                    <input v-model="dataCheckOtp.code[2]" type="text" class="form-control digit numbersOnly"
                                        maxlength="1" pattern="[0-9]*" inputmode="numeric" name="digit" />
                                </div>
                                <div class="form-group">
                                    <input v-model="dataCheckOtp.code[3]" type="text" class="form-control digit numbersOnly"
                                        maxlength="1" pattern="[0-9]*" inputmode="numeric" name="digit" />
                                </div>
                                <div class="form-group">
                                    <input v-model="dataCheckOtp.code[4]" type="text" class="form-control digit numbersOnly"
                                        maxlength="1" pattern="[0-9]*" inputmode="numeric" name="digit" />
                                </div>
                                <div class="form-group">
                                    <input v-model="dataCheckOtp.code[5]" type="text" class="form-control digit numbersOnly"
                                        maxlength="1" pattern="[0-9]*" inputmode="numeric" name="digit" />
                                </div>
                            </div>

                            <div class="forn-group d-flex">
                                <button class="btn btn-xl w-100" type="button" @click="verifyOtp">
                                    ยืนยัน
                                </button>
                            </div>

                            <div class="form-group text-center">
                                หากยังไม่ได้รับรหัสความปลอดภัย
                                <a class="fw-normal text-underline" href="#">ส่งอีกครั้ง</a>
                            </div>
                        </div>
                        <!--form-425-->
                    </div>
                    <!--col-lg-8-->
                </div>
                <!--row-->
            </form>

            <!-- step-3 -->
            <!-- <form class="form" v-if="tab === 'step-3'">
                <div class="row pt-4 pt-md-5 mt-2">
                    <div class="col-lg-3 text-center text-lg-start">
                        <h3 class="fs-32 mb-2">อัปโหลดเอกสาร</h3>
                        <p>รองรับไฟล์ png, jpg, jpeg</p>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-700 form-upload">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class='file-input button'>
                                        <div class="file-edit"></div>
                                        <input type='file' accept="image/png, image/gif, image/jpeg"
                                            id="copy-of-commercial-registration-file"
                                            @change="uploadDocument('copy-of-commercial-registration-file')">

                                        <div class="group">
                                            <div class="icons"></div>
                                            <h6>สำเนาทะเบียนพาณิชย์ </h6>
                                            <span class='label' data-js-label>เลือกไฟล์หรือลากมาวางที่นี่</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class='file-input button'>
                                        <div class="file-edit"></div>
                                        <input type='file' accept="image/png, image/gif, image/jpeg"
                                            id="copy-of-id-card-file" @change="uploadDocument('copy-of-id-card-file')">

                                        <div class="group">
                                            <div class="icons"></div>
                                            <h6>สำเนาบัตรประจำตัวประชาชน </h6>
                                            <span class='label' data-js-label>เลือกไฟล์หรือลากมาวางที่นี่</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class='file-input button error'>
                                        <div class="file-edit"></div>
                                        <input type='file' accept="image/png, image/gif, image/jpeg"
                                            id="copy-of-house-registration-file"
                                            @change="uploadDocument('copy-of-house-registration-file')">

                                        <div class="group">
                                            <div class="icons"></div>
                                            <h6>เอกสารสำเนาทะเบียนบ้าน </h6>
                                            <span class='label' data-js-label>เลือกไฟล์หรือลากมาวางที่นี่</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class='file-input button'>
                                        <div class="file-edit"></div>
                                        <input type='file' accept="image/png, image/gif, image/jpeg" id="photo-of-shop-file"
                                            @change="uploadDocument('photo-of-shop-file')">

                                        <div class="group">
                                            <div class="icons"></div>
                                            <h6>รูปถ่ายหน้าร้าน </h6>
                                            <span class='label' data-js-label>เลือกไฟล์หรือลากมาวางที่นี่</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="py-3">
                    <hr class="grey-200">
                </div>

                <div class="row">
                    <div class="col-lg-3 text-center text-lg-start">
                        <h3 class="fs-32 mb-2">เลือกสถานที่</h3>
                        <p>กรุณาระบุสถานที่ร้านของคุณ</p>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-700 form-map">
                            <div class="row g-2 g-md-3">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control lg" name="latitude" placeholder="ละติจูด"
                                            v-model="latitude" required>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control lg" name="longitude" placeholder="ลองติจูด"
                                            v-model="longitude" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="map-search">
                                        <div class="search-option">
                                            <div class="form-group search white">
                                                <span class="icons float left icon-search"></span>
                                                <input type="text" class="form-control" placeholder="ค้นหาที่อยู่">
                                            </div>

                                            <button class="btn btn-map" type="button"></button>
                                        </div>

                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.0888390794103!2d100.40586521541081!3d13.713068990372548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e297c6f2377be1%3A0xd7393eb1d51cb378!2sThe%20Mall%20Bangkae!5e0!3m2!1sen!2sth!4v1667019326583!5m2!1sen!2sth"
                                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                                        <button class="btn btn-outline btn-save" type="button">บันทึก</button>
                                    </div>
                                </div>

                                <div class="col-12 mb-4">
                                    <button class="btn btn-xl w-100" type="button"
                                        @click="submitRegister">ยืนยันสร้างบัญชีผู้ใช้</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form> -->
        </div>
        <!--container-->
    </div>
    <!--section-->
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            tab: "step-1",
            value: "",
            phone: "",
            email: "",
            name: "",
            social_line_id: "",
            password: "",
            recommend_code: "",
            location_name: "",
            latitude: "",
            longitude: "",
            file: [],
            dataCheckOtp: '',
            uploadDoc: '',
            regisData: '',
            file_commercial: '',
            file_id_card: '',
            file_house_document: '',
            file_store_front: '',
            file_image: '',
        };
    },
    methods: {
        tabSwitched(tabs) {
            this.tab = tabs;
        },
        onClickCurrentPage() {
            window.location.href = "/juristic/register/step-1";
        },
        async register() {
            const payload = {
                phone: this.phone,
                email: this.email,
                name: this.name,
                social_line_id: this.social_line_id,
                password: this.password,
                member_type: "company",
                recommend_code: this.recommend_code,
                location_name: this.location_name,
                latitude: this.latitude,
                longitude: this.longitude,
                file: this.file,
            };
            try {
                await axios({
                    method: "post",
                    url: "/api/customer/profile/register/company/save",
                    headers: { "Content-Type": "application/json" },
                    data: payload,
                }).then((response) => {
                    const data = response.data;
                    if (data.statusCode === 200 || data != null) {
                        this.tab = "step-2"; // update tab data property
                        this.regisData = data
                        this.checkOtp();
                    } else {
                        console.log(error);
                    }
                });
            } catch (error) { }
        },
        async checkOtp() {
            const payloadotp = {
                phone: this.phone,
            };
            try {
                await axios({
                    method: "post",
                    url: "/api/customer/profile/register/send-otp",
                    headers: { "Content-Type": "application/json" },
                    data: payloadotp,
                }).then((response) => {
                    const dataCheckOtp = response.data;
                    if (dataCheckOtp.statusCode === 200) {
                        // sessionStorage.setItem("CheckOtp", JSON.stringify(dataCheckOtp));
                        // sessionStorage.getItem("CheckOtp");
                        // window.location.href = "/register/step-2";
                        this.dataCheckOtp = dataCheckOtp.result

                    } else {
                        console.log(error);
                    }
                });
            } catch (error) {
                console.log(error);
            }
        },
        async verifyOtp() {
            // let compile = ;
            const payload = {
                phone: this.dataCheckOtp.phone,
                code: this.dataCheckOtp.code,
                token: this.dataCheckOtp.token,
                ref_code: this.dataCheckOtp.ref_code,
            };
            try {
                await axios({
                    method: "post",
                    url: "/api/customer/profile/register/check-otp",
                    headers: {},
                    data: payload,
                }).then((response) => {
                    const data = response.data
                    if (data.statusCode === 200) {
                        // this.tab = "step-3";
                        window.location.href = '/register/success'
                        console.log(data.result, 'data');
                    }
                })
            } catch (error) {
                console.log(error);
            }
        },
        async uploadDocument(id) {
            const file = document.getElementById(id).files[0];
            const formData = new FormData();
            formData.append("module", "customer/file");
            formData.append("file", file);

            try {
                const response = await axios({
                    method: "post",
                    maxContentLength: Infinity,
                    url: "/api/systems/upload",
                    headers: { "Content-Type": "multipart/form-data" },
                    data: formData,
                });

                const data = response.data;
                if (data.statusCode === 200) {
                    this.uploadDoc = data.result;
                    console.log(JSON.stringify(this.uploadDoc),'datadata');
                } else {
                    console.log(error);
                }
            } catch (error) {
                console.log(error);
            }
        },

        async submitRegister() {
            if (this.regisData.statusCode === 200) {
                window.location.href = '/register/success'
            }
        }
    },
};
</script>

<style></style>
