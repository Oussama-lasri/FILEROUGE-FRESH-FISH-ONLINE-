<template>
    <!-- <navBar /> -->

    <form @submit.prevent="addRecipe" class="mx-auto py-24 w-full max-w-lg">
        <!-- <router-link to="" class="absolute left-36 top-24 bg-slate-200 py-3 rounded-md px-5">back</router-link> -->
        <h2 class="text-4xl font-bold text-center mb-24 capitalize ">Update recipe</h2>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Title
                </label>
                <input v-model="form.title"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="text" placeholder="Salamon">
                <span class="text-red-500" v-if="errors.title">{{ errors.title }}</span>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Category of fish
                </label>
                <select v-model="form.category"
                    class="block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    <option v-for="Category in Allcategories" :key="Category.id" :value="Category.id">{{ Category.name }}</option>
                </select>
                <span class="text-red-500" v-if="errors.category">{{ errors.category }}</span>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Image
                </label>
            <div class="w-full py-5 px-3">
                <img :src="form.image" alt="">
            </div>
            
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="file" @change="changeImage">
                <span class="text-red-500" v-if="errors.image">{{ errors.image }}</span>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Dish Type
                </label>
                <input v-model="form.dish_type"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="text" placeholder="Salamon">
                <span class="text-red-500" v-if="errors.title">{{ errors.dish_type }}</span>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Preparation time
                </label>
                <input v-model="form.preparation_time"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    type="number" placeholder="Enter time of prepare recipe" min="1">
                <span class="text-red-500" v-if="errors.preparation_time">{{ errors.preparation_time }}</span>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Cooking time
                </label>
                <input v-model="form.cooking_time"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-last-name" type="Number" placeholder="20.10" min="1">
                <span class="text-red-500" v-if="errors.cooking_time">{{ errors.cooking_time }}</span>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Difficulty
                </label>
                <input v-model="form.difficulty"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    type="text" placeholder="Easy , ...." min="1">
                <span class="text-red-500" v-if="errors.difficulty">{{ errors.difficulty }}</span>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Cuisine type
                </label>
                <input v-model="form.Serves"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="number" placeholder="number of person eat " min="1">
                <span class="text-red-500" v-if="errors.Serves">{{ errors.Serves }}</span>
            </div>
        </div>

        <div class="w-full mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Cuisine type
            </label>
            <input v-model="form.cuisine_type"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                type="text" placeholder="Ex : Frensh" min="1">
            <span class="text-red-500" v-if="errors.cuisine_type">{{ errors.cuisine_type }}</span>
        </div>

        <div class="w-full mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Ingredients
            </label>
            <textarea v-model="form.ingredients"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-password" type="" rows="4"></textarea>
            <span class="text-red-500" v-if="errors.ingredients">{{ errors.ingredients }}</span>
        </div>


        <div class="w-full mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                method
            </label>
            <textarea v-model="form.method"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-password" type="" rows="4"></textarea>
            <span class="text-red-500" v-if="errors.method">{{ errors.method }}</span>
        </div>
        <div class="flex flex-wrap -mx-3">
            <div class="w-[40rem]">
                <button class="bg-myblue ml-3 px-8  py-2 rounded-md text-white hover:bg-blue-900">add a fiish</button>
            </div>
        </div>
    </form>
</template>

<script setup>
import navBar from '../../../components/admin/navBar.vue';
import { reactive, ref, getCurrentInstance, onMounted, onBeforeMount } from 'vue';
import axios from 'axios';
import Swal from 'sweetalert2';
import { routeLocationKey } from 'vue-router';
import { useRoute } from 'vue-router';


const route = useRoute();
const id = route.params.id;

const Allcategories = ref('');
async function categories() {
    try {
        let response = await axios.get('http://127.0.0.1:8000/api/categorie');
        Allcategories.value = response.data.data;
        // console.log(response.data.data);
    } catch (error) {
        console.error(error);
    }
}

categories();



let form = reactive({
    title: '',
    dish_type: '',
    image: '',
    Serves: '',
    preparation_time: '',
    cooking_time: '',
    difficulty: '',
    cuisine_type: '',
    ingredients: '',
    method: '',
    category: '',
});


let errors = {
    title: null,
    dish_type: null,
    image: null,
    Serves: null,
    preparation_time: null,
    cooking_time: null,
    difficulty: null,
    cuisine_type: null,
    ingredients: null,
    method: null,
    category: null,
}

function changeImage(event) {
    let file = event.target.files[0];
    let formData = new FormData();
    formData.append('file', file);
    formData.append('upload_preset', 'xtmbp75g');
    axios.post('https://api.cloudinary.com/v1_1/dkl6ojuvg/upload', formData)
        .then(response => {
            // console.log(response);
            form.image = response.data.secure_url;
        })
}

onMounted(() => {
    const recipe = ref('');
    const id = route.params.id;
    async function showRecipe() {
        try {
            let response = await axios.get('http://127.0.0.1:8000/api/recipe/' + id);
            recipe.value = response.data.data;
            console.log(recipe.value);
            form.title = recipe.value.title;
            form.dish_type = recipe.value.dish_type;
            form.image = recipe.value.image;
            form.Serves = recipe.value.Serves;
            form.preparation_time = recipe.value.preparation_time;
            form.cooking_time = recipe.value.cooking_time;
            form.difficulty = recipe.value.difficulty;
            form.cuisine_type = recipe.value.cuisine_type;
            form.ingredients = recipe.value.ingredients;
            form.method = recipe.value.method;
            form.category = recipe.value.category;
            // console.log(response.data.data);
        } catch (error) {
            console.error(error);
        }
    }
    showRecipe()
})



function update() {
    if (!!form.title && !!form.image && !!form.quantity && !!form.price && !!form.category_id && !!form.buy_by_id) {
        try {

            const response = axios.put('http://127.0.0.1:8000/api/recipe/' + id, form)
                .then(res => {
                    Swal.fire({
                        title: res.data,
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href = "http://localhost:5173/fish/showAll";
                            console.log(res.data);
                        }
                    })
                        .catch(e => console.log(e))
                });

        } catch (error) {
            console.error(error);
        }
    } else {
        alert('kjsdjk');
        if (!form.title) {
            errors.title = 'title is required'
        } else {
            errors.title = ''
        }
        if (!form.image) {
            errors.image = 'image is required'
        } else {
            errors.image = ''
        }
        if (!form.price) {
            errors.price = 'price is required'
        } else {
            errors.price = ''
        }
        if (!form.quantity) {
            errors.quantity = 'quantity is required'
        } else {
            errors.quantity = ''
        }
        if (!form.description) {
            errors.description = 'description is required'
        } else {
            errors.description = ''
        }
        if (!form.category_id) {
            errors.category_id = 'category is required'
        } else {
            errors.category_id = ''
        }
        if (!form.buy_by_id) {
            errors.buy_by_id = 'buy_by is required'
        } else {
            errors.buy_by_id = ''
        }
    }
}
</script>



<style></style>