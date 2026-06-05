<script setup>
    import { ref } from 'vue';

    const form = ref({
            title: '',
            year: '',
            completed: false,
            rating: '',
    });

    const emit = defineEmits(['submitForm']);

    // Создаем функцию, которая сработает при нажатии кнопки "Add movie"
    function handleSubmit() {
        // Проверяем, что название не пустое (базовая валидация)
        if (!form.value.title) return;

        // Передаем КОПИЮ наших данных из формы в GamePage
        emit('submitForm', { ...form.value });

        // Очищаем форму для следующего ввода
        form.value = {
            title: '',
            year: '',
            completed: false,
            rating: '',
        };
    }

</script>
<template>
    <h2>Add game</h2>
    <div>
        <form @submit.prevent="handleSubmit">
            <input type="text" v-model="form.title" placeholder="Title">
            <input type="number" v-model.number="form.year" placeholder="Year of production">
            <input type="number" v-model.number="form.rating" placeholder="Rating">
            <div>
                <label for="isCompleted">Completed?</label>
                <input type="checkbox" v-model="form.completed" id="isCompleted">
            </div>

            <button type="submit">Add movie</button>
        </form>
    </div>
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
    label{
        margin-right: .5rem;
    }
    form{
        display: flex;
        flex-direction: column;
        width: 60%;
        margin-right: auto;
        margin-left: auto;
        align-items: center;
    }
    button{
        cursor: pointer;
        margin-right: .5rem;
        border: 1px solid black;
        padding: .5rem;
        border-radius: 15px;
        margin-bottom: .5rem;
        background-color: #efbffa;
    }
</style>