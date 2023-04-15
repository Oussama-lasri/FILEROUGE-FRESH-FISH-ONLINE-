<template>
  <navBar />
  <nav3 />
    <h1>Chat  conatainer</h1>
    <!-- <RouterLink to="/details">test</RouterLink> -->
    <message-container/>
    <input-message/>
  <FooterSection />
  



  
</template>

<script setup>
import inputMessage from '../components/chat/inputMessage.vue';
import messageContainer from '../components/chat/messageContainer.vue';
import FooterSection from '../components/footerSection.vue';
import nav3 from '../components/nav3.vue';
import navBar from '../components/navBar.vue';
// import { RouterLink } from 'vue-router';

function getRooms(){

}

</script>

<style>

</style>