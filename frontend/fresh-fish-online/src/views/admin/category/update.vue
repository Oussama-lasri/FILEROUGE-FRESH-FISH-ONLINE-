<template>
    <!-- <navBar /> -->

    <form @submit.prevent="updateCategory" class="mx-auto py-24 w-full max-w-lg">
        <h2 class="text-4xl font-bold text-center mb-24 capitalize ">Add Category</h2>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Name
                </label>
                <input v-model="form.name"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="text" placeholder="Salamon">
                <span class="text-red-500" v-if="errors.name">{{ errors.name }}</span>
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
                    id="image" type="file" @change="changeImage">
                <span class="text-red-500" v-if="errors.image">{{ errors.image }}</span>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3">
            <div class="w-[40rem]">
                <button class="bg-myblue ml-3 px-8  py-2 rounded-md text-white hover:bg-blue-900">update Category</button>
            </div>
        </div>
    </form>
</template>

<script setup>
import navBar from '../../../components/admin/navBar.vue';
import { reactive, ref, onMounted } from 'vue';
import axios from 'axios';
import Swal from 'sweetalert2';
import { useRoute , useRouter } from 'vue-router';

const router = useRoute();
const id = router.params.id;

console.log(id);

let form = reactive({
    name: '',
    image: '',
});

let errors = {
    name: null,
    image: null
}


function changeImage(event) {
    let file = event.target.files[0];
    let formData = new FormData();
    formData.append('file', file);
    formData.append('upload_preset', 'xtmbp75g');
    axios.post('https://api.cloudinary.com/v1_1/dkl6ojuvg/upload', formData)
        .then(response => {
            form.image = response.data.secure_url;
        })
}

onMounted(() => {
    const category = ref('');
    const id = router.params.id;
    async function showCategory() {
        try {
            let response = await axios.get('http://127.0.0.1:8000/api/categorie/' + id);
            category.value = response.data.data;
            form.name = category.value.name;
            form.image = category.value.image;
            // console.log(response.data.data);
        } catch (error) {
            console.error(error);
        }
    }
    showCategory()
})


function updateCategory() {
    if (!!form.name && !!form.image) {

        try {
            axios.put('http://127.0.0.1:8000/api/categorie/' + id, form)
                .then(res => {
                    Swal.fire({
                        title: res.data,
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href="http://localhost:5173/category/showAll";
                            console.log(res.data);
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
            errors.name = 'name is required'
        } else {
            errors.name = ''
        }
        if (!form.image) {
            errors.image = 'image is required'
        } else {
            errors.image = ''
        }
    }
}
</script>



<style></style>