<template>
    <div class="video">
        <h3 class="video_title"> Ваші відгуки </h3>
        <p class="sub_video"> Нам дуже приємно отримувати від вас позитивні фідбеки, а ще приємніше, коли позитивний
            результат бачить не лише лікар, але й відчувають пацієнти. Ми працюємо для того, щоб Ви відчували себе краще.
        </p>
        <div class="reviews">
            <iframe class="review_video" width="560" height="315" src="https://www.youtube.com/embed/-vIG-215BoE"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <div class="screen">
                <swiper :modules="modules" :slides-per-view="1" :space-between="50" navigation
                    :pagination="{ clickable: true }" @swiper="onSwiper" @slideChange="onSlideChange">
                    <swiper-slide>
                        <img class="img_review" src="../../assets/img/review1.jpg" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img class="img_review" src="../../assets/img/review2.jpg" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img class="img_review" src="../../assets/img/review3.jpg" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img class="img_review" src="../../assets/img/review4.jpg" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img class="img_review" src="../../assets/img/review5.jpg" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img class="img_review" src="../../assets/img/review6.jpg" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img class="img_review" src="../../assets/img/review7.jpg" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img class="img_review" src="../../assets/img/review8.jpg" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img class="img_review" src="../../assets/img/review9.jpg" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img class="img_review" src="../../assets/img/review10.jpg" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img class="img_review" src="../../assets/img/review11.jpg" alt="">
                    </swiper-slide>

                </swiper>
            </div>
        </div>
    </div>
</template>

<script>
import { Navigation, Pagination } from 'swiper';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

export default {
    name: 'Youtube',
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

<style lang="scss"> @import url(../../assets/modules/_fonts.scss);

 @mixin text_style ($f-f, $f-s, $l-h, $f-w, $coloring) {
     font-family: $f-f;
     font-size: $f-s;
     line-height: $l-h;
     font-weight: $f-w;
     color: $coloring;
 }

 .screen .swiper-button-next,
 .screen .swiper-button-prev {
     color: #3341dcd8;
 }


 .video {
     padding: 0 190px 80px;
     margin-bottom: 40px;
 }

 .video_title {
     @include text_style ('Montserrat', 33px, 35px, 700, #3341dcd8);
     text-transform: uppercase;
     margin: 60px auto;
     text-align: center;
     position: relative;
     max-width: 300px;

     &::after {
         content: ' ';
         position: absolute;
         border: 2px solid #3341dcd8;
         width: 100%;
         bottom: -20px;
         left: 0;
     }
 }

 .sub_video {
     max-width: 50%;
     @include text_style ('Montserrat', 22px, 23px, 500, #000000c0);
     font-style: italic;
     margin: 0 auto;
     margin-top: 25px;
     text-align: center;
     margin-bottom: 50px;
 }

 .reviews {
     display: flex;
     flex-direction: column;
     gap: 40px;
     justify-content: center;
 }

 .screen {
     width: 100%;
     max-width: 33%;
     display: flex;
     flex-direction: row;
     margin: 0 auto;
 }

 .img_review {
     width: 100%;

 }

 .review_video {
     margin: 0 auto;
     width: 65%;
     height: 450px;
 }

 .screen img {
     object-fit: contain;
 }

 @media screen and (max-width: 1450px) {
     .screen {
         max-width: 66%;
     }
 }

 @media screen and (max-width: 1024px) {

     .video {
         padding: 10px 80px 150px;
         margin-bottom: 30px;
         align-items: center;
     }
 }

 @media screen and (max-width: 768px) {


     .video {
         padding: 10px 40px 150px;
         margin-bottom: 30px;
     }

     .screen {
         max-width: 80%;
     }

     .review_video {
         width: 70%;
         height: 300px;
     }

     .sub_video {
         max-width: 70%;
         @include text_style ('Montserrat', 20px, 21px, 500, #000000c0);
     }
 }

 @media screen and (max-width: 576px) {

     .video {
         padding: 10px 0 60px;
         margin-bottom: 40px;
     }

     .screen {
         max-width: 99%;
     }

     .review_video {
         width: 85%;
         height: 250px;
     }

     .sub_video {
         max-width: 80%;
         @include text_style ('Montserrat', 18px, 19px, 500, #000000c0);
     }

     .screen {
         width: 100%;
         max-width: 95%;
         display: flex;
         flex-direction: row;
         flex-wrap: wrap;
     }

     .img_review {
         width: 100%;

     }
 }
</style>