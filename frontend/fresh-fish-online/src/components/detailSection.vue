<template>
<nav3 />
    <div class="container my-40 mx-auto px-20">
        <div class="space-y-4 lg:grid lg:grid-cols-3 lg:items-start lg:gap-6 lg:space-y-0" style="cursor: auto;">

            <a href="https://stackdiary.com/" class="group">

                <div class="aspect-w-5  aspect-h-8">

                    <img class="object-cover w-96 shadow-lg  group-hover:opacity-75"
                        src="../assets/images/fishCard.png" alt="Featured Photo" style="cursor: auto;">

                </div>

            </a>

            <div class="sm:col-span-2" style="cursor: auto;">
                <div class="mt-2" style="cursor: auto;">
                    <h4 class="text-lg leading-6 font-semibold font-sans text-skin-inverted group-hover:text-skin-primary"
                        style="cursor: auto;">DISCOVER MORE <a href="" class="font-bold text-myblue">CategorieOfFish</a>
                    </h4>
                    <hr class="my-7">
                    <h1 class="mt-1 text-2xl my-5 capitalize font-bold text-skin-base leading-5" style="cursor: auto;">
                        Salmon Fillet (Portion)
                    </h1>
                    <h5 class="mt-1 text-md capitalize  text-skin-base leading-5">
                        from
                    </h5>
                    <div class="flex ">
                        <p class="my-4"><span class="font-bold">£16.00</span> PER PACK OF 2</p>
                        <a href="#"
                            class="inline-flex ml-7 uppercase items-center px-6  text-sm font-medium text-center text-white bg-myblue rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            buy now
                            <iconShopping />
                        </a>
          </div>
                    <hr class="my-7">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptatibus harum totam possimus. Ex
                        totam earum esse, ipsa voluptas placeat quis repellendus facere voluptatum eligendi quae id, fugiat
                        rerum laborum!</p>

                </div>
            </div>
        </div>
    </div>
    <div class="text-center mb-24 relative my-8">
     <div>
            <h2 class="my-10 text-black text-4xl uppercase font-bold">Fresh off the boat</h2>
        </div>
    <div class="grid my-20 md:grid-cols-4 xl:grid-cols-4 sm:grid-cols-3 justify-center items-center gap-5 mx-5 justify-items-center text-center">
      <cardFish />
      <cardFish />
      <cardFish />
      <cardFish />
      
    </div>
    
  <div
    class="gap-2.5 inline-flex justify-center items-center p-2.5 text-left font-normal rounded-[10px] font-['Inter'] text-[rgba(0,118,212,1)] [box-shadow:0px_0px_0px_1px_rgba(0,_118,_212,_1)_inset] [box-shadow-width:1px]"
    style="props.style"
  >
    <p class="text-lg m-0 leading-[normal]">View all of our fresh fish ></p>
  </div>

</div>
</template>

<script setup>
import iconShopping from "./icons/iconShopping.vue";
import cardFish from "./cardFish.vue";
import nav3 from "./nav3.vue";

</script>

<style></style>