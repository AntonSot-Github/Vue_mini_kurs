<script setup>

import { ref } from 'vue';

/*
    Реактивная переменная
    для хранения текста
*/
const name = ref('');
const age = ref('');
const tech = ref('');
const isLikeVue = ref(false);

</script>

<template>

    <!--
        v-model связывает input
        с переменной name
    -->
    <input v-model="name" type="text">
    <input v-model="age" type="text">
    <input v-model="tech" type="text">

    <p>Name: {{ name }}</p><br>
    <p>Age: {{ age }}</p><br>
    <p>Favorite technoogy: {{ tech }}</p><br>

    
    <input type="checkbox" v-model="isLikeVue" id="VueLike">
    <label for="VueLike">Я люблю Vue</label>
    <p>Любит Vue: {{ isLikeVue }}</p><br>
</template>
<style scoped>
    input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: all 0.3s;
        margin-right: .5rem;
        margin-bottom: .5rem;
    }

    input:focus {
        outline: none;
        border-color: #42b983;
        box-shadow: 0 0 5px rgba(66, 185, 131, 0.5);
    }
</style>