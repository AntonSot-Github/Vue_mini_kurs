<script setup>

// импортируем ref из Vue
import { ref } from 'vue';

/*
    ref(0)

    создаёт реактивную переменную.

    Vue теперь будет следить
    за её изменениями.
*/
const counter = ref(0);

/*
    Функция увеличения счётчика
*/
function increase() {

    /*
        .value

        Так мы получаем доступ
        к значению ref-переменной
    */
    counter.value++;
}

function resetCounter()
{
    counter.value = 0;
}


</script>

<template>

    <h2>Счётчик: {{ counter }}</h2>

    <!--
        @click

        Vue-событие клика
    -->
    <div>
        <button @click="increase" style="padding: 0.5rem; background-color: aqua; border-radius: 5px; margin-right: 0.5rem;">
            Увеличить
        </button>
        <button @click="resetCounter" style="padding: 0.5rem; background-color: red; border-radius: 5px; margin-right: 0.5rem;">
            Reset
        </button>
    </div>


</template>