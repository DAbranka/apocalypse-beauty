<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Carousel from '@/Components/Carousel.vue';
import HomepageArticles from '@/Components/HomepageHero.vue';
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

        <HomepageHero>
            <template #homepagearticles>

            </template>
        </HomepageHero>
        <div class="py-12">
            
        </div>
        <template #footer>

        </template>
    </AuthenticatedLayout>
</template>