<template>
    <div class="container">
        <ul class="nav nav-tabs nav-fill normal brands mb-4 wow fadeIn">
            <li>
                <a class="active" data-bs-toggle="tab" data-bs-target="#home-tab-pane">แบรนด์ที่ 1</a>
            </li>
            <li>
                <a data-bs-toggle="tab" data-bs-target="#home-tab-pane">แบรนด์ที่ 2</a>
            </li>
            <li>
                <a data-bs-toggle="tab" data-bs-target="#home-tab-pane">แบรนด์ที่ 3</a>
            </li>
            <li>
                <a data-bs-toggle="tab" data-bs-target="#home-tab-pane">แบรนด์ที่ 4</a>
            </li>
            <li>
                <a data-bs-toggle="tab" data-bs-target="#home-tab-pane">แบรนด์ที่ 5</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active show">
                <div class="card-product highlight bestseller mb-lg-5 mb-4 wow fadeIn"  v-for="(item, index) in bestSeller.slice(0, 1)" :key="index">
                    <a href="/products-detail" class="card-link"></a>
                    <div class="card-photo has-line">
                        <div class="photo" :style="{ 'background-image': 'url(' + item.image + ')' }">
                            <img src="assets/img/thumb/frame-100x103.png" alt="" >
                        </div>
                    </div>

                    <div class="number">0{{ bestSeller[0].beat_seller_product }}</div>

                    <div class="card-body ps">
                        <h3>{{ bestSeller[0].name }}</h3>

                        <div class="price blue">
                            ฿{{ bestSeller[0].price }}
                        </div>

                        <button class="btn">SHOP NOW</button>
                    </div>
                    <!--card-body-->
                </div>
                <!--card-product-->

                <div class="row g-2">
                    <div class="col-sm-3 col-6" v-for="(items, index) in bestSeller.slice(1)" :key="index">
                        <div class="card-product shadow wow fadeIn" >
                            <a href="/products-detail" class="card-link"></a>
                            <span class="label discount">
                                ลด<br>
                                40%
                            </span>
                            <div class="card-photo">
                                <div class="photo"
                                :style="{ 'background-image': 'url(' + items.image + ')' }" style="height: 150px;">
                                </div>
                            </div>

                            <div class="number">0{{ index + 2 }}</div>

                            <div class="card-body">
                                <p>
                                    {{ items.name }}
                                </p>
                                <div class="price blue">
                                    ฿{{ discountedPrice[index] }} <span class="discount">฿{{ items.price }}</span>
                                </div>
                            </div>
                        </div>
                        <!--card-product-->
                    </div>
                    <!--col-6-->
                </div>
                <!--row-->
            </div>
            <!--tab-pane-->
        </div>
        <!--tab-content-->
    </div>
    <!--container-->
</template>

<script>
export default {
    data() {
        return {
            token: '',
            page: 1,
            limit: 5,
            bestSeller: ''
        }
    },
    async created() {
        try {
            this.token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjdXN0b21lcl9pZCI6MywibmFtZSI6Im5rcjE3NiIsImVtYWlsIjoidGVzdEB0ZXN0LmNvbSIsInBob25lIjoiMDg4NDUyMjg1MSIsImltYWdlIjpudWxsLCJjcmVhdGVkX2F0IjoiMjAyMi0xMi0xOVQwOTozNjo0Mi4zOTVaIiwiaWF0IjoxNjcxNDQzMjM4LCJleHAiOjE2NzE0NTQwMzh9.r4p_o7YH3GukfkYjqJG8GvjCBqf-eGaCmgzmxWZV1qo';
        } catch (error) {
            console.error("Error parsing TokenCustomer:", error);
            // handle the error appropriately, such as setting a default value for this.token
        }
        await this.fetchRecommendProduct();
        console.log(this.bestSeller);
    },
    computed: {
        discountedPrice() {
            const discountPercentage = 40;
            return this.bestSeller.map(product => {
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
        async fetchRecommendProduct() {
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
                    `/api/customer/product/beatseller?page=${payload.page}&limit=${payload.limit}`,
                    { headers }
                );
                this.bestSeller = response.data.result.list;
            } catch (error) {
                console.error(error);
            }
        },

    }
}
</script>

<style></style>
