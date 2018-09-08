
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import PrivateMessageInbox from './components/Private-Message/PrivateMessageInbox'
import Vue from 'vue'







/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import * as VueGoogleMaps from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
    load: {
      key: 'AIzaSyB0T-uGFTd8aQ_a7mZmhN0hX9F5dhVUeH4',
      libraries: 'places',
    }
  })



Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('inbox-component', require('./components/Private-Message/PrivateMessageInbox.vue'));


const app = new Vue({
    el: '#app'
});

const route = [
    {path: '/inbox', component: PrivateMessageInbox, name: 'inbox', meta: { requiresAuth: true}}

]