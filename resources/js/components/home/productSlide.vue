<template>
    <div>
        <div class="swiper-overflow wow fadeIn">
            <div class="swiper-container swiper-pd-new">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" v-for="(product, index) in newProducts" :key="index">
                        <div class="card-product">
                            <a href="/products-detail" class="card-link"></a>
                            <span class="label recommend">ใหม่!</span>
                            <span class="label discount">
                                ลด<br>
                                40%
                            </span>
                            <div class="card-photo">
                                <div v-if="product.image" class="photo img-fluid" :style="{ 'background-image': 'url(' + product.image + ')' }" >
                                    <!-- <img :src="product.image" alt=""> -->
                                    <img src="assets/img/thumb/frame-100x103.png" alt="" >
                                </div>
                                <div v-if="!product.image" class="photo" :style="{ 'background-image': 'url(' + product.image + ')' }" >
                                    <!-- <img :src="product.image" alt=""> -->
                                    <img src="../../../../public/assets/img/thumb/no-image.jpg" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p>
                                    {{ product.name }}
                                </p>
                                <div class="price blue">
                                    ฿{{ discountedPrice[index] }} <span class="discount">฿{{ product.price }} </span>
                                </div>
                            </div>
                        </div>
                        <!--card-product-->
                    </div>
                    <!--swiper-slide-->
                </div>
                <!--swiper-wrapper-->
            </div>
            <!--swiper-container-->

            <div class="swiper-pagination pd-new d-none"></div>

            <div class="swiper-button-group">
                <div class="swiper-button swiper-button-prev lg pd-new"></div>
                <div class="swiper-button swiper-button-next lg pd-new"></div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            current_page: '',
            total_item: '',
            token: '',
            page: 1,
            limit: 10,
            newProducts: ''
        }
    },
    async created() {
        try {
            this.token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjdXN0b21lcl9pZCI6MywibmFtZSI6Im5rcjE3NiIsImVtYWlsIjoidGVzdEB0ZXN0LmNvbSIsInBob25lIjoiMDg4NDUyMjg1MSIsImltYWdlIjpudWxsLCJjcmVhdGVkX2F0IjoiMjAyMi0xMi0xOVQwOTozNjo0Mi4zOTVaIiwiaWF0IjoxNjcxNDQzMjM4LCJleHAiOjE2NzE0NTQwMzh9.r4p_o7YH3GukfkYjqJG8GvjCBqf-eGaCmgzmxWZV1qo';
        } catch (error) {
            console.error("Error parsing TokenCustomer:", error);
            // handle the error appropriately, such as setting a default value for this.token
        }
        await this.fetchNewProducts();
        // console.log(this.newProducts);
    },
    computed: {
        discountedPrice() {
            const discountPercentage = 40;
            return this.newProducts.map(product => {
                const originalPrice = parseFloat(product.price);
                const discountAmount = (discountPercentage / 100) * originalPrice;
                const discountedPrice = originalPrice - discountAmount;
                return discountedPrice.toFixed(2);
            });
        }

    },
    mounted() {

    },
    methods: {
        async fetchNewProducts() {
            const headers = {
                Authorization: `Bearer ${this.token}`,
                'lang-id': '1'
            };
            const payload = {
                page: this.page,
                limit: this.limit
            };
            try {
                const response = await axios.get(
                    `/api/customer/product/new-comming?page=${payload.page}&limit=${payload.limit}`,
                    { headers }
                );
                this.newProducts = response.data.result.list;
            } catch (error) {
                console.error(error);
            }
        },

    }
}
</script>

<style lang="scss" scoped></style>
