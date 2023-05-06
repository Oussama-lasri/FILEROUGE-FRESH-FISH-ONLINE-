<template>
    <!-- <navBar /> -->

    <form @submit.prevent="addRecipe" class="mx-auto py-24 w-full max-w-lg">
        <!-- <router-link to="" class="absolute left-36 top-24 bg-slate-200 py-3 rounded-md px-5">back</router-link> -->
        <h2 class="text-4xl font-bold text-center mb-24 capitalize ">Add recipe</h2>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Title
                </label>
                <input v-model="form.title"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="text" placeholder="Salamon">
                <span class="text-red-500" v-if="form.errors.title">{{ form.errors.title }}</span>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Category of fish
                </label>
                <select v-model="form.category"
                    class="block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    <option v-for="Category in Allcategories" :value="Category.id">{{ Category.name }}</option>
                </select>
                <span class="text-red-500" v-if="form.errors.category">{{ form.errors.category }}</span>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Image
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="file" @change="changeImage">
                <span class="text-red-500" v-if="form.errors.image">{{ form.errors.image }}</span>
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
                <span class="text-red-500" v-if="form.errors.title">{{ form.errors.dish_type }}</span>
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
                <span class="text-red-500" v-if="form.errors.preparation_time">{{ form.errors.preparation_time }}</span>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Cooking time
                </label>
                <input v-model="form.cooking_time"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-last-name" type="Number" placeholder="20.10" min="1">
                <span class="text-red-500" v-if="form.errors.cooking_time">{{ form.errors.cooking_time }}</span>
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
                <span class="text-red-500" v-if="form.errors.difficulty">{{ form.errors.difficulty }}</span>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Cuisine type
                </label>
                <input v-model="form.Serves"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="number" placeholder="number of person eat " min="1">
                <span class="text-red-500" v-if="form.errors.Serves">{{ form.errors.Serves }}</span>
            </div>
        </div>
        
        <div class="w-full mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Cuisine type
                </label>
                <input v-model="form.cuisine_type"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="text" placeholder="Ex : Frensh" min="1">
                <span class="text-red-500" v-if="form.errors.cuisine_type">{{ form.errors.cuisine_type }}</span>
            </div>

        <div class="w-full mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Ingredients
            </label>
            <textarea v-model="form.ingredients"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-password" type="" rows="4"></textarea>
            <span class="text-red-500" v-if="form.errors.ingredients">{{ form.errors.ingredients }}</span>
        </div>
       

        <div class="w-full mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                method
            </label>
            <textarea v-model="form.method"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-password" type="" rows="4"></textarea>
            <span class="text-red-500" v-if="form.errors.method">{{ form.errors.method }}</span>
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
import { reactive, ref, getCurrentInstance } from 'vue';
import axios from 'axios';
import Swal from 'sweetalert2';
import { useRouter } from 'vue-router';

const router = useRouter();
const Allcategories = ref('');

async function categories() {
    try {
        let response = await axios.get('http://127.0.0.1:8000/api/categorie');
        Allcategories.value = response.data.data;
        console.log(response.data.data);
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
    errors: {
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
});

function changeImage(event) {
    let file = event.target.files[0];
    let formData = new FormData();
    formData.append('file', file);
    formData.append('upload_preset', 'xtmbp75g');
    axios.post('https://api.cloudinary.com/v1_1/dkl6ojuvg/upload', formData)
        .then(response => {
            console.log(response);
            form.image = response.data.secure_url;
        })
}


function addRecipe() {
    console.log(form);
    if (!!form.title && !!form.dish_type && !!form.image && !!form.Serves && !!form.preparation_time && !!form.cooking_time &&
        !!form.difficulty && !!form.cuisine_type && !!form.ingredients && !!form.method && !!form.category) {
        alert('tet');
        const formData = new FormData();
        formData.append("title", form.title);
        formData.append("dish_type", form.dish_type);
        formData.append("image", form.image);
        formData.append("price", form.price);
        formData.append("Serves", form.Serves);
        formData.append("preparation_time", form.preparation_time);
        formData.append("cooking_time", form.cooking_time);
        formData.append("difficulty", form.difficulty);
        formData.append("cuisine_type", form.cuisine_type);
        formData.append("ingredients", form.ingredients);
        formData.append("method", form.method);
        formData.append("category", form.category);
        console.log(formData);


        try {
            const response = axios.post('http://127.0.0.1:8000/api/recipe', formData)
                .then(res => {
                    Swal.fire({
                        title: res.data,
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            router.push('/recipe/showAll')
                        }
                    })
                    form.title= '';
                    form.dish_type = '';
                    form.image = '';
                    form.Serves = '';
                    form.preparation_time = '';
                    form.cooking_time = '';
                    form.difficulty = '';
                    form.cuisine_type = '';
                    form.ingredients = '';
                    form.method = '';
                    form.category = '';
                });

        } catch (error) {
            console.error(error);
        }
    } else {
        if (!form.title) {
            form.errors.title = 'title is required'
        } else {
            form.errors.title = ''
        }
        if (!form.image) {
            form.errors.image = 'image is required'
        } else {
            form.errors.image = ''
        }
        if (!form.dish_type) {
            form.errors.dish_type = 'dish type is required'
        } else {
            form.errors.dish_type = ''
        }
        if (!form.Serves) {
            form.errors.Serves = 'Serves is required'
        } else {
            form.errors.Serves = ''
        }
        if (!form.preparation_time) {
            form.errors.preparation_time = 'preparation time is required'
        } else {
            form.errors.preparation_time = ''
        }
        if (!form.cooking_time) {
            form.errors.cooking_time = 'cooking time is required'
        } else {
            form.errors.cooking_time = ''
        }
        if (!form.difficulty) {
            form.errors.difficulty = 'difficulty is required'
        } else {
            form.errors.difficulty = ''
        }
        if (!form.cuisine_type) {
            form.errors.cuisine_type = 'cuisine type is required'
        } else {
            form.errors.cuisine_type = ''
        }
        if (!form.ingredients) {
            form.errors.ingredients = 'ingredients is required'
        } else {
            form.errors.ingredients = ''
        }
        if (!form.method) {
            form.errors.method = 'method is required'
        } else {
            form.errors.method = ''
        }
        if (!form.category) {
            form.errors.category = 'category is required'
        } else {
            form.errors.category = ''
        }
    }
}
</script>



<style></style>