import Vue from 'vue';
import App from './App.vue'
import router from './router'
import vuetify from './plugins/vuetify';
import "vuetify/dist/vuetify.min.css";
import axios from 'axios';
import 'material-design-icons-iconfont/dist/material-design-icons.css'

Vue.config.productionTip = false
Vue.prototype.$http = axios;
new Vue({
  router,
  vuetify,
  render: h => h(App)
}).$mount('#app')
