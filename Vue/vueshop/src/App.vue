<template>
  <!-- <img alt="Vue logo" src="./assets/logo.png"> -->
  <!-- <div>
    <h4 :style="styleB">{{product1}}</h4>
    <p>{{price1}}</p>
  </div>
  <div>
    <h4 :style="styleS">{{product2}}</h4>
    <p>{{price2}}</p>
  </div> -->
  <!-- <div>
    <h4 v-for="item in products" :key="item" :style="styleS">{{item.name}} : {{item.price}}</h4>
    <p></p>
  </div> -->
  
  <!-- <div v-for="item in products" :key="item" >
    <h4 :style="styleS">{{item.name}}</h4>
    <p :style="styleB"> {{item.price}}</p>
    <button @click="item.count++">수량증가</button>
    <button @click="item.count--">수량감소</button>
    <span> {{ item.count }}</span>
  </div>    -->

  <Navi :navList="navList" />
  <Mo @close="modalFlg=false" :modalFlg="modalFlg"  />
  <!-- <br>
  <br>
  <div class="bg_black" v-if="modalFlg">
    <div class="bg_white" >
      <img :src="products[num].img" alt="">
      <h4>{{ products[num].name }}</h4>
      <p>{{ products[num].price * products[num].count }}원</p>
      <p>{{products[num].con}}</p>
      <button @click="up(num)" class="btn"> ▲ </button>
      <button @click="down(num)" class="btn"> ▼ </button>
      <br>
      <span>현재 수량 :  {{ products[num].count }}개</span>
      <br>
      <button @click="close"> 확인</button>
    </div>
  </div> -->
  <br>
  <Pro :product ="product" v-for="(product,i) in products" :key="i" @open="modalFlg=true"/>
  <!-- <div v-for="(item,i) in products" :key="i" >
    <a @click="open(i)">
      <img :src="item.img" alt="">
    </a>
    <br>
    <a :style="styleS" @click="open(i)">{{item.name}}</a>
    <p :style="styleB"> {{item.price}}원</p>
  </div> -->
  <!-- <p v-if="true">if문 테스트</p> -->
  <!-- <p v-if="false">if문 테스트</p> -->


</template>

<script>
import data from './assets/js/data.js';
import Navi from './components/Navi.vue';
import Pro from './components/Pro.vue';
import Mo from './components/Mo.vue';

export default {
  name: 'App',
  data() { 
    return {
      navList:['Home','product','etc','service'],
      count:'10',
      products: data,
      p:0,
      modalFlg:false,
      styleB:'color:#BC8F8F',
      styleS:'color:salmon'

    }
  },
  methods: {
    up(i) {
      this.num=i;
      this.products[i].count++;
    },
    down(i) {
      this.num=i;
      this.products[i].count--;
      if (this.products[i].count <0){
        this.products[i].count = 0
      }
    },
    open(i){
      this.modalFlg=true;
      this.num=i;
      this.products[i].count =1;
    },
    close(){
      this.modalFlg=false;
    },
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
