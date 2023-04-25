<template>
    <div class="max-w-xs  bg-white  rounded-sm shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="">
            <img class="rounded-t-sm" :src="recipe.image" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">{{recipe.title}}</h5>
            </a>
            <div class="">
                <div class="flex gap-5  justify-center  items-center">
                    <iconTime />
                    <p class=" font-normal text-xs my-3 text-gray-700 dark:text-gray-400">Total Time : <span
                            class="font-bold">{{ recipe.preparation_time }}
                            mins</span></p>
                </div>
                <div class="flex gap-5  justify-center items-center">
                    <iconQuestionMark />
                    <p class=" font-normal text-xs my-3 text-gray-700 dark:text-gray-400">Diffeculty : <span
                            class="font-bold">
                            {{ recipe.difficulty }}</span></p>
                </div>
                <div class="flex gap-5 justify-center items-center">
                    <iconUsers />
                    <p class=" font-normal text-xs my-3 text-gray-700 dark:text-gray-400">Cuisine Type : <span
                            class="font-bold">
                            {{ recipe.cuisine_type }}</span></p>
                </div>

            </div>
        </div>
    </div>
</template>

<script setup>
import iconQuestionMark from "./icons/iconQuestionMark.vue";
import iconTime from "./icons/iconTime.vue";
import iconUsers from "./icons/iconUsers.vue";
import { useStore } from "../stores/usersStore";

const props = defineProps({
    recipe: {
    type: Object,
    required: true,
  },
})
console.log(useStore().token)
</script>

<style></style>