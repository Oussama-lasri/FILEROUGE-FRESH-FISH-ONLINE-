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
import page403 from '../views/403.vue'
import page404 from '../views/404.vue'
// ****
// state management
import { useStore } from "../stores/usersStore";
// ****************
// commandes
import commandes from '../views/admin/commande/allCommande.vue'

//***********/


// console.log(useStore().token)
const routes = [
    {
        path: '/',
        name: 'home',
        component: home
    },
    {
        path: '/details/:id',
        name: 'details',
        component: details
    },
    {
        path: '/cardShop',
        name: 'cardShop',
        component: cardShop,
        meta: {
            requiresAuth: true ,
            requiresAdmin:true ,


        }
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
        component: checkout,
        meta: {
            requiresAuth:true ,
            requiresAdmin:true ,
        }
    },
    {
        path: '/chat',
        name: 'chat',
        component: chat
    },
    {
        path: '/dashboard',
        name: 'dashboard',
        component: dashboard,
        meta: {
            requiresAdmin:true ,
            
        }

    },
    {
        path: '/table',
        name: 'table',
        component: table
    },
    {
        path: '/commandes',
        name: 'commandes',
        component: commandes,
        meta: {
            
            requiresAdmin:true ,
        }
    },
    {
        path: '/fish/showAll',
        name: 'showAllFish',
        component: showAllFish,
        meta: {
            
            requiresAdmin:true ,
        }
    },
    {
        path: '/fish/add',
        name: 'addFish',
        component: addFish,
        meta: {
           
            requiresAdmin:true ,
        }
    },
    {
        path: '/fish/update/:id',
        name: 'updateFish',
        component: updateFish,
        meta: {
            // requiresAuth: true,
            requiresAdmin:true
        }
    },
    // recipies 
    {
        path: '/recipe/showAll',
        name: 'showAllRecipe',
        component: showAllRecipe,
        meta: {
            // requiresAuth: true,
            requiresAdmin:true ,
        }
    },
    {
        path: '/recipe/add',
        name: 'addRecipe',
        component: addRecipe,
        meta: {
            // requiresAuth: true,
            requiresAdmin:true ,
            
        }
    },
    {
        path: '/recipe/update/:id',
        name: 'updateRecipe',
        component: updateRecipe,
        meta: {
            // requiresAuth: true,
            requiresAdmin:true ,
        }
    },
    {
        path: '/403',
        name: '403',
        component: page403,
        
    },
    // ***********
    {
        path: '/:catchAll(.*)',
        name:'404',
        component: page404
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})
export default router

router.beforeEach((to, from, next) => {
    if(to.matched.some(record => record.meta.requiresAuth)) {
        if(useStore().token == null ) {
            next({
                path: '/Login',
                params: { nextUrl: to.fullPath }
            })
        } else if (useStore().token != null) {
            next()
        }
    } else if(to.matched.some(record => record.meta.requiresAdmin) ) {
        if(useStore().token == null) {
            next({
                path: '/Login',
                // params: { nextUrl: to.fullPath }
            })
        } else if (useStore().role  == 'admin') {
            next()
        }
    }else{
        next()
    }
     
})