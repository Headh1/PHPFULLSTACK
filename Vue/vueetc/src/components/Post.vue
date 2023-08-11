<template>
    <div> post </div>
    <p> {{ propsTest }} </p>
</template>
<script>
import { ref, toRefs } from 'vue';

export default {
    name:'Post',
    props: {
        propsTest:Number,
    },
    set(props) {
        let data = ref([]);
        let { propsTest } = toRefs(props);
        console.lof(propsTest.value);

        
        return { data }
    }
}
</script>
<style>
    
</style>