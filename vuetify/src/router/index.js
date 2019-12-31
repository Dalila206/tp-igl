import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/Enseignant',
    name: 'Enseignant',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/Enseignant.vue')
  },
  {
    path: '/Inscription',
    name: 'Inscription',
    component: () => import('../views/Inscription.vue')
  },
  {
    path: '/Admin',
    name: 'Admin',
    component: () => import('../views/Admin.vue')
  }
 
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
