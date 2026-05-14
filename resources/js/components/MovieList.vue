<script setup>

    import { ref } from 'vue';

    const films = ref([
        {
            id: 1,
            title: 'Matrix',
            year: '1999',
            watched: false,
        },
        {
            id: 2,
            title: 'Mask',
            year: '1994',
            watched: false,
        },
        {
            id:3,
            title: 'Avatar',
            year: '2015',
            watched: true,
        },
    ]);

</script>
<template>

    <div >
        <ol>
            <li v-for="(movie, index) in films" :key="movie.id" >
                <div class="card">
                    <h2>Красиво оформленная карточка фильма по заказу Цифровичка :))</h2>
                    <div class="cardBody">
                        
                        <p><b>{{ index + 1 }}. {{ movie.title }}: <i>{{ movie.year }}</i></b></p>

                        <button @click="movie.watched = !movie.watched"><p><span v-if="movie.watched">✅ Просмотрен</span><span v-else>❌ Не просмотрен</span></p></button>
                    </div>
                </div>
            </li>
        </ol>
    </div>

</template>
<style scoped>
    h2{
        text-align: center;
    }
    .card{
        margin-left: auto;
        margin-right: auto;
        margin-bottom: .5rem;
        width: 50%;
        border: 1px black solid;
        border-radius: 10px;
        background-color: rgb(236, 199, 155);
        padding: .5rem;
    }
    p{
        text-align: center;
    }
    button{
        cursor: pointer;
        margin-right: .5rem;
    }
    .cardBody{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
</style>