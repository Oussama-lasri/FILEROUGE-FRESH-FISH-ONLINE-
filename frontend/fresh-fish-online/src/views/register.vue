<template>
    <navBar />
    <nav3 />
    <section class="register">
        <h2 class="font-extrabold text-4xl text-center mb-5 mt-24">Login</h2>
        <a href class="py-2 w-1/2 mx-auto text-sm text-gray-600 hover:text-gray-950">Don't have an account? Register here.</a>
        <form action="" class="relative">
        <div class="flex flex-col items-center text-left justify-center mb-6">
            <div class="">
                <label class="blo text-gray-600 font-bold text-right mb-10" for="email">
                    Email
                </label>
            </div>
            <div class="w-2/3">
                <input class="form-input block pl-10 rounded-md h-12 w-full focus:bg-white" id="my-textfield" type="text" value="">
            </div>
        </div>
        <div class="flex flex-col items-center text-left justify-center mb-6">
            <div class="">
                <label class="block text-gray-600 font-bold text-left mb-10 " for="email">
                    Password
                </label>
            </div>
            <div class="w-2/3">
                <input class="form-input block pl-10 rounded-md h-12 w-full focus:bg-white" id="my-textfield" type="text" value="">
            </div>
        </div>
        <div class="flex flex-col items-center text-left justify-center mb-6">
            <div class="">
                <button class="bg-myblue px-5 rounded-md text-white hover:bg-blue-900">clear cart</button>
            </div>
            
        </div>
    </form>


    </section>
    <footerSection />
</template>

<script setup>
import footerSection from '../components/footerSection.vue';
import nav3 from '../components/nav3.vue';
import navBar from '../components/navBar.vue'




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