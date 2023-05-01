<template>
    <div>
        <navBar />
        <nav3 />
        <section class="relative my-8">
            <div>
                <h2 class="pl-5 my-10 text-black text-4xl capitalize font-bold">Buy Fresh Fish Online </h2>
            </div>
            <containtCards>
                <div v-for="fish in fishes" :key="fish.id">
                    <cardFish :fish="fish" />
                </div>
            </containtCards>
        </section>
        <div class="flex justify-center items-center p-3">
            <v-pagination v-model="page" :pages="pageCount" :range-size="1" active-color="#DCEDFF"
                @update:modelValue="allFishes" />
        </div>

        <footerSection />
    </div>
</template>

<script setup>

import VPagination from "@hennge/vue3-pagination";
import "@hennge/vue3-pagination/dist/vue3-pagination.css";
import navBar from '../components/navBar.vue';
import footerSection from '../components/home/footerSection.vue';
import nav3 from "../components/nav3.vue";
import containtCards from '../components/containtCards.vue';
import cardFish from '../components/cardFish.vue';
import { onMounted , ref } from 'vue';
import axios from 'axios';


let page = ref(1);
let pageCount = ref(null);
let fishes = ref(null);



onMounted(() => {
    allFishes();
})

async function allFishes() {
    try {
        let response = await axios.get('http://127.0.0.1:8000/api/fishes?page='+page.value);
        fishes.value = response.data.dataPaginate;
        pageCount.value = response.data.page_count;
        console.log(fishes.value);
        console.log(pageCount.value);
    } catch (error) {
        console.error(error);
    }
}








</script>

<style></style>