
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */




require('./bootstrap');


window.VueAxios=require('vue-axios').default;

window.Axios=require('axios').default;


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('planilla-vue', require('./components/planilla.vue'));


const app = new Vue({
    el: '#app'
});

/*
import Vue from 'vue';
import Vuetify from 'vuetify';

Vue.use(Vuetify);

new Vue({
    el: '#app',
    mounted() {
        this.$vuetify.init();
    },
    data: {
        item: {
            href: '#!',
            text: 'Get Started'
        }
    }
});

*/