// импортируем функцию создания Vue-приложения
import { createApp } from 'vue';

// импортируем наш компонент
import HelloWorld from './components/HelloWorld.vue';

/*
    createApp() создает Vue-приложение.

    То есть запускает Vue.
*/
createApp(HelloWorld).mount('#app');

/*
    mount('#app')

    Говорит Vue:

    "Найди HTML-элемент с id='app'
    и управляй им"
*/

