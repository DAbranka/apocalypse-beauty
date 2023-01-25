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
    
</script>
<template>
    
    <h1 class="">Apocalypse-Beauty</h1>

    <img src="" alt="">

    <ul>
        <li><a href="#">NEWS</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">EXPLORE</a></li>
        <li><a href="#">FORUM</a></li>
        <li><a href="#">ESHOP</a></li>
    </ul>

    <button><img src="public/img/Icones/user-icones.png" alt=""></button>

</template>
