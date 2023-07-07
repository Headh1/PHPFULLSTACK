<template>
    <div>
        <img @click="$emit('open')" :src="product.img" alt="">
        <h4 @click="$emit('open')">{{ product.name }}</h4>
        <p>{{ product.price }}</p>
        <p>{{ product.con }}</p>
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