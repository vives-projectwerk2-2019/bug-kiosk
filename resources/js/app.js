import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import App from "./views/App";
import Dongles from "./views/Dongles";
import Generator from "./views/Generator";
import VueMqtt from "vue-mqtt";
import VueQr from "vue-qr";
Vue.component("vue-qr", VueQr);

require("dotenv").config();

console.log("mqtt broker: ", process.env.MIX_VUE_APP_BROKER);
Vue.use(VueMqtt, process.env.MIX_VUE_APP_BROKER);

const router = new VueRouter({
  mode: "history",
  routes: [
    {
      path: "/logger",
      name: "logger",
      component: App
    },
    {
      path: "/my_dongles",
      name: "my_dongles",
      component: Dongles
    }
  ]
});

const dongles = new Vue({
  el: "#dongles",
  components: { Dongles },
  router
});

const app = new Vue({
  el: "#app",
  components: { App },
  router
});

const generator = new Vue({
  el: "#generator",
  components: { Generator },
  router
});

document.addEventListener("DOMContentLoaded", function() {
  var elems = document.querySelectorAll(".dropdown-trigger");
  var instances = M.Dropdown.init(elems, {
    coverTrigger: false,
    hover: false
  });
});
