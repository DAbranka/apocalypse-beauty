<script setup>

import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';


</script>

<template>  
    <Header>
        <Link :href="href" :class="classes">
        <slot />
    </Link>
    </Header>
    <Footer>

    </Footer>
</template>
