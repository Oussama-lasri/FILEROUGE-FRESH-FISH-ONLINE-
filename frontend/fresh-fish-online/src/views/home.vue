<template>
  <div class="bg-home h-screen bg-black">
    <navBar />
    <icon-chat class="fixed text-myblue bottom-0 right-0" />
  </div>
  <FinderFish />
  <fishes />
  <joinSection />
  <blogSection />
  <emailSection />
  <recipeSection />
  <socialmediaSection />
  <footerSection />
</template>

<script setup>

import navBar from '../components/navBar.vue';
import iconChat from '../components/icons/iconChat.vue';
import FinderFish from '../components/home/FinderFish.vue';
import fishes from '../components/fishes.vue';
import joinSection from '../components/joinSection.vue';
import blogSection from '../components/blogSection.vue';
import emailSection from '../components/emailSection.vue';
import recipeSection from '../components/recipeSection.vue';
import socialmediaSection from '../components/socialmediaSection.vue';
import footerSection from '../components/footerSection.vue';




</script>

<style></style>