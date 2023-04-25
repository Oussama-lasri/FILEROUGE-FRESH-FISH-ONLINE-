<template>
    <navbar />
    <h2 class="text-4xl font-bold text-center mt-12 capitalize ">register</h2>
    <form @submit.prevent="register" class="mx-auto py-24 w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    First Name
                </label>
                <input v-model="form.firstName"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="text" placeholder="Jane">

            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Last Name
                </label>
                <input v-model="form.lastName"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-last-name" type="text" placeholder="Doe">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Email
                </label>
                <input v-model="form.email"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-password" type="Email" placeholder="Enter You email">

            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Password
                </label>
                <input v-model="form.password"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="Password" placeholder="*************">

            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Confirm Password
                </label>
                <input v-model="form.confirm_password"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-last-name" type="Password" placeholder="*************">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-[40rem]">
                <button class="bg-myblue ml-3 px-8  py-2 rounded-md text-white hover:bg-blue-900">Register</button>
            </div>
        </div>
    </form>
    <FooterSection />
</template>

<script setup>
import FooterSection from '../../components/home/footerSection.vue';
import navbar from '../../components/navBar.vue';
import { reactive,ref } from 'vue';
import axios from 'axios';
import {useRouter} from 'vue-router';
const router = useRouter();


let form = reactive({
    firstName: '',
    lastName: '',
    email: '',
    password: '',
    confirm_password: '',
});

const register = async () => await axios.post('http://127.0.0.1:8000/api/register', form)
    .then(response => {
        localStorage.setItem('token',response.data.data.token);
        localStorage.setItem('role',response.data.data.role);
        router.push('/');
        console.log(response);
    })

</script>

<style></style>