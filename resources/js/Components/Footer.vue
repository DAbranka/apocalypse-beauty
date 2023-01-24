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
<footer class="flex flex-col justify-evenly py-12 font-aclonica">
    <div class="flex flex-row justify-evenly">
<div class="flex flex-row items-center">
<img class="w-36" src="/img/logo/apocalypse-beauty-logo-transparent.png"/>
    <h1 class="font-shojumaru capitalize text-4xl text-center">
        Apocalypse <br/>Beauty
    </h1>
    </div>
    <div class="flex flex-col ">
        <h4 class="pb-3.5 text-lg">Help & Information</h4>
        <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Delivery & Returns</a></li>
            <li><a href="#">Gift Cards</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Careers</a></li>
        </ul>
    </div>
    <div>
        <h4 class="pb-3.5 text-lg">Legal</h4>
        <ul>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Cookies</a></li>
        </ul>
    </div>
    <div>
        <h4 class="pb-3.5 text-lg">Contact Us</h4>
        <ul>
            <li></li>
        </ul>
    </div></div>
    <div class="flex flex-col items-center py-12">
<p>© 2023 Copyright: Apocalypse-Beauty.com</p>
<img src="https://paddleinmastery.com/wp-content/uploads/elementor/thumbs/Payment-Method-logos-p3sjdy67e0tvrapzvo4v20g49x3h6ho46o4ecsisxw.png"/>
    </div>
</footer>
</template>