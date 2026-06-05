<script setup>

    const props = defineProps({
        game: Object
    });

    defineEmits([
        'changeRating',
        'completeStatus',
        'deleteGame',
    ]);

</script>
<template>

    <div class="gameCard">
        <h3>{{ game.title }}</h3>
        <hr>
        <p>Year of release : {{ game.year }}</p>

        <p>Completed the game: 
            <span v-if="game.completed">✅ Game completed</span>
            <span v-else>❌ Game is not completed</span>
        </p>

        <!--Rating -->
        <div class="ratingContainer">
            <p>Game rating: {{ game.rating }}</p>
            <div>
                <button @click="$emit('changeRating', game.id, 1)">
                    +
                </button>
                <button @click="$emit('changeRating', game.id, -1)">
                    -
                </button>
            </div>
        </div>
        
        <!-- Buttons Container -->
         <div class="buttonsContainer">
            <button @click="$emit('completeStatus', game.id)" class="butCompleted">
                Completed
            </button>
            <button @click="$emit('deleteGame', game.id)" class="butDel">Delete Game</button>
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
    .butDel{
        background-color: rgba(255, 23, 23, 0.808);
    }
    .butCompleted{
        background-color: aquamarine;
    }
    .ratingContainer{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .buttonsContainer{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
</style>