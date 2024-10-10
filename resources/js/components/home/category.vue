<template>
    <div>
        <div class="d-block wow fadeIn catalog-card">
            <a href="/all-catalog">
                <img class="w-100" src="assets/img/thumb/banner-catalog.png" alt="" />
            </a>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            token: '',
            page: 1,
            limit: 10,
            category: ''
        }
    },
    async created() {
        try {
            this.token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjdXN0b21lcl9pZCI6MywibmFtZSI6Im5rcjE3NiIsImVtYWlsIjoidGVzdEB0ZXN0LmNvbSIsInBob25lIjoiMDg4NDUyMjg1MSIsImltYWdlIjpudWxsLCJjcmVhdGVkX2F0IjoiMjAyMi0xMi0xOVQwOTozNjo0Mi4zOTVaIiwiaWF0IjoxNjcxNDQzMjM4LCJleHAiOjE2NzE0NTQwMzh9.r4p_o7YH3GukfkYjqJG8GvjCBqf-eGaCmgzmxWZV1qo';
        } catch (error) {
            console.error("Error parsing TokenCustomer:", error);
            // handle the error appropriately, such as setting a default value for this.token
        }
        await this.fetchProductCategory()
        // console.log(this.category);
    },
    methods: {
        async fetchProductCategory() {
            const headers = {
                Authorization: `Bearer ${this.token}`,
                'lang-id': '1'
            };
            try {
                const response = await axios.get(
                    `/api/customer/product/category`,
                    { headers }
                );
                const categoryNames = [];
                const categories = response.data.result;
                for (let i = 0; i < categories.length; i++) {
                    categoryNames.push(categories[i].name);
                }
                this.category = categoryNames;
            } catch (error) {
                console.error(error);
            }
        }

    }
}
</script>

<style lang="scss" scoped>
 .catalog-card {
    box-shadow: 0px 51px 50px -25px rgba(0, 26, 12, 0.1);
 }
</style>
