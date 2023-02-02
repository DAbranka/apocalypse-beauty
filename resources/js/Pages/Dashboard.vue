<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Carousel from '@/Components/Carousel.vue';

import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Apocalypse Beauty" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-black leading-tight bg-black">Dashboard</h2>
        </template>
<HomepageHero>
    <template #homepagearticles>

    </template>
</HomepageHero>

<Carousel>
<template #carousel>

</template>
</Carousel>
       <!--  <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>
            </div>
        </div> -->
    </AuthenticatedLayout>
</template>
