require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import App from './views/App';
import Dongles from './views/Dongles';
import VueMqtt from 'vue-mqtt';
require('dotenv').config();

console.log("mqtt broker: ", process.env.MIX_VUE_APP_BROKER_PROTOCOL + process.env.MIX_VUE_APP_BROKER_HOST);
Vue.use(VueMqtt, process.env.MIX_VUE_APP_BROKER_PROTOCOL + process.env.MIX_VUE_APP_BROKER_HOST);

const router = new VueRouter({
	mode: 'history',
	routes: [
		{
			path: '/logger',
			name: 'logger',
			component: App
		},
		{
			path: '/my_dongles',
			name: 'my_dongles',
			component: Dongles
		}
	]
});

const dongles = new Vue({
	el: '#dongles',
	components: { Dongles },
	router
});

const app = new Vue({
	el: '#app',
	components: { App },
	router
});



document.addEventListener('DOMContentLoaded', function() {
	var elems = document.querySelectorAll('.tooltipped');
	var instances = M.Tooltip.init(elems);
});
