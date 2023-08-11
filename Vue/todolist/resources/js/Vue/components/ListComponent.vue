<template>
    <h3> List </h3>
    <div v-for="item in $store.state.Listdata" :key="item">
        <input type="checkbox" id="chk" @change="item.completed = '1'">
        <label for="chk">{{ item.content }}</label>
        <button> 수정 </button>
        <button> 삭제 </button>
    </div>
</template>
<script>
export default {
    name:'ListComponent',
}
</script>
<style>
    .com{
        color : #ccc;
        text-decoration: underline;
    }
</style>