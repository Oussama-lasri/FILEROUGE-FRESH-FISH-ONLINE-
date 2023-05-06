<template>
    <navBar />
    <nav3 />
    <div class="container my-40 mx-auto px-20">
        <div class="space-y-4 lg:grid lg:grid-cols-3 lg:items-start lg:gap-6 lg:space-y-0" style="cursor: auto;">

            <a href="https://stackdiary.com/" class="group">

                <div class="aspect-w-5  aspect-h-8">

                    <img class="object-cover w-96 shadow-lg  group-hover:opacity-75" :src="fish.image" alt="Featured Photo"
                        style="cursor: auto;">

                </div>

            </a>

            <div class="sm:col-span-2" style="cursor: auto;">
                <div class="mt-2" style="cursor: auto;">
                    <h4 class="text-lg leading-6 font-semibold font-sans text-skin-inverted group-hover:text-skin-primary"
                        style="cursor: auto;">DISCOVER MORE <a href="" class="font-bold text-myblue">{{ fish.category.name
                        }}</a>
                    </h4>
                    <hr class="my-7">
                    <h1 class="mt-1 text-2xl my-5 capitalize font-bold text-skin-base leading-5" style="cursor: auto;">
                        {{ fish.title }}
                    </h1>
                    <h5 class="mt-1 text-md capitalize  text-skin-base leading-5">
                        from
                    </h5>
                    <div class="flex cursor-pointer">
                        <p class="my-4"><span class="font-bold">{{ fish.price }}$</span> PER {{ fish.buy_by.name }}</p>
                        <a @click="useStore().addToCart(fish.id)"
                            class="inline-flex ml-7 uppercase items-center px-6  text-sm font-medium text-center text-white bg-myblue rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            buy now
                            <iconShopping />
                    </a>
                    </div>
                    <hr class="my-7">
                    <p>{{ fish.description }}</p>

                </div>
            </div>
        </div>
    </div>
    <div class="text-center mb-24 relative my-8">
        <fishes />
    </div>
    <footerSection />
</template>

<script setup>
import navBar from '../components/navBar.vue';
import footerSection from '../components/home/footerSection.vue';
import detailSection from '../components/home/detailSection.vue';
import fishes from '../components/home/fishes.vue';
import iconShopping from "../components/icons/iconShopping.vue";
import cardFish from "../components/cardRecipe.vue";
import nav3 from "../components/nav3.vue";
import { ref, onMounted, onBeforeMount } from "vue";
import axios from 'axios';
import { useRoute } from 'vue-router';
import { useStore } from "../stores/usersStore";



const route = useRoute();
const id = route.params.id;
const fish = ref('');
onBeforeMount(() => {
    useStore().getItemsCard();
    async function showFish() {
        try {
            let response = await axios.get('http://127.0.0.1:8000/api/fish/' + id);
            fish.value = response.data.data;
            console.log(response.data.data);
        } catch (error) {
            console.error(error);
        }
    }
    showFish()

})

</script>

<style></style>