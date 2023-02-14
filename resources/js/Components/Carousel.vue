<!-- Javascript code -->

<script setup>
const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

</script>
<template>
<!-- Slider main container -->
<div class="bg-pink-600 text-black font-aclonica flex flex-col">
<div class="swiper h-auto mt-8 mb-8 w-full h-fit">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide flex flex-col items-center text-center text-lg ">
      <div class="itemimage block m-0 p-0 text-center">
<img src="/img/Makeup/eyes/eyeshadow palettes/eyeshadow-palette-sixteenpan-zoom-in.jpg" alt="item" width="200px" height="200px">
</div>
<div class="itembody text-center p-0">
<div class="itemtitle text-xl mb-1 p-2.5 font-bold"> Eyeshadow palette</div>
<div class="itemdescription p-2.5 m-2.5"> Eyeshadow palette sixteen <br> pan natural colours</div>
<div ><a href="#"><span class="text-lg text-purple-600 hover:text-pink-600 bg-zinc-800 border-none rounded-xl p-2">See the product</span></a></div>
</div>
</div>
    
<div class="swiper-slide">
  <div class="itemimage">
<img src="/img/Makeup/lips/lipsticks/lipsticks-lipstick-alone.jpg" alt="item" width="200px" height="200px">
</div>
<div class="itembody">
<div class="itemtitle"> Lipstick red </div>
<div class="itemdescription"> Lipstick red</div>
<div><a href="#">See the product</a></div>
</div>
</div>


<div class="swiper-slide">
  <div class="itemimage">
<img src="/img/Makeup/complexion products/highlighters/highlighter-zoom-in.jpg" alt="item" width="200px" height="200px">
</div>
<div class="itembody">
<div class="itemtitle"> Highlighter</div>
<div class="itemdescription"> Highlighter</div>
<div><a href="#">See the product</a></div>
</div>
</div>


<div class="swiper-slide">
  <div class="itemimage">
<img src="/img/Makeup/complexion products/bronzers/bronzer.jpg" alt="item" width="180px" height="230px">
</div>
<div class="itembody">
<div class="itemtitle"> Bronzer</div>
<div class="itemdescription"> Bronzer</div>
<div><a href="#">See the product</a></div>
</div>
</div>

<div class="swiper-slide">
  <div class="itemimage">
<img src="/img/Makeup/complexion products/face palettes/face-palettes.jpg" alt="item" width="200px" height="200px">
</div><div class="itembody">
<div class="itemtitle"> Face palettes</div>
<div class="itemdescription"> Face palette</div>
<div><a href="#">See the product</a></div>
</div>
</div>
    </div>
   
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>

</template>