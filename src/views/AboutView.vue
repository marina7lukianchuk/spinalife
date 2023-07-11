<template>
  <div class="about">
    <img class="price" src="../assets/img/price.jpg"> 
  </div>
</template>


<script> 
export default {
}

</script>

<style scoped lang="scss"> 

@import url(../assets/modules/_fonts.scss);
@mixin text_style ($f-f, $f-s, $l-h, $f-w, $coloring) {
  font-family: $f-f;
  font-size: $f-s;
  line-height: $l-h;
  font-weight: $f-w;
  color: $coloring;
}


* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
.about {
  padding: 100px 190px 100px 190px;
  display: flex;
  justify-content: center;
  flex-direction: column;
}
.price_title {
  @include text_style ('Montserrat', 33px, 35px, 700, #3341dcd8);
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 60px;
  position: relative;
  &::after {
    content: ' ';
    position: absolute;
    border: 2px solid #3341dcd8;
    width: 30%;
    bottom: -20px;
    left: 50%;
    transform: translateX(-50%);
  }
}
.price {
  max-width: 800px;
  max-height: 1500px;
  width: 100%;
  height: 100%;
  margin: 0 auto;
}





  @media screen and (max-width: 1024px) {
    .price_title {
      @include text_style ('Montserrat', 30px, 32px, 700, #3341dcd8);
      &::after {
        content: ' ';
        width: 65%;
      }
    }

   }
   @media screen and (max-width: 768px) { 
    .about {
      padding: 100px 40px 100px 40px;
    }
    .price {
      max-width: 720px;
      max-height: 890px;
      width: 100%;
      height: 100%;
      margin: 0 auto;
    }
  
    .price_title {
      @include text_style ('Montserrat', 30px, 32px, 700, #3341dcd8);
      &::after {
        content: ' ';
        width: 55%;
      }
    }
  }
  
   @media screen and (max-width: 576px) {
    .price {
      max-width: 550px;
      max-height: 890px;
      width: 100%;
      height: 100%;
      margin: 0 auto;
    }
    .price_title {
      @include text_style ('Montserrat', 25px, 28px, 700, #3341dcd8);
      &::after {
        content: ' ';
        width: 65%;
      }
    }
  }
</style>