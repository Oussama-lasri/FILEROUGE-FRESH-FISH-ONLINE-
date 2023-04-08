<template>
  <section class="text-center relative my-8">
    <img src="../assets/images/Bassfish.png" class="mx-auto my-16" alt="alt" srcset="">
     <div>
            <h2 class=" my-10 text-black text-4xl uppercase font-bold">Fresh off the boat</h2>
        </div>
    <div class="grid my-20 md:grid-cols-4 xl:grid-cols-4 sm:grid-cols-3 justify-center items-center gap-5 mx-5 justify-items-center text-center">
      <cardFish />
      <cardFish />
      <cardFish />
      <cardFish />
      <cardFish />
      <cardFish />
    </div>
    
  <div
    class="gap-2.5 inline-flex justify-center items-center p-2.5 text-left font-normal rounded-[10px] font-['Inter'] text-[rgba(0,118,212,1)] [box-shadow:0px_0px_0px_1px_rgba(0,_118,_212,_1)_inset] [box-shadow-width:1px]"
    style="props.style"
  >
    <p class="text-lg m-0 leading-[normal]">View all of our fresh fish ></p>
  </div>

  </section>
</template>

<script setup>
import cardFish from './cardFish.vue';
</script>

<style>

</style>
