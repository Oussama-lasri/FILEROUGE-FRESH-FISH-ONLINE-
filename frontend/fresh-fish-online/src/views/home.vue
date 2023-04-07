<template>
  <div class="bg-home h-screen bg-black">
    <navBar />
    <icon-chat class="fixed text-myblue bottom-0 right-0" />
</div>
<FinderFish />
<fishes />




</template>

<script setup>
import navBar from '../components/navBar.vue';
import iconChat from '../components/icons/iconChat.vue';
import FinderFish from '../components/home/FinderFish.vue';
import fishes from '../components/fishes.vue';

</script>

<style>

</style>