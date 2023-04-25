<template>
    <containtCards>
      <div v-for="recipe in recipes" :key="recipe.id">
          <cardRecipe :recipe="recipe" />
      </div>
    </containtCards>
  </template>
  
  <script setup>
  import cardRecipe from './cardRecipe.vue';
  import containtCards from './containtCards.vue';
  import { ref , onMounted } from 'vue';
  import axios from 'axios';
  
  const recipes = ref(null)
  
  
  
  async function allRecipes() {
      try {
          let response = await axios.get('http://127.0.0.1:8000/api/recipe');
          recipes.value = response.data.data;
      } catch (error) {
          console.error(error);
      }
  }
  allRecipes();
  console.log(recipes.value);
  
      
  </script>
  
  <style>
  
  </style>