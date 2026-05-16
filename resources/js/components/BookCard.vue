<script setup>
    //Children-component
    defineProps({
        title: String,
        author: String,
        year: Number,
        rating: Number,
        read: Boolean,
    });

</script>
<template>

    <div>

        <h2>{{ title }}</h2>

        <p><b>Author:</b> {{ author }}</p>

        <p><b>Year:</b> {{ year }}</p>

        <p><b>Rating:</b> {{ rating }}</p>

        <p><strong>Status: </strong> 
            <span v-if="read" class="text-green-800">✅ Прочитано</span>
            <span v-else class="text-red-800">❌ Не прочитано</span>
        </p>

    </div>

</template>