<template>
    <asideBar />
    <slot></slot>
    <navBar />

</template>

<script setup>
import asideBar from "./asideBar.vue";
import navBar from "./navBar.vue";
</script>

<style>

</style>