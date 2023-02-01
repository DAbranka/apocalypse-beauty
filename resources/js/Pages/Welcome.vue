<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Carousel from '@/Components/Carousel.vue';
import HomepageArticles from '@/Components/HomepageArticles.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Apocalypse Beauty" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-black leading-tight">Accueil</h2>
        </template>

        <Carousel>
<template #carousel>

</template>
        </Carousel>

        <HomepageArticles>
            <template #homepagearticles>

            </template>
        </HomepageArticles>
        <div class="py-12">
            
        </div>
        <template #footer>

        </template>
    </AuthenticatedLayout>
</template>