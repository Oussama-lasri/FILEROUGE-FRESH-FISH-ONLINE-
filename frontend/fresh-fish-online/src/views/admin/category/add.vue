<template>
    <!-- <navBar /> -->
    
    <form @submit.prevent="addCategory" class="mx-auto py-24 w-full max-w-lg">
        <h2 class="text-4xl font-bold text-center mb-24 capitalize ">Add Category</h2>
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
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <img :src="form.image" alt="">
            </div>
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
        <div class="flex flex-wrap -mx-3">
            <div class="w-[40rem]">
                <button class="bg-myblue ml-3 px-8  py-2 rounded-md text-white hover:bg-blue-900">add a Category</button>
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
    image: '',
  
    errors: {
        name: null,
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


function addCategory() {
    if (!!form.name && !!form.image ) {
        const formData = new FormData();
        formData.append("name", form.title);
        formData.append("image", form.image);
        console.log(formData);
        try {
            axios.post('http://127.0.0.1:8000/api/categorie', formData)
                .then(res => {
                    Swal.fire({
                        title: res.data,
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            router.push('/category/showAll')
                        }
                    })
                    form.name = '';
                    form.image = '';
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
        if (!form.image) {
            form.errors.image = 'image is required'
        } else {
            form.errors.image = ''
        }
    }
}
</script>



<style></style>