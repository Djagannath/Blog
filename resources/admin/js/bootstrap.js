// window._ = require('lodash');

// window.axios = require('axios');

window.Vue = require('vue');
// import VueRouter from 'vue-router';
// import routes from './routes';
// window.Vue.use(VueRouter);

// const router = new VueRouter({ routes })

/**
 * adding components to this application
 */

Vue.component('nav-menu', require('./../components/nav-menu').default);

// const app = new Vue({ router }).$mount('#app')
const app = new Vue({
  el: '#app'
});

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
