import {createRouter, createWebHistory } from 'vue-router'
import home from '../views/home.vue'
import details from '../views/details.vue'
import cardShop from '../views/cardShop.vue'
import login from '../views/auth/login.vue'
import register from '../views/auth/register.vue'
import checkout from '../views/checkout.vue'
import chat from '../views/chat.vue'
import dashboard from '../views/admin/dashboard.vue'
import table from '../views/admin/table.vue'
// fish
import showAllFish from '../views/admin/fish/showAll.vue'
import addFish from '../views/admin/fish/add.vue'
import updateFish from '../views/admin/fish/update.vue'
// ****
// recipe
import showAllRecipe from '../views/admin/recipe/showAll.vue'
import addRecipe from '../views/admin/recipe/add.vue'
import updateRecipe from '../views/admin/recipe/update.vue'
// ****


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
        path: '/fish/showAll',
        name: 'showAllFish',
        component: showAllFish
    },
    {
        path: '/fish/add',
        name: 'addFish',
        component: addFish
    },
    {
        path: '/fish/update/:id',
        name: 'updateFish',
        component: updateFish,
    },
    // recipies 
    {
        path: '/recipe/showAll',
        name: 'showAllRecipe',
        component: showAllRecipe
    },
    {
        path: '/recipe/add',
        name: 'addRecipe',
        component: addRecipe
    },
    {
        path: '/recipe/update/:id',
        name: 'updateRecipe',
        component: updateRecipe
    },
    // ***********
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