<script>

</script>

<template>

    <!-- * HEADER -->
    <header>
        HERE IS THE HEADER
        <nav>
            IN THE HEADER THERE IS A NAVBAR
        </nav>
        <section>
            THERE IS ALSO A CAROUSEL!
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
</template>