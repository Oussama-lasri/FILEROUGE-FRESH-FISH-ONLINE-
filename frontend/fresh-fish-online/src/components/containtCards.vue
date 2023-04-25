<template>
  
  <div  class="grid my-20 md:grid-cols-4 xl:grid-cols-4 sm:grid-cols-3 justify-center items-center gap-5 mx-5 justify-items-center text-center" >
    <slot></slot>
  </div>
</template>

<script setup>
import cardFish from '../components/cardFish.vue';
import { ref , onMounted } from 'vue';




</script>

<style>

</style>