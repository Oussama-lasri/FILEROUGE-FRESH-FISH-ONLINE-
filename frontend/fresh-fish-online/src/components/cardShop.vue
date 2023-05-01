<template>
    <div>
        <div class="m-10 flex justify-between ">
            <h2 class="text-2xl font-bold">Shopping Cart</h2>
            <button @click="useStore().clearCart()" class="bg-myblue px-5 rounded-md text-white hover:bg-blue-900">clear
                cart</button>
        </div>

        <div class="relative w-[90%] sm:w-[70%] mx-auto  overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Image</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Unit Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Qty
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr v-for="fish in useStore().cart" :key="fish.fish_id"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-32 p-4">
                            <img :src="fish.fish.image" alt="Fish">
                        </td>
                        <td class="px-4 py-4 font-semibold text-gray-900 dark:text-white">
                            {{ fish.fish.title }}
                        </td>
                        <td class="px-4 py-4 font-semibold  text-gray-900 dark:text-white">
                            {{ fish.fish.price }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <button
                                    class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                    type="button" @click="useStore().moins(fish.qty, fish.fish_id)">
                                    <span class="sr-only">Quantity button</span>
                                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div>
                                    <input type="number" id=""
                                        class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="1" min="1" v-model="fish.qty" required>
                                </div>
                                <button
                                    class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                    type="button" @click="useStore().plus(fish.qty, fish.fish_id)">
                                    <span class="sr-only">Quantity button</span>
                                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            {{ fish.fish.price * fish.qty }}
                        </td>
                        <td class="px-6 py-4">
                            <a @click="useStore().remove(fish.fish_id)"
                                class="font-medium cursor-pointer text-red-600 dark:text-red-500 hover:underline">Remove</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex justify-end gap-y-10 flex-col m-24 items-end  ">

            <div class="flex flex-col items-end right-px text-black font-medium ">
                <p class="text-2xl ">Net Total: ${{ useStore().total }}</p>
            </div>
            <p class=" text-xl font-medium text-black h-6 ">
                Tax Total: $0.00
            </p>
            <div class=" flex flex-col items-end right-0 text-black font-medium ">
                <p class="text-2xl ">Sub Total: ${{ useStore().total }}</p>
            </div>
            <a @click="isCommanded()" class="bg-myblue py-3 px-5 rounded-md text-white hover:bg-blue-900">Checkout</a>
        </div>
    </div>
</template>

<script setup>
import { useStore } from "../stores/usersStore";
import { onMounted } from 'vue'
import {useRouter} from 'vue-router';
import Swal from "sweetalert2";
const router = useRouter();


onMounted(() => {
    useStore().getItemsCard();
})

function isCommanded() {
    if (useStore().cart == '') {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'please can you add some products',
        })
    }else{
        router.push('/checkout');
    }
}
</script>

<style></style>