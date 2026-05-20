<script setup>

    import { ref } from 'vue';
    import BookCard from './BookCard.vue';

    const books = ref([
        {
            id: 1,
            title: 'Cifrovichok-history',
            author: 'Cifrovichok',
            year: 2026, 
            rating: 10,
            read: true,
        },
        {
            id: 2,
            title: 'Letters to Milena',
            author: 'Franz Kaftha',
            year: 2010,
            rating: 5,
            read: false,
        },
        {
            id: 3,
            title: 'Where the Crawdads Sing',
            author: 'Delia Owens',
            year: 2012,
            rating: 7,
            read: false,
        },
    ]);

    function delBook(bookID){
        books.value = books.value.filter(book => {
            return book.id !== bookID;
        });
    }

    function changeStatus(bookID){
        const book = books.value.find(b => b.id === bookID);

        book.read = !book.read;
    }
</script>
<template>

    <ul>
        <li v-for="book in books" :key="book.id">
            <div class="bookCard">
                <BookCard
                    :bookID="book.id"
                    @delBook="delBook"
                    @changeStatus="changeStatus"
                    :title=book.title
                    :author=book.author 
                    :year=book.year
                    :rating=book.rating
                    :read=book.read
                />
            </div>
        </li>
    </ul>

</template>
<style scoped>
    .bookCard{
        margin-left: auto;
        margin-right: auto;
        margin-bottom: .5rem;
        width: 50%;
        border: 1px black solid;
        border-radius: 10px;
        background-color: rgb(110, 214, 115);
        padding: .5rem;
    }
</style>