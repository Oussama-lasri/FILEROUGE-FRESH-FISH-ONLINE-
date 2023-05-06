<template>
    <!-- <navBar /> -->

    <form @submit.prevent="updateBuyby" class="mx-auto py-24 w-full max-w-lg">
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
        <div class="flex flex-wrap -mx-3">
            <div class="w-[40rem]">
                <button type="submit" class="bg-myblue ml-3 px-8   py-2 rounded-md text-white hover:bg-blue-900">update</button>
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



let form = reactive({
    name: '',
});

let errors = {
    name: null,

}




onMounted(() => {
    const buyBy = ref('');
    const id = router.params.id;
    async function showCategory() {
        try {
            let response = await axios.get('http://127.0.0.1:8000/api/buyBy/' + id);
            buyBy.value = response.data.data;
            form.name = buyBy.value.name;
            // console.log(response.data.data);
        } catch (error) {
            console.error(error);
        }
    }
    showCategory()
})


function updateBuyby() {
    if (!!form.name) {

        try {
            axios.put('http://127.0.0.1:8000/api/buyBy/' + id, form)
                .then(res => {
                    Swal.fire({
                        title: res.data,
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href="http://localhost:5173/buyBy/showAll";
                            console.log(res.data);
                        }
                    })
                    form.name = '';
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