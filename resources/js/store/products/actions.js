import axios from "../../../plugins/axios";

export default {
    fetchNewProducts: ({ commit }) => {
        const token = JSON.parse(localStorage.getItem("TokenCustomer"));
        const headers = { Authorization: `Bearer ${token}`, "lang-id": "1" };
        const payload = {
            page: 1,
            limit: 10,
        };
        axios
            .get(
                `api/customer/product/new-comming?page=${payload.page}&limit=${payload.limit}`,
                { headers }
            )
            .then((response) => {
                commit("setNewProducts", response.data.result);
            })
            .catch((error) => {
                console.error(error);
            });
    },
    async fetchRecommendProducts({ commit }, { page, limit }) {
        const token =
            "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjdXN0b21lcl9pZCI6MywibmFtZSI6Im5rcjE3NiIsImVtYWlsIjoidGVzdEB0ZXN0LmNvbSIsInBob25lIjoiMDg4NDUyMjg1MSIsImltYWdlIjpudWxsLCJjcmVhdGVkX2F0IjoiMjAyMi0xMi0xOVQwOTozNjo0Mi4zOTVaIiwiaWF0IjoxNjcxNDQzMjM4LCJleHAiOjE2NzE0NTQwMzh9.r4p_o7YH3GukfkYjqJG8GvjCBqf-eGaCmgzmxWZV1qo";
        const headers = {
            Authorization: `Bearer ${token}`,
            "lang-id": "1",
        };
        const payload = {
            page: page,
            limit: limit,
        };
        try {
            const response = await axios.get(
                `/api/customer/product/recommend?page=${payload.page}&limit=${payload.limit}`,
                { headers }
            );
            commit("SET_RECOMMEND_PRODUCTS", response.data.result.list);
        } catch (error) {
            console.error(error);
        }
    },
    async fetchProductsDetails({commit}, {id}) {
        const token =
            "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjdXN0b21lcl9pZCI6MywibmFtZSI6Im5rcjE3NiIsImVtYWlsIjoidGVzdEB0ZXN0LmNvbSIsInBob25lIjoiMDg4NDUyMjg1MSIsImltYWdlIjpudWxsLCJjcmVhdGVkX2F0IjoiMjAyMi0xMi0xOVQwOTozNjo0Mi4zOTVaIiwiaWF0IjoxNjcxNDQzMjM4LCJleHAiOjE2NzE0NTQwMzh9.r4p_o7YH3GukfkYjqJG8GvjCBqf-eGaCmgzmxWZV1qo";
        const headers = {
            Authorization: `Bearer ${token}`,
            "lang-id": "1",
        };
        try {
            const response = await axios.get(
                `/api/customer/product/detail/${id}`,
                { headers }
            );
            commit('SET_DETAIL_PRODUCTS',response.data.result)
        } catch (error) {
            console.error(error);
        }
    },
};
