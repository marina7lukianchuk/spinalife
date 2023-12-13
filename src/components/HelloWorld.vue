<template>
  <div class="services_wrapper">
    <h5 class="services_title">Послуги</h5>
    <p class="sub_services">Широкий спектр послуг для індивідуальних потреб кожного клієнта. Iндивідуальний підхід
      дозволяє підібрати вправи та режими, що найбільше відповідають потребам конкретного пацієнта та сприяють досягненню
      його цілей.</p>
    <div class="services">
      <div class="items" v-for="item in items" :key="item.id">
        <span class="services_item">
          {{ item.name }}
        </span>
        <span class="description">
          {{ item.descrip }}
        </span>
      </div>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue'

export default {
  name: 'HelloWorld',
  setup() {
    const items = ref([
      {
        name: 'Кінезітерапія',
        id: 1,
        descrip: 'Кінезітерапія – напрямок у медицині, який допомагає відновлюватися організму за допомогою спеціальних фізичних вправ, які підбираються індивідуально для кожного пацієнта.'
      },
      {
        name: 'ЛФК',
        id: 2,
        descrip: 'ЛФК зменшує негативний вплив вимушеного спокою, підвищує тонус і активізує діяльність організму, мобілізує його захисні і компенсаторні реакції, попереджує ускладнення'
      },
      {
        name: 'Тейпування',
        id: 3,
        descrip: 'Основна ціль тейпування – перерозподіл м’язового навантаження, лімфодренаж і розслаблення певних типів м’язів. В естетичній медицині тейпи кріпляться на скроні, підборіддя.'
      },
      {
        name: 'Баночна терапія',
        id: 4,
        descrip: 'Баночний масаж забезпечує виведення токсичних продуктів з організму, прискорює процес обміну речовин, допомагає усунути застійні явища крові і тканин, активізує енергетичний потенціал тіла.'
      },
      {
        name: 'Mасаж',
        id: 5,
        descrip: 'Масаж спини усуває м’язові спазми і біль, покращує кровопостачання тканин, має рефлекторний вплив на біологічно активні точки, які відповідають за функціонування багатьох органів і систем'
      },
      {
        name: 'Міостимуляція',
        id: 6,
        descrip: 'В цілому міостимуляція - це позитивний вплив електричного струму на мускулатуру, нервову систему, обмін речовин і гормональний фон в організмі.'
      }
    ]
    )
    return {
      items
    }
  },



}
</script>

<style lang="scss">
@import url(../assets/modules/_fonts.scss);

@mixin text_style ($f-f, $f-s, $l-h, $f-w, $coloring) {
  font-family: $f-f;
  font-size: $f-s;
  line-height: $l-h;
  font-weight: $f-w;
  color: $coloring;
}


.services_wrapper {
  padding: 20px 190px 60px;
}

.services {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 29px;
  margin: 50px auto 20px;

}

.services_item {
  width: 100%;
  max-width: 360px;
  background-color: #bfc7daa8;
  padding: 18px 50px 20px;
  @include text_style ('Rubik', 22px, 26px, 700, #3341dcd8);
  text-transform: uppercase;
  text-align: center;
  align-items: center;
}


.items {
  display: flex;
  flex-direction: column;
  background-image: url(../assets/img/jar12.jpg);
  background-size: 53% auto;
  background-repeat: no-repeat;
  background-position: 50% 2%;

}

.items:nth-child(1) {
  background-image: url("../assets/img/gym.svg");
  background-size: 39% auto;
  background-position: 50% 25%;
}

.items:nth-child(2) {
  background-image: url("../assets/img/lfk.png");
  background-size: 30% auto;
  background-position: 50% 22%;
}

.items:nth-child(3) {
  background-image: url("../assets/img/tap.svg");
  background-size: 28% auto;
  background-position: 50% 22%;
}

.items:nth-child(5) {
  background-image: url("../assets/img/masage1.png");
  background-size: 32% auto;
  background-position: 50% 19%;
}

.items:nth-child(6) {
  background-image: url("../assets/img/stimul2.png");
  background-size: 27% auto;
  background-position: 50% 21%;
}

.description {
  width: 100%;
  height: 100%;
  max-height: 295px;
  max-width: 360px;
  background-color: #bfc7daa8;
  padding: 90px 50px 25px 50px;
  @include text_style ('Montserrat', 17px, 18px, 500, #000);
  text-align: center;
  align-items: center;

}

.services_title {
  @include text_style ('Montserrat', 33px, 35px, 700, #3341dcd8);
  text-transform: uppercase;
  margin: 40px auto 60px;
  text-align: center;
  position: relative;
  max-width: 190px;

  &::after {
    content: ' ';
    position: absolute;
    border: 2px solid #3341dcd8;
    width: 100%;
    bottom: -20px;
    left: 0;
  }
}

.sub_services {
  max-width: 50%;
  @include text_style ('Montserrat', 22px, 23px, 500, #000000c0);
  font-style: italic;
  margin: 0 auto;
  margin-top: 25px;
  text-align: center;
}

@media screen and (max-width: 1024px) {

  .services_title {
    @include text_style ('Montserrat', 38px, 30px, 700, #3341dcd8);
  }

  .services_wrapper {
    padding: 10px 40px 40px;
  }

  .services {
    margin: 20px auto 20px;
    justify-content: space-around;
    gap: 20px;
  }

  .items:nth-child(5) {
    background-position: 50% 18%;
  }

  .items:nth-child(6) {
    background-position: 50% 22%;
  }

  .description {
    background-color: #bfc7da71;
  }

  .services_item {
    width: 100%;
    max-width: 360px;
    background-color: #bfc7da71;
  }

  .sub_services {
    max-width: 60%;
    @include text_style ('Montserrat', 21px, 21px, 500, #000000c0);
    margin: 25px auto 45px;
  }

}


@media screen and (max-width: 768px) {
  .services_wrapper {
    padding: 10px 40px 40px;
  }

  .services {
    margin: 20px auto 20px;
    justify-content: space-around;
    gap: 20px;
  }

  .items:nth-child(5) {
    background-position: 50% 26%;
  }

  .items:nth-child(6) {
    background-position: 50% 29%;
  }

  .description {
    @include text_style ('Montserrat', 16px, 16px, 500, #000);
    max-width: 300px;
    padding: 90px 30px 25px 30px;
  }

  .services_item {
    width: 100%;
    max-width: 300px;
    background-color: #bfc7da71;
    @include text_style ('Rubik', 20px, 23px, 700, #2a2a2e);
    padding: 30px 40px;
  }

  .sub_services {
    max-width: 80%;
    @include text_style ('Montserrat', 20px, 21px, 500, #000000c0);
  }

  .items:nth-child(3) {
    background-position: 50% 25%;
  }

  .items {
    background-position: 50% 11%;
  }

  .items:nth-child(1) {
    background-position: 50% 28%;
  }

  .items:nth-child(2) {
    background-position: 50% 30%;
  }


}

@media screen and (max-width: 576px) {
  .services_wrapper {
    padding: 10px 20px 40px;
  }

  .services {
    margin: 20px auto 20px;
  }

  .items:nth-child(5) {
    background-position: 50% 25%;
  }

  .items:nth-child(6) {
    background-position: 50% 35%;
  }

  .description {
    background-color: #bfc7da71;
    max-height: 360px;
  }

  .services_item {
    width: 100%;
    max-width: 360px;
    background-color: #bfc7da71;
    @include text_style ('Rubik', 22px, 26px, 700, #3341dcd8);
  }

  .sub_services {
    max-width: 80%;
    @include text_style ('Montserrat', 18px, 19px, 500, #000000c0);
    margin: 25px auto 35px;
  }

  .items {
    background-position: 50% 22%;

  }

  .items:nth-child(1) {
    background-position: 50% 33%;
  }

  .items:nth-child(2) {
    background-position: 50% 33%;
  }

  .items:nth-child(3) {
    background-position: 50% 31%;
  }

  .items:nth-child(5) {
    background-position: 50% 29%;
  }

  .services_title {
    @include text_style ('Montserrat', 28px, 28px, 700, #3341dcd8);
  }

}</style>
