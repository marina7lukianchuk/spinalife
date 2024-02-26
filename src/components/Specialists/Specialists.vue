<template>
      <div class="specialists">
            <h2 class="specialists_title">Наша команда</h2>
            <div class="specialists-block">
                  <div class="specialists-block__cards">
                        <swiper :modules="modules" :slides-per-view="1" :space-between="50" navigation
                              :pagination="{ clickable: true }" @swiper="onSwiper" @slideChange="onSlideChange">
                              <swiper-slide>

                                    <img class="specialist_photo" src="./../../assets/img/Кошкодаров Ярослав.jpg">
                                    <div class="specialist_info">
                                          <p class="specialist_name">Кошкодаров Ярослав</p>
                                          <p class="specialist_age">25 років</p>
                                          <p class="specialist_prof">Закінчив Національний університет фізично виховання і
                                                спорту
                                                України.
                                                Здобув ступінь магістра за спеціальністю - Фізична терапія, Ерготерапія.
                                                Спеціалізується на діагностиці стану опорно-рухового апарату, відновленні
                                                післяопераційного періоду, ревматоїдних артритах та спортивних травм.</p>
                                    </div>
                              </swiper-slide>
                              <swiper-slide>
                                    <img class="specialist_photo" src="./../../assets/img/Кужим Тетяна.jpg">
                                    <div class="specialist_info">
                                          <p class="specialist_name">Кужим Тетяна</p>
                                          <p class="specialist_age">23 роки </p>
                                          <p class="specialist_prof">Закінчила Національний університет фізично виховання і
                                                спорту України. Здобула ступінь магістра за спеціальністю - фізична терапія,
                                                ерготерапія.
                                                Спеціалізується на біомеханіці суглобового апарату.</p>
                                    </div>
                              </swiper-slide>
                        </swiper>
                        <!-- <div class="specialists-block__card">
                              <div class="specialists-block__img">
                                    <img src="./../../assets/img/Кошкодаров Ярослав.jpg">
                              </div>
                              <div class="specialists-block__text">
                                    <p class="specialist_name">Кошкодаров Ярослав</p>
                                    <p class="specialist_age">25 років</p>
                                    <p class="specialist_prof">Закінчив Національний університет фізично виховання і спорту
                                          України.
                                          Здобув ступінь магістра за спеціальністю - Фізична терапія, Ерготерапія.
                                          Спеціалізується на діагностиці стану опорно-рухового апарату, відновленні
                                          післяопераційного періоду, ревматоїдних артритах та спортивних травм.</p>
                              </div>
                        </div>
                        <div class="specialists-block__card">
                              <div class="specialists-block__img">
                                    <img src="./../../assets/img/Кужим Тетяна.jpg">
                              </div>
                              <div class="specialists-block__text">
                                    <p class="specialist_name">Кужим Тетяна</p>
                                    <p class="specialist_age">23 роки</p>
                                    <p class="specialist_prof">Закінчила Національний університет фізично виховання і спорту
                                          України. Здобула ступінь магістра за спеціальністю - фізична терапія, ерготерапія.
                                          Спеціалізується на біомеханіці суглобового апарату.</p>
                              </div>
                        </div> -->
                  </div>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/iCtizIHlW4o?si=GweFhWxK7gkiVz84"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
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
      name: "Specialists",
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
};

</script>

<style lang="scss">
@mixin text_style ($f-f, $f-s, $l-h, $f-w, $coloring) {
      font-family: $f-f;
      font-size: $f-s;
      line-height: $l-h;
      font-weight: $f-w;
      color: $coloring;
}

.specialists {
      padding: 0 190px 80px;
      margin-bottom: 40px;
}

.specialists_title {
      @include text_style ('Montserrat', 33px, 35px, 700, #3341dcd8);
      text-transform: uppercase;
      margin: 60px auto;
      text-align: center;
      position: relative;
      max-width: 350px;

      &::after {
            content: ' ';
            position: absolute;
            border: 2px solid #3341dcd8;
            width: 100%;
            bottom: -20px;
            left: 0;
      }
}

.specialists-block {
      iframe {
            display: block;
            margin: 0 auto;
            width: 65%;
            height: 450px;
      }
}

.specialists-block__cards {
      display: flex;
      justify-content: space-around;
      margin-bottom: 70px;
}

.photo {
      margin: 0 auto;
}

.specialist_photo {
      width: 100%;
      max-width: 39%;
      height: 100%;
      max-height: 545px;
      object-fit: cover;
      object-position: center top;
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

.specialist_info {
      background: #2333dfee;
      padding: 45px;
      @include text_style ('Montserrat', 18px, 25px, 400, #FFFFFF);
      text-align: start;
      vertical-align: middle;
      width: 100%;

      p {
            top: 50%;
            transform: translateY(50%);
      }
}

@media screen and (max-width: 1350px) {
      .specialist_info {

            p {
                  transform: translateY(0%);
            }

      }

      .specialists-block {
            iframe {
                  display: block;
                  margin: 0 auto;
                  width: 98%;
                  height: 450px;
            }
      }
}

@media screen and (max-width: 1024px) {
      .specialists {
            padding: 0 40px 80px;
            margin-bottom: 40px;
      }
}

@media screen and (max-width: 768px) {
      .specialists {
            padding: 0 0 50px;
            margin-bottom: 20px;

            .swiper-horizontal>.swiper-pagination-bullets,
            .swiper-pagination-bullets.swiper-pagination-horizontal,
            .swiper-pagination-custom,
            .swiper-pagination-fraction {
                  top: 70%;
            }
      }

      .specialists_title {
            @include text_style ('Montserrat', 28px, 30px, 700, #3341dcd8);
            margin: 60px auto;
            max-width: 250px;
      }



      .specialist_photo {
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

      .specialist_info {
            background: #FFFFFF;
            padding: 20px;
            @include text_style ('Montserrat', 16px, 18px, 400, #3341dcd8);
            text-align: center;
            max-width: 100%;
            max-height: 100%;
            min-height: 180px;
      }

      .specialists-block__cards {
            .swiper {
                  max-width: 100%;
                  padding-bottom: 100px;
            }
      }


}

@media screen and (max-width: 450px) {

      .specialists {

            .swiper-horizontal>.swiper-pagination-bullets,
            .swiper-pagination-bullets.swiper-pagination-horizontal,
            .swiper-pagination-custom,
            .swiper-pagination-fraction {
                  top: 58%;
            }
      }


}

@media screen and (max-width: 576px) {
      .specialists {
            padding: 0 0 20px;
            margin-bottom: 30px;
      }
}
</style>