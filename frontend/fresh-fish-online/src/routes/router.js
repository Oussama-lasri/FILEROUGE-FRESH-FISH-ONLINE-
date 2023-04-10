import {createRouter, createWebHistory } from 'vue-router'
import home from '../views/home.vue'
import details from '../views/details.vue'


const routes = [
    {
        path: '/home',
        name: 'home',
        component: home
    },
    {
        path: '/details',
        name: 'details',
        component: details
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