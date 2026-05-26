<script setup>

    defineProps({
        game: Object
    });

    defineEmits([
        'plusRating'
    ]);



</script>
<template>

    <div class="gameCard">
        <h3>{{ game.title }}</h3>
        <hr>
        <p>Year of release : {{ game.year }}</p>
        <p>Completed the game: {{ game.completed }}</p>
        <div class="ratingContainer">
            <p>Game rating: {{ game.rating }}</p>
            <div>
                <button @click="$emit('plusRating', game.id, 1)">
                    +
                </button>
                <button @click="$emit('plusRating', game.id, -1)">
                    -
                </button>
            </div>

        </div>
        
    </div>

</template>
<style scoped>

    .gameCard{
        background-color: bisque;
        margin-bottom: .5rem;
        width: 50%;
        margin-right: auto;
        margin-left: auto;
        border-radius: 1rem;
        padding: .5rem;
        border: 1px solid black;
    }
    button{
        cursor: pointer;
        margin-right: .5rem;
        border: 1px solid rgb(12, 12, 12);
        padding: .5rem;
        border-radius: 15px;
        margin-bottom: .5rem;
        background-color: yellow;
    }
    .ratingContainer{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
</style>