import {createRouter, createWebHistory } from 'vue-router'
import home from '../views/home.vue'
import details from '../views/details.vue'
import cardShop from '../views/cardShop.vue'
import login from '../views/login.vue'
import register from '../views/register.vue'
import checkout from '../views/checkout.vue'
import chat from '../views/chat.vue'
import dashboard from '../views/admin/dashboard.vue'
import table from '../views/admin/table.vue'
import gestionProduct from '../views/admin/gestionProduct.vue'


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
    {
        path: '/chat',
        name: 'chat',
        component: chat
    },
    {
        path: '/dashboard',
        name: 'dashboard',
        component: dashboard
    },
    {
        path: '/table',
        name: 'table',
        component: table
    },
    {
        path: '/gestionProduct',
        name: 'gestionProduct',
        component: gestionProduct
    },
    {
        path: '/:catchAll(.*)',
        name:'404',
        component: 404
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router