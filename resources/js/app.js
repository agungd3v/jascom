require('./bootstrap');

window.pace = require('node-pace-progress');
window.Vue = require('vue');

window.pace.start();

Vue.component('content-v', require('./components/Main').default);

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Index from './components/pages/Index';
import Services from './components/pages/Services';
import Reference from './components/pages/Reference';

const router = new VueRouter({
    mode: 'history',
    base: '/',
    routes: [{
        path: '/',
        component: Index
    }, {
        path: '/jasa',
        component: Services
    }, {
        path: '/reference/unique-slugs',
        component: Reference
    }]
})
const app = new Vue({
    router
}).$mount('#app')
