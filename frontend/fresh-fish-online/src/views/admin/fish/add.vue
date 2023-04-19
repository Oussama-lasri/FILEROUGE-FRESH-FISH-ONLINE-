<template>
    <navBar />
    <h2 class="text-4xl font-bold text-center mt-24 capitalize ">Add fish</h2>
    <form @submit.prevent="addFish" class="mx-auto py-24 w-full max-w-lg">
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
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Image
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="image" type="file" @change="changeImage">
                <span class="text-red-500" v-if="form.errors.image">{{ form.errors.image }}</span>


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
                <span class="text-red-500" v-if="form.errors.quantity">{{ form.errors.quantity }}</span>


            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Price
                </label>
                <input v-model="form.price"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-last-name" type="Number" placeholder="20.10" min="1">
                <span class="text-red-500" v-if="form.errors.price">{{ form.errors.price }}</span>

            </div>
        </div>


        <div class="w-full mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Description
            </label>
            <textarea v-model="form.description"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-password" type="" rows="4"></textarea>
            <span class="text-red-500" v-if="form.errors.description">{{ form.errors.description }}</span>

        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Category
                </label>
                <select v-model="form.category_id"
                    class="block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    <option v-for="Category in Allcategories" :value="Category.id">{{ Category.name }}</option>
                </select>
                <span class="text-red-500" v-if="form.errors.category_id">{{ form.errors.category_id }}</span>

            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Buy by
                </label>
                <select v-model="form.buy_by_id"
                    class="block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    <option v-for="buyBy in AllbuyBy" :value="buyBy.id">{{ buyBy.name }}</option>
                </select>
                <span class="text-red-500" v-if="form.errors.buy_by_id">{{ form.errors.buy_by_id }}</span>

            </div>
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
const AllbuyBy = ref('');
async function buyBy() {
    try {
        let response = await axios.get('http://127.0.0.1:8000/api/buyBy');
        AllbuyBy.value = response.data.data;
        console.log(response.data.data);
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
    errors: {
        title: null,
        quantity: null,
        price: null,
        description: null,
        category_id: null,
        buy_by_id: null,
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


function addFish() {
    if (!!form.title && !!form.image && !!form.quantity && !!form.price && !!form.category_id && !!form.buy_by_id) {
        const formData = new FormData();
        formData.append("title", form.title);
        formData.append("image", form.image);
        formData.append("quantity", form.quantity);
        formData.append("price", form.price);
        formData.append("description", form.description);
        formData.append("category_id", form.category_id);
        formData.append("buy_by_id", form.buy_by_id);
        formData.append("status", "test");
        console.log(formData);
        

        try {
            const response = axios.post('http://127.0.0.1:8000/api/fish', formData)
                .then(res => {
                    Swal.fire({
                        title: res.data,
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            router.push('/fish/showAll')
                        }
                    })
                    form.title = '';
                    form.image = '';
                    form.quantity = '';
                    form.price = '';
                    form.description = '';
                    form.category_id = '';
                    form.buy_by_id = '';
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
        if (!form.price) {
            form.errors.price = 'price is required'
        } else {
            form.errors.price = ''
        }
        if (!form.quantity) {
            form.errors.quantity = 'quantity is required'
        } else {
            form.errors.quantity = ''
        }
        if (!form.description) {
            form.errors.description = 'description is required'
        } else {
            form.errors.description = ''
        }
        if (!form.category_id) {
            form.errors.category_id = 'category is required'
        } else {
            form.errors.category_id = ''
        }
        if (!form.buy_by_id) {
            form.errors.buy_by_id = 'buy_by is required'
        } else {
            form.errors.buy_by_id = ''
        }
    }
}
</script>



<style></style>