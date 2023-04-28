<template>
    <section class="flex flex-wrap text-center container my-24 mx-auto">
        <navBar />
        <div class="w-full flex justify-between">
            <RouterLink to="/dashboard" class="text-black bg-gray-300 p-3 rounded m-6">go back</RouterLink>

        </div>
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">

                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table
                            class="items-center text-center justify-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        id</th>
                                    <th
                                        class=" py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        name</th>
                                    <th
                                        class=" py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        email</th>
                                    <th
                                        class=" py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        phone</th>
                                    <th
                                        class="px-10 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        adress</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        city</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Sum</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        status </th>

                                    <th
                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap">
                                        action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="border-t" :key="commande.id" v-for="commande in commandes">
                                <tr>
                                    <td
                                        class=" align-middle bg-transparent  border-b-0 whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2">
                                            <div class="my-auto ml-4">
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">#{{ commande.id }}
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <p
                                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                            {{ commande.firstName }} {{ commande.lastName }}</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <p
                                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                            {{ commande.email }} </p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <p
                                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                            {{ commande.phone }}</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <p
                                            class="mb-0 text-sm font-semibold leading-normal text-center dark:text-white dark:opacity-60">
                                            {{ commande.adress }}</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <p
                                            class="mb-0 text-sm font-semibold leading-normal text-center dark:text-white dark:opacity-60">
                                            {{ commande.city }}</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <p
                                            class="mb-0 text-sm font-semibold leading-normal text-center dark:text-white dark:opacity-60">
                                            {{ commande.total }} $</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <p
                                            class="mb-0 text-sm font-semibold leading-normal text-center dark:text-white dark:opacity-60">
                                            {{ commande.status }}</p>
                                    </td>

                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <div class="flex gap-x-5 text-center" v-if="commande.status === 'attente'">
                                            <div class="cursor-pointer text-green-400" @click="accept(commande.id)">
                                                accepte
                                            </div>
                                            <div class="cursor-pointer text-red-600" @click="refuse(commande.id)">
                                                refuse
                                            </div>
                                        </div>
                                        <div class="flex gap-x-5 text-center" v-else-if="commande.status === 'accepte'">
                                            <div class=" text-green-400">
                                                accepted
                                            </div>
                                        </div>
                                        <div class="flex gap-x-5 text-center" v-else>
                                            <div class="c text-red-600">
                                                refused
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import navBar from "../../../components/admin/navBar.vue";
import asideBar from "../../../components/admin/asideBar.vue";
import { ref, onMounted } from 'vue'
import axios from 'axios';
import { RouterLink } from 'vue-router';
import Swal from 'sweetalert2';
const commandes = ref('')



async function allCommande() {
    try {
        let response = await axios.get('http://127.0.0.1:8000/api/commande');
        commandes.value = response.data.data;
        console.log(commandes.value);

    } catch (error) {
        console.error(error);
    }
}
allCommande();

async function accept(id) {
    
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to accept this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, accept it!'
    }).then((result) => {
        if (result.isConfirmed) {
            try {
                const response = axios.post('http://127.0.0.1:8000/api/commande/accept/' + id)
                    .then(res => {
                        Swal.fire(
                            'accepted!',
                            'success'
                        );
                        allCommande();
                    });
            } catch (error) {
                console.error(error);
            }


        }
    })


}
async function refuse(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to accept this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, accept it!'
    }).then((result) => {
        if (result.isConfirmed) {
            try {
                const response = axios.post('http://127.0.0.1:8000/api/commande/refuse/' + id)
                    .then(res => {
                        Swal.fire(
                            'accepted!',
                            'success'
                        );
                        allCommande();
                    });
            } catch (error) {
                console.error(error);
            }


        }
    })
}


</script>

<style></style>