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
  
  <div v-for="item in products" :key="item" >
    <h4 :style="styleS">{{item.name}}</h4>
    <p :style="styleB"> {{item.price}}</p>
  </div>
</template>

<script>

export default {
  name: 'App',
  data() { 
    return {
      products: [
        {name:'자켓',price:'5만원'},
        {name:'블라우스',price:'3만원'},
        {name:'스커트',price:'2만원'}
    ],
      product1 : '블라우스',
      product2 : '스커트',
      price1:'20,000원',
      price2:'50,000원',
      styleB:'color:#ccc',
      styleS:'color:salmon'
    }
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
