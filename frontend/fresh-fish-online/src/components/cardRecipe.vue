<template>
    <div class="max-w-xs  bg-white  rounded-sm shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-sm" src="../assets/images/recipe.png" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">{{}}</h5>
            </a>
            <div class="">
                <div class="flex gap-5  justify-center  items-center">
                    <iconTime />
                    <p class=" font-normal text-xs my-3 text-gray-700 dark:text-gray-400">Total Time : <span
                            class="font-bold">15
                            mins</span></p>
                </div>
                <div class="flex gap-5  justify-center items-center">
                    <iconQuestionMark />
                    <p class=" font-normal text-xs my-3 text-gray-700 dark:text-gray-400">Diffeculty : <span
                            class="font-bold">
                            EASY</span></p>
                </div>
                <div class="flex gap-5 justify-center items-center">
                    <iconUsers />
                    <p class=" font-normal text-xs my-3 text-gray-700 dark:text-gray-400">Total Time : <span
                            class="font-bold">15
                            mins</span></p>
                </div>

            </div>
        </div>
    </div>
</template>

<script setup>
import iconQuestionMark from "./icons/iconQuestionMark.vue";
import iconTime from "./icons/iconTime.vue";
import iconUsers from "./icons/iconUsers.vue";

const props = defineProps({
    recipe: {
    type: Object,
    required: true,
  },
})

</script>

<style></style>