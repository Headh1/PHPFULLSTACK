<template>
    <!-- {{ $store.state.boardData }} -->
    <div class = "post" v-for="item in $store.state.boardData" :key="item">
        <div class="post-img" :class="item.filter" :style="{'backgroundImage':`url(${item.img})`}" >
        </div>
        <div class="post-content">
            <p> 좋아요 : {{item.likes}} </p>
            <p><strong>{{item.name}}</strong><br>{{item.content}}</p>
            <p>{{item.created_at}}</p>
        </div>
    </div>
</template>
<script>
export default {
    name:'Post',
}
</script>
<style>
    
</style>