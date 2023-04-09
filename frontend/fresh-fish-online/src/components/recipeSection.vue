<template>
    <section class="text-center relative my-8">
        <img src="../assets/images/recipeIcon.png" class="mx-auto my-16" alt="alt" srcset="">
        <div>
            <h2 class=" my-10 text-black text-4xl uppercase font-bold">Making seafood recipes easy</h2>
        </div>
        <div
            class="grid my-20 md:grid-cols-4 xl:grid-cols-4 sm:grid-cols-3 justify-center items-center gap-5 mx-5 justify-items-center text-center">
            <cardRecipe />
            <cardRecipe />
            <cardRecipe />
            <cardRecipe />
            <cardRecipe />
            
        </div>

        <a href="/" class="text-lg gap-2.5 inline-flex justify-center items-center p-2.5 text-left font-normal rounded-[10px] font-['Inter'] text-[rgba(0,118,212,1)] [box-shadow:0px_0px_0px_1px_rgba(0,_118,_212,_1)_inset] [box-shadow-width:1px]"
            style="props.style">
            View all of our Recipes >
        </a>

    </section>
</template>
  
<script setup>
import cardRecipe from './cardRecipe.vue';
</script>
  
<style></style>
  