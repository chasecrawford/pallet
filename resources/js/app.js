import { createApp } from 'vue/dist/vue.esm-bundler';
import App from './components/App.vue';
import Homepage from './components/Homepage.vue';

const app = createApp({});

app.component('app', App)
    .component('homepage', Homepage)
    .mount('#app');

import '../../../css/vendor/pallet/app.scss';
