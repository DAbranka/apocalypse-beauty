<script setup>
import Master from "@/Layouts/Master.vue";
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/vue3";
import Carousel from "@/Components/Carousel.vue";
import Stream from "@/Components/Stream.vue";
import HomepageHero from '@/Components/HomepageHero.vue';

</script>

<template>
    <Master>
        
        <h1 class="bg-zinc-800 font-aclonica text-5xl text-purple-600 text-center my-28 underline">About Apocalypse-Beauty</h1>

        <div class="flex flex-col items-center">
            <h2 class="text-purple-600 font-aclonica text-2xl text-center underline my-12 mx-60">History</h2>
            
            <div class="flex flex-col items-center">
                <p class="font-aclonica text-pink-600 text-lg text-justify mx-60 my-6 w-72 h-auto ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum tempora illo perferendis molestias at saepe cum reprehenderit quisquam inventore vitae sunt aperiam, fugiat voluptatem pariatur unde eum nihil obcaecati sint!</p>
            </div>
        </div>
        
        <div class="flex flex-col items-center">
            <h2 class="text-purple-600 font-aclonica text-2xl text-center underline my-12 mx-60">Team</h2>

            <div class="font-aclonica text-pink-600 flex mx-60 flex flex-col items-center ">
                
                <div class="w-72 h-auto mx-16 flex flex-col items-center">    
                    <div class="w-48 h-48 overflow-hidden">
                        <img class="objet-fill" src="/img/Team/Kim.png" alt="">
                    </div>
                    
                    <p class="my-6 text-justify text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui fugiat vitae sequi sit a, ex dolores quaerat doloribus recusandae neque soluta, voluptatum commodi sint corporis. Odio ex ab exercitationem impedit.</p>
                </div>
            
                <div class="w-72 h-auto mx-16 flex flex-col items-center">
                    <div class="w-48 h-48 overflow-hidden">
                        <img class="objet-fill" src="/img/Team/David.png" alt="">
                    </div>
                    
                    <p class="my-6 text-lg text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore reiciendis soluta blanditiis. Similique, distinctio fugit! Architecto autem nemo temporibus, fugit, minima iusto necessitatibus tempora amet magni itaque nihil voluptas possimus.</p>
                </div>
            
                <div class="w-72 h-auto mx-16 flex flex-col items-center">
                    <div class="w-48 h-48 overflow-hidden">
                        <img class="objet-fill" src="/img/Team/Olivia.jpeg" alt="">
                    </div>
                
                    <p class="my-6 text-lg text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, consequatur quia labore ullam eligendi alias asperiores sunt accusamus laboriosam reiciendis quis, praesentium, delectus eum ipsam vitae dicta porro consequuntur doloremque!</p>
                </div>
            
                <div class="w-72 h-auto mx-16 flex flex-col items-center">
                    <div class="w-48 h-48 overflow-hidden">
                        <img class="objet-fill" src="/img/Team/cri.jpeg" alt="">
                    </div>
                
                    <p class="my-6 text-lg text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates ex dicta architecto quia temporibus, nam iure quo dolorem laboriosam doloribus neque obcaecati quidem nihil blanditiis? Amet soluta sit pariatur quibusdam.</p>
                </div>
                
            </div>
        </div>
    </Master>
</template>
