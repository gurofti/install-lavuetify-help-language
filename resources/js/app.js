window.Vue = require('vue');

import vuetify from './vuetify'

import App from './App'

const app = new Vue({
    vuetify,
    render: h => h(App),
    el: '#app',
});
