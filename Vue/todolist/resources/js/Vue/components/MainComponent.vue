<template>
    <div>
        <input type="text" id="content">
        <button @click="$store.dispatch('WriteList')"> 작성 </button>
    </div>
</template>
<script>
export default {
    name:'MainComponent',
}
</script>
<style>
    
</style>