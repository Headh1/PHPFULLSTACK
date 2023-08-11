<template>
    <div class="header">
        <h1>To Do list</h1>
    </div>

    <MainComponent/>
    <ListComponent/>

    <br>
    <br>
    <div class="footer">
        <h3> 푸터다 </h3>
    </div>
    </template>
<script>

import MainComponent from './components/MainComponent.vue';
import ListComponent from './components/ListComponent.vue';

export default {
    name:'App',
    created() {
    this.$store.dispatch('getList');
    },
    components: {
        MainComponent,
        ListComponent,
    }
}
</script>
<style>
    
</style>