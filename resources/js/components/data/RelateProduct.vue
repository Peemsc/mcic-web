<template>
    <div>
        <div class="row g-4 g-md-5">
            <div class="col-lg-3 col-sm-4 col-6" v-for="(items, index) in recommendProducts" :key="index">
                <div class="card-product">
                    <span class="label recommend">แนะนำ</span>
                    <span class="label discount">
                        ลด<br />
                        40%
                    </span>
                    <a class="card-photo" href="/products-detail">
                        <div class="card-photo">
                            <div class="photo" :style="{ 'background-image': 'url(' + items.image + ')' }">
                                <img src="assets/img/thumb/frame-100x103.png" alt="">
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
    </div>
</template>

<script>
import productsModule from '../../store/products'
export default {
    data() {
        return {
            token: '',
            page: 1,
            limit: 4,
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
