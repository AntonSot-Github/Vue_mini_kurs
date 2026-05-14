<script setup>

import { ref } from 'vue';

/*
    Пользователь авторизован?
*/
const isOnline = ref(false);


/*
    Переключение состояния
*/
function toggleOnline() {

    isOnline.value = !isOnline.value;
}

const isLoaded = ref(false);

function toggleLoading(){
    isLoaded.value = !isLoaded.value;
}

</script>

<template>

    <button @click="toggleOnline" style="padding: 0.5rem; background-color: burlywood; border-radius: 5px; margin-right: 0.5rem; margin-bottom: .5rem;">

        Сменить состояние

    </button>

    <!--
        Показывается только
        если isOnline === true
    -->
    <h3 v-if="isOnline">

        <span class="online"></span>Пользователь онлайн

    </h3>

    <h3 v-else="isOnline">

        <span class="offline"></span>Пользователь офлайн

    </h3>

    <button @click="toggleLoading" style="padding: 0.5rem; background-color: goldenrod; border-radius: 5px; margin-right: 0.5rem; margin-bottom: .5rem;">

        Loading

    </button>

    <h3 v-show="!isLoaded">
        Загрузка...
    </h3>

    <h3 v-show="isLoaded">
        Данные успешно загружены
    </h3>

</template>

<style scoped>
    h3{
        display: flex;
        margin-bottom: 1rem;
    }
    .online{
        display: block;
        width: 1rem;
        height: 1rem;
        background-color: greenyellow;
        border-radius: 50%;
        margin-right: .3rem;
        margin-top: auto;
        margin-bottom: auto;
    }
    .offline{
        display: block;
        width: 1rem;
        height: 1rem;
        background-color: rgb(164, 27, 27);
        border-radius: 50%;
        margin-right: .3rem;
        margin-top: auto;
        margin-bottom: auto;
    }
</style>