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
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <img class="w-16 items-start mt-0.5" src="/img/logo/apocalypse-beauty-logo-transparent.png" alt="">
                            </div>

                            <div class="justify-items-center">
                                <h1 class=" font-aclonica text-xl text-center font-bold uppercase text-purple-600 ">Apocalypse Beauty</h1>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-purple-600">
                                
                                <NavLink :href="route('dashboard')" :active="route().current('')">
                                    News
                                </NavLink>
                                <NavLink :href="route('dashboard')" :active="route().current('')">
                                    About
                                </NavLink>
                                <NavLink :href="route('dashboard')" :active="route().current('')">
                                    Explore
                                </NavLink>
                                <NavLink :href="route('dashboard')" :active="route().current('')">
                                    Forum
                                </NavLink>
                                <NavLink :href="route('dashboard')" :active="route().current('')">
                                    Eshop
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
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-black bg-red bg-purple bg-purple-600 hover:text-pink-600 focus:outline-none transition ease-in-out duration-150"
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
                                class="inline-flex items-center justify-center p-2 rounded-md text-pink-600 hover:text-black hover:bg-purple-600 focus:outline-none focus:bg-black focus:text-pink-600 transition duration-150 ease-in-out"
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
                    <div class="pt-2 pb-3 space-y-1 text-purple-600">
                        
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('')">
                                    News
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('')">
                            About
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('')">
                            Explore
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('')">
                            Forum
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('')">
                            Eshop
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border- bg-pink-600">
                        <div class="px-4">
                            <div class="font-medium text-base text-black">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="font-medium text-sm text-black">{{ $page.props.auth.user.email }}</div>
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
            <header>

            </header>


            <!-- Page Content -->
            <main>
            <section id="homepage_carousel">
                <Carousel>
                </Carousel>
            </section>
            <section id="homepage_articles">
                <HomepageArticle>
                    <div id="Homepage_hero_wrapper" class=" relative my-20 flex flex-row  text-black justify-center items-center text-center font-aclonica bg-black ">
                            <img id="Homepage_herobanner-bg-image" class=" xs:w-11/12  sm:w-11/12 md:w-11/12 lg:w-7/12 my-25" src="/img/Makeup/illustrations/illustration-makeup-brushes-magical.jpg" >
                                <div id="homepage-hero-banner-message-box" class=" absolute xs:mt-56 xs:ml-32 sm:mt-72 sm:ml-64 md:mt-80 md:ml-80 lg:mt-80 lg:ml-80 w-60 h-32 text-center flex flex-col justify-center rounded-2xl  bg-pink-600">
                                    <h3 class="mb-3">Magical moments with makeup</h3>
                                    
                                            <div id="homepage-hero-banner-show-button" class="text-center  text-purple-600 hover:text-pink-600  ">
                                            <a href="#"><span class="bg-black py-2 px-5  rounded-xl">Show</span></a>
                                            </div>
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
    <div class="px-3 flex flex-col justify-start leading-loose">
        <h4 class=" text-lg xs:text-center sm:text-center md:text-start lg:text-start ">Help & Information</h4>
        <ul class="">
            <li><a class="text-pink-600 hover:text-purple-600" href="#">FAQ</a></li>
            <li><a class="text-pink-600 hover:text-purple-600" href="#">Delivery & Returns</a></li>
            <li><a class="text-pink-600 hover:text-purple-600" href="#">Gift Cards</a></li>
            <li><a class="text-pink-600 hover:text-purple-600" href="#">About Us</a></li>
            <li><a class="text-pink-600 hover:text-purple-600" href="#">Careers</a></li>
        </ul>
    </div>
    <div class="flex flex-col justify-start leading-loose px-3">
        <h4 class="text-lg xs:text-center sm:text-center md:text-start lg:text-start">Legal</h4>
        <ul class="">
            <li><a class="text-pink-600 hover:text-purple-600" href="#">Terms & Conditions</a></li>
            <li><a class="text-pink-600 hover:text-purple-600" href="#">Privacy</a></li>
            <li><a class="text-pink-600 hover:text-purple-600" href="#">Cookies</a></li>
        </ul>
    </div>
    <div class=" flex flex-col justify-start leading-loose px-3">
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


