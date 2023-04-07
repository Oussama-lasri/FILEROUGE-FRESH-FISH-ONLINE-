<template>
    <div class="bg-black text-gray-100 py-6 px-6 shadow md:flex justify-between items-center">
        <div class="flex item-center">
            <span class="text-white text-xl mr-1">
                fresh frish online
            </span>

        </div>
        <div id="search-div" class="flex justify-center items-center">
            <input id="search" class="h-10 rounded-2xl" type="text">
            <div class="mx-5"><svg xmlns="http://www.w3.org/2000/svg" class="icon cursor-pointer icon-tabler icon-tabler-search" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                    <path d="M21 21l-6 -6"></path>
                </svg></div>
        </div>
        <ul class="md:flex md:items-center">
            <li class="md:mx-4">
                <a class="text-xl bg-white rounded-2xl py-2 px-8 text-black transition-opacity hover:text-gray-300"
                    href="">login</a>
            </li>
            <li class="">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-shopping-cart cursor-pointer hover:text-gray-500" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                    <path d="M17 17h-11v-14h-2"></path>
                    <path d="M6 5l14 1l-1 7h-13"></path>
                </svg>
            </li>
        </ul>
    </div>
    <div class="bg-myblue text-gray-100 py-3 px-6 shadow md:flex justify-center items-center">
        <h3 class="mr-10 ">New &amp; Special Offers</h3>
        <ul class="flex justify-center">
            <li class="border-l-2 px-3 hover:text-gray-300"><a href="">categorie 1</a></li>
            <li class="border-l-2 px-3 hover:text-gray-300"><a href="">categorie 3</a></li>
            <li class="border-l-2 px-3 hover:text-gray-300"><a href="">categorie 2</a></li>
            <li class="border-l-2 px-3 hover:text-gray-300"><a href="">categorie 4</a></li>
            <li class="border-l-2 px-3 hover:text-gray-300"><a href="">categorie 5</a></li>
            <li class="border-l-2 px-3 hover:text-gray-300"><a href="">categorie 7</a></li>
        </ul>
    </div>
    <div class="bg-white text-gray-950 py-3 px-6 shadow md:flex justify-center items-center">
        <ul class="flex justify-between ">
            <li class="text-gray-700 px-3 capitalize hover:text-black"><a href="">Recipes</a></li>
            <li class="text-gray-700 px-3 capitalize hover:text-black"><a href="">Blog</a></li>
            <li class="text-gray-700 px-3 capitalize hover:text-black"><a href="">our story</a></li>
            <li class="text-gray-700 px-3 capitalize hover:text-black"><a href="">Contact</a></li>
        </ul>
    </div>

</template>

<script>
export default {

}
</script>

<style scoped>
#search{
    width: 300px;
}
</style>