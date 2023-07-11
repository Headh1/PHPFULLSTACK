<template>
    <div v-if="$store.state.tbflg == 0">
        <Post/>
    </div>

    <div v-if="$store.state.tbflg == 1">
        <div class="upload-img" :class="$store.state.filter" :style="{'backgroundImage':`url(${$store.state.imgUrl})`}"></div>
        <div class="filter-box">
            <div :style="{'backgroundImage':`url(${$store.state.imgUrl})`}" 
            class="filter" :class="fill" v-for="fill in filterList" :key="fill" @click="$store.commit('changeFilter',fill)">{{ fill }} </div>
        </div>
    </div>

    <div v-if="$store.state.tbflg == 2">
        <div class="upload-img" :style="{'backgroundImage':`url(${$store.state.imgUrl})`}"></div>
        <div class="write-box">
            <textarea name="content" id="content" placeholder="내용을 입력해 주세요"></textarea>
        </div>
    </div>

</template>
<script>
import Post from '../components/Post.vue';

export default {
    name:'Conteiner',
    data() { 
        return {
            filterList : ["aden", "_1977", "brannan", "brooklyn", "clarendon", 
            "earlybird", "gingham", "hudson", "inkwell", "kelvin", "lark", "lofi", 
            "maven", "mayfair", "moon", "nashville", "perpetua", "reyes", "rise", 
            "slumber", "stinson", "toaster", "valencia", "walden", "willow", "xpro2"]
        }
    },
    components: {
        Post,
    }
}

</script>
<style>
    
</style>