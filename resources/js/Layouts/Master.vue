
<script setup>
    import NavLink from '@/Components/NavLink.vue';
    import { ref } from "vue";
    import ApplicationLogo from "@/Components/ApplicationLogo.vue";
    // import Dropdown from "@/Components/Dropdown.vue";
    import DropdownLink from "@/Components/DropdownLink.vue";
    import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
    import { Link } from "@inertiajs/vue3";
    import Carousel from "@/Components/Carousel.vue";
    import Stream from "@/Components/Stream.vue";
    import HomepageHero from '@/Components/HomepageHero.vue';
</script>

<template>  
    <body>
        <!-- * HEADER -->
        <header>

            <!-- * NAV BAR -->
            <nav class="bg-black border-b border-purple-600">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">

                            <!-- * LOGO CONTAINER-->
                            <div class="shrink-0 flex items-center">
                                <img class="w-16 items-start mt-0.5" src="/img/logo/apocalypse-beauty-logo-transparent.png">
                            </div>

                            <!-- * LOGO LINK TO WELCOME PAGE -->
                            <NavLink :href="route('welcome')" :active="route().current('')">
                                <div class="flex">
                                    <h1 class="font-aclonica text-xl text-center font-bold uppercase text-purple-600">
                                        Apocalypse Beauty
                                    </h1>
                                </div>
                            </NavLink>

                            <!-- * NAVIGATION LINKS -->

                            <!-- * NEWS -->
                            <div class="font-aclonica hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-purple-600">
                                <NavLink :href="route('News')" :active="route().current('')">
                                    News
                                </NavLink>
                            </div>

                            <!-- * ABOUT -->
                            <div class="font-aclonica hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-purple-600">
                                <NavLink :href="route('News')" :active="route().current('')">
                                    About
                                </NavLink>
                            </div>

                            <!-- * EXPLORE -->
                            <div class="font-aclonica hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-purple-600">
                                <NavLink :href="route('News')" :active="route().current('')">
                                    Explore
                                </NavLink>
                            </div>

                            <!-- * FORUM -->
                            <div class="font-aclonica hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-purple-600">
                                <NavLink :href="route('News')" :active="route().current('')">
                                    Forum
                                </NavLink>
                            </div>

                            <!-- * ESHOP -->
                            <div class="font-aclonica hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-purple-600">
                                <NavLink :href="route('News')" :active="route().current('')">
                                    e-Shop
                                </NavLink>
                            </div>

                            <!-- * SETTINGS DROPDOWN CONTAINER -->
                            <div class="hidden sm:flex sm:items-center sm:ml-6">

                            <!-- * Settings Dropdown -->
                            <div class="ml-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-black bg-red bg-purple bg-purple-600 hover:text-pink-600 focus:outline-none transition ease-in-out duration-150"
                                            >
                                                <!-- {{ $page.props.auth.user.name }}    -->

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
                                        <DropdownLink
                                            :href="route('profile.edit')"
                                        >
                                            Profile
                                        </DropdownLink>
                                        <DropdownLink
                                            :href="route('logout')"
                                            method="post"
                                            as="button"
                                        >
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- * HAMBURGER -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button
                                @click="
                                    showingNavigationDropdown =
                                        !showingNavigationDropdown
                                "
                                class="inline-flex items-center justify-center p-2 rounded-md text-pink-600 hover:text-black hover:bg-purple-600 focus:outline-none focus:bg-black focus:text-pink-600 transition duration-150 ease-in-out"
                            >
                                <svg
                                    class="h-6 w-6"
                                    stroke="currentColor"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex':
                                                !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex':
                                                showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>

                        <!-- * RESPONSIVE NAVBAR -->
                        <div :class="{block: showingNavigationDropdown, hidden: !showingNavigationDropdown,}" class="sm:hidden">
                        <div class="pt-2 pb-3 space-y-1 bg-black">
                        <ResponsiveNavLink
                            class="hover:text-pink-600 text-purple-600 font-aclonica border-pink-600"
                            :href="route('News')"
                            :active="route().current('')"
                        >
                            News
                        </ResponsiveNavLink>
                        <ResponsiveNavLink
                            class="hover:text-pink-600 text-purple-600 font-aclonica border-pink-600"
                            :href="route('About')"
                            :active="route().current('')"
                        >
                            About
                        </ResponsiveNavLink>
                        <ResponsiveNavLink
                            class="hover:text-pink-600 text-purple-600 font-aclonica border-pink-600"
                            :href="route('Explore')"
                            :active="route().current('')"
                        >
                            Explore
                        </ResponsiveNavLink>
                        <ResponsiveNavLink
                            class="hover:text-pink-600 text-purple-600 font-aclonica border-pink-600"
                            :href="route('Forum')"
                            :active="route().current('')"
                        >
                            Forum
                        </ResponsiveNavLink>
                        <ResponsiveNavLink class="hover:text-pink-600 text-purple-600 font-aclonica border-pink-600" :href="route('Eshop')" :active="route().current('')">
                            Eshop
                        </ResponsiveNavLink>
                    </div>

                    <!-- * Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border- font-aclonica bg-pink-600 text-black">
                        <div class="px-4">
                            <div class="font-medium text-base text-black">
                                <!-- {{ $page.props.auth.user.name }} -->
                            </div>
                            <div class="font-medium text-sm text-black">
                                <!-- {{ $page.props.auth.user.email }} -->
                            </div>
                        </div>

                        <div class="mt-3 space-y-1 text-black font-aclonica">
                            <ResponsiveNavLinK :href="route('profile.edit')">
                                Profile
                            </ResponsiveNavLinK>
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>

                        </div>
                    </div>
                </div>
            </nav>

            <!-- * CAROUSEL -->
            <section>
                <!-- THERE IS ALSO A CAROUSEL! -->
            </section>

        </header>

        <!-- * MAIN -->
        <main>
            <slot />
        </main>

        <!-- * FOOTER -->
        <footer class="flex w-screen xs:flex-col sm:flex-col md:flex-row lg:flex-row justify-evenly font-aclonica text-purple-600">
            <div class="w-screen pt-10 flex xs:flex-col sm:flex-col md:flex-row lg:flex-row sm:justify-evenly md:justify-evenly lg:justify-evenly bg-black pb-6">
                
                <!-- * FOOTER LOGO CONTAINER-->
                <div class="flex flex-wrap justify-center xs:flex-col sm:flex-col md:flex-row lg:flex-row items-center">
                    <!-- * logo -->
                    <img class="w-56" src="/img/logo/apocalypse-beauty-logo-transparent.png"/>
                    <!-- * title -->
                    <h1 class="font-aclonica text-2xl text-center font-bold uppercase text-purple-600">
                        <a class="hover:text-pink-600" href="#">Apocalypse<br/>Beauty</a>
                    </h1>
                </div>

                <!-- * FOOTER COLUMNS -->

                <!-- * 1ST COL - help & infos -->
                <div class="px-3 flex flex-col justify-start leading-loose">
                    <!-- * title -->
                    <h4 class="text-lg xs:text-center sm:text-center md:text-start lg:text-start">
                        Help & Information
                    </h4>
                    <!-- * list -->
                    <ul>
                        <li>
                            <a href="#" class="text-pink-600 hover:text-purple-600">
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-pink-600 hover:text-purple-600">
                                Delivery & Returns
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-pink-600 hover:text-purple-600">
                                Gift Cards
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-pink-600 hover:text-purple-600">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-pink-600 hover:text-purple-600">
                                Careers
                            </a>
                        </li>
                    </ul>

                </div>

                <!-- * 2ND COL - legal -->
                <div class="px-3 flex flex-col justify-start leading-loose">
                    <!-- * title -->
                    <h4 class="text-lg xs:text-center sm:text-center md:text-start lg:text-start">
                        Legal
                    </h4>
                    <!-- * list -->
                    <ul>
                        <li>
                            <a href="#" class="text-pink-600 hover:text-purple-600">
                                Terms & Conditions
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-pink-600 hover:text-purple-600">
                                Privacy
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-pink-600 hover:text-purple-600">
                                Cookies
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- * 3RD COL - contact -->
                <div class="px-3 flex flex-col justify-start leading-loose">
                    <!-- * title -->
                    <h4 class="text-lg xs:text-center sm:text-center md:text-start lg:text-start">
                        Contact Us
                    </h4>
                    <!-- * list -->
                    <ul>
                        <li>
                            <a href="#" class="text-pink-600 hover:text-purple-600">
                                rue de Mulhouse, 36 <br> 4000 LIEGE
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- * 4TH COL - copyright -->
                <div class="flex flex-col text-center items-center justify-evenly bg-black">
                    <p>
                        <span class="text-3xl">©</span>
                        2023 Copyright: Apocalypse-Beauty.com
                    </p>
                    <img class="w-56" src="https://paddleinmastery.com/wp-content/uploads/elementor/thumbs/Payment-Method-logos-p3sjdy67e0tvrapzvo4v20g49x3h6ho46o4ecsisxw.png">
                </div>

            </div>
        </footer>
    </body>
</template>