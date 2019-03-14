import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import App from './views/App';
import VueMqtt from 'vue-mqtt';
//import dotenv from 'dotenv';
require('dotenv').config();

Vue.use(VueMqtt, 'mqtt://' + process.env.MIX_VUE_APP_BROKER_HOST, {
	clientId: 'WebClient-' + parseInt(Math.random() * 100000)
});

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
