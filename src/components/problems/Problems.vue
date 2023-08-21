<template> 
<div class="problems"> 
    <h4 class="problems_title"> Проблеми, які ми допомагаємо вилікувати </h4>
    <p class="subt"> Система інтегративної кінезітерапії ефективна і безпечна при різноманітних захворюваннях.
       Натискай на діагноз, щоб дізнатись більше, як саме вправи допомагають у лікуванні.  </p>
    <div class="main_problems"> 
        <HorizontalCollapse />
    </div>
</div>

</template>

<script> 
import HorizontalCollapse from './HorizontalCollapse.vue'
export default {
    name: 'Problems',
    components: { 
        HorizontalCollapse
    }
}

</script>

<style scoped lang="scss"> 
@import url(../../assets/modules/_fonts.scss);
@mixin text_style ($f-f, $f-s, $l-h, $f-w, $coloring) {
    font-family: $f-f;
    font-size: $f-s;
    line-height: $l-h;
    font-weight: $f-w;
    color: $coloring;
  }

.problems {
  padding: 10px 190px 80px;
  margin-bottom: 40px;
  position: relative;
  background: linear-gradient(100deg,#083bf2d4 120%,#327fb6ba 30%);
  text-align: center;
  overflow: hidden;
  &::before {
    content: " ";
    position: absolute;
    width: 100%;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    background-image: url(../../assets/img/crop.jpg);
    background-repeat: no-repeat;
    background-size: 100% auto;
    opacity: 0.3;
    overflow: hidden;
  }
}
.problems_title {
  @include text_style ('Montserrat', 33px, 35px, 600, #FFFFFF);
  text-transform: uppercase;
  margin: 40px auto 60px;
  text-align: center;
  color: #FFF;
  z-index: 13;
  position: sticky;
  max-width: 550px;
  position: relative;
  &::after {
    content: ' ';
    position: absolute;
    border: 2px solid #FFF;
    width: 100%;
    bottom: -20px;
    left: 0;
  }

}

.subt {
@include text_style ('Montserrat', 22px, 23px, 500, #FFFFFF) ;
margin: 0 auto 80px ;
 font-style: italic;
 max-width: 50%;
 z-index: 13;
  position: sticky;
}





@media screen and (max-width: 1024px) {
  .problems { 
    padding: 10px 80px 40px;
    &::before {
      content: " ";
      background-size: 100% 100%;
    }
  }
  
  .problems_title {
    @include text_style ('Montserrat', 28px, 30px, 600, #FFFFFF); }

    .subt {
      @include text_style ('Montserrat', 21px, 21px, 500, #FFFFFF) ;
      margin: 0 auto 80px ;
      font-style: italic;
      max-width: 60%;
      z-index: 13;
      position: sticky;
      }

}

@media screen and (max-width: 768px) {
  .problems {
    padding: 10px 80px 40px;
    &::before {
      content: " ";
      background-image: url(../../assets/img/crop_problems_768.jpg);
      background-size: 100% auto;
    }
  }
  .problems_title {
    @include text_style ('Montserrat', 28px, 30px, 600, #FFFFFF); }

    .subt {
      @include text_style ('Montserrat', 20px, 21px, 500, #FFFFFF) ;
      margin: 0 auto 80px ;
      font-style: italic;
      max-width: 75%;
      }


}

@media screen and (max-width: 576px) {


  .problems {
  padding: 10px 40px 0;
   &::before {
  content: " ";
  background-image: url(../../assets/img/crop_576_prob.jpg);
  background-size: 100% auto;

    }
  }
  .problems_title {
    @include text_style ('Montserrat', 28px, 28px, 700, #FFFFFF); 
     max-width: 70%; }

    .subt {
 @include text_style ('Montserrat', 19px, 20px, 500, #FFFFFF) ;
 margin: 0 auto 130px ;
 font-style: italic;
 max-width: 90%;
      }
}

</style>