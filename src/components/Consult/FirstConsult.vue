<template> 
<div class="consult"> 
    <h4 class="consult_title"> Як проходить перша консультація?  </h4>
    <p class="sub"> м'язове тестування - точний інструмент для отримання відповідей.
        Клієнт відразу отримує чітку відповідь на першопричину болю. 
        Після тесту спеціаліст чітко визначає, що робити. </p>
<div class="text_wrapper"> 
 <div class="text_block"> 
   <p class="main_text"> Діагностика опорно-рухового апарату - це найголовніший аспект при підборі засобів та методів фізичної реабілітації кожної людини.
Правильно проведена діагностика - це ключ до успішного відновлення опорно-рухового апарату, та організму вцілому. У нашому центрі Ви :
<ul> 
<li> отримаєте повну діагностику Вашого опорно-рухового апарату; </li>
<li> з’ясуєте першопричину виникнення болю, дискомфорту або ж порушення постави. </li>
</ul> 
</p>
 </div>
 <div class="text_block2"> 
    <p class="main_text"> За допомогою широкого спектру засобів та методів проведення діагностування таких як:
    <ul>    
 <li>  мануально-м’язове тестування; </li>
 <li> пальпаторна діагностика; </li>
 <li> візуальне виявлення різного роду перекосів частин тіла; </li>
 <li> динамометрія м’язів та ін. </li>
 </ul>
ми виявимо всі недостатньо працюючі, спазмовані, розтягнуті м’язи, які привели до болю або ж дискомфорту.
Підберемо програму відновлення, яка підходить саме для Вас, оскільки кожна людина унікальна, як і кожен випадок при порушенні опорно-рухового апарату. </p>
</div>
</div>
<div class="mob_bg"> 
   <div class="hero_text"> 
    <p class="text"> якщо Вам потрібна повна консультація та діагностика опорно-рухового апарату, заповнюйте форму та записуйтесь на першу консультацію, а наша команда Вам з радістю допоможе в цьому </p>
    <form class="form" @submit.prevent="submitForm"> 
      <input class="input" type="text" placeholder="Ваше ім’я" v-model="name"> 
      <input class="input email_input" type="text" placeholder="Номер телефону" v-model="phone"> 
      <button class="btn_hero" type="submit" value="записатись"> записатись </button>
</form>
</div>
</div>
</div>


</template>

<script>
import axios from 'axios'

export default {
    name: 'FirstConsult',
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
        .post('https://formsubmit.co/47ee0eb6bc90999b5227be1817a49f31', formData)
        .then(response => {
          console.log('Form submitted successfully!', response.data);
          alert('Форма успішно відправлена!');
        })
        .catch(error => {
          console.error('Error submitting form:', error);
          alert('Виникла проблема з відправкою форми:( Але ми очікуємо Вашого дзвінка для запису. Шукайте номер телефону в кінці сайту.');
        });
    }
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

  .consult {
  padding: 10px 190px 180px;
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
    background-image: url(../../assets/img/consult.jpg);
    background-repeat: no-repeat;
    background-size: 100% auto;
    opacity: 0.3;
    overflow: hidden;
  }
  }

.consult_title {
  @include text_style ('Montserrat', 33px, 34px, 600, #FFFFFF) ;
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
    border: 2px solid #FFF;
    width: 100%;
    bottom: -20px;
    left: 0;
  }
}
.sub {
@include text_style ('Montserrat', 22px, 23px, 500, #FFFFFF) ;
margin: 0 auto 80px ;
font-style: italic;
max-width: 50%;
z-index: 13;
position: sticky;
}

.text_wrapper {
    display: flex;
    justify-content: space-between;
    gap: 80px;
}

.text_block, .text_block2 {
    display: block;
    background-color: #a3b0d0b1;
    padding: 40px;
    max-width: 520px;
    @include text_style ('Montserrat', 18px, 20px, 500, #FFFFFF) ;
    z-index: 13;
    list-style-position: inside;
    li {
        padding: 10px 10px 10px 0px;
    }
}

.hero_text {
  margin: 70px auto 20px;
  width: 100%;
  max-width: 500px;
  height: 100%;
  border-radius: 5px;
  text-align: center;
  z-index: 100;
}

.text {
    @include text_style ('Montserrat', 20px, 23px, 600, #FFFFFF) ;
    color: #FFF; 
    z-index: 31;
    margin: 25px auto 25px;
}

.btn_hero {
  display: block;
  padding: 15px 70px;
  background-color: #afb7d5de;
  border: 1px solid #7080bbd4;
  @include text_style ('Montserrat', 25px, 27px, 600, #fdfbfb);
  border-radius: 15px;
  max-width: 300px;
  margin: 15px auto 0;
  z-index: 13;
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
  margin-top: 20px;
}

.input {
  margin: 0 auto 10px;
  padding: 15px 30px 15px 10px;
  border: 0px;
  border-radius: 10px;
  width: 100%;
  max-width: 420px;
  &::placeholder {
    @include text_style ('Montserrat', 21px, 21px, 500, #000000c0);
    font-size: 1.5em;
  }

}

@media screen and (max-width: 1024px) {
  .consult {
    padding: 10px 80px 150px;
    margin-bottom: 30px;
    &::before {
      background-image: url(../../assets/img/consult.jpg);
      background-size: 100% 100%;
    }
    }
    .text_wrapper {
      display: flex;
      justify-content: space-between;
      gap: 40px;
  }
  .text_block {
    padding: 25px;
    @include text_style ('Montserrat', 17px, 19px, 500, #FFFFFF) ;
    li {
        padding: 10px 10px 10px 0px;
    }
}

.text {
  @include text_style ('Montserrat', 19px, 22px, 600, #FFFFFF) ;
  color: #FFF; 
  z-index: 100;
  margin: 0 auto 20px;
}
}

@media screen and (max-width: 768px) {

  .sub {
    @include text_style ('Montserrat', 20px, 21px, 500, #FFFFFF) ;
    margin: 0 auto 50px ;
    font-style: italic;
    max-width: 70%;
    }
  .consult {
    padding: 10px 40px 150px;
    margin-bottom: 30px;
    &::before {
      background-image: url(../../assets/img/consult.jpg);
      background-size: 100% auto;
    }
    }
    .text_block, .text_block2 {
      padding: 20px;
      @include text_style ('Montserrat', 16px, 18px, 500, #FFFFFF) ;
      li {
          padding: 10px 10px 10px 0px; }
      }
    
      .text_wrapper {
      margin-bottom: 110px;
    }

    .text {
      margin: 20px auto 20px;
    }
}

@media screen and (max-width: 576px) {
  .sub {
    @include text_style ('Montserrat', 18px, 19px, 500, #FFFFFF) ;
    margin: 0 auto 30px ;
    font-style: italic;
    max-width: 70%;
    }
  .consult {
    padding: 10px 0 60px;
    margin-bottom: 40px; 
    &::before {
      background-image: url(../../assets/img/consult_576.jpg), url(../../assets/img/consult_bg2two.jpg);
      background-size: 100% auto, 100% auto;
      background-position: top, bottom;
      background-repeat: no-repeat, no-repeat;
    } }

    .text_wrapper {
      display: flex;
      flex-direction: column;
      gap: 25px;
      align-items: center;
    }
    .mob_bg {
      position: relative;
      z-index: 100;

    }
    .text_block, .text_block2{
      padding: 30px 20px;
      @include text_style ('Montserrat', 15px, 17px, 500, #FFFFFF) ;
      li {
          padding: 5px 5px 5px 0px; }
      }

      .text_block2 {
        background-color: transparent;
      }
      .consult_title { 
      @include text_style ('Montserrat', 28px, 28px, 700, #FFFFFF);
      margin: 30px auto 60px;
      &::after {
        content: ' ';
        position: absolute;
        border: 2px solid #FFF;
        width: 70%;
        bottom: -20px;
        left: 50%;
        transform: translateX(-50%);
      } }
      .text {
        margin: 20px auto 20px;
        padding-top: 20px;
    
      }
}

@media screen and (max-width: 414px) {

  .consult {
    padding: 10px 20px 70px;
   }

   .sub {
    max-width: 80%;
    }
  .text_block {
    padding: 30px 20px;
    }

    .text_wrapper {
      gap: 60px;
    }

    .consult_title { 
      @include text_style ('Montserrat', 25px, 30px, 600, #FFFFFF);
      margin: 20px auto 50px;
    }
    .text_block, .text_block2 {
      padding: 30px 20px;
      @include text_style ('Montserrat', 16px, 17px, 500, #FFFFFF) ;
     }

    .text {
      margin: 10px auto 20px;
      padding-top: 0;
    }
    .input {
      margin: 0 auto 10px;
      padding: 20px 30px 20px 10px; }

   
}

</style>