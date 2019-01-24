
/**
 * First we will load all of this project's JavaScript dependencies which
<<<<<<< HEAD
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
=======
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
>>>>>>> 88b7ddc55f114a2027559c3432801ee6569afba3
 */

require('./bootstrap');

<<<<<<< HEAD
/**
 * Next, we will create a fresh React component instance and attach it to
=======
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
>>>>>>> 88b7ddc55f114a2027559c3432801ee6569afba3
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

<<<<<<< HEAD
require('./components/Example');
=======
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
>>>>>>> 88b7ddc55f114a2027559c3432801ee6569afba3
