<template>
    <div class="container p-12 mt-20 mx-auto">
        <div class="flex flex-col w-full px-0 mx-auto md:flex-row">
            <div class="flex flex-col md:w-full">

                <form @submit.prevent="checkout" class="justify-center w-full mx-auto" method="post" action>
                    <h2 class="mb-4 font-bold md:text-xl text-heading ">Customer information
                    </h2>
                    <div class="">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    Your Email *
                                </label>
                                <input v-model="form.email"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="grid-first-name" type="text" placeholder="" />
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Your Phone
                                </label>
                                <input v-model="form.phone"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-last-name" type="Number" placeholder="" />
                            </div>
                        </div>
                        <h2 class="mb-4 font-bold md:text-xl text-heading ">Delivery address
                        </h2>
                        <div class="">
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-first-name">
                                        First Name
                                    </label>
                                    <input v-model="form.firstName"
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                        id="grid-first-name" type="text" placeholder="" />
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-last-name">
                                        Last Name
                                    </label>
                                    <input v-model="form.lastName"
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-last-name" type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password">
                                        Adress
                                    </label>
                                    <textarea v-model="form.adress"
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-password" type="Email" rows="6" placeholder="Enter You Adress"></textarea>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password">
                                        City
                                    </label>
                                    <input v-model="form.city"
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-password" type="text" placeholder="Enter You City ">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div class="">
                                <router-link to="/cardShop" class="w-fit  px-10 rounded-md cursor-pointer py-2"> Back To
                                    Cart </router-link>
                            </div>
                            <div class="">
                                <button class="w-fit  px-10 rounded-md py-2 text-white bg-myblue hover:bg-blue-900">Continue
                                    To delivery</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="flex bg-gray-100 px-6 flex-col w-full ml-0 lg:ml-12 lg:w-2/5">
                <div class="pt-12 md:pt-0 2xl:ps-4">
                    <h2 class="text-xl font-bold">Order Summary
                    </h2>
                    <div class="mt-8">
                        <div class="flex flex-col my-6 space-y-4" v-for="fish in useStore().cart" :key="fish.id">

                            <div class="flex items-center justify-between space-x-4">
                                <div>
                                    <img :src="fish.fish.image" alt="image" class="w-20">
                                </div>
                                <div>

                                    <h2 class="text-xl font-bold">{{ fish.fish.title }}</h2>

                                    <span class="text-red-600 ">Price : </span>{{ fish.fish.price }}$
                                    <span class="text-red-600">Quantity : </span>{{ fish.qty }}

                                </div>
                                <div class="cursor-pointer" @click="useStore().remove(fish.fish_id)">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div
                        class="flex items-center  w-full py-2 text-sm font-semibold border-t border-gray-300  lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                        Net Total<span class="ml-2">{{ useStore().total }} $</span>
                    </div>
                    <div
                        class="flex items-center  w-full  text-sm font-semibold  border-gray-300 lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                        Delivery <span class="ml-2">$</span>
                    </div>
                    <div
                        class="flex items-center w-full py-2 text-sm font-semibold  border-gray-300  lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                        Shipping Tax<span class="ml-2">$</span>
                    </div>
                    <div
                        class="flex items-center w-full py-4 text-sm font-semibold border-b border-gray-300 lg:py-5 lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                        Total<span class="ml-2">{{ useStore().total }}$</span></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { RouterLink , useRouter} from "vue-router";
import { reactive } from "vue";
import { useStore } from "../stores/usersStore";
import axios from 'axios';
import Swal from "sweetalert2";
const router = useRouter();

useStore().getItemsCard();

let form = reactive({
    email: '',
    phone: '',
    firstName: '',
    lastName: '',
    adress: '',
    city: '',

    errors: {
        email: null,
        phone: null,
        firstName: null,
        lastName: null,
        adress: null,
        city: null,
    }
});


async function checkout() {

    if (!!form.email && !!form.phone && !!form.firstName && !!form.lastName && !!form.adress && !!form.city) {
        const formData = new FormData();
        formData.append("email", form.email);
        formData.append("phone", form.phone);
        formData.append("firstName", form.firstName);
        formData.append("lastName", form.lastName);
        formData.append("adress", form.adress);
        formData.append("city", form.city);
        formData.append("user_id", useStore().user_id);
        formData.append("total", useStore().total);
        formData.append("fishes",JSON.stringify(useStore().cart));

        // console.log(useStore().cart);


        try {
            const response = await axios.post('http://127.0.0.1:8000/api/commande', formData)
                .then(res => {
                    Swal.fire({
                        title: 'are you sure you want to confirm commande ?',
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            axios.delete(`http://127.0.0.1:8000/api/clearCart/${useStore().user_id}`);
                            Swal.fire(
                                'Your order has been added!!',
                                'success'
                            );
                            router.push('/')
                        }
                       
                    })
                    form.email = '';
                    form.phone = '';
                    form.firstName = '';
                    form.lastName = '';
                    form.adress = '';
                    form.category_id = '';
                    form.city = '';
                });

        } catch (error) {
            console.error(error);
        }
    } else {
        if (!form.email) {
            form.errors.email = 'email is required'
        } else {
            form.errors.email = ''
        }
        if (!form.phone) {
            form.errors.phone = 'phone is required'
        } else {
            form.errors.phone = ''
        }
        if (!form.firstName) {
            form.errors.firstName = 'first name is required'
        } else {
            form.errors.firstName = ''
        }
        if (!form.lastName) {
            form.errors.lastName = 'last name is required'
        } else {
            form.errors.lastName = ''
        }
        if (!form.adress) {
            form.errors.adress = 'adress is required'
        } else {
            form.errors.adress = ''
        }
        if (!form.city) {
            form.errors.city = 'city is required'
        } else {
            form.errors.city = ''
        }
    }

}


</script>

<style></style>