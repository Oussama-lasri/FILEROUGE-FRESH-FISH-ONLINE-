<template>
    <nav class="z-50 text-center">
        <div aria-label="menu nav" class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto  w-full z-20 top-0">

            <div class="flex flex-wrap items-center">
                <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                    <a href="#" aria-label="Home">
                        <span class="text-xl pl-2"><i class="em em-grinning"></i></span>
                    </a>
                </div>

                <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
                    <span class="relative w-100">
                        <input aria-label="search" type="search" id="search" placeholder="Search"
                            class="w-full bg-gray-900 text-white transition border border-transparent focus:outline-none focus:border-gray-400 rounded py-3 px-2 pl-10 appearance-none leading-normal">
                        <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                            <svg class="fill-current pointer-events-none text-white w-4 h-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                </path>
                            </svg>
                        </div>
                    </span>
                </div>

                <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
    <ul v-if="useStore().token == null" class="list-reset flex justify-between flex-1 md:flex-none items-center">
        <li class="flex-1 md:flex-none md:mr-3">
            <router-link to="/login" class="inline-block bg-slate-50 px-5 py-2 rounded-md text-black no-underline">Login</router-link>
        </li>
        <router-link to="/cardShop" class="flex-1 md:flex-none md:mr-3">
            <router-link to="/cardShop" class="inline-block text-gray-400 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"><icon-shopping /></router-link>
        </router-link>
    </ul>
    <ul v-if="useStore().token != null" class="list-reset flex justify-between flex-1 md:flex-none items-center">
        <li class="flex-1 md:flex-none md:mr-3">
            <router-link to="/logout" class="inline-block bg-slate-50 px-5 py-2 rounded-md text-black no-underline">Logout</router-link>
        </li>
        <router-link to="/cardShop" class="flex-1 md:flex-none md:mr-3">
            <router-link to="/cardShop" class="inline-block text-gray-400 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"><icon-shopping /></router-link>
        </router-link>
    </ul>
</div>

            </div>
        </div>
        <div class="bg-myblue text-gray-100 py-3 px-6 shadow md:flex justify-center items-center hidden">
            <h3 class="mr-10 ">New &amp; Special Offers</h3>
            <ul class="flex justify-center">
                <li class="border-l-2 px-3 hover:text-gray-300"><a href="">categorie 1</a></li>
                <li class="border-l-2 px-3 hover:text-gray-300"><a href="">categorie 3</a></li>
                <li class="border-l-2 px-3 hover:text-gray-300"><a href="">categorie 2</a></li>
                <li class="border-l-2 px-3 hover:text-gray-300"><a href="">categorie 4</a></li>
                <li class="border-l-2 px-3 hover:text-gray-300"><a href="">categorie 5</a></li>
                <li class="border-l-2 px-3 hover:text-gray-300"><a href="">categorie 7</a></li>
            </ul>
        </div>
        <div class="bg-white text-gray-950 py-3 px-6 shadow md:flex justify-center items-center">
            <ul class="flex justify-between ">
                <li class="text-gray-700 px-3 capitalize hover:text-black"><a href="">Recipes</a></li>
                <li class="text-gray-700 px-3 capitalize hover:text-black"><a href="">Blog</a></li>
                <li class="text-gray-700 px-3 capitalize hover:text-black"><a href="">our story</a></li>
                <li class="text-gray-700 px-3 capitalize hover:text-black"><a href="">Contact</a></li>
            </ul>
        </div>
    </nav>
</template>

<script setup>
import { useStore } from '../stores/usersStore';
import iconShopping from './icons/iconShopping.vue'
import { RouterLink } from "vue-router";
import { onMounted , ref } from 'vue';



</script>

<style scoped>
#search {
    width: 300px;
}
</style>