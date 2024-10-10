<template>
    <div>

        <div class="container">
            <div class="product-details">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="product-gallery">
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" v-for="(galleryThumbs, index) in fetchProductDetails.image"
                                        :key="index">
                                        <a class="photo" data-fancybox :href="galleryThumbs.image"
                                            :style="{ 'background-image': `url(${galleryThumbs.image})` }">
                                            <img src="assets/img/thumb/frame-100x100.png" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <!--swiper-wrapper-->
                            </div>
                            <!--gallery-top-->

                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" v-for="(gallery, index) in fetchProductDetails.image"
                                        :key="index">
                                        <a class="photo" data-fancybox :href="gallery.image"
                                            :style="{ 'background-image': `url(${gallery.image})` }">
                                            <img src="assets/img/thumb/frame-100x100.png" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <!--swiper-wrapper-->
                            </div>
                            <!--gallery-thumbs-->
                        </div>
                        <!--product-gallery-->
                    </div>
                    <!--col-lg-5-->
                    <div class="col-lg-7">
                        <div class="product-infos">
                            <div class="pd-row">
                                <h4>{{ fetchProductDetails && fetchProductDetails.info && fetchProductDetails.info.name }}
                                </h4>
                                <p class="m-0">{{ fetchProductDetails && fetchProductDetails.info &&
                                    fetchProductDetails.info.sku_code }}</p>
                            </div>


                            <!--pd-row-->

                            <div class="pd-row d-flex">
                                <div>
                                    <div class="price">
                                        ฿{{ fetchProductDetails && fetchProductDetails.info &&
                                            fetchProductDetails.info.price }}<span class="discount">฿{{ fetchProductDetails &&
        fetchProductDetails.info && fetchProductDetails.info.price }} </span>
                                    </div>

                                    <div class="label-list">
                                        <span class="label discount">ส่วนลด 40%</span>
                                        <span class="label dcash">DCASH</span>
                                    </div>
                                </div>

                                <a class="btn btn-outline mt-auto ms-auto" href="buy-category.html">
                                    ซื้อตามหมวดหมู่
                                </a>

                            </div>
                            <!--pd-row-->

                            <div class="pd-row" v-if="fetchProductDetails.promotion" :key="index">
                                <p class="m-0 fw-light"><strong class="red">โปรโมชั่น</strong>: {{
                                    fetchProductDetails.promotion.find(promo => promo.promotion) }}
                                </p>
                            </div>
                            <div class="pd-row" v-else>
                                <p class="m-0 fw-light"><strong class="red">โปรโมชั่น</strong>: ไม่มี</p>
                            </div>

                            <!--pd-row-->

                            <div class="pd-row button-action">
                                <button class="btn" type="button">
                                    <span class="icons icon-heart"></span>
                                    <!-- <span class="icons icon-heart fill"></span> -->
                                </button>

                                <div class="dropdown share-group">
                                    <button class="btn" data-bs-toggle="dropdown" data-bs-display="static" type="button">
                                        <span class="icons icon-share"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <span class="icons">
                                            <img class="svg-js" src="img/icons/icon-grey-facebook.svg" alt="">
                                        </span>

                                        <span class="vr"></span>

                                        <span class="icons">
                                            <img class="svg-js" src="img/icons/icon-grey-instagram.svg" alt="">
                                        </span>

                                        <span class="vr"></span>

                                        <span class="icons">
                                            <img class="svg-js" src="img/icons/icon-grey-line.svg" alt="">
                                        </span>
                                    </div>
                                </div>
                                <!--dropdown-->

                            </div>
                            <!--pd-row-->

                            <div class="pd-row mt-3">
                                <h4 class="mb-3">สั่งซื้อ</h4>

                                <div class="row g-sm-4 g-3 form">
                                    <div class="col-md-6">
                                        <h6 class="mb-2 fs-15 fw-medium">กรุณาเลือก</h6>
                                        <select class="form-select" v-model="selectedPackage">
                                            <option v-for="(item, index) in fetchProductDetails.package" :value="index">{{
                                                item.name }}</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="fs-15 d-flex fw-medium">
                                            ระบุจำนวน
                                            <span class="mb-2 ms-auto grey">{{ selectedPackagePrice ?
                                                selectedPackagePrice.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' ฿'
                                                : '00.00 ฿' }}</span>
                                        </h6>
                                        <input type="text" class="form-control text-center" v-model="quantity">
                                    </div>
                                    <!--col-md-6-->

                                    <div class="col-xxl-3 col-md-4 col-6">
                                        <a class="btn btn-outline w-100 btn-xl" href="/cart">
                                            จองทันที
                                        </a>
                                    </div>
                                    <div class="col-xxl-9 col-md-8 col-6">
                                        <button class="btn btn-xl w-100" type="button">
                                            ใส่ตะกร้า
                                        </button>
                                    </div>
                                </div>
                                <!--row-->
                            </div>
                            <!--pd-row-->
                        </div>
                        <!--product-infos-->
                    </div>
                    <!--col-lg-7-->
                </div>
                <!--row-->
            </div>
            <!--product-details-->

            <div class="product-details mt-5 pt-lg-3">
                <ul class="nav nav-tabs nav-line-tabs">
                    <li>
                        <a class="active" data-bs-toggle="tab" href="#tab1" aria-selected="true" role="tab">
                            รายละเอียด
                            <span class="line-animate"></span>
                        </a>
                    </li>

                    <li>
                        <a data-bs-toggle="tab" href="#tab2" aria-selected="false" tabindex="-1" role="tab">
                            สรรพคุณ
                            <span class="line-animate"></span>
                        </a>
                    </li>

                    <li>
                        <a data-bs-toggle="tab" href="#tab3" aria-selected="false" tabindex="-1" role="tab">
                            วิธีการใช้งาน
                            <span class="line-animate"></span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="tab1" class="tab-pane active">
                        <article class="article">
                            <h4>รายละเอียดสินค้า</h4>

                            <p v-html="fetchProductDetails && fetchProductDetails.info &&
                                fetchProductDetails.info.detail"></p>
                        </article>
                    </div>
                    <!--tab-pane-->

                    <!--=================Tab1===================-->

                    <div id="tab2" class="tab-pane">
                        <article class="article">
                            <h4>สรรพคุณ</h4>

                            <p v-html="fetchProductDetails && fetchProductDetails.info &&
                                fetchProductDetails.info.properties"></p>

                        </article>
                    </div>
                    <!--tab-pane-->

                    <!--=================Tab2===================-->

                    <div id="tab3" class="tab-pane">
                        <article class="article">
                            <h4>วิธีการใช้งาน</h4>

                            <p v-html="fetchProductDetails && fetchProductDetails.info &&
                                fetchProductDetails.info.how_to_use"></p>

                        </article>
                    </div>
                    <!--tab-pane-->

                    <!--=================Tab3===================-->
                </div>
                <!--tab-content-->
            </div>
            <!--product-details-->

            <div class="product-details mt-5">
                <h4 class="mb-md-5 mb-4">สินค้าที่เกี่ยวข้อง</h4>

                <div class="row g-4 g-md-5">
                    <div class="col-lg-3 col-sm-4 col-6" v-for="(items, index) in fetchProductDetails.release" :key="index">
                        <div class="card-product">
                            <span class="label recommend">แนะนำ</span>
                            <span class="label discount">
                                ลด<br />
                                40%
                            </span>
                            <a class="card-photo" href="/products-detail">
                                <div class="card-photo">
                                    <div class="photo" :style="{ 'background-image': 'url(' + items.image + ')' }" style="height: 150px;">
                                        <!-- <img src="assets/img/thumb/frame-100x103.png"  alt=""> -->
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <p>
                                    <a href="/products-detail">
                                        {{ items.name }}
                                    </a>
                                </p>
                                <div class="price blue">
                                    ฿{{ discountedPrice[index] }}<span class="discount">฿{{ items.price }} </span>
                                </div>
                            </div>
                        </div>
                        <!--card-product-->
                    </div>
                </div>
                <!--row-->
            </div>
            <!--product-details-->
        </div>
    </div>
</template>

<script>
import productsModule from '../../store/products'

export default {
    props: {
        id: {
            type: Number,
            required: true
        }
    },
    data() {
        return {
            id: 18,
            promotion: [],
            quantity: '',
            selectedPackage: 0,
            amount: null
        }
    },
    created() {
        this.$store.registerModule('products', productsModule)
        this.$store.dispatch('products/fetchProductsDetails', { id: this.id })
    },
    computed: {
        fetchProductDetails() {
            return this.$store.state.products.detailProducts
        },
        selectedPackagePrice() {
            if (this.fetchProductDetails.package && this.fetchProductDetails.package.length > 0) {
                return parseFloat(this.fetchProductDetails.package[this.selectedPackage].price) * parseInt(this.quantity);
            }
            return 0;
        },
        selectedPackagePriceFormatted() {
            const price = this.selectedPackagePrice.toFixed(2).toString();
            return price.replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' ฿';
        },
        discountedPrice() {
            const discountPercentage = 40;
            return this.fetchProductDetails.release.map(product => {
                const originalPrice = parseFloat(product.price);
                const discountAmount = (discountPercentage / 100) * originalPrice;
                const discountedPrice = originalPrice - discountAmount;
                return discountedPrice.toFixed(2);
            });
        },
    },
    methods: {
    }
}
</script>


<style lang="scss" scoped>
.card-product .photo {
    background-size: cover ;
}
</style>
