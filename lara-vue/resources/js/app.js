require('./bootstrap');

// window.Vue = require('vue');
import Vue from 'vue';
import VueRouter from "vue-router";

Vue.use(VueRouter)

import {routes} from './routes/web';

// routers
const routers = new VueRouter({
	routes,
	mode: "history"
});

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// Vue App
const app = new Vue({
	el: '#app',
	routers
});