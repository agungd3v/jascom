/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window._ = require('lodash');

window.pace = require('node-pace-progress');
window.pace.start();
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-vue', require('./components/Header').default)

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Index from './components/pages/Index'
import Services from './components/pages/Services'

const routes = [{
    path: '/',
    component: Index
}, {
    path: '/jasa',
    component: Services
}]

const router = new VueRouter({
    routes
})

const app = new Vue({
    router
}).$mount('#app')
