import { createApp } from 'vue'
import App from './components/App.vue';
import Homepage from './components/Homepage.vue';
//import Login from './components/Login.vue';
//import Register from './components/Register.vue';

const app = createApp({});

app.component('app', App)
    .component('homepage', Homepage)
    //.component('login', Login)
    //.component('register', Register)
    .mount('#app');

require('./bootstrap');
