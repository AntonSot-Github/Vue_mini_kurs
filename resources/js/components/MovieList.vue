<script setup>

    import { ref, watch } from 'vue';

    const films = ref([
        {
            id: 1,
            title: 'Matrix',
            year: '1999',
            watched: false,
            raiting: 12,
        },
        {
            id: 2,
            title: 'Mask',
            year: '1994',
            watched: false,
            raiting: 3,
        },
        {
            id:3,
            title: 'Avatar',
            year: '2015',
            watched: true,
            raiting: 6,
        },
    ]);

    function delFilm(filmID){
        films.value = films.value.filter(film => {
            return film.id !== filmID;   
        })
    }

    function changeRating(filmId, digit){
        
        //Находим нужный фильм из массива по id
        const film = films.value.find(f => f.id === filmId);

        /* Если фильм найден и его рейтинг больше ноля */
        if(film){
            film.raiting += digit;
            if(film.raiting < 1){
                film.raiting = 1;
            } else if (film.raiting > 10) {
                film.raiting = 10;
            } 
        }

    }


</script>
<template>

    <div >
        <ol>
            <li v-for="(movie, index) in films" :key="movie.id" >
                <div class="card">
                    <h2>Красиво оформленная карточка фильма по заказу Цифровичка :))</h2>
                    
                    <div class="cardBody">
                        
                        <p><b>{{ index + 1 }}. {{ movie.title }}: <i>{{ movie.year }}</i></b></p>

                        <p v-show="movie.raiting > 8">🔥 Топ фильм</p>

                        <button @click="movie.watched = !movie.watched"><p><span v-if="movie.watched">✅ Просмотрен</span><span v-else>❌ Не просмотрен</span></p></button>
                    </div>

                    <div  class="delButCont">
                        <div class="delButCont">
                            <button @click="changeRating(movie.id, 1)">+</button>
                            <button @click="changeRating(movie.id, -1)">-</button>
                            <p>Rating: {{ movie.raiting }}</p>
                        </div>

                        <button @click="delFilm(movie.id)">Delete film</button>
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
        justify-content: space-between;
        margin-bottom: .5rem;
    }
    .delButCont{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .delButCont > button{
        padding: .5rem;
        border: 1px solid black;
        border-radius: 20px;
        background-color: aliceblue;
    }
</style>