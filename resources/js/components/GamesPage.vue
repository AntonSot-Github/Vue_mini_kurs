<script setup>

    import { ref } from 'vue';

    const games = ref([
        {
            id: 1,
            title: 'Half-Life',
            year: '2001',
            played: false,
            raiting: 9,
        },
        {
            id: 2,
            title: 'Subnautica',
            year: '2015',
            played: false,
            raiting: 10,
        },
        {
            id:3,
            title: 'Civilization II',
            year: '1993',
            played: true,
            raiting: 9,
        },
        {
            id: 4,
            title: 'Underworld',
            year: '2012',
            played: true,
            raiting: 8,
        },
        {
            id: 5,
            title: 'Max Payne',
            year: '2005',
            played: true,
            raiting: 6,
        },
    ]);


</script>