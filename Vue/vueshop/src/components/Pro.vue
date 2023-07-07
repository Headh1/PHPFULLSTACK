<template>
    <div>
        <a @click="$emit('open')">
            <img :src="product.img" alt="">
        </a>
        <h4>{{ product.name }}</h4>
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