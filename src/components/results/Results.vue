<template> 
<div class="results"> 
    <h4 class="results_title"> Наші результати </h4>
    <p class="sub_results"> позитивні результати наших пацієнтів не змушують довго чекати, адже для кожного програма
         і комплекс вправ підбирається індивідуально, враховуючи вік, фізіологічні особливості
        і супутні хвороби. </p>
    <swiper
    :modules="modules"
    :slides-per-view="1"
    :space-between="50"
    navigation
    :pagination="{ clickable: true }"
    @swiper="onSwiper"
    @slideChange="onSlideChange"
  >
    <swiper-slide> 
    <img class="photo_item" src="../../assets/img/photo_5359661926466045077_x.jpg" >
    <div class="photo_text"> <p> Результат пацієнта за 8 занять кінезітерапією з 4-ма грижами в поясничному 
      відділі L1-L2, L2-L3, L4-L5, L5-S1 та множинні грижі Шморля грудного відділу. Додаткове ускладнення 
      в процесі відновлення полягало в тому, що пацієнт мав ендопротез лівого колінного суглобу, та артроз
       2 стадії правого коліна. </p> </div>
    </swiper-slide>
    <swiper-slide> 
         <img class="photo_item" src="../../assets/img/photo_5359661926466045078_x.jpg" > 
         <div class="photo_text">
          <p> Проміжний результат пацієнта з С-подібним сколіозом 1-Ї 
            стадії за 9 занять кінезітерапією та 3 лікувальних масажів. Зменшення рівня перекосу 
            плеч з 5-ти градусів до 2-х. </p>
          </div>
     </swiper-slide>
    <swiper-slide> 
         <img class="photo_item" src="../../assets/img/photo_5359661926466045079_x.jpg" > 
         <div class="photo_text"> <p> Проміжний результат пацієнтки з S-подібним сколіозом 2 стадії, 
          за  6 занять кінезітерапією та з процедурами масажу. Зменшення рівня перекосу лопаток з 7
           градусів до 5-ти. 
        </p> </div>
     </swiper-slide>

</swiper>

</div>

</template>

<script> 
import { Navigation, Pagination} from 'swiper';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
export default {
    name: 'Results',
    components: {
      Swiper,
      SwiperSlide,
    },
    setup() {
      const onSwiper = (swiper) => {
        console.log(swiper);
      };
      const onSlideChange = () => {
        console.log('slide change');
      };
      return {
        onSwiper,
        onSlideChange,
        modules: [Navigation, Pagination],
      };
},

}

</script>


<style scopped lang="scss"> 
@import url(../../assets/modules/_fonts.scss);
@mixin text_style ($f-f, $f-s, $l-h, $f-w, $coloring) {
    font-family: $f-f;
    font-size: $f-s;
    line-height: $l-h;
    font-weight: $f-w;
    color: $coloring;
  }

  .results {
  padding: 0 190px 80px;
  margin-bottom: 40px;
  }

  .results_title {
  @include text_style ('Montserrat', 33px, 35px, 700, #3341dcd8) ;
  text-transform: uppercase;
  margin: 60px auto;
  text-align: center;
  position: relative;
  max-width: 250px;
  &::after {
    content: ' ';
    position: absolute;
    border: 2px solid #3341dcd8;
    width: 100%;
    bottom: -20px;
    left: 0;
  }
  }

  .sub_results {
  max-width: 50%;
  @include text_style ('Montserrat', 22px, 23px, 500, #000000c0) ;
  font-style: italic;
  margin: 0 auto;
  margin-top: 25px;
  text-align: center;
  margin-bottom: 50px;
  }

  .photo {
  margin: 0 auto;
  }

  .photo_item {
    width: 100%;
    max-width: 55%;
    height: 100%;
    max-height: 545px;
    object-fit: cover;
    margin: 0 auto;
  }

  .swiper {
  max-width: 90%;
  padding-bottom: 35px;
    
  }

  .swiper-slide {
    display: flex;
    justify-content: center;
    max-height: 545px;
  }

  .swiper-horizontal>.swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal, .swiper-pagination-custom, .swiper-pagination-fraction {
    bottom: var(--swiper-pagination-bottom, 5px); }

  .swiper-button-next, .swiper-button-prev {
    color: #FFFFFF;
  }

  .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
  }

  .swiper-button-next:after, .swiper-button-prev:after {
    font-size: 48px;
    font-weight: 700;
  }

  .photo_text {
    background: #2333dfee;
    padding: 45px;
    @include text_style ('Montserrat', 18px, 25px, 400, #FFFFFF) ;
    text-align: center;
    vertical-align: middle;
    p {
     top: 50%;
     transform: translateY(50%);
    }
  }
  @media screen and (max-width: 1024px) {
    .results {
      padding: 0 40px 80px;
      margin-bottom: 40px;
      }
  }





  @media screen and (max-width: 768px) {
    .results {
      padding: 0 0 50px;
      margin-bottom: 20px; }

   .results_title {
  @include text_style ('Montserrat', 28px, 30px, 700, #3341dcd8) ;
 margin: 60px auto;
 max-width: 250px;
}
.sub_results {
max-width: 70%;
@include text_style ('Montserrat', 19px, 20px, 500, #000000c0) ;
margin-bottom: 40px;
}

.photo_item {
  max-width: 100%;
  max-height: 100%;
  object-fit: cover;
  margin: 0 auto;
}

.swiper-slide {
  display: flex;
  flex-direction: column;
  max-height: 705px;
}
          
    .photo_text {
  background: #FFFFFF;
  padding: 20px;
  @include text_style ('Montserrat', 16px, 18px, 400, #3341dcd8) ;
  text-align: center;
  max-width: 100%;
  max-height: 100%;
  min-height: 180px;

 }
 .swiper {
  max-width: 100%;
  padding-bottom: 35px;
    
  }
  
  }
   @media screen and (max-width: 576px) {
    .results {
      padding: 0 0 20px;
      margin-bottom: 30px;
      }

      .photo_item {
        max-width: 100%;
        max-height: 545px;
        object-fit: cover;
        margin: 0 auto;
      }

      .swiper-slide {
        display: flex;
        flex-direction: column;
        max-height: 665px;
      }
      .swiper-horizontal>.swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal, .swiper-pagination-custom, .swiper-pagination-fraction {
        bottom: var(--swiper-pagination-bottom,15px); }

      .sub_results {
    max-width: 80%;
    @include text_style ('Montserrat', 18px, 19px, 500, #000000c0) ;
    margin-bottom: 30px;
     }

     .photo_text {
      background: #FFFFFF;
      padding: 10px 10px 30px 10px;
      @include text_style ('Montserrat', 15px, 16px, 500, #3341dcd8) ;
      text-align: center;
      max-width: 100%; 
      min-height: 200px;
 }
 .results_title {
  @include text_style ('Montserrat', 28px, 28px, 700, #3341dcd8) ;
 margin: 40px auto;
 max-width: 250px;
}
      
  
  }
  @media screen and (max-width: 450px) {
    .swiper-horizontal>.swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal, .swiper-pagination-custom, .swiper-pagination-fraction {
      bottom: var(--swiper-pagination-bottom,30px); 
    
    }
    .sub_results {
      max-width: 80%;
      @include text_style ('Montserrat', 18px, 19px, 500, #000000c0) ;
      margin-bottom: 30px;
       }

   }

</style>