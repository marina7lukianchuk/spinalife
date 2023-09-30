<template>
  <div class="about">
    <img class="price" src="../assets/img/price.jpg"> 
    <div class="main_title"> 
<h3 class="price_title"> ПРАЙС  </h3>
    </div>
    <div class="price_item item2"> 
      <div class="item_title"> Консультація + пробне заняття</div>
      <div class="price_amount"> 200 грн </div>
      
    </div>
    <div class="price_item item3"> 
      <div class="item_title"> 1 заняття кінезітерапії </div>
      <div class="price_amount"> 500 грн </div>   
    </div>
    <div class="price_item item4"> 
      <div class="item_title"> Курс занять кінезітерапії (12 занять) </div>
      <div class="price_amount"> 4200 грн </div>     
    </div>
    <div class="price_item item5"> 
      <div class="item_title"> Лікувальний масаж 20хв </div>
      <div class="price_amount"> 400 грн </div>    
    </div>
    <div class="price_item item6"> 
      <div class="item_title"> Курс лікувального масажу 20хв (6шт)</div>
      <div class="price_amount"> 1800 грн </div>      
    </div>
    <div class="price_item item7"> 
      <div class="item_title"> Лікувальний масаж 30хв </div>
      <div class="price_amount"> 450 грн </div>    
    </div>
    <div class="price_item item8"> 
      <div class="item_title"> Курс лікувального масажу 30хв (6шт)</div>
      <div class="price_amount"> 2100 грн </div>     
    </div>
    <div class="price_item item9"> 
      <div class="item_title"> Лікувальний масаж 60хв </div>
      <div class="price_amount"> 800 грн </div>     
    </div>
    <div class="price_item item10"> 
      <div class="item_title"> Курс лікувального масажу 60хв (6шт) </div>
      <div class="price_amount"> 3900 грн </div>  
    </div>
    <div class="price_item item11"> 
      <div class="item_title"> Голкорефлексотерапія </div>
      <div class="price_amount"> 450 грн </div>     
    </div>
    <div class="price_item item12"> 
      <div class="item_title"> Курс голкорефлексотерапії (6шт) </div>
      <div class="price_amount"> 1800 грн </div>     
    </div>
    <div class="price_item item13"> 
      <div class="item_title"> Банки </div>
      <div class="price_amount"> 250 грн </div>   
    </div>
    <div class="price_item item14"> 
      <div class="item_title"> Міостимуляція 30 хв </div>
      <div class="price_amount"> 300 грн </div>  
    </div>
    <div class="hero_text"> 
      <p class="text"> СПЕЦІАЛЬНА ПРОПОЗИЦІЯ! 
        Консультація <s> 500грн </s>    200грн!
        Запишись на консультацію і отримай пробне заняття у ПОДАРУНОК &#127873; </p>
      <form class="form" @submit.prevent="submitForm"> 
        <input class="input" type="text" placeholder="Ваше ім’я" v-model="name"> 
        <input class="input email_input" type="text" placeholder="Номер телефону" v-model="phone"> 
        <button class="btn_hero" type="submit" value=""> ЗАПИСАТИСЬ </button>
      </form>
    </div>
  </div>
  <Footer/>
</template>


<script> 
import Footer from '@/components/Footer/Footer.vue';
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
        .post('https://formsubmit.co/47ee0eb6bc90999b5227be1817a49f31', formData)
        .then(response => {
          console.log('Form submitted successfully!', response.data);
          alert('Форма успішно відправлена!');
        })
        .catch(error => {
          console.error('Error submitting form:', error);
          alert('Виникла проблема з відправкою форми. Але ми дуже очікуємо Вашого дзвінка для запису. Шукайте номер телефону у кінці сайту.');
        });
    }
  }
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
  align-items: center;
}
.price_title {
  @include text_style ('Montserrat', 33px, 35px, 700, #3341dcd8);
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 70px;
  position: relative;
  &::after {
    content: ' ';
    position: absolute;
    border: 2px solid #3341dcd8;
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
  width: 60%;
  display: flex;
  justify-content: space-between;
  margin-bottom: 15px;
  position: relative;
  &::after {
    content: ' ';
    position: absolute;
    border: 2px solid #3341dcd8;
    width: 105%;
    bottom: -7px;
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
  margin: 40px auto 40px;
  width: 100%;
  max-width: 500px;
	height: 100%;
  border-radius: 5px;
  text-align: center;
}
.text {
   @include text_style ('Montserrat', 25px, 28px, 700, #0a0a0bd8) ;
    z-index: 31;
    margin: 0 auto 25px;
}
.btn_hero {
  display: block;
  padding: 20px 50px;
  background-color: #3341dcd8;
  border: 1px solid #7080bbd4;
  @include text_style ('Montserrat', 25px, 27px, 600, #FFF) ;
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


  @media screen and (max-width: 1024px) {
    .price_title {
      @include text_style ('Montserrat', 30px, 32px, 700, #3341dcd8);
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
      @include text_style ('Montserrat', 20px, 21px, 600, #0a0a0bd8) ;
       margin: 25px auto 25px;
   }
   .btn_hero {
    padding: 20px 50px;
    @include text_style ('Montserrat', 24px, 25px, 600, #FFF) ;
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
        width: 95%;
      }
    }
    .item_title {
      @include text_style ('Montserrat', 18px, 20px, 700, #3341dcd8);
    }
    .price_amount {
      @include text_style ('Montserrat', 18px, 20px, 700, #000000c0);
    }
  }
  
   @media screen and (max-width: 576px) {
    .about {
      padding: 80px 15px 80px 15px;
    }
    .price_title {
      @include text_style ('Montserrat', 25px, 28px, 700, #3341dcd8);
      &::after {
        content: ' ';
        width: 95%;
      }
    }
    .item_title {
      @include text_style ('Montserrat', 16px, 18px, 700, #3341dcd8);
      max-width: 70%;
    }
    .price_amount {
      @include text_style ('Montserrat', 16px, 18px, 700, #000000c0);
    }
    .hero_text {
      margin: 20px auto 40px;
      max-width: 400px;
      text-align: center;
    }
    .text {
      @include text_style ('Montserrat', 19px, 22px, 700, #0a0a0bd8) ;
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
      width: 105%;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
    }
   }
  }
</style>