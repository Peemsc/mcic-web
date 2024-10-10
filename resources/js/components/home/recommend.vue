<template>
    <div class="row">
        <div class="col-lg-6 mb-lg-5" v-for="(items, index) in recommendProducts.slice(0, 2)" :key="index"
            v-if="recommendProducts">
            <div class="card-product highlight recommended wow fadeIn" v-if="items.recommend_product = 1">
                <a href="/products-detail" class="card-link"></a>
                <div class="card-photo has-line">
                    <div class="photo" :style="{ 'background-image': 'url(' + items.image + ')' }"></div>
                </div>

                <div class="img-recommended">
                    <img src="assets/img/thumb/img-recommended.jpg" alt="">
                </div>

                <div class="card-body ps">
                    <h3>{{ items.name }}</h3>

                    <div class="price blue">
                        ฿{{ items.price }}
                    </div>

                    <button class="btn"><a href="/products-detail">SHOP NOW</a></button>
                </div>
                <!--card-body-->
            </div>
            <!--card-promotion-->
        </div>
        <!--col-md-6-->
    </div>
    <!--row-->

    <div class="row g-4">
        <div class="col-sm-3 col-6" v-for="(itemsSuggest, index) in recommendProducts.slice(2)" :key="index"
            v-if="recommendProducts">
            <div class="card-product wow fadeIn">
                <a href="/products-detail" class="card-link"></a>
                <span class="label recommend">แนะนำ</span>
                <span class="label discount">
                    ลด<br>
                    40%
                </span>
                <div class="card-photo">
                    <div class="photo" :style="{ 'background-image': 'url(' + itemsSuggest.image + ')' }">
                        <img src="assets/img/thumb/frame-100x103.png" alt="">
                    </div>
                </div>
                <div class="card-body">
                    <p>
                        {{ itemsSuggest.name }}
                    </p>
                    <div class="price blue">
                        ฿{{ discountedPrice[index] }}<span class="discount">฿{{ itemsSuggest.price }} </span>
                    </div>
                </div>
            </div>
            <!--card-product-->
        </div>
        <!--col-6-->
    </div>
    <!--row-->
</template>

<script>
import productsModule from '../../store/products'
export default {
    data() {
        return {
            token: '',
            page: 1,
            limit: 6,
            // recommendProducts: ''
        }
    },
    created() {
        this.$store.registerModule("products", productsModule);
        this.$store.dispatch('products/fetchRecommendProducts', { page: this.page, limit: this.limit });
    },
    computed: {
        discountedPrice() {
            const discountPercentage = 40;
            return this.$store.state.products.recommendProducts.map(product => {
                const originalPrice = parseFloat(product.price);
                const discountAmount = (discountPercentage / 100) * originalPrice;
                const discountedPrice = originalPrice - discountAmount;
                return discountedPrice.toFixed(2);
            });
        },
        recommendProducts() {
            return this.$store.state.products.recommendProducts;
        }
    }
}
</script>

<style></style>
