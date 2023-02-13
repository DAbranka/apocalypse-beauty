<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Carousel from "@/Components/Carousel.vue";
import HomepageHero from "@/Components/HomepageHero.vue";
import Stream from "@/Components/Stream.vue";
import { Head } from "@inertiajs/vue3";
import Master from "@/Layouts/Master.vue";
</script>

<!-- ! -->
<!-- <template>
    <Head title="Apocalypse Beauty" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-black leading-tight">
                Accueil
            </h2>
        </template>

        <HomepageHero>
            <template #homepagearticles> </template>
        </HomepageHero>

        <Stream>
            <template #homepagestream> </template>
        </Stream>

        <Carousel>
            <template #homestream> </template>
        </Carousel>

        <template #footer> </template>
    </AuthenticatedLayout>
</template> -->
<!-- ! -->

<template>
    <master>
        <h1>
            MAIN CONTENT FROM THE WELCOME Vue FILE
        </h1>
    </master>
</template>