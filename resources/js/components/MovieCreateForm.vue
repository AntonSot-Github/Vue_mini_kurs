<script setup>
    import { ref } from 'vue';

    const form = ref({
        title: '',
        year: '',
        rating: '',
        watched: false,
        genre: '',
        description: '',
    })

    function submitForm(){
        // Здесь мы получаем чистые данные из формы
        console.log(form.value);

        // В будущем здесь будет асинхронный fetch-запрос к Laravel API:
        // await fetch('/api/movies', { method: 'POST', body: JSON.stringify(form.value) ... })
        
        // Очищаем форму после успешной отправки
        form.value = {
            title: '',
            year: '',
            rating: '',
            watched: false,
            genre: '',
            description: '',
        };
    }

</script>
<template>
    <h2>Add movie</h2>
    <div>
        <form @submit.prevent="submitForm">
            <input type="text" v-model="form.title" placeholder="Title">
            <input type="number" v-model.number="form.year" placeholder="Year of production">
            <input type="number" v-model.number="form.rating" placeholder="Rating">
            <div>
                <label for="isWatched">Watched?</label>
                <input type="checkbox" v-model="form.watched" id="isWatched">
            </div>
            <select v-model="form.genre">
                <option value="">Choose the genre</option>
                <option value="Comedy">Comedy</option>
                <option value="Adventure">Adventure</option>
                <option value="Horror">Horror</option>
            </select>
            <textarea v-model="form.description" placeholder="Movie description"></textarea>
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
    select {
        border: 2px solid #bab7b7ab;
        background: #eeeeee;
        padding: 10px;
        transition: 0.4s;
        margin-bottom: .5rem;
    }

    select:hover,
    select:focus {
        background: #ffffff;
    }
    textarea {
        padding: 10px;
        max-width: 100%;
        line-height: 1.5;
        border-radius: 5px;
        border: 1px solid #cccccc;
        box-shadow: 1px 1px 1px #999999;
        margin-bottom: .5rem;
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
