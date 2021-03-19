require('./bootstrap');

// window.Vue = require('vue');
import Vue from 'vue';

// Router
import VueRouter from "vue-router";
Vue.use(VueRouter)

// VForm
import { Form, HasError, AlertError } from 'vform'

window.Form = Form;

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


import {routes} from './routes/web';

// routers
const routers = new VueRouter({
	routes,
	mode: "history"
});

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// Vue App
const app = new Vue({
	el: '#app',
	router : routers
});