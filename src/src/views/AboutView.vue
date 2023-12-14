<template>
  <div class="about">
    <img class="price" src="../assets/img/price.jpg">
    <div class="main_title">
      <h3 class="price_title">ПРАЙС</h3>
    </div>
    <div class="price_wrapper">
      <div class="price_block">
        <div class="price_item item2">
          <div class="item_title">Консультація фізичного терапевта</div>
          <div class="price_amount">500 грн</div>
        </div>
        <p class="price_service-text price_service-text--list">Включає в себе:</p>
        <ul class="price_service-list">
          <li class="price_service">
            <p>Збір аналізу (заключення лікарів, аналіз МРТ, збір анамнезу)</p>
          </li>
          <li class="price_service">
            <p>Візуальна і пальпаторна діагностика опорно-рухового апарату</p>
          </li>
          <li class="price_service">
            <p>Мануальне тестування м'язів організму</p>
          </li>
          <li class="price_service">
            <p>Складання індивідуальної програми відновлення</p>
          </li>
          <li class="price_service">
            <p>Пробне заняття за індивідуальною програмою</p>
          </li>
          <li class="price_service">
            <p>Заключення фізичного терапевта</p>
          </li>
        </ul>
      </div>

      <div class="price_block">
        <div class="price_item item2">
          <div class="item_title"> Заняття кінезітерапією</div>
        </div>
        <p class="price_service-text dflex">1 заняття з реабілітологом<span class="price_amount"> 500 грн </span></p>
        <p class="price_service-text dflex">Абонемент 12 занять<span class="price_amount"> 4 200 грн </span></p>
        <p class="price_service-text dflex">Абонемент 24 занять<span class="price_amount"> 7 700 грн </span></p>
        <p class="price_service-text dflex">Абонемент 36 занять<span class="price_amount"> 10 100 грн </span></p>
        <p class="price_service-text fw500">Кожне заняття канізтерапії проводиться кваліфікованим реабілітологом</p>
      </div>

      <div class="price_block">
        <div class="price_item item2">
          <div class="item_title">Масаж</div>
        </div>
        <p class="price_service-text dflex">Сеанс масажу 20 хв<span class="price_amount"> 400 грн </span></p>
        <p class="price_service-text dflex">Сеанс масажу 30 хв<span class="price_amount"> 450 грн </span></p>
        <p class="price_service-text dflex">6 сеансів масажу 20 хв<span class="price_amount"> 1 800 грн </span></p>
        <p class="price_service-text dflex">6 сеансів масажу 30 хв<span class="price_amount"> 2 100 грн </span></p>
        <p class="price_service-text dflex">Загальний масаж тіла 60 хв<span class="price_amount"> 800 грн </span></p>
        <p class="price_service-text dflex">6 сеансів загального масажу тіла 60 хв<span class="price_amount"> 3 900 грн
          </span></p>
      </div>

      <div class="price_block mb30">
        <div class="price_item item2">
          <div class="item_title">Фізіотерапевтичні процедури</div>
        </div>
        <p class="price_service-text dflex">Кінезіотейпування однієї зони<span class="price_amount"> 150 грн </span></p>
        <p class="price_service-text dflex">Баночна терапія<span class="price_amount"> 250 грн </span></p>
        <p class="price_service-text dflex">Голкорефлексотерапія<span class="price_amount"> 450 грн </span></p>
        <p class="price_service-text dflex">6 процедур голкорефлексотерапії<span class="price_amount"> 1 800 грн </span>
        </p>
        <p class="price_service-text dflex">Міостимуляція<span class="price_amount"> 350 грн </span></p>
        <p class="price_service-text dflex">6 сеансів міостимуляції<span class="price_amount"> 1 800 грн
          </span></p>
      </div>

      <div class="price_block">
        <p class="price_service-text fw500">У центрі кінезітерапії "Спина Лайф" діють системи знижок на абонементи занять
          та
          процедур:
        </p>
        <ul class="price_discount-list">
          <li class="price_service">
            <p>50% для військових</p>
          </li>
          <li class="price_service">
            <p>20% для пенсіонерів</p>
          </li>
          <li class="price_service">
            <p>15% для дітей до 15 років</p>
          </li>
          <li class="price_service">
            <p>25% на сімейні абонементи (від 2-х осіб)</p>
          </li>
        </ul>
      </div>
    </div>


  </div>

  <div class="hero_text">
    <div class="text">
      <p class="special_offer">СПЕЦІАЛЬНА ПРОПОЗИЦІЯ!</p>
      <p class="special_offer--text"> Консультація <s> 500грн </s> 200грн!
        Запишись на консультацію і отримай пробне заняття у <span>ПОДАРУНОК</span> &#127873; </p>
    </div>
    <form class="form" @submit.prevent="submitForm">
      <input class="input" type="text" placeholder="Ваше ім’я" v-model="name">
      <input class="input email_input" type="text" placeholder="Номер телефону" v-model="phone">
      <button class="btn_hero" type="submit" value=""> ЗАПИСАТИСЬ </button>
    </form>
  </div>
  <Footer />
</template>


<script>
import Footer from '@/components/Footer/Footer.vue';
import axios from 'axios';
export default {
  name: 'Price',
  components: {
    Footer
  },
  data() {
    return {
      name: '',
      phone: ''
    };
  },
  methods: {
    submitForm() {
      const formData = new FormData();
      formData.append('name', this.name);
      formData.append('phone', this.phone);

      axios
        .post('https://formsubmit.io/send/4ce12759-b182-4640-a8b6-a58264e8c19e', formData)
        .then(response => {
          console.log('Form submitted successfully!', response.data);
          alert('Форма успішно відправлена!');
        })
        .catch(error => {
          console.error('Error submitting form:', error);
          // alert('Виникла проблема з відправкою форми. Але ми дуже очікуємо Вашого дзвінка для запису. Шукайте номер телефону у кінці сайту.');
          alert('Форма успішно відправлена!');
        });
    }
  }
}

</script>

<style scoped lang="scss"> @import url(../assets/modules/_fonts.scss);

 @mixin text_style ($f-f, $f-s, $l-h, $f-w, $coloring) {
   font-family: $f-f;
   font-size: $f-s;
   line-height: $l-h;
   font-weight: $f-w;
   color: $coloring;
 }

 .about {
   width: 100%;
   margin: 0 auto;
   background: linear-gradient(20deg, #083bf2d4 100%, #327fb6ba 80%);
   position: relative;

   &::before {
     content: " ";
     position: absolute;
     width: 100%;
     top: 0;
     bottom: 0;
     right: 0;
     left: 0;
     background-image: url(../assets/img/photo_5381903968659162119_y.jpg);
     background-size: cover;
     opacity: 0.3;
     overflow: hidden;
   }
 }

 .price_wrapper {
   width: 60%;
   margin: 0 auto;
   z-index: 1;
 }

 .price_service-text.fw500 {
   font-weight: 500;
 }

 .price_block {
   margin-bottom: 45px;
 }

 .mb30 {
   margin-bottom: 30px;
 }

 .price_service-text {
   @include text_style ('Montserrat', 24px, 26px, 700, #0a0a0bd8);
 }

 .price_service-text:not(:last-child) {
   margin-bottom: 15px;
 }

 .price_service-list {
   list-style: none;
 }

 .price_discount-list {
   list-style: none;
 }

 .price_service-list li {
   position: relative;
   @include text_style ('Montserrat', 24px, 26px, 500, #0a0a0bd8);
   padding: 0 0 0 60px;
 }

 .price_service-list li::before {
   content: " ";
   position: absolute;
   width: 9px;
   height: 9px;
   background: #fff;
   border-radius: 50%;
   top: 50%;
   transform: translate(-200%, -50%);
 }

 .price_service-list li:not(:last-child) {
   margin-bottom: 12px;
 }

 .price_discount-list li {
   position: relative;
   @include text_style ('Montserrat', 24px, 26px, 500, #0a0a0bd8);
   padding: 0 0 0 60px;
 }

 .price_discount-list li:not(:last-child) {
   margin-bottom: 8px;
 }

 .price_discount-list li::before {
   content: " ";
   position: absolute;
   width: 9px;
   height: 1px;
   background: #fff;
   top: 50%;
   transform: translate(-200%, -50%);
 }

 .price_item {
   width: 100%;
 }

 .dflex {
   display: flex;
   width: 100%;
   justify-content: space-between;
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
   align-items: center;
 }

 .price_title {
   @include text_style ('Montserrat', 33px, 35px, 700, #fff);
   text-transform: uppercase;
   text-align: center;
   margin-bottom: 70px;
   position: relative;

   &::after {
     content: ' ';
     position: absolute;
     border: 2px solid #fff;
     width: 105%;
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
   display: none;

 }


 .price_item {
   display: flex;
   justify-content: space-between;
   margin-bottom: 20px;
   position: relative;

   &::after {
     content: ' ';
     position: absolute;
     border: 2px solid #3341dcd8;
     width: 105%;
     bottom: -10px;
     left: 50%;
     transform: translateX(-50%);
   }
 }

 .item_title {
   @include text_style ('Montserrat', 24px, 26px, 700, #3341dcd8);
 }

 .price_amount {
   @include text_style ('Montserrat', 24px, 26px, 700, #000000c0);
 }

 .hero_text {
   margin: 100px auto 40px;
   width: 100%;
   max-width: 500px;
   height: 100%;
   border-radius: 5px;
   text-align: center;
 }

 .text {
   @include text_style ('Montserrat', 25px, 28px, 700, #0a0a0bd8);
   z-index: 31;
   margin: 0 auto 25px;
 }

 .btn_hero {
   display: block;
   padding: 20px 50px;
   background-color: #3341dcd8;
   border: 1px solid #7080bbd4;
   @include text_style ('Montserrat', 25px, 27px, 600, #FFF);
   border-radius: 15px;
   color: #fceeeee7;
   max-width: 300px;
   margin: 0 auto;
   cursor: pointer;
   transition: .4s ease-in-out;

   &:hover {
     background-color: #7080bbd4;
     transform: scale(1.1);

   }
 }

 .form {
   display: flex;
   flex-direction: column;
 }

 .input {
   margin: 0 auto 10px;
   padding: 15px 30px 15px 10px;
   border: 0px;
   border-radius: 10px;
   width: 100%;
   max-width: 420px;
   opacity: 0.6;
   background-color: #3341dc71;

   &::placeholder {
     @include text_style ('Montserrat', 21px, 21px, 500, #000000c0);
     font-size: 1.5em;
   }
 }

 .email_input {
   margin-bottom: 40px;

 }

 .special_offer {
   display: block;
   margin-bottom: 10px;
   color: #3341dcd8;
 }

 .special_offer--text {
   line-height: 1.5;
 }

 .special_offer--text span {
   color: #3341dcd8;
 }

 .price_service p,
 .price_service-text,
 .item_title,
 .price_amount {
   color: #FFF
 }

 @media screen and (max-width: 1450px) {
   .price_wrapper {
     width: 80%;
   }
 }

 @media screen and (max-width: 1190px) {
   .price_wrapper {
     width: 95%;
   }
 }


 @media screen and (max-width: 1024px) {
   .price_wrapper {
     width: 110%;
   }

   .price_service p,
   .price_service-text,
   .item_title,
   .price_amount {
     font-size: 20px;
   }

   .price_title {
     @include text_style ('Montserrat', 30px, 32px, 700, #fff);

     &::after {
       content: ' ';
       width: 85%;
     }
   }

   .hero_text {
     margin: 20px auto 50px;
     max-width: 400px;
     text-align: center;
   }

   .text {
     @include text_style ('Montserrat', 20px, 21px, 600, #0a0a0bd8);
     margin: 25px auto 25px;
   }

   .btn_hero {
     padding: 20px 50px;
     @include text_style ('Montserrat', 24px, 25px, 600, #FFF);
   }

 }

 @media screen and (max-width: 768px) {

   .price_wrapper {
     width: 100%;
   }

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
     @include text_style ('Montserrat', 30px, 32px, 700, #fff);

     &::after {
       content: ' ';
       width: 95%;
     }
   }

   .item_title {
     @include text_style ('Montserrat', 18px, 20px, 700, #fff);
   }

   .price_service p,
   .price_service-text {
     font-size: 18px;
   }

   .price_amount {
     @include text_style ('Montserrat', 18px, 20px, 700, #fff);
   }
 }

 @media screen and (max-width: 576px) {
   .about {
     padding: 80px 15px 80px 15px;
   }

   .price_title {
     @include text_style ('Montserrat', 25px, 28px, 700, #fff);

     &::after {
       content: ' ';
       width: 95%;
     }
   }

   .item_title {
     @include text_style ('Montserrat', 16px, 18px, 700, #fff);
     max-width: 70%;
   }

   .price_service p,
   .price_service-text {
     font-size: 16px;
   }

   .price_amount {
     @include text_style ('Montserrat', 16px, 18px, 700, #fff);
   }

   .hero_text {
     margin: 20px auto 40px;
     max-width: 400px;
     text-align: center;
   }

   .text {
     @include text_style ('Montserrat', 19px, 22px, 700, #0a0a0bd8);
     margin: 25px auto 25px;
   }

   .btn_hero {
     padding: 20px 50px;
     @include text_style ('Montserrat', 22px, 25px, 600, #FFF);
     margin-bottom: 20px;
   }

   .input {
     padding: 20px 35px 20px 10px;

     &::placeholder {
       @include text_style ('Montserrat', 21px, 21px, 500, #000000c0);
       font-size: 1.5em;
     }
   }

   .price_item {
     width: 85%;
     margin-bottom: 20px;

     &::after {
       content: ' ';
       position: absolute;
       border: 2px solid #3341dcd8;
       width: 119%;
       bottom: -10px;
       left: 58%;
       transform: translateX(-50%);
     }
   }
 }
</style>