<template>
    <li class="nav-logout">
      <a class="cursor-pointer" @click="logout">ออกจากระบบ</a>
    </li>
  </template>
  
  <script>
  export default {
    data() {
      return {};
    },
    methods: {
      async logout() {
        try {
          let tokenSeller = localStorage.getItem("getLoginSeller");
          if (tokenSeller) {
            localStorage.clear();
            window.location.assign("/");
          }
        } catch (err) {
          console.log(err);  
        }
      },
    },
  };
  </script>
  
  <style lang="scss" scoped>
  .cursor-pointer {
    cursor: pointer;
  }
  </style>