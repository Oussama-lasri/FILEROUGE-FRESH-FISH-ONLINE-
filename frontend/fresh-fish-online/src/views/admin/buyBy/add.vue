<template>
    <!-- <navBar /> -->
    
    <form @submit.prevent="addBuyby" class="mx-auto py-24 w-full max-w-lg">
        <h2 class="text-4xl font-bold text-center mb-24 capitalize ">Add </h2>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Name
                </label>
                <input v-model="form.name"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="text" placeholder="Salamon">
                <span class="text-red-500" v-if="form.errors.name">{{ form.errors.name }}</span>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3">
            <div class="w-[40rem]">
                <button class="bg-myblue ml-3 px-8  py-2 rounded-md text-white hover:bg-blue-900">add </button>
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



let form = reactive({
    name: '',
    errors: {
        name: null,
    }
});


function addBuyby() {
    if (!!form.name) {
        const formData = new FormData();
        formData.append("name", form.name);
        console.log(formData);
        try {
            axios.post('http://127.0.0.1:8000/api/buyBy', formData)
                .then(res => {
                    Swal.fire({
                        title: res.data,
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            router.push('/buyBy/showAll')
                        }
                    })
                    form.name = '';
                });

        } catch (error) {
            console.error(error);
        }
    } else {
        if (!form.name) {
            form.errors.name = 'name is required'
        } else {
            form.errors.name = ''
        }
    }
}
</script>



<style></style>