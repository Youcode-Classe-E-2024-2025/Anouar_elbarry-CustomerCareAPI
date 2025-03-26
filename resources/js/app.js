

import './bootstrap';
import { createApp } from 'vue';
import router from './router';


const app = createApp({});

import home from './components/home.vue';
import tickets from './pages/tickets.vue';
import nav from './components/nav.vue';
app.component('home', home);
app.component('tickets', tickets);
app.component('nav-component',nav);

app.use(router);
app.mount('#app');
