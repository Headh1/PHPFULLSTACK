<template>
  <div class="header">
    <ul>
      <li class="header-button header-button-left" v-if=" $store.state.tbflg != 0" @click="$store.commit('changeTbflg',0)">취소</li>
      <li>
        <img class="logo" src="./assets/logo.png" alt="logo">
      </li>
      <li class="header-button header-button-right" v-if=" $store.state.tbflg == 1" @click="$store.commit('changeTbflg',2)">다음</li>
    </ul>
  </div>

  <Conteiner/>

  <button v-if="$store.state.flg && $store.state.tbflg == 0" @click="$store.dispatch('getMoList')">더보기</button>

  <br>
  <br>
  <div class="footer">
    <div class="footer-button-store">
      <label for="file" class="label-store" v-if="$store.state.tbflg == 0">+</label>
      <input accept="image/*" type="file" id="file" class="input-file" @change="updateImg">
    </div>
  </div>
</template>

<script>
import Conteiner from './components/Conteiner.vue';

export default {

  name: 'App',
  created() {
    this.$store.dispatch('getList');
  },
  methods: {
    updateImg(e) {
      let file = e.target.files;
      let imgUrl = URL.createObjectURL(file[0]);
      this.$store.commit('changeImgurl',imgUrl);
      this.$store.commit('changeTbflg',1);
      e.target.value = '';
    }
  },
  components: {
    Conteiner,
  }
}
</script>

<style>
@import url('./assets/css/common.css');


#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialia sed;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
