<template>
    <section class="flex flex-wrap text-center container my-24 mx-auto">
        <navBar />
        <div class="w-full flex justify-between">
            <RouterLink to="/dashboard" class="text-black bg-gray-300 p-3 rounded m-6">go back</RouterLink>
            <RouterLink to="/category/add" class="text-white bg-green-600 hover:bg-green-800 p-3 rounded m-6">add
                    Category</RouterLink>
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
                                        image</th>
                                    
                                    
                                    <th
                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap">
                                        action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="border-t" >
                                <tr>
                                    <td
                                        class=" align-middle bg-transparent  border-b-0 whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2">
                                            <div class="my-auto ml-4">
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">#{{ }}
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">

                                        <div>
                                            <img src=""
                                                class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                alt="xd" />
                                        </div>

                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <p
                                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                            {{ }}</p>
                                    </td>

                                    <td
                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                        <div class="flex justify-center">
                                            <a :href="'/category/update/'">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-edit hover:text-green-500"
                                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                    </path>
                                                    <path
                                                        d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                    </path>
                                                    <path d="M16 5l3 3"></path>
                                                </svg>
                                            </a>
                                            <a @click="deleteFish()">

                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler cursor-pointer icon-tabler-trash hover:text-red-500"
                                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M4 7l16 0"></path>
                                                    <path d="M10 11l0 6"></path>
                                                    <path d="M14 11l0 6"></path>
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                </svg>
                                            </a>
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

</script>

<style></style>