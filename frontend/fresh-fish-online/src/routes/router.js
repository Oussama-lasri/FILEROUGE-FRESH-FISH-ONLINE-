import {createRouter, createWebHistory } from 'vue-router'
import home from '../views/home.vue'
import details from '../views/details.vue'
import cardShop from '../views/cardShop.vue'
import login from '../views/login.vue'
import register from '../views/register.vue'
import checkout from '../views/checkout.vue'


const routes = [
    {
        path: '/',
        name: 'home',
        component: home
    },
    {
        path: '/details',
        name: 'details',
        component: details
    },
    {
        path: '/cardShop',
        name: 'cardShop',
        component: cardShop
    },
    {
        path: '/login',
        name: 'login',
        component: login
    },
    {
        path: '/register',
        name: 'register',
        component: register
    },
    {
        path: '/checkout',
        name: 'checkout',
        component: checkout
    },
//     {
//         path: '/:catchAll(.*)',
//         name:'404',
//         component: NotFound
//     }
]






const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router