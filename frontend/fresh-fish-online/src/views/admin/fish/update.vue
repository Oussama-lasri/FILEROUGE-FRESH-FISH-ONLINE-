<template>
    <!-- <navBar /> -->
    
    <form @submit.prevent="update" method="put" class="mx-auto py-24 w-full max-w-lg">
        <h2 class="text-4xl font-bold text-center mb-24 capitalize ">Add fish</h2>
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
            <div class="w-full  px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Image
                </label>
            </div>
            <div class="w-full py-5 px-3">
                <img :src="form.image" alt="">
            </div>
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Image
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="image" type="file" @change="changeImage">
                <span class="text-red-500" v-if="errors.image">{{ errors.image }}</span>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Quantity
                </label>
                <input v-model="form.quantity"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    type="number" placeholder="Enter Quantity" min="1">
                <span class="text-red-500" v-if="errors.quantity">{{ errors.quantity }}</span>


            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Price
                </label>
                <input v-model="form.price"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-last-name" type="Number" placeholder="20.10" min="1">
                <span class="text-red-500" v-if="errors.price">{{ errors.price }}</span>

            </div>
        </div>


        <div class="w-full mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Description
            </label>
            <textarea v-model="form.description"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-password" type="" rows="4"></textarea>
            <span class="text-red-500" v-if="errors.description">{{ errors.description }}</span>

        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Category
                </label>
                <select v-model="form.category_id"
                    class="block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">

                    <option v-for="Category in Allcategories" :key="Category.id" :value="Category.id"
                        :selected="Category.id === form.category_id">{{ Category.name }}
                    </option>
                </select>
                <span class="text-red-500" v-if="errors.category_id">{{ errors.category_id }}</span>

            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Buy by
                </label>
                <select v-model="form.buy_by_id"
                    class="block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    <option v-for="buyBy in AllbuyBy" :key="buyBy.id" :value="buyBy.id" :selected="buyBy.id === form.buy_by_id">{{
                        buyBy.name }}</option>
                </select>
                <span class="text-red-500" v-if="errors.buy_by_id">{{ errors.buy_by_id }}</span>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3">
            <div class="w-[40rem]">
                <button class="bg-myblue ml-3 px-8  py-2 rounded-md text-white hover:bg-blue-900">update</button>
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
const AllbuyBy = ref('');
async function buyBy() {
    try {
        let response = await axios.get('http://127.0.0.1:8000/api/buyBy');
        AllbuyBy.value = response.data.data;
        // console.log(response.data.data);
    } catch (error) {
        console.error(error);
    }
}
categories();
buyBy();

let form = reactive({
    title: '',
    image: '',
    quantity: '',
    price: '',
    description: '',
    category_id: '',
    buy_by_id: '',
    status: 'disponible'
});
console.log('1 =>'+ form.title);

let errors = {
    title: null,
    quantity: null,
    price: null,
    description: null,
    category_id: null,
    buy_by_id: null,
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
    const fish = ref('');
    const id = route.params.id;
    async function showFish() {
        try {
            let response = await axios.get('http://127.0.0.1:8000/api/fish/' + id);
            fish.value = response.data.data;
            form.title = fish.value.title;
            form.image = fish.value.image;
            form.description = fish.value.description;
            form.price = fish.value.price;
            form.quantity = fish.value.quantity;
            form.category_id = fish.value.category['id'];
            form.buy_by_id = fish.value.buy_by['id'];
            // console.log(response.data.data);
        } catch (error) {
            console.error(error);
        }
    }
    showFish()
})



function update() {

    if (!!form.title && !!form.image && !!form.quantity && !!form.price && !!form.category_id && !!form.buy_by_id) {
   
        try {
            
            const response = axios.put('http://127.0.0.1:8000/api/fish/' + id, form)
                .then(res => {
                    Swal.fire({
                        title: res.data,
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href="http://localhost:5173/fish/showAll";
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