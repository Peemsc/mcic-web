@extends('layouts.customers.main')

@section('title')

@section('body-class')
@section('body-style')

@section('stylesheet')
@endsection

@section('content')
    <div class="section section-contact column">
        <div class="container">
            <div class="col-left">
                <ol class="breadcrumb pt-2">
                    <li><a href="/">หน้าแรก</a></li>
                    <li class="active"><span>ติดต่อเรา</span></li>
                </ol>
                <h2 class="fs-40 mb-md-5 mb-4">ติดต่อเรา</h2>

                <form class="form form-contact " action="#" method="post">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="title">ชื่อ นามสกุล</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="ชื่อ นามสกุล" name="name"
                                    value="" required>
                            </div>
                        </div>
                        <!--col-md-6-->

                        <div class="col-md-6">
                            <label class="title">อีเมล</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="อีเมล" name="name" value=""
                                    required>
                            </div>
                        </div>
                        <!--col-md-6-->

                        <div class="col-md-6">
                            <label class="title">หมายเลขโทรศัพท์</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="หมายเลขโทรศัพท์" name="phone"
                                    value="" required>
                            </div>
                        </div>
                        <!--col-md-6-->

                        <div class="col-md-6">
                            <label class="title">หัวข้อ</label>
                            <div class="form-group">
                                <select class="form-select" name="title" required>
                                    <option value="" selected>กรุณาเลือก</option>
                                    <option value="1">xxx</option>
                                </select>
                            </div>
                        </div>
                        <!--col-md-6-->

                        <div class="col-md-12">
                            <label class="title">รายละเอียด</label>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="รายละเอียด..."></textarea>
                            </div>
                        </div>
                        <!--col-md-6-->

                        <div class="col-sm-6 py-sm-4">
                            <div class="captcha-box">
                                <img class="w-100" src="assets/img/thumb/captcha.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-sm-6 py-sm-4 d-flex">
                            <button class="btn btn-lg" type="submit">
                                <span class="icons icon-send"></span>
                                <span class="g-recaptcha fs-18" data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit'
                                    data-action='submit'>ส่ง</span>
                            </button>
                        </div>
                    </div>
                    <!--row-->
                </form>
            </div>
            <!--col-left-->
            <div class="col-right">
                <h4 class="fs-35 mb-4 mb-lg-5">ช่องทางติดต่อ</h4>

                <div class="contact-lists">
                    <div class="contact-item">
                        <span class="icons">
                            <img class="svg-js" src="assets/img/icons/icon-calling.svg" alt="">
                        </span>
                        <div class="infos">
                            <h5><a href="tel:0801236587">080-123-6587</a></h5>
                            <p>หมายเลขโทรศัพท์</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <span class="icons">
                            <img class="svg-js" src="assets/img/icons/icon-line.svg" alt="">
                        </span>
                        <div class="infos">
                            <h5><a href="tel:0801236587">@mcicofficial</a></h5>
                            <p>พูดคุยกับเรา</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <span class="icons">
                            <img class="svg-js" src="assets/img/icons/icon-instagram.svg" alt="">
                        </span>
                        <div class="infos">
                            <h5><a href="tel:0801236587">@mcicofficial</a></h5>
                            <p>ติดตามเรา</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <span class="icons">
                            <img class="svg-js" src="assets/img/icons/icon-facebook.svg" alt="">
                        </span>
                        <div class="infos">
                            <h5><a href="tel:0801236587">@mcicofficial</a></h5>
                            <p>อัปเดตข่าวสาร</p>
                        </div>
                    </div>
                </div>
                <!--contact-lists-->
            </div>
            <!--col-right-->

        </div>
        <!--container-->
    </div>
    <!--section-contact-->

    <div class="secton section-contact infos">
        <div class="container">
            <div class="row pt-70">
                <div class="col-lg-6">
                    <div class="article">
                        <h3>เกี่ยวกับ MCIC</h3>

                        <p>MCIC Group ก่อตั้งขึ้นในปี พ.ศ. 2525 ด้วยประสบการณ์กว่า 35 ปี
                            ในแวดวงธุรกิจความงามด้านผลิตภัณฑ์เกี่ยวกับเส้นผม, ครีมย้อมสีผม, ผลิตภัณฑ์ดูแลผิวพรรณ
                            ตลอดจนเครื่องสำอาง
                            ที่ได้คุณภาพสูง และเป็นที่ต้องการ มีความนิยมของลูกค้ามากมาย ภายใต้เครื่องหมายการค้า
                            DCASH, LIFEFORD PARIS, VALLEYPLUS, X CUTE ME
                        </p>

                        <p>เรามีความมุ่งมั่น และพัฒนาในการคิดค้นผลิตภัณฑ์ใหม่ๆ
                            เพื่อตอบสนองความต้องการของลูกค้าให้มีความทันสมัย และตามเทรนแฟชั่นจากอดีตจนถึงปัจุบัน และวันนี้
                            สินค้าเราได้รับความนิยมสูงมีชื่อเสียงทั้งในประเทศไทยและต่างประเทศ
                            ทั้งยังนำข้าสินค้าจากต่างประเทศเพื่อพัฒนาศักยภาพให้ดียิ่งขึ้นกว่าเดิม. </p>

                        <p>จากสถาบันวิจัยและพัฒนา ดีแคช โปรเฟสชั่นนอล สู่ ดีแคช มาสเตอร์ คัลเลอร์ ครีม
                            พัฒนาการอีกขั้นเพื่อก้าวสู่ความเป็นผู้นำทางด้านสีผมอย่างมืออาชีพ ด้วยเทคโนโลยี MICRO EMULSION
                            ที่ทำให้อนุภาพเม็ดสีเล็กลง แทรกซึมเข้าเส้นผมทุกอณูเม็ดสี ทำให้สีติดดีขึ้นและเข้มเด่นชัด
                            พร้อมพิสูจน์กลิ่นหอมยิ่งขึ้น เพิ่มปริมาณจาก50 g เป็น 60 g เทคโนโลยี OMC COLOR LOCK
                            ล็อคสีผมให้ติดทนนาน ผสานโปรตีนจากถั่วเหลืองทำให้ผมนุ่มลื่นยิ่งขึ้น เฉดสี COLOR MIXED SERIES
                            สามารถผสมกับโทนสีอื่นๆ เพื่อให้สีสว่างมาก ขึ้น ผลลัพธ์ที่ได้ปกปิดผมขาว ประกายสีเงางาม
                            สีผมเรียบเนียนเป็นธรรมชาติ หมดกังวลเรื่องผมเสีย เส้นผมดูอ่อนนุ่มหลังการใช้.</p>
                    </div>
                </div>
                <!--col-lg-6-->
                <div class="col-lg-6">
                    <img class="w-100" src="assets/img/thumb/photo-w1200--1.jpg" alt="">
                </div>
                <!--col-lg-6-->
            </div>
            <!--row-->

            <div class="map-box h-500 mt-70">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.0888390794103!2d100.40586521541081!3d13.713068990372548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e297c6f2377be1%3A0xd7393eb1d51cb378!2sThe%20Mall%20Bangkae!5e0!3m2!1sen!2sth!4v1667019326583!5m2!1sen!2sth"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!--container-->

        <div class="p-md-4"></div>
    </div>
    <!--secton-->
@endsection
@section('page_script')
    <script>
        // var myModal = new bootstrap.Modal(document.getElementById('deliveryModal'))
        // myModal.show();  

        var successModal = new bootstrap.Modal('#successModal');
        $('form').each(function() {
            $(this).validate({
                rules: {
                    phone: {
                        number: true,
                        minlength: 9,
                        maxlength: 10,
                    }
                },
                submitHandler: function(form) {
                    successModal.show();
                }
            });
        });

        //recaptcha
        // grecaptcha.ready(function() {
        //     grecaptcha.excute('6LeekLMjAAAAAOYfVsKYlRVIUUDSTi2-MPL2NgSI', {
        //         action: 'contact'
        //     }).then(function(token) if (token) {
        //         document.getElementByID('response').value = token;
        //     })

        // })
        function onClick(e) {
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute(`${process.env.RECAPTCHAV3_SITEKEY}`, {
                    action: 'submit'
                }).then(function(token) {
                    // Add your logic to submit to your backend server here.
                });
            });
        }
    </script>
@endsection
