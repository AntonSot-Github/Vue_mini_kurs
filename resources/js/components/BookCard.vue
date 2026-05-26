<script setup>
    // 1. Сохраняем пропсы в переменную props
    const props = defineProps({
        bookID: Number,
        title: String,
        author: String,
        year: Number,
        rating: Number,
        read: Boolean,
    });

    // 2. Объявляем имя события (пусть будет delBook для наглядности)
    const emit = defineEmits([
        'delBook',
        'changeStatus',
    ]);

    // 3. Передаем событие и ID, беря его из объекта props
    function removeBook(){
        emit('delBook', props.bookID);
    }

    function changeStat(){
        emit('changeStatus', props.bookID);
    }

</script>
<template>

    <div>

        <h2>{{ title }}</h2>

        <p><b>Author:</b> {{ author }}</p>

        <p><b>Year:</b> {{ year }}</p>

        <p><b>Rating:</b> {{ rating }}</p>

        <p><strong>Status: </strong> 
            <button @click="changeStat">
                <span v-if="read" class="text-green-800">✅ Прочитано</span>
                <span v-else class="text-red-800">❌ Не прочитано</span>
            </button>
        </p>

        <div style="display: flex; flex-direction: row; justify-content: end;">
            <button @click="removeBook">
                Delete book
            </button>
        </div>

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
    }
</style>