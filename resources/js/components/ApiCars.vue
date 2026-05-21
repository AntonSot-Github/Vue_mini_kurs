<script setup>
    import { ref } from 'vue';

    const cars = ref([]);

    // 1. Помечаем функцию как async, чтобы внутри можно было использовать await
    async function loadCars() {

        // 2. Ждем, пока fetch сходит на сервер и вернет поток ответа (Response)
        const response = await fetch('/api/cars');

        // 3. Ждем, пока этот поток полностью скачается и распарсится из JSON в JS-объект
        const data = await response.json();

        // 4. Только когда обе строчки выше завершились, данные записываются в ref
        cars.value = data;
    }

    //Обнуляем список
    function clearCarList(){
        cars.value = [];
    }

</script>
<template>

    <div class="listContainer">
        <div v-if="cars.length !== 0">
            <p>Status: <i>Car list is loaded</i></p>
            <div v-for="car in cars" :key="car.id">
                {{ car.manufacturer }}
                {{ car.model }}
            </div>            
        </div>
        <div v-else>
            <p>Status: Loading list...</p>
        </div>
    </div>

    <div class="butContainer">
        <button @click="loadCars">Load Car-list</button>
        <button @click="clearCarList">
            Clear List
        </button>
    </div>


</template>
<style scoped>
    button{
        cursor: pointer;
        margin-right: .5rem;
        border: 1px solid black;
        padding: .5rem;
        border-radius: 15px;
        margin-bottom: .5rem;
        background-color: #64dbe1;
    }
    .butContainer{
        width: 50%;
        display: flex;
        justify-content: space-around;
        margin-right: auto;
        margin-left: auto;
    }
    .listContainer{
        width: 50%;
        margin-right: auto;
        margin-left: auto;
        display: flex;
        justify-content: center;
    }
    p{
        margin-bottom: .5rem;
    }
</style>