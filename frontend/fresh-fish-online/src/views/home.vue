<template>
  <div class="bg-home h-screen bg-black">
    <navBar />
    <icon-chat class="fixed text-myblue bottom-0 right-0" />
  </div>
  <FinderFish  />
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
import fishes from '../components/home/fishes.vue';
import joinSection from '../components/home/joinSection.vue';
import blogSection from '../components/home/blogSection.vue';
import emailSection from '../components/home/emailSection.vue';
import recipeSection from '../components/home/recipeSection.vue';
import socialmediaSection from '../components/home/socialmediaSection.vue';
import footerSection from '../components/home/footerSection.vue';
import { useStore } from "../stores/usersStore";
import { onMounted } from "vue";


onMounted(() => {
    useStore().getItemsCard();
})



</script>

<style></style>