<template>
    Hello World !
    <Header />
    <TestComponent />
    <Footer />
</template>

<script setup>
import TestComponent from "./TestComponent.vue";
import { onMounted } from "vue";
import Footer from "./Footer.vue";
import Header from "./Header.vue";
onMounted;
</script>
