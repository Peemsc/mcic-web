<template>
  <!-- Customer -->
  <div
    class="avatar"
    style="background-image: url({{ dataSeller.result?.image  }})"
  ></div>
  <div>
    <h3>{{ dataSeller.result?.name }}</h3>
    <p :v-model="phoneFormat">{{ phoneFormat }}</p>
    <p>{{ dataSeller.result?.email }}</p>
  </div>
</template>
  
  <script>
export default {
  data() {
    return {
      dataSeller: {},
      phoneFormat: "",
    };
  },
  async beforeMount() {
    this.dataSeller = JSON.parse(localStorage.getItem("getLoginSeller"));
  },
  async mounted() {
    this.formatPhone();
  },
  methods: {
    formatPhone() {
      this.phoneFormat = this.dataSeller.result?.phone.replace(
        /(\d{3})(\d{3})(\d{4})/,
        "$1 $2 $3"
      );
    },
  },
};
</script>
  
  <style>
</style>