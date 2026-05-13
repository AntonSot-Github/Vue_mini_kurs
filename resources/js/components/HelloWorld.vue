<script setup>

    import MyFirstComponent from './MyFirstComponent.vue';
    import Counter from './Counter.vue';
    import LampState from './LampState.vue';
    import UserForm from './UserForm.vue';

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

    <h1>Привет, {{ name }}!</h1>

    <hr>
    <h2>Мини-задание 2</h2>
    <MyFirstComponent />

    <hr>
    <h2>Мини-задание 3</h2>
    <Counter />

    <hr>
    <h2>Мини-задание 4</h2>
    <LampState />
    
    <hr>
    <h2>Мини-задание 5</h2>
    <UserForm />

    <hr>



</template>

<style>
    h1{
        font-size: large;
        font-weight: bold;
        margin-bottom: 1rem;
        text-align: center;
    }

    h2 {
        color: darkblue;
        padding-bottom: 1rem;
    }
</style>