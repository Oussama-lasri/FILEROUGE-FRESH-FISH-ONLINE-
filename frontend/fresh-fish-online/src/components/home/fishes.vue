<template>
  <section class="text-center relative my-8">
    <img src="../../assets/images/Bassfish.png" class="mx-auto my-16" alt="alt" srcset="">
    <div>
      <h2 class=" my-10 text-black text-4xl uppercase font-bold">Fresh off the boat</h2>
    </div>
    <cards/>
    <a href="/fishes/seeAll"
      class="gap-2.5 inline-flex justify-center items-center p-2.5 text-left font-normal rounded-[10px] font-['Inter'] text-[rgba(0,118,212,1)] [box-shadow:0px_0px_0px_1px_rgba(0,_118,_212,_1)_inset] [box-shadow-width:1px]"
      style="props.style">
      <p class="text-lg m-0 leading-[normal]">View all of our fresh fish ></p>
  </a>

  </section>
</template>

<script setup>
import cards from '../cards.vue';
import CardRecipe from '../cardRecipe.vue';
import containtCards from '../containtCards.vue';
import { RouterLink } from "vue-router";
import { ref } from 'vue'

// const fishes = ref('');

// async function allfish() {
//     try {
//         let response = await axios.get('http://127.0.0.1:8000/api/fish');
//         fishes.value = response.data.data;
//     } catch (error) {
//         console.error(error);
//     }
// }
// allfish();
</script>

<style></style>
