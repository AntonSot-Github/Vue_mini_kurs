<script setup>

    import MyFirstComponent from './MyFirstComponent.vue';
    import Counter from './Counter.vue';
    import LampState from './LampState.vue';
    import UserForm from './UserForm.vue';
    import LoginState from './UserStatus.vue';
    import MovieList from './MovieList.vue';
    import BookList from './BookList.vue';

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

    <hr><br>
    <h2>Мини-задание 2</h2>
    <MyFirstComponent />

    <hr><br>
    <h2>Мини-задание 3</h2>
    <Counter />

    <hr><br>
    <h2>Мини-задание 4</h2>
    <LampState />
    
    <br><hr><br>
    <h2>Мини-задание 5</h2>
    <UserForm />

    <hr><br>
    <h2>Мини-задание 5</h2>
    <LoginState />

    <br><hr><br>
    <h2>Мини-задание 6-7: v-for — рендер списков/События и методы во Vue </h2>
    <MovieList />

    <br><hr><br>
    <h2>Мини-задание №8-9: Props — передача данных между компонентами / Emits — события между компонентами</h2>
    <BookList />

    <br><hr><br>

</template>

<style>
    h1{
        font-size: 32px;
        font-weight: bold;
        margin-top: 1rem;
        margin-bottom: 1rem;
        text-align: center;
    }

    h2 {
        color: darkblue;
        padding-bottom: 1rem;
    }
</style>