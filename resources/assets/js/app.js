/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//
// window.onload = function () {
//     Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
//     const app = new Vue({
//         el: '#app'
//     });
// };
//


// Dummy follows...

import $ from 'jquery/src/jquery.js'
import 'bootstrap/dist/js/bootstrap.js';
import 'jquery-inputmask'
import 'bootstrap-tagsinput';
import 'bootstrap-typeahead';
import 'nouislider';
import 'parsley';
import './address_autocomplete.js';
// import 'jquery.formslider'
import 'moment';
import './components/init';

window.$ = window.jQuery = $;

