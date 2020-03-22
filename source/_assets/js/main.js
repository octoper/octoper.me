import { listen } from "quicklink";
import 'lazysizes';
window.Vue = require('vue');

import Search from './components/Search.vue';
import DarkToggle from './components/DarkToggle.vue';

Vue.config.productionTip = false;

new Vue({
    components: {
        Search,
        DarkToggle,
    },
}).$mount('#website');

window.addEventListener('load', function () {
    listen();
});
