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
  <br>
  <div class = "dis"> 
    지금 구매 하시면 <span>{{ per }}%</span> 할인 
  </div>
  <br>
  <!-- <div class="stTran" :class="{endTran : modalFlg}"> -->
  <transition name="moTran">
    <Mo @close="close()" 
    :modalFlg="modalFlg" 
    :num="num" 
    :products ="products"  />
  </transition>
  <!-- </div> -->
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
  <!-- <br> -->
  <!-- <input type="text" @input="inputT = $event.target.value;"> -->
  <!-- <input type="text" v-model="inputT"> -->
  <!-- <br> -->
  <!-- <span>{{ inputT }}</span> -->
  <!-- <br> -->
  <br>
  <Pro :product ="product" v-for="(product,i) in products" :key="i" @open="open(num); num=i;"/>
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
      per:90,
      hookT : false,
      inputT:"",
      navList:['Home','product','etc','service'],
      count:'10',
      num:0,
      products: data,
      p:0,
      modalFlg:false,
      styleB:'color:#BC8F8F',
      styleS:'color:salmon',
    }
  },
  mounted() {
    // if(this.per>0){
    //     setInterval(() => this.per= this.per-10 ,1000);
    //   }

    setInterval(()=> {
          if(this.per>0) {
            this.per = this.per-10;
          }
          else {
            this.per = 0;
          }
        },1000)
  },
  watch: {
    inputT(inp) {
      if( inp == 3 ) {
        alert('안녕');
        this.inputT= "";
      }
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
