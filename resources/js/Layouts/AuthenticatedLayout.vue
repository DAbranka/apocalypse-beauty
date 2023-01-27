<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';
import Carousel from '@/Components/Carousel.vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="flex">
        <div class="">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                    <ApplicationLogo
                                        class="block h-9 w-auto fill-current text-gray-800"
                                    />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    Dashboard
                                </NavLink>
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Settings Dropdown -->
                            <div class="ml-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                            >
                                                {{ $page.props.auth.user.name }}

                                                <svg
                                                    class="ml-2 -mr-0.5 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                            >
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                    class="sm:hidden"
                >
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Dashboard
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="font-medium text-sm text-gray-500">{{ $page.props.auth.user.email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('profile.edit')"> Profile </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
            <section id="homepage_carousel">
                <Carousel>
                </Carousel>
            </section>
            <section id="homepage_articles">
                <HomepageArticle>
                    <div id="Homepage_article_wrapper" class=" grid grid-flow-row-dense grid-cols-2 grid-rows-2">
<div id="Homepage_article_firstarticle" class="row-span-2">
<img src="/img/Makeup/illustrations/illustration-makeup-bag.jpg" />
</div>
<div id="Homepage_article_secondarticle" class="">
    <img src="/img/Makeup/illustrations/illustration-brushes-powders.jpg"/>
</div>
<div id="Homepage_article_thirdarticle" class="">
    <img src="/img/Makeup/illustrations/illustration-makeup-brushes-magical.jpg"/>
</div>
    </div>
                </HomepageArticle>
            </section>
            </main>
<!-- Footer Content -->

            <footer class="flex w-screen  xs:flex-col sm:flex-col md:flex-row lg:flex-row justify-evenly  font-aclonica  text-purple-600">
    <div class="w-screen pt-10 flex xs:flex-col sm:flex-col md:flex-row lg:flex-row sm:justify-evenly md:justify-evenly lg:justify-evenly bg-black pb-6">
<div class=" flex flex-wrap justify-center xs:flex-col sm:flex-col md:flex-row lg:flex-row items-center">  
<img class="w-56 " src="/img/logo/apocalypse-beauty-logo-transparent.png"/>
    <h1 class=" font-aclonica text-2xl text-center font-bold uppercase text-purple-600 "><a class="hover:text-pink-600" href="#">
        Apocalypse<br/>Beauty</a>
    </h1>
    </div>
    <div class="px-3 flex flex-col  flex-nowrap  justify-evenly ">
        <h4 class=" text-lg xs:text-center sm:text-center md:text-start lg:text-start ">Help & Information</h4>
        <ul class="">
            <li><a class="text-pink-600 hover:text-purple-600" href="#">FAQ</a></li>
            <li><a class="text-pink-600 hover:text-purple-600" href="#">Delivery & Returns</a></li>
            <li><a class="text-pink-600 hover:text-purple-600" href="#">Gift Cards</a></li>
            <li><a class="text-pink-600 hover:text-purple-600" href="#">About Us</a></li>
            <li><a class="text-pink-600 hover:text-purple-600" href="#">Careers</a></li>
        </ul>
    </div>
    <div class="flex flex-col justify-evenly px-3">
        <h4 class=" text-lg xs:text-center sm:text-center md:text-start lg:text-start">Legal</h4>
        <ul class="">
            <li><a class="text-pink-600 hover:text-purple-600" href="#">Terms & Conditions</a></li>
            <li><a class="text-pink-600 hover:text-purple-600" href="#">Privacy</a></li>
            <li><a class="text-pink-600 hover:text-purple-600" href="#">Cookies</a></li>
        </ul>
    </div>
    <div class=" flex flex-col justify-evenly px-3">
        <h4 class=" text-lg xs:text-center sm:text-center md:text-start lg:text-start">Contact Us</h4>
        <ul class="">
            <li class="text-pink-600"> rue de Mulhouse, 36<br/>4000 LIEGE</li>
        </ul>
    </div>
</div>
    <div class="  flex flex-col text-center items-center justify-evenly bg-black ">
<p class=""><span class="text-3xl">© </span>2023 Copyright: Apocalypse-Beauty.com</p>
<img class="w-56" src="https://paddleinmastery.com/wp-content/uploads/elementor/thumbs/Payment-Method-logos-p3sjdy67e0tvrapzvo4v20g49x3h6ho46o4ecsisxw.png"/>
    </div>
</footer>
        </div>
    </div>
</template>
