<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Carousel from '@/Components/Carousel.vue';
import HomepageHero from '@/Components/HomepageHero.vue';
import Stream from '@/Components/Stream.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Apocalypse Beauty" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-aclonica text-xl text-black leading-tight bg-zinc-800">Dashboard</h2>
        </template>
<HomepageHero>
    <template #homepageahero>

    </template>
</HomepageHero>

<Stream>
    <template #homepagestream>

    </template>
</Stream>

<Carousel>
<template #carousel>

</template>
</Carousel>
     
    </AuthenticatedLayout>
</template>
