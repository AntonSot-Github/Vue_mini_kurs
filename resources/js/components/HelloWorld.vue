<script setup>

    import MyFirstComponent from './MyFirstComponent.vue';
    // обычная переменная JavaScript
    const name = "SomeOne";

    /*
    Пока это НЕ реактивная переменная.
    Просто обычная JS-переменная.
    */
</script>

<template>
    <!--
        Vue позволяет вставлять JS-данные
        внутрь HTML через {{ }}
    -->

    <h1>Привет, {{ name }}</h1>

    <MyFirstComponent />
</template>