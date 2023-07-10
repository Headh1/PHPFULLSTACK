<template>
    <div>
        <img @click="$emit('open')" :src="product.img" alt="">
        <h4 product.count="0" @click="$emit('open')">{{ product.name }}</h4>
        <p>{{ product.price }}</p>
        <p>{{ product.con }}</p>
        <p>{{ product.count }}</p>
    </div>
</template>

<script>
    export default {
        name:'Pro',
        props: {
            product: Object,
        }
    }
</script>

<style>
    
</style>