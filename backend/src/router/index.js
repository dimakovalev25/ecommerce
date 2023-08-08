import {createRouter, createWebHistory} from 'vue-router'
import HomeView from '../views/HomeView.vue'


const routes = [
    {
        path: '/',
        name: 'home',
        component: HomeView
    },
    {
        path: '/about',
        name: 'about',

        component: () => import('../views/AboutView.vue')
    },
    {
        path: '/login',
        name: 'login',

        component: () => import('../views/Login.vue')
    },
    {
        path: '/reset_password',
        name: 'reset_password',

        component: () => import('../views/ResetPassword.vue')
    },
    {
        path: '/request_password',
        name: 'request_password',

        component: () => import('../views/RequestPassword.vue')
    }
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
})

export default router
