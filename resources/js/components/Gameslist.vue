<script setup>

    import { ref } from 'vue';
    import GamePage from './GamePage.vue';
    import GameCard from './GameCard.vue';

    defineProps({
        games: Array
    });

    defineEmits(['changeRating', 'completeStatus']);



</script>
<template>
    <div>
        <ul>
            <li v-for="game in games" :key="game.id">
                <GameCard 
                    :game="game"
                    @changeRating="(id, digit) => $emit('changeRating', id, digit)"
                    @completeStatus="(id) => $emit('completeStatus', id)"
                />

            </li>
        </ul>
    </div>
</template>