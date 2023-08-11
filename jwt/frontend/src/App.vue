<template>
  <div>
    <!-- <button @click="login()">로그인</button>
    <button @click="logout()">로그아웃</button>
    {{ $store.state.token }} -->
    <router-view></router-view>
  </div>
</template>

<script>
// import axios from 'axios';
// import router from './router'

export default {
  name: 'App',
  // methods:{
  //   login() {
  //     router.push('main');
      // axios.get('http://localhost:8000/api/token?id=app')
      // .then(res => {
      //   console.log(res.data);
      //   this.$store.state.token = res.data.token;
      // })
      // .catch(err => {
      //   if(err.state >= 400) {
      //     console.log('err');
      //   }
      // })
    // },
    // logout() {
    //   router.push('login')
    // }
  // },
}
//   data() {
//   return {
//   token:'',
//   },
//   methods: {
//   login() {
//   axios.get('http://localhost:8000/api/token?id=jin')
//   .then(res=> {
//   console.log(res.data);
//   this.token = res.data.token;
//   })
//   },
//   components: {
//     HelloWorld
//   }
// }
</script>
<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
