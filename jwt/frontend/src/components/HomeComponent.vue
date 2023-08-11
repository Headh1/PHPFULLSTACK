<template>
    <div>
        <h1>홈</h1>
        <!-- <router-link to='/login'>Login</router-link> -->
        <!-- <router-link to='/main'>Main</router-link> -->
        <button @click="btn('login');">로그인</button>
        <button @click="btn('main');">메인</button>
    </div>
</template>

<script>
import router from '@/router';

export default {
    name: 'HomeComponent',

    methods: {
        btn(path) {
            router.push(path);
        }
    }
}
</script>

<style>
    
</style>