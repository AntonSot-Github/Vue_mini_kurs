<script setup>

    import { ref } from 'vue';
    import GamesList from './GamesList.vue';

    const games = ref([
        {
            id: 1,
            title: 'Half-Life',
            year: '2001',
            completed: false,
            rating: 9,
        },
        {
            id: 2,
            title: 'Subnautica',
            year: '2015',
            completed: false,
            rating: 10,
        },
        {
            id:3,
            title: 'Civilization II',
            year: '1993',
            completed: true,
            rating: 9,
        },
        {
            id: 4,
            title: 'Underworld',
            year: '2012',
            completed: true,
            rating: 8,
        },
        {
            id: 5,
            title: 'Max Payne',
            year: '2005',
            completed: true,
            rating: 6,
        },
    ]);

    function plusRating(gameId, digit){
        const game = games.value.find(g => g.id === gameId);

        if(game && game.rating !== 0 && game.rating !== 11){
            game.rating = game.rating + digit;
        } if (game && game.rating === 11 && digit > 0) {
            game.rating = 10; 
        } if (game && game.rating === 0 && digit < 0){
            game.rating = 1;
        }
    }

</script>
<template>
    <div>
        <GamesList 
            :games="games"
            @plusRating="plusRating"
        />
    </div>
</template>