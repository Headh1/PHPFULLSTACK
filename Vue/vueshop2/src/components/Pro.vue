<template>
    <div>
        <img :src="product.img" alt="" @click="$emit('open')">
        <p>제목 : {{ product.name }}</p>
        <p>가격 : {{ product.price }}</p>
    </div>
</template>
<script>
export default {
    name:'Pro',
    props:{
        product:Object,
    }
}
</script>
<style>
    img{
        height: 400px;
    }
</style>