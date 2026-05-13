<script setup>

    import { ref } from 'vue';

    let text = ref('on');
    let colorBut = ref('blue');

    function turnOnOff(){
        if(text.value === 'on'){
            text.value = 'off';
            colorBut.value = 'grey';
        } else {
            text.value = 'on';
            colorBut.value = 'blue';
        }
    }
</script>
<template>

    <button @click="turnOnOff">
        {{ text }}
    </button>

</template>
<style scoped>
    button {
            /* 4. Используем v-bind для связи CSS с переменной из JS */
            background-color: v-bind(colorBut);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
</style>