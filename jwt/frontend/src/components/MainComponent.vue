<template>
    <div>
        <h1>메인</h1>
        
        <button @click="login()" v-if="!$store.state.isToken">로그인</button>
        <button @click="$store.dispatch('logout')" v-if="$store.state.isToken">로그아웃</button>
        {{ $store.state.token }}    
    </div>
</template>
<script>
export default {
    name: 'MainComponent',
    // methods : {
    //     logout() {
    //         this.$store.dispatch("logout");
    //     }
    // }
}
</script>
<style lang="">
    
</style>