<template>
  <div class="setting-content column">
                    <div class="col-left">

                        <h2 class="fs-25 fw-semibold">เกี่ยวกับฝ่ายขาย</h2> 

                        <div class="user-infos my-4">
                            <div class="avatar w-70" style="background-image: url(../img/thumb/avatar-2.png);"></div>
                            <div>
                                <p class="m-0">ฝ่ายขายที่ดูแลคุณ</p>
                                <h4 class="fs-25 fw-semibold blue">สมหมาย ขายดี</h4>
                                <p class="m-0">090-123-4588</p>
                            </div>
                        </div><!--user-infos-->

                        <div class="d-block p-2"></div>

                        <h3 class="fs-20 fw-semibold mb-3">กำลังรอการตอบรับจากคุณ</h3> 

                        <div class="card-appointment active" data-show=".main">
                            <a href="#appointmentDetails" class="card-link target"></a>
                            <p class="date">19/08/2022 • 09:00น. - 09:20น. </p>
                            <h3>นัดเก็บเช็ค 2 ใบ</h3>
                            <p>เลขที่เช็ค 2564109998,2564109999 </p>
                            <p class="pt-3">
                                <span class="icons icon-link"></span>
                                <a class="link" href="#">ใบเสร็จ</a>
                            </p>
                        </div><!--card-appointment--> 

                        <div class="d-block p-3"></div>

                        <div class="d-flex mb-3 ">
                            <div>
                                <h3 class="fs-20 fw-semibold mb-3">ปฏิทินนัดพบ</h3>  
                                <h4 class="fs-20 blue">15 มิถุนายน 2565</h4> 
                            </div>

                            <button class="btn btn-outline calendar grey" data-bs-toggle="modal" data-bs-target="#calendarModal">
                                <span class="icons icon-calendar"></span>
                            </button>
                        </div>
                        

                        <ul class="nav nav-tabs nav-line-tabs nav-fill">
                            <li>
                                <a class="active" data-bs-toggle="tab" href="#tab1">
                                    นัดที่ยืนยัน
                                    <span class="line-animate h-2"></span>
                                </a>
                            </li>
    
                            <li>
                                <a data-bs-toggle="tab" href="#tab2">
                                    นัดที่เลื่อน
                                    <span class="line-animate h-2"></span>
                                </a>
                            </li>

                            <li>
                                <a data-bs-toggle="tab" href="#tab3">
                                    นัดที่ยกเลิก
                                    <span class="line-animate h-2"></span>
                                </a>
                            </li>

                            <li>
                                <a data-bs-toggle="tab" href="#tab4">
                                    นัดที่สำเร็จ
                                    <span class="line-animate h-2"></span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab1" class="tab-pane active">
                                <div class="card-appointment" data-show=".confirm">
                                    <a href="#appointmentDetails" class="card-link target"></a>
                                    <p class="date">15:00น. - 15:20น. </p>
                                    <h3>นัดเก็บเช็ค 2 ใบ</h3>
                                    <p>เลขที่เช็ค 2564109998,2564109999 </p>
                                    <p class="pt-3">
                                        <span class="icons icon-link"></span>
                                        <a class="link" href="#">ใบเสร็จ</a>
                                    </p>

                                    <div class="badge status confirm">ยืนยันการนัดแล้ว</div>
                                    
                                </div><!--card-appointment--> 

                                <div class="card-appointment" data-show=".confirm">
                                    <a href="#appointmentDetails" class="card-link target"></a>
                                    <p class="date">15:00น. - 15:20น. </p>
                                    <h3>นัดเก็บเช็ค 2 ใบ</h3>
                                    <p>เลขที่เช็ค 2564109998,2564109999 </p>
                                    <p class="pt-3">
                                        <span class="icons icon-link"></span>
                                        <a class="link" href="#">ใบเสร็จ</a>
                                    </p>

                                    <div class="badge status confirm">ยืนยันการนัดแล้ว</div>
                                </div><!--card-appointment--> 
                            </div><!--tab-pane-->

                            <!--===========[End] tab1 =========-->

                            <div id="tab2" class="tab-pane">
                                <div class="card-appointment" data-show=".postpone">
                                    <a href="#appointmentDetails" class="card-link target"></a>
                                    <p class="date">15:00น. - 15:20น. </p>
                                    <h3>นัดเก็บเช็ค 2 ใบ</h3>
                                    <p>เลขที่เช็ค 2564109998,2564109999 </p>
                                    <p class="pt-3">
                                        <span class="icons icon-link"></span>
                                        <a class="link" href="#">ใบเสร็จ</a>
                                    </p>

                                    <div class="badge status postpone">เลื่อนนัด</div>
                                </div><!--card-appointment--> 
                            </div><!--tab-pane-->

                            <!--===========[End] tab2 =========-->

                            <div id="tab3" class="tab-pane">
                                <div class="card-appointment" data-show=".cancel">
                                    <a href="#appointmentDetails" class="card-link target"></a>
                                    <p class="date">15:00น. - 15:20น. </p>
                                    <h3>นัดเก็บเช็ค 2 ใบ</h3>
                                    <p>เลขที่เช็ค 2564109998,2564109999 </p>
                                    <p class="pt-3">
                                        <span class="icons icon-link"></span>
                                        <a class="link" href="#">ใบเสร็จ</a>
                                    </p>

                                    <div class="badge status cancel">ยกเลิกนัด</div>
                                </div><!--card-appointment--> 
                            </div><!--tab-pane-->

                            <!--===========[End] tab3 =========-->

                            <div id="tab4" class="tab-pane">
                                <div class="card-appointment" data-show=".success">
                                    <a href="#appointmentDetails" class="card-link target"></a>
                                    <p class="date">15:00น. - 15:20น. </p>
                                    <h3>นัดเก็บเช็ค 2 ใบ</h3>
                                    <p>เลขที่เช็ค 2564109998,2564109999 </p>
                                    <p class="pt-3">
                                        <span class="icons icon-link"></span>
                                        <a class="link" href="#">ใบเสร็จ</a>
                                    </p>

                                    <div class="badge status success">นัดพบสำเร็จแล้ว</div>
                                </div><!--card-appointment--> 
                            </div><!--tab-pane-->

                            <!--===========[End] tab4 =========-->

                        </div><!--tab-content-->
                    </div><!--col-left-->
                    <div class="col-right">
                        <div id="appointmentDetails" class="section-target"></div>
 
                        <div class="appointment-details">
                            <div class="tab-pane main active">
                                <h2 class="fs-25 fw-semibold">รายละเอียดนัดพบ</h2> 

                                <hr class="hr-32x3-blue">

                                <div class="article fs-14">
                                    <p class="m-0">09:00น. - 09:20น. </p>
                                    <h4 class="fs-18 blue fw-semibold">นัดเก็บเช็ค 2 ใบ</h4>
                                    
                                    <p class="my-3">เลขที่เช็ค 2564109998,2564109999 </p> 
                                    <p>
                                        <span class="icons icon-link"></span>
                                        <a class="link" href="#">ใบเสร็จ</a>
                                    </p>

                                    <hr>

                                    <h4 class="fs-18 fw-semibold pt-2">ที่อยู่นัดพบ</h4>

                                    <p>300/4 ซ.66-68 ถ.นวมินทร์ แขวงคลองกุ่ม เขตบึงกุ่ม 
                                        กรุงเทพมหานคร 10240</p>
                                    
                                    <div class="map-search">
                                        <div class="search-option d-flex"> 
                                            <button class="btn btn-map route" type="button"></button>
                                        </div>
                                        
                                        <iframe class="h-240" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.0888390794103!2d100.40586521541081!3d13.713068990372548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e297c6f2377be1%3A0xd7393eb1d51cb378!2sThe%20Mall%20Bangkae!5e0!3m2!1sen!2sth!4v1667019326583!5m2!1sen!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 

                                        <ul class="nav nav-icons">
                                            <li data-bs-toggle="offcanvas" data-bs-target="#appointmentCancel">
                                                <span class="icons icon-delete"></span>
                                                <span class="title">ยกเลิกนัด</span>
                                            </li>
                                            <li data-bs-toggle="offcanvas" data-bs-target="#appointmentPostpone">
                                                <span class="icons icon-menu-board"></span>
                                                <span class="title">ขอเลื่อน</span>
                                            </li>
                                            <li data-bs-toggle="modal" data-bs-target="#confirmModal">
                                                <span class="icons icon-tick"></span>
                                                <span class="title">ยอมรับนัด</span>
                                            </li>
                                        </ul>
                                    </div> 
                                </div><!--article-->
                            </div><!--tab-pane[main]-->
                            
                            <div class="tab-pane confirm">
                                <div class="badge status confirm mb-2">ยืนยันการนัดแล้ว</div>

                                <h2 class="fs-25 fw-semibold">รายละเอียดนัดพบ</h2> 

                                <hr class="hr-32x3-blue">

                                <div class="article fs-14">
                                    <p class="m-0">09:00น. - 09:20น. </p>
                                    <h4 class="fs-18 blue fw-semibold">นัดเก็บเงินค่าสินค้า</h4>
                                    
                                    <p class="my-3">เลขที่เช็ค 2564109998,2564109999 </p> 
                                    <p>
                                        <span class="icons icon-link"></span>
                                        <a class="link" href="#">ใบเสร็จ</a>
                                    </p>

                                    <hr>

                                    <h4 class="fs-18 fw-semibold pt-2">ที่อยู่นัดพบ</h4>

                                    <p>300/4 ซ.66-68 ถ.นวมินทร์ แขวงคลองกุ่ม เขตบึงกุ่ม 
                                        กรุงเทพมหานคร 10240</p>
                                    
                                    <div class="map-search">
                                        <div class="search-option d-flex"> 
                                            <button class="btn btn-map route" type="button"></button>
                                        </div>
                                        
                                        <iframe class="h-240" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.0888390794103!2d100.40586521541081!3d13.713068990372548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e297c6f2377be1%3A0xd7393eb1d51cb378!2sThe%20Mall%20Bangkae!5e0!3m2!1sen!2sth!4v1667019326583!5m2!1sen!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 

                                        <ul class="nav nav-icons justify-content-center"> 
                                            <li data-bs-toggle="offcanvas" data-bs-target="#appointmentCancel">
                                                <span class="icons icon-delete"></span>
                                                <span class="title">ยกเลิกนัด</span>
                                            </li>
                                        </ul>
                                    </div> 
                                </div><!--article-->
                            </div><!--tab-pane[confirm]-->

                            <div class="tab-pane postpone">
                                <div class="alert alert-blue rounded mb-4">
                                  
                                   <h6 class="d-flex justify-content-center"> 
                                       <span class="icons"></span> รอฝ่ายขายของคุณยืนยัน
                                    </h6>
                                </div>
                                <div class="badge status postpone mb-2">เลื่อนนัด</div>

                                <h2 class="fs-25 fw-semibold">รายละเอียดนัดพบ</h2> 

                                <hr class="hr-32x3-blue">

                                <div class="article fs-14">
                                    <p class="m-0">09:00น. - 09:20น. </p>
                                    <h4 class="fs-18 blue fw-semibold">นัดเก็บเงินค่าสินค้า</h4>
                                    
                                    <p class="my-3">เลขที่เช็ค 2564109998,2564109999 </p> 
                                    <p>
                                        <span class="icons icon-link"></span>
                                        <a class="link" href="#">ใบเสร็จ</a>
                                    </p>

                                    <hr>

                                    <h4 class="fs-18 fw-semibold pt-2">ที่อยู่นัดพบ</h4>

                                    <p>300/4 ซ.66-68 ถ.นวมินทร์ แขวงคลองกุ่ม เขตบึงกุ่ม 
                                        กรุงเทพมหานคร 10240</p>
                                    
                                    <div class="map-search">
                                        <div class="search-option d-flex"> 
                                            <button class="btn btn-map route" type="button"></button>
                                        </div>
                                        
                                        <iframe class="h-240" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.0888390794103!2d100.40586521541081!3d13.713068990372548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e297c6f2377be1%3A0xd7393eb1d51cb378!2sThe%20Mall%20Bangkae!5e0!3m2!1sen!2sth!4v1667019326583!5m2!1sen!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
                                    </div> 
                                </div><!--article-->
                            </div><!--tab-pane[postpone]-->
                            <div class="tab-pane cancel">
                                
                                <div class="alert alert-blue rounded mb-4"> 
                                    <h6 class="d-flex justify-content-center"> 
                                        <span class="icons"></span> รอฝ่ายขายของคุณยืนยัน
                                     </h6>
                                 </div>
                                 <div class="badge status cancel mb-2">ยกเลิกนัด</div>
 
                                 <h2 class="fs-25 fw-semibold">รายละเอียดนัดพบ</h2> 
 
                                 <hr class="hr-32x3-blue">
 
                                 <div class="article fs-14">
                                     <p class="m-0">09:00น. - 09:20น. </p>
                                     <h4 class="fs-18 blue fw-semibold">นัดเก็บเงินค่าสินค้า</h4>
                                     
                                     <p class="my-3">เลขที่เช็ค 2564109998,2564109999 </p> 
                                     <p>
                                         <span class="icons icon-link"></span>
                                         <a class="link" href="#">ใบเสร็จ</a>
                                     </p>
 
                                     <hr>
 
                                     <h4 class="fs-18 fw-semibold pt-2">ที่อยู่นัดพบ</h4>
 
                                     <p>300/4 ซ.66-68 ถ.นวมินทร์ แขวงคลองกุ่ม เขตบึงกุ่ม 
                                         กรุงเทพมหานคร 10240</p>
                                     
                                     <div class="map-search">
                                         <div class="search-option d-flex"> 
                                             <button class="btn btn-map route" type="button"></button>
                                         </div>
                                         
                                         <iframe class="h-240" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.0888390794103!2d100.40586521541081!3d13.713068990372548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e297c6f2377be1%3A0xd7393eb1d51cb378!2sThe%20Mall%20Bangkae!5e0!3m2!1sen!2sth!4v1667019326583!5m2!1sen!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
  
                                     </div> 
                                 </div><!--article-->

                            </div><!--tab-pane[cancel]-->

                            <div class="tab-pane success">
                                <div class="badge status success mb-2">นัดพบสำเร็จแล้ว</div>
 
                                 <h2 class="fs-25 fw-semibold">รายละเอียดนัดพบ</h2> 
 
                                 <hr class="hr-32x3-blue">
 
                                 <div class="article fs-14">
                                     <p class="m-0">09:00น. - 09:20น. </p>
                                     <h4 class="fs-18 blue fw-semibold">นัดเก็บเงินค่าสินค้า</h4>
                                     
                                     <p class="my-3">เลขที่เช็ค 2564109998,2564109999 </p> 
                                     <p>
                                         <span class="icons icon-link"></span>
                                         <a class="link" href="#">ใบเสร็จ</a>
                                     </p>
 
                                     <hr>
 
                                     <h4 class="fs-18 fw-semibold pt-2">ที่อยู่นัดพบ</h4>
 
                                     <p>300/4 ซ.66-68 ถ.นวมินทร์ แขวงคลองกุ่ม เขตบึงกุ่ม 
                                         กรุงเทพมหานคร 10240</p>
                                     
                                     <div class="map-search">
                                         <div class="search-option d-flex"> 
                                             <button class="btn btn-map route" type="button"></button>
                                         </div>
                                         
                                         <iframe class="h-240" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.0888390794103!2d100.40586521541081!3d13.713068990372548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e297c6f2377be1%3A0xd7393eb1d51cb378!2sThe%20Mall%20Bangkae!5e0!3m2!1sen!2sth!4v1667019326583!5m2!1sen!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
  
                                     </div> 
                                 </div><!--article-->
                            </div><!--tab-pane[success]-->
                        </div><!--appointment-details-->
                        
                        
                    </div><!--col-right-->
                    
                </div><!--setting-content-->
</template>

<script>
export default {

}
</script>

<style>

</style>