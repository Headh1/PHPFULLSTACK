<template>
    <div class="nav">
        <a v-for="item in navL" :key="item">{{ item }}</a>
    </div>
</template>

<script>
export default {
    name:'Navi',
    props:{
        navL:Array,
    }

}
</script>
<style>

</style>