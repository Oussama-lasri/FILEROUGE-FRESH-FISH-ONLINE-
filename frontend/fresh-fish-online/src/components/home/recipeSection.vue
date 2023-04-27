<template>
    <section class="text-center relative my-8">
        <img src="../../assets/images/recipeIcon.png" class="mx-auto my-16" alt="alt" srcset="">
        <div>
            <h2 class=" my-10 text-black text-4xl uppercase font-bold">Making seafood recipes easy</h2>
        </div>
        <cardsRecipe />
        <a href="/" class="text-lg gap-2.5 inline-flex justify-center items-center p-2.5 text-left font-normal rounded-[10px] font-['Inter'] text-[rgba(0,118,212,1)] [box-shadow:0px_0px_0px_1px_rgba(0,_118,_212,_1)_inset] [box-shadow-width:1px]"
            style="props.style">
            View all of our Recipes >
        </a>

    </section>
</template>
  
<script setup>
import cardRecipe from '../cardRecipe.vue';
import cardsRecipe from '../cardsRecipe.vue';
</script>
  
<style></style>
  