<script setup>

    import { ref, computed } from 'vue';
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
        {
            id: 4,
            title: 'Where is his dog running',
            author: 'Ostin',
            year: 2014,
            rating: 9,
            read: true,
        },
        {
            id: 5,
            title: 'Sing songs',
            author: 'Owen',
            year: 2017,
            rating: 2,
            read: true,
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

    //Read books
    const readBooks = computed(() => {
        return books.value.filter(book => {
            return book.read;
        });
    });

    //Books with rating > 8
    const topBooks = computed(() => {
        return books.value.filter(book => {
            return book.rating > 8;
        });
    });

    //Search book
    let bookSearch = ref('');
    const bookFounded = computed(() => {
        return books.value.filter(book => {
            // Приводим всё к нижнему регистру, чтобы поиск не зависел от больших/маленьких букв
            return book.title.toLowerCase().includes(bookSearch.value.toLowerCase());
        });
    });

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

    <h3>Read books</h3>
    <ul>
        <li v-for="book in readBooks" :key="book.id">
            <div class="bookCard">
                <p><i>{{ book.title }}</i></p>
            </div>
        </li>
    </ul>

    <h3>Top books with rating > 8</h3>
    <ul>
        <li v-for="book in topBooks" :key="book.id">
            <div class="bookCard">            
                <p>
                    {{ book.title }}: rating - {{ book.rating }}
                    <span v-if="book.rating === 10">🔥</span>
                </p>
            </div>
        </li>
    </ul>

    <h3>Search book</h3>
    <div class="inputContainer">
        <input type="text" placeholder="Search" v-model="bookSearch">
    </div>
    <ul v-if="bookSearch !== ''">            
        <li v-for="book in bookFounded" :key="book.id">
            <div class="bookCard">
                {{ book.title }}
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
    input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: all 0.3s;
        margin-bottom: .5rem;
    }
    .inputContainer{
        display: flex;
        justify-content: center;
    }
    li{
        list-style: none;
    }
</style>