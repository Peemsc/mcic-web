<template>
  <!-- Customer -->
  <div
    class="avatar"
    style="background-image: url({{ dataCustomer.result?.image  }})"
  ></div>
  <div>
    <h3>{{ dataCustomer.result?.name }}</h3>
    <p :v-model="phoneFormat">{{ phoneFormat }}</p>
    <p>{{ dataCustomer.result?.email }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      dataCustomer: {},
      phoneFormat: "",
    };
  },
  async beforeMount() {
    this.dataCustomer = JSON.parse(localStorage.getItem("getLoginCustomer"));
  },
  async mounted() {
    this.formatPhone();
  },
  methods: {
    formatPhone() {
      this.phoneFormat = this.dataCustomer.result?.phone.replace(
        /(\d{3})(\d{3})(\d{4})/,
        "$1 $2 $3"
      );
    },
  },
};
</script>

<style>
</style>