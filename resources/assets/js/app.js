
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./bootstrap-markdown');
require('./marked.min.js');
require('./markdown');
require('./to-markdown');
require('./ie10-viewport-bug-workaround');
require('./offcanvas');
// require('./Gmap');
require('./jquery.mycart.min');
require('./diner');

window.Vue = require('vue');

// Vue.config.devtools = true;
// Vue.config.performance = true;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 *

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
/* */
