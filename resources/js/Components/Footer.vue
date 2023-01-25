<script>
export default {
    data(){
        return{
            apocalypse_beauty:'Apocalypse Beauty',
            help_information: 'Help & Information',
            
        }
    },
    methods:{
        apocalypse_beautyFunction: function () {
            return this.message;
        }
    }
}
    
</script>

<template>
<footer class="flex flex-col justify-evenly  font-aclonica  text-purple-600">
    <div class="flex flex-col items-center bg-black py-20">
<div class="flex flex-col text-center items-center">
<img class="w-36 items-start" src="/img/logo/apocalypse-beauty-logo-transparent.png"/>
    <h1 class="font-aclonica text-3xl text-center font-bold uppercase text-purple-600 ">
        Apocalypse <br/>Beauty
    </h1>
    </div>
    <div class="flex flex-col ">
        <h4 class="pb-3.5 text-lg">Help & Information</h4>
        <ul>
            <li><a class="text-pink-600" href="#">FAQ</a></li>
            <li><a class="text-pink-600" href="#">Delivery & Returns</a></li>
            <li><a class="text-pink-600" href="#">Gift Cards</a></li>
            <li><a class="text-pink-600" href="#">About Us</a></li>
            <li><a class="text-pink-600" href="#">Careers</a></li>
        </ul>
    </div>
    <div>
        <h4 class="pb-3.5 text-lg">Legal</h4>
        <ul>
            <li><a class="text-pink-600" href="#">Terms & Conditions</a></li>
            <li><a class="text-pink-600" href="#">Privacy</a></li>
            <li><a class="text-pink-600" href="#">Cookies</a></li>
        </ul>
    </div>
    <div>
        <h4 class="pb-3.5 text-lg">Contact Us</h4>
        <ul>
            <li></li>
        </ul>
    </div></div>
    <div class="flex flex-col text-center items-center pb-11 bg-black">
<p><span class="text-3xl">© </span>2023 Copyright: Apocalypse-Beauty.com</p>
<img class="w-56" src="https://paddleinmastery.com/wp-content/uploads/elementor/thumbs/Payment-Method-logos-p3sjdy67e0tvrapzvo4v20g49x3h6ho46o4ecsisxw.png"/>
    </div>
</footer>
</template>