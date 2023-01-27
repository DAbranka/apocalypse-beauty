<script>
export default {
    data(){
        return{
            header_apocalypse:'Apocalypse Beauty',
            header_news: 'NEWS',
            
        }
    },
    methods:{
        header_apocalypseFunction: function () {
            return this.message;
        }
    }   
}
import NavLink from '@/Components/NavLink.vue'; 
</script>
<template>
    <header class="flex flex-col items-center bg-black py-20">
        <!-- <img class="w-54 items-start mt-0.5" src="/img/logo/apocalypse-beauty-logo-transparent.png" alt="">
 -->
        
        <!-- <h1 class=" font-aclonica text-5xl text-center font-bold uppercase text-purple-600 ">Apocalypse Beauty</h1> -->

        <!-- <ul class="flex flex-col justify-evenly  font-aclonica  text-pink-600 mt-7">
            <li><a href="#">NEWS</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">EXPLORE</a></li>
            <li><a href="#">FORUM</a></li>
            <li><a href="#">ESHOP</a></li>
        </ul> -->

        <!-- <button class="bg-purple-600 w-9 mt-5 rounded-full p-1.5"><img src="/img/Icones/user-icones.png" alt=""></button> -->
        
    </header>
</template>
