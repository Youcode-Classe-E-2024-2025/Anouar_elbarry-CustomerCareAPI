

import './bootstrap';
import { createApp } from 'vue';
import router from './router';


const app = createApp({});

import auth from './pages/auth.vue'
app.component('auth',auth);

import home from './components/home.vue';
app.component('home', home);

import tickets from './pages/tickets.vue';
app.component('tickets', tickets);

import nav from './components/nav.vue';
app.component('nav-component',nav);


app.use(router);
app.mount('#app');
