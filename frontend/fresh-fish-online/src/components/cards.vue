<template>
  <containtCards>
    <div v-for="fish in fishes" :key="fish.id">
        <cardFish :fish="fish" />
    </div>
  </containtCards>
</template>

<script setup>
import CardFish from './cardFish.vue';
import containtCards from './containtCards.vue';

import { ref , onMounted } from 'vue';
import axios from 'axios';

const fishes = ref(null)



async function allfish() {
    try {
        let response = await axios.get('http://127.0.0.1:8000/api/fish');
        fishes.value = response.data.data;
    } catch (error) {
        console.error(error);
    }
}
allfish();

    
</script>

<style>

</style>