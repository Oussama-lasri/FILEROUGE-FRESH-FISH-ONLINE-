<template>
    
  <navBar />
    <nav3 />
    <cardShop />
    <FooterSection/>
</template>
    
<script setup>
import navBar from '../components/navBar.vue';
import nav3 from "../components/nav3.vue";
import cardShop from '../components/cardShop.vue';
import FooterSection from '../components/home/footerSection.vue';
// state management pinia
import { useStore } from "../stores/usersStore";
// ****************

// useStore().getItemsCard();

// console.log(useStore().cart);



</script>

<style></style>