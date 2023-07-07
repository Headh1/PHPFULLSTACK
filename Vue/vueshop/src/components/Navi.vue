<template>
    <!-- <div class="nav" >
        <a>{{ navList[0] }}</a>
        <a>{{ navList[1] }}</a>
        <a>{{ navList[2] }}</a>
        <a>{{ navList[3] }}</a>
    </div> -->

    <div class="nav" >
        <a v-for="item in navList" :key="item">{{ item }}</a>
    </div>

</template>

<script>
export default {
    name: 'Navi',
    props: {
        navList: Array,
    }
}
</script>

<style>
    
</style>