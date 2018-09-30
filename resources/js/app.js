require('./bootstrap');
import store from './vuex/store';
import toast from './toasts/toast';

window.Vue = require('vue');

Vue.component('notifications', require('./components/notifications/Notifications'));
Vue.component('notification', require('./components/notifications/Notification'));

const app = new Vue({
	store,
	toast,
    el: '#app'
});
