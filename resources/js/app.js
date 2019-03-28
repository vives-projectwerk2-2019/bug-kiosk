require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import App from './views/App';
import VueMqtt from 'vue-mqtt';
require('dotenv').config();

Vue.use(VueMqtt, 'mqtt://' + process.env.MIX_VUE_APP_BROKER_HOST);

const router = new VueRouter({
	mode: 'history',
	routes: [
		{
			path: '/logger',
			name: 'logger',
			component: App
		}
	]
});

const app = new Vue({
	el: '#app',
	components: { App },
	router
});
