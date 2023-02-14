<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Carousel from "@/Components/Carousel.vue";
import HomepageHero from "@/Components/HomepageHero.vue";
import Stream from "@/Components/Stream.vue";
import { Head } from "@inertiajs/vue3";
import WelcomeLayout from "@/Layouts/WelcomeLayout.vue";
</script>

<template>
    <Head title="Apocalypse Beauty" />

    <WelcomeLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-black leading-tight bg-black">
                Dashboard
            </h2>
        </template>
        <HomepageHero>
            <template #homepageahero> </template>
        </HomepageHero>

        <Stream>
            <template #homepagestream> </template>
        </Stream>

        <Carousel>
            <template #carousel> </template>
        </Carousel>
    </WelcomeLayout>
</template>
