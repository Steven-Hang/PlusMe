
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.Bus=new Vue;

import Vuesax from 'vuesax'

import 'vuesax/dist/vuesax.css' //Vuesax styles
Vue.use(Vuesax)
import Vue from 'vue'


// entirely import
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
Vue.use(ElementUI)


// set language to EN
import lang from 'element-ui/lib/locale/lang/en'
import locale from 'element-ui/lib/locale'

locale.use(lang)



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('card-component', require('./components/partials/cardHomeComponent.vue'));
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('loading-component', require('./components/partials/LoadingComponent.vue'));
Vue.component('sidebar-component', require('./components/partials/SidebarComponent.vue'));
Vue.component('welcome-button', require('./components/partials/WelcomeButton.vue'));

const app = new Vue({
    el: '#app'
    
    });


const route = [
]
