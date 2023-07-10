<template>
    <div class="o" v-if="modalFlg">
        <div class="d">
            <img :src="product[num].img" alt="">
            <p>제목 : {{ product[num].name }}</p>
            <p>가격 : {{ product[num].price * product[num].count }}</p>
            <button @click="$emit('up')"> + </button>
            <button @click="$emit('down')"> - </button>
            <p>{{ product[num].count }}</p>
            <button class="btn" @click="$emit('close')">닫기</button>
        </div>
    </div>
</template>
<script>
export default {
    name:'Mo',
    props:{
        modalFlg : Boolean,
        product:Object,
        num:Number
    }
}
</script>
<style>
</style>