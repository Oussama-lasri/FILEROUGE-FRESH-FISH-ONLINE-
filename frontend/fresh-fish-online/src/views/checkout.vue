<template>
    <div class="container p-12 mt-20 mx-auto">
        <div class="flex flex-col w-full px-0 mx-auto md:flex-row">
            <div class="flex flex-col md:w-full">

                <form class="justify-center w-full mx-auto" method="post" action>
                    <h2 class="mb-4 font-bold md:text-xl text-heading ">Customer information
                    </h2>
                    <div class="">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    Your Email *
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="grid-first-name" type="text" placeholder="" />
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Your Phone
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-last-name" type="Number" placeholder="" />
                            </div>
                        </div>
                        <h2 class="mb-4 font-bold md:text-xl text-heading ">Delivery address
                        </h2>
                        <div class="">
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-first-name">
                                        First Name
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                        id="grid-first-name" type="text" placeholder="" />
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-last-name">
                                        Last Name
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-last-name" type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password">
                                        Adress
                                    </label>
                                    <textarea
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-password" type="Email" rows="6" placeholder="Enter You Adress"></textarea>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password">
                                        City
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-password" type="text" placeholder="Enter You City ">
                                </div>
                            </div>
                        </div>
                        
                        

                        
                        <div class="mt-4 flex justify-between">
                            <div class="">
                            <a class="w-fit  px-10 rounded-md cursor-pointer py-2"> Back To Cart </a>
                        </div>
                        <div class="">
                            <button class="w-fit  px-10 rounded-md py-2 text-white bg-myblue hover:bg-blue-900">Continue To delivery</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
            <div class="flex bg-gray-100 px-6 flex-col w-full ml-0 lg:ml-12 lg:w-2/5">
                <div class="pt-12 md:pt-0 2xl:ps-4">
                    <h2 class="text-xl font-bold">Order Summary
                    </h2>
                    <div class="mt-8">
                        <div class="flex flex-col my-6 space-y-4">
                            
                            <div class="flex items-center justify-between space-x-4">
                                <div>
                                    <img src="../assets/images/fishCard.png" alt="image"
                                        class="w-20">
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold">Title</h2>
                                    
                                    <span class="text-red-600">Price</span> $20
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex items-center justify-between space-x-4">
                                <div>
                                    <img src="../assets/images/fishCard.png" alt="image"
                                        class="w-20">
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold">Title</h2>
                                    
                                    <span class="text-red-600">Price</span> $20
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>jkj
                            </div>
                            <div class="flex items-center justify-between space-x-4">
                                <div>
                                    <img src="../assets/images/fishCard.png" alt="image"
                                        class="w-20">
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold">Title</h2>
                                    
                                    <span class="text-red-600">Price</span> $20
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    
                    <div
                        class="flex items-center  w-full py-2 text-sm font-semibold border-t border-gray-300  lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                        Net Total<span class="ml-2">$10</span>
                    </div>
                    <div
                        class="flex items-center  w-full  text-sm font-semibold  border-gray-300 lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                        Delivery <span class="ml-2">$40</span>
                    </div>
                    <div
                        class="flex items-center w-full py-2 text-sm font-semibold  border-gray-300  lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                        Shipping Tax<span class="ml-2">$10</span>
                    </div>
                    <div
                        class="flex items-center w-full py-4 text-sm font-semibold border-b border-gray-300 lg:py-5 lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                        Total<span class="ml-2">$50.00</span></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style></style>