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

// toastr js
import Toastr from 'toastr'
window.toastr = Toastr;
toastr.options.closeButton = true;
toastr.options.timeOut = 5000;
toastr.options.extendedTimeOut = 1000;
toastr.options.progressBar = true;

// import routes
import {routes} from './routes/web';

// vuex
import Vuex from 'vuex'
window.Vuex = Vuex;
Vue.use(Vuex);

import StoreMethod from './vuex/store';
const store = new Vuex.Store(StoreMethod);

// routers
const routers = new VueRouter({
	routes,
	mode: "history"
});

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// Vue App
const app = new Vue({
	el: '#app',
	router : routers,
	store
});

import moment from 'moment';

Vue.filter('datetime', (a) =>{
	return moment(a).format('MM/DD/YYYY hh:mm A');
});