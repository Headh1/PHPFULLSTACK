<template>
    <div class="bg_black" v-if="modalFlg">
        <div class="bg_white">
            <img>
            <h4>{{ product }}</h4>
            <p>2</p>
            <p>3</p>
            <button>▲</button>
            <button>▼</button>
            <p>0</p>
            <button @click="$emit('close')">닫기</button>
        </div>
    </div>
</template>
<script>
export default {
        name:'Mo',
        props: {
            modalFlg : Boolean,
            product : Object,
        }
    }
</script>
<style>
</style>