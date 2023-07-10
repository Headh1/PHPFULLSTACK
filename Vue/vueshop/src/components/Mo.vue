<template>
    <div class="bg_black" v-if="modalFlg">
        <div class="bg_white">
            <img :src="products[num].img" alt="">
            <h4>{{ products[num].name }}</h4>
            <p>{{ products[num].price * inputC }}원</p>
            <p>{{products[num].con}}</p>
            <input type="text" v-model="inputC" >
            <!-- <button @click="$emit('up')" class="btn"> ▲ </button>
            <button @click="$emit('down')" class="btn"> ▼ </button> -->
            <br>

            <!-- <span>현재 수량 :  {{ products[num].count }}개</span> -->
            <span>현재 수량 :  {{ inputC }}개</span>
            <br>
            <button @click="$emit('close'); inputC =0;">닫기</button>
        </div>
    </div>
</template>
<script>
export default {
        name:'Mo',
        data() {
            return {
                inputC:""
        }
    },
    watch: {
        inputC(inp) {
            if(inp>10){
                alert('10이하 입력부탁');
                this.inputC = 10;
            }
            else if(inp<0) {
                this.inputC = 0;
            }
        }
    },
        props: {
            modalFlg : Boolean,
            products : Object,
            num : Number,
        }
    }
</script>
<style>
</style>