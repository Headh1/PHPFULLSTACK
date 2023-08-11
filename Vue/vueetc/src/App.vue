<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>APP.vue</h1>
  <p>{{ data.name }}</p>
  <router-link to="/">홈</router-link>
<router-link to="/post">post</router-link>

<router-view></router-view>
</template>

<script>
import { ref } from 'vue';

export default {

  name: 'App',
  setup() {
    let data = ref({name:'name',age:'28'})
    let test = 'aaa';
  
    return {test , data};
  }
}
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
