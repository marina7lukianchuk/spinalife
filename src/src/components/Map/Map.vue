<template>
  <div class="map_wrapper">
    <h4 class="map_title"> До нас зручно добиратись </h4>
    <p class="sub_map"> Натискай на посилання "Збільшити карту" зліва, для того щоб відкрити Google карти та обрати
      найкоротший шлях до нашого центу, або телефонуй за номером, що вказаний на сайті </p>
    <div class="map_container">
      <iframe id="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.999668650431!2d30.638718176554534!3d50.40384377158332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c57e5498cf9b%3A0x8cf94248bc606c7b!2z0KbQtdC90YLRgCDQutGW0L3QtdC30ZbRgtC10YDQsNC_0ZbRlyAiU1BZTkEgTElGRSI!5e0!3m2!1suk!2sua!4v1700050893926!5m2!1suk!2sua"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</template>


<script>

export default {
  name: 'Map',
}

</script>


<style scoped lang="scss"> * {
   box-sizing: border-box;
   margin: 0;
   padding: 0;
 }

 @import url(../../assets/modules/_fonts.scss);

 @mixin text_style ($f-f, $f-s, $l-h, $f-w, $coloring) {
   font-family: $f-f;
   font-size: $f-s;
   line-height: $l-h;
   font-weight: $f-w;
   color: $coloring;
 }

 .map_container {
   width: 100%;
   height: 500px;

 }


 #map {
   width: 100%;
   height: 100%;
 }

 .map_title {
   @include text_style ('Montserrat', 33px, 35px, 700, #3341dcd8);
   text-transform: uppercase;
   margin: 40px auto 60px;
   text-align: center;
   z-index: 13;
   position: sticky;
   max-width: 550px;
   position: relative;

   &::after {
     content: ' ';
     position: absolute;
     border: 2px solid #3341dcd8;
     width: 80%;
     bottom: -20px;
     left: 50%;
     transform: translateX(-50%)
   }
 }

 .sub_map {
   @include text_style ('Montserrat', 22px, 23px, 500, #3341dcd8);
   margin: 0 auto 80px;
   font-style: italic;
   max-width: 40%;
   text-align: center;

 }

 @media screen and (max-width: 576px) {

   .sub_map {
     @include text_style ('Montserrat', 19px, 19px, 500, #3341dcd8);
     margin: 0 auto 40px;
     font-style: italic;
     max-width: 70%;
     text-align: center;
   }

   .map_title {
     @include text_style ('Montserrat', 28px, 28px, 700, #3341dcd8);
     text-transform: uppercase;
     margin: 40px auto 60px;
     text-align: center;
     z-index: 13;
     position: sticky;
     max-width: 70%;
     position: relative;

     &::after {
       content: ' ';
       position: absolute;
       border: 2px solid #3341dcd8;
       width: 80%;
       bottom: -20px;
       left: 50%;
       transform: translateX(-50%)
     }
   }



 }
</style>