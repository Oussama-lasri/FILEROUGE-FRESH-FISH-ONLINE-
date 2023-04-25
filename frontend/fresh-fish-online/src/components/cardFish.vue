<template>
    <div class="max-w-xs  bg-white  rounded-sm shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-sm" :src="fish.image  " alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ fish.title }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">FROM <span class="font-bold">{{ fish.price }}</span> PER {{ fish.buy_by['name'] }}</p>
            <a href="#"
                class="inline-flex uppercase items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                buy now
                <iconShopping   />
            </a>
        </div>
    </div>
</template>

<script setup>
import iconShopping from "./icons/iconShopping.vue";
// import { defineProps } from 'vue';

const props = defineProps({
    fish: {
    type: Object,
    required: true,
  },
})
// let fish = props.fish ;
</script>

<style></style>