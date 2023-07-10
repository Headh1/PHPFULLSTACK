<template>
<h1>도서 쇼핑몰</h1>
<Navi :navL="navL" />
<br>
<Mo :product="product" 
  @close="modalFlg=false" 
  :num="num" 
  :modalFlg="modalFlg"
  @up="product[num].count++"
  @down="product[num].count--"
  />
<Pro v-for="(product,i) in product" :key="i" :product="product" @open="modalFlg=true; product.count=1; num=i"/>

</template>

<script>
import data from './assets/js/data.js';
import Navi from './components/Navi.vue';
import Mo from './components/Mo.vue';
import Pro from './components/Pro.vue';

export default {
  name: 'App',
  data() {
    return{
      product : data,
      navL: ['main' ,'book' , 'cart'],
      modalFlg:false,
    }
  },
  components: {
    Navi,Pro,Mo,
  }
}
</script>

<style>
@import url('./assets/css/app.css');

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
