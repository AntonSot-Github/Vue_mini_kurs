<script setup>

    import GamePage from './GamePage.vue';

    const props = defineProps({
        numGames: Number,
        compGames: Number,
        bestGames: Array,
    });



</script>
<template>
    <div class="statsContainer">
        <p>
            Quantity of Games we have: {{ props.numGames }}
        </p>
        <p>
            Quantity of Games we have: {{ props.compGames }}
        </p>
        <ul>
            <h2>Best games with rating 8 and above:</h2>
            <li v-for="game in bestGames" :key="game">
                ⭐{{ game }}
            </li>
        </ul>

    </div>



</template>
<style scoped>
    .statsContainer{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    li{
        text-align: center;
    }
</style>