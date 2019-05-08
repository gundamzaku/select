import Vue from 'vue'
import App from './App.vue'
import ElementUi from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css';
import VueRouter from 'vue-router'

import Hello from './components/Hello.vue'
import Award from './components/Award.vue'

Vue.use(ElementUi)
Vue.use(VueRouter)

Vue.config.productionTip = false

const routes = [
  { path: '/', component: Hello },
  { path: '/award', component: Award }
]

const router = new VueRouter({
  routes // (缩写) 相当于 routes: routes
})

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
