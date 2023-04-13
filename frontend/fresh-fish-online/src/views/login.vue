<template>
    <navBar />
    <nav3 />
    <section class="register">
        <h2 class="font-extrabold text-4xl text-center mb-5 mt-24">Login</h2>
        
        <form @submit.prevent="login" class="flex mb-10 flex-col justify-center  items-center">
            <p v-if="error" class="text-red-500">{{ error }}</p>
            <a href class="py-5  w-1/2 mx-auto text-sm text-gray-600 hover:text-gray-950">Don't have an account? Register here.</a>
            <div class="text-left justify-center mb-6">
            <div class="">
                <label class="block text-gray-600 font-bold text-left mb-10 " for="email">
                    Email
                </label>
            </div>
            <div class="w-[40rem]">
                <input v-model="form.email" class="form-input block pl-10 rounded-md h-12 w-full focus:bg-white" id="my-textfield" type="text" >
            </div>
        </div>
        <div class="flex flex-col  text-left justify-center mb-6">
            <div class="">
                <label class="block text-gray-600 font-bold text-left mb-10 " for="email">
                    Password
                </label>
            </div>
            <div class="w-[40rem]">
                <input v-model="form.password" class="form-input block pl-10 rounded-md h-12 w-full focus:bg-white" id="my-textfield" type="text" >
            </div>
        </div>
        <div class="flex flex-col items-center text-left justify-center mb-6">
            <div class="w-[40rem]">
                <button class="bg-myblue px-8  py-2 rounded-md text-white hover:bg-blue-900">Login</button>
            </div>
        </div>
    </form>


    </section>
    <footerSection />
</template>

<script setup>
import footerSection from '../components/footerSection.vue';
import nav3 from '../components/nav3.vue';
import navBar from '../components/navBar.vue';
import axios  from 'axios';
import {useRouter} from 'vue-router';
import { ref,onMounted,reactive } from 'vue';

const router = useRouter();

let form = reactive({
    email: '',
    password: '',
});
let error = ref('');



const login = async() => await axios.post('http://127.0.0.1:8000/api/login',form)
.then(response =>{
    if(response.data.success){
        // console.log(response.data.data.token);
        localStorage.setItem('token',response.data.data.token);
        router.push('/');
    }else{
        error.value = response.data.message;
    }
} )






</script>

<style>
 .max-h-64 {
            max-height: 16rem;
        }
    
        .form-input,
        .form-textarea,
        .form-select,
        .form-multiselect {
            background-color: #edf2f7;
        }
</style>