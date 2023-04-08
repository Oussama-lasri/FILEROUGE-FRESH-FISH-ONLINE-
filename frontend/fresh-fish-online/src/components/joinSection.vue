<template>
    <section class="bg-joinSection h-96 ">
        <div class="w-[100%] flex items-center justify-center  h-[167px] bg-[rgba(0,42,75,0.5)]">
            <div class="inline-flex items-center text-white text-left font-bold w-[941px] gap-[302px]">
                <div>
                    <div class="relative w-[268px] h-[60px]">
                        <p
                            class="right-0 bottom-1/4 absolute text-2xl inline m-0 left-[25.37%] top-[26.67%] leading-[normal]">
                            +212 00000000
                        </p>
                        <iconPhone />
                    </div>
                </div>
                <div>
                    <div class="relative w-[379px] h-[60px]">
                        <p
                            class="right-0 absolute text-2xl inline m-0 left-[22.69%] top-[30%] bottom-[21.67%] leading-[normal]">
                            CONTACT@GMAIL.COM
                        </p>
                        <iconMail />
                    </div>
                </div>
            </div>

        </div>
        <div class="test bg-white w-[817px] h-[119px] flex justify-center items-center mx-auto mt-16">
            <p class="text-5xl capitalize font-extrabold text-left inline mx-auto leading-[normal] text-[rgba(0,87,156,1)]">
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