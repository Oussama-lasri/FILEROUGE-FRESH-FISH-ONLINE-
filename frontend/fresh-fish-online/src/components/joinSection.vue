<template>
    <section class="bg-joinSection h-96 ">
        <div class="w-[100%] flex items-center justify-center  h-[167px] bg-[rgba(0,42,75,0.5)]">
            <div class="inline-flex gap-x-8 justify-between items-center text-white font-bold ">
                <div>
                    <div class="flex  justify-around items-center">
                        <iconPhone />
                        <p class="text-2xl sm:text-base">
                            +212 00000000
                        </p>
                    </div>
                </div>
                <div>
                    <div class="flex justify-center items-center">
                        <iconMail />
                        <p class="text-2xl sm:text-base">
                            CONTACT@GMAIL.COM
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="test bg-white w-[100%] h-[30%] flex justify-center items-center mx-auto mt-16">
            <p class="lg:text-5xl md:text-4xl sm:text-3xl capitalize font-extrabold text-left inline mx-auto  text-myblue">
                Join our seafood revolution
            </p>
        </div>
    </section>
</template>

<script setup>
import iconPhone from './icons/iconPhone.vue';
import iconMail from './icons/iconMail.vue';

</script>

<style></style>