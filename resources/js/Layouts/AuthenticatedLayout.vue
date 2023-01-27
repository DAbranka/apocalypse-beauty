<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen bg-purple-600">
            <nav class="bg-black border-b bg-gradient-to-b border-purple-600">
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
                <slot />
            </main>
        </div>
    </div>
</template>
