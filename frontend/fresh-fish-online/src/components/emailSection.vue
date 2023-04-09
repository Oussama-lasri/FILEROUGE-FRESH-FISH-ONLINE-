<template>
    <section class="bg-joinSection h-96 flex justify-center items-center">

        <div class="w-[100%] flex flex-col  items-center justify-center mx-auto h-[18rem] bg-[rgba(0,42,75,0.5)]">
            <p class="lg:text-5xl md:text-4xl sm:text-3xl  font-extrabold text-left text-white inline " style="props.style">
                Special Offers, Recipes and News
            </p>
            <div class="mt-5">

                <form class="flex flex-row gap-10 font-extrabold ">
                    <input type="text"
                        class="p-5 h-16 text-2xl w-[450px] right-[30.45%] rounded-[10px] [box-shadow:0px_0px_0px_3px_white_inset] [box-shadow-width:3px text-white inline m-0 left-[6.34%] right-[77.59%] bottom-[26.67%] "
                        placeholder="EMAIL">

                    <button
                        class=" bg-white w-[13rem] h-16 rounded-[10px] [box-shadow:0px_0px_0px_6px_white_inset] text-2xl text-[rgba(0,118,212,1)]">
                        JOIN
                    </button>
                </form>
            </div>
        </div>

    </section>
</template>

<script setup>
import Button from './Button.vue';


</script>

<style>
input {
    -webkit-appearance: none;
}
</style>