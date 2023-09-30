<template>
  <section class="js-horizontal-collapse horizontal-collapse">
    <ul class="horizontal-collapse__inner">
      <HorizontalCollapseItem className="horizontal-collapse__item--1">
        <div :class="{'horizontal-collapse__inactive-content': !isActive}">
          <h2 class="horizontal-collapse__heading">Остеохондроз</h2>
          <img class="arrow" src="../../assets/img/arrow-removebg.png">
        </div>
        <div class="horizontal-collapse__active-content">
          <h2 class="horizontal-collapse__heading">Остеохондроз</h2>
          <p class="horizontal-collapse__body">
            Програма лікування остеохондрозу визначається індивідуально в кожному випадку.
            Призначення лікаря залежать від стану здоров'я пацієнта і наявності супутніх ускладнень.
            Особливе значення при цьому, як правило, має робота з м'язовою системою.
            Кінезіотерапія та масаж дозволяють нормалізувати тонус м'язів та покращити обмін речовин в навколохребетних тканинах.
          </p>
          <button class="for_chat_blue" @click="startCall"> ЗАПИСАТИСЬ НА КОНСУЛЬТАЦІЮ </button>
        </div>
      </HorizontalCollapseItem>
  
        <HorizontalCollapseItem className="horizontal-collapse__item--2">
          <div :class="{'horizontal-collapse__inactive-content': !isActive}">
          <h2 class="horizontal-collapse__heading">Сколіоз</h2>
          <img class="arrow" src="../../assets/img/arrow-removebg.png">
        </div>
          <div class="horizontal-collapse__active-content">
            <h2 class="horizontal-collapse__heading"> Сколіоз </h2>
            <p class="horizontal-collapse__body">
                Метод кінезітерапії, полягає у виконанні правильних, безпечних вправ на багатофункціональних 
                реабілітаційних тренажерах. При виконанні вправ за методикою, окрім м’язів, в роботу влючаются 
                зв’язки і сухожилля, нервова система, серцево-судинна і дихальна система. У організмі при цьому виробляються особливі речовини – ендорфіни, які мають
                 знеболюючу дію. Впливаючи на м’язову систему, запускаються механізми саморегуляції в організмі.
            </p>
            <button class="for_chat_white" @click="startCall"> ЗАПИСАТИСЬ НА КОНСУЛЬТАЦІЮ </button>
          </div>
        </HorizontalCollapseItem>
  
        <HorizontalCollapseItem className="horizontal-collapse__item--3">
          <div :class="{'horizontal-collapse__inactive-content': !isActive}">
            <h2 class="horizontal-collapse__heading"> Артрит і артроз</h2>
            <img class="arrow" src="../../assets/img/arrow-removebg.png">
          </div>
          <div class="horizontal-collapse__active-content">
            <h2 class="horizontal-collapse__heading"> Артрит і артроз </h2>
            <p class="horizontal-collapse__body">
                Помірні фізичні навантаження. Вони поліпшують кровообіг, зміцнюють м’язовий корсет,
                 що дуже важливо для підтримки здоров’я суглобів. Однак тут ключове слово — помірні,
                  тому що розтягнення, травми, силові тренування та виснажливі спортивні змагання 
                  тільки прискорюють процес руйнування суглобів. Для суглобів найкращими видами занять
                   вважаються плавання, їзда на велосипеді, скандинавська ходьба.
            </p>
            <button class="for_chat_blue" @click="startCall"> ЗАПИСАТИСЬ НА КОНСУЛЬТАЦІЮ </button>
          </div>
        </HorizontalCollapseItem>
  
        <HorizontalCollapseItem className="horizontal-collapse__item--4">
          <div :class="{'horizontal-collapse__inactive-content': !isActive}">
            <h2 class="horizontal-collapse__heading"> Реабілітація </h2>
            <img class="arrow" src="../../assets/img/arrow-removebg.png">
          </div>
          <div class="horizontal-collapse__active-content">
            <h2 class="horizontal-collapse__heading"> Реабілітація після травм та переломів </h2>
            <p class="horizontal-collapse__body">
                Фахівці центру здоров’я спини та суглобів Спина Лайф розробляють програму реабілітації
                 індивідуально для кожного, базуючись на проблемах, можливостях і потребах пацієнта.
                  Усі вправи виконуються на медичних тренажерах і під обов’язковим наглядом фахівця,
                   який навчає пацієнта вправам і контролює процес.
            </p>
            <button class="for_chat_white" @click="startCall"> ЗАПИСАТИСЬ НА КОНСУЛЬТАЦІЮ </button>
          </div>
        </HorizontalCollapseItem>
        <HorizontalCollapseItem className="horizontal-collapse__item--5">
          <div :class="{'horizontal-collapse__inactive-content': !isActive}">
            <h2 class="horizontal-collapse__heading">Протрузії і грижі</h2>
            <img class="arrow" src="../../assets/img/arrow-removebg.png">
          </div>
          <div class="horizontal-collapse__active-content">
            <h2 class="horizontal-collapse__heading">Протрузії і грижі</h2>
            <p class="horizontal-collapse__body">
              Протрузія – це, по суті, перша стадія формування грижі міжхребцевих дисків.
              Вкрай важливо звернутися за допомогою до лікаря саме на цьому етапі, адже при протрузії можна використовувати весь спектр лікувальних заходів,
               і в 95% випадків вони дають потрібний ефект.Якщо не лікуватися, протрузія 
               переростає в екструзію, тобто розрив кільця, й міжхребцевий диск випинається назовні. 
               Це і є грижа.Лікування обох захворювань проводиться комплексно. 
            </p>
            <button class="for_chat_blue" @click="startCall"> ЗАПИСАТИСЬ НА КОНСУЛЬТАЦІЮ </button>
          </div>
        </HorizontalCollapseItem>  
      </ul>
    </section>
  </template>
  
  <script>
  import HorizontalCollapseItem from './HorizontalCollapseItem.vue';
  export default {
    name: 'HorizontalCollapse',
    components: {
      HorizontalCollapseItem
    },
    methods: {
    startCall() {
      const phoneNumber = "+380686380717";
      const callLink = "tel:" + phoneNumber;
      window.location.href = callLink;
    }
  }
  };
  </script>
  
  <style lang="scss">
  @import url(../../assets/modules/_fonts.scss);
  @mixin text_style ($f-f, $f-s, $l-h, $f-w, $coloring) {
    font-family: $f-f;
    font-size: $f-s;
    line-height: $l-h;
    font-weight: $f-w;
    color: $coloring;
  }

  $transitionDurationMs: 0.5s;
  .horizontal-collapse {
    width: 100%;
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    justify-content: center;
    margin-bottom: 5rem;
    color: #fff;
    *,
    *:before,
    *:after {
      box-sizing: border-box;
    }
    &__inner {
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: row;
    }
    &__item {
      min-height: 35rem;
      min-height: 450px;
      list-style: none;
      padding: 0 0 0 20px;
      overflow: hidden;
      min-width: 10rem;
      max-width: 40rem;
      position: relative;
      transition: width $transitionDurationMs;
      cursor: pointer;
      &--1 {
        background-color: #a3b0d0b1;
      }
      &--2 {
        background-color: rgba(58, 66, 228, 0.683);
      }
      &--3 {
        background-color: #a3b0d0b1;
      }
      &--4 {
        background-color: rgba(58, 66, 228, 0.683);
      }
      &--5 {
        background-color: #a3b0d0b1;
      }
      &.is-active {
        // color: #fff;
        .horizontal-collapse__inactive-content {
          opacity: 0;
          cursor: pointer;
        }
        .horizontal-collapse__active-content {
          opacity: 1;
          cursor: pointer;
        }
      }
    }
    &__item-inner {
      padding: 3rem;
    }
    &__inactive-content {
      opacity: 1;
      transition: opacity $transitionDurationMs;
      position: absolute;
      bottom: 2rem;
      left: 1rem;
      cursor: pointer;
      .horizontal-collapse__heading {
        user-select: none;
        cursor: default;
        margin-bottom: 0;
        @include text_style ('Montserrat', 45px, 55px, 600, #FFFFFF) ;
        writing-mode: vertical-rl;
        text-orientation: mixed;
        transform: rotate(180deg);
        padding-right: 20px;
        min-width: 480px;
      }
    }
    &__active-content {
      opacity: 0;
      transition: opacity $transitionDurationMs;
      cursor: default;
    }
    &__heading {
      margin-top: 0;
      margin-bottom: 2rem;
      @include text_style ('Montserrat', 28px, 30px, 600, #FFFFFF) ;
    }
    &__body {
      margin-bottom: 2rem;
      @include text_style ('Montserrat', 18px, 20px, 500, #FFFFFF) ;
    }
    &__link {
      display: inline-block;
      background-color: #fff;
      color: #333;
      text-decoration: none;
      line-height: 1;
      padding: 1rem 2rem;
      border-radius: 2rem;
      font-size: 1.7rem;
      font-weight: bold;
    }
  }
  .arrow {
    display: none;
  }
  .for_chat_blue  {
    padding: 13px 30px;
    background-color: transparent;
    border: 3px solid #3341dcd8;
    @include text_style ('Montserrat', 17px, 20px, 700, #3341dcd8);
    cursor: pointer;
    position: absolute;
    bottom: 8%;
    left: 50%;
    transform: translateX(-50%);
    z-index: 26;
  }

  .for_chat_white {
    padding: 13px 30px;
    background-color: transparent;
    border: 3px solid #FFFFFF;
    @include text_style ('Montserrat', 17px, 20px, 700, #FFFFFF);
    cursor: pointer;
    position: absolute;
    bottom: 8%;
    left: 50%;
    transform: translateX(-50%);
    z-index: 26;
  }

  @media screen and (max-width: 1024px) {
    .horizontal-collapse { 
      &__item {
        max-height: 220px;
        list-style: none;
        padding: 0 0 0 20px;
        overflow: hidden;
        max-width: 30rem;
        cursor: pointer; }
    
    &__inactive-content {
      opacity: 1;
      transition: opacity $transitionDurationMs;
      position: absolute;
      bottom: 2rem;
      left: 1rem;
      .horizontal-collapse__heading {
        margin-bottom: 0;
        @include text_style ('Montserrat', 35px, 42px, 600, #FFFFFF) ;
        padding-right: 20px;
        min-width: 300px;
      }
    }

    &__active-content {
      opacity: 0;
      transition: opacity $transitionDurationMs;
      cursor: default;
    }
    &__heading {
      margin-top: 0;
      margin-bottom: 2rem;
      @include text_style ('Montserrat', 25px, 28px, 600, #FFFFFF) ;
    }
    &__body {
      margin-bottom: 2rem;
      @include text_style ('Montserrat', 15px, 16px, 500, #FFFFFF) ;
    }
    &__link {
      display: inline-block;
      background-color: #fff;
      color: #333;
      text-decoration: none;
      line-height: 1;
      padding: 1rem 2rem;
      border-radius: 2rem;
      font-size: 1.7rem;
      font-weight: bold;
    }
  }

  }

  @media screen and (max-width: 768px) {
    .horizontal-collapse {
      display: flex;
      flex-direction: column;
      align-items: center;
      &__inner {
        display: flex;
        flex-direction: column;
      }
      &__item {
        padding: 0; }

      &__body {
        margin-bottom: 1rem;
        @include text_style ('Montserrat', 16px, 18px, 500, #FFFFFF) ;
        text-align: center;
      }
      }
      .horizontal-collapse__item {
      min-height: auto;
      max-width: none;
      &--1,
      &--3,
      &--5 {
      background-color: #a3b0d0b1;
      }
      &--2,
      &--4 {
      background-color: rgba(58, 66, 228, 0.683);
      }

      &.is-active {
        &__item-inner {
          padding: 20px;
        }
        .horizontal-collapse__inactive-content {
          display: none;
          transition: opacity $transitionDurationMs;
          position: absolute;
          left: 50%;
          top: 2rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      transform: translate(-50%, 100%);
          bottom: auto;
          top: 2rem;
          transform: rotate(0deg);
          min-width: auto;
          text-align: center;
          .horizontal-collapse__heading {
            user-select: none;
            cursor: default;
            margin-bottom: 0;
            @include text_style('Montserrat', 23px, 25px, 600, #FFFFFF);
            writing-mode: vertical-rl;
            text-orientation: mixed;
            transform: rotate(180deg);
            text-align: center;
            min-width: 250px;
            transform: rotate(0deg);
            white-space: normal;
            text-align: center;
          }
          &__item-inner {
            padding: 20px;
          }
        }
      .horizontal-collapse__active-content {
      opacity: 1;
      .active {
        display: block;
        pointer-events: none;
      }
      }
      }
      }
      .horizontal-collapse__inactive-content {
      bottom: auto;
      left: 50%;
      transform: translateX(-50%);
      right: 1rem;
      top: 2rem;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      .horizontal-collapse__heading {
      writing-mode: initial;
      transform: none;
      min-width: auto;
      padding-right: 0;
    
      }
      }
      .horizontal-collapse__item-inner {
        padding: 20px;
    }
    .arrow {
      display: block;
      max-width: 60px;
      max-height: 50px;
      margin: 10px auto 10px;
      color: #ffffffb5;
      cursor: pointer;
    }
    .for_chat_blue  {
      margin-top: 10px;
      padding: 20px 13px;
      background-color: transparent;
      border: 2px solid #3341dcd8;
      @include text_style ('Montserrat', 17px, 19px, 700, #3341dcd8);
      max-width: 250px;
      display: none;
    }
  
    .for_chat_white {
      padding: 20px 13px;
      background-color: transparent;
      border: 2px solid #FFFFFF;
      @include text_style ('Montserrat', 17px, 19px, 700, #FFFFFF);
      margin-top: 10px;
      max-width: 250px;
      display: none;
    }
  }

  @media screen and (max-width: 576px) {
    .horizontal-collapse {
      display: flex;
      flex-direction: column;
      align-items: center;
      &__body {
        margin-bottom: 1rem;
        @include text_style ('Montserrat', 16px, 18px, 500, #FFFFFF) ;
        text-align: center;
      }
      }
      .horizontal-collapse__item {
      min-height: auto;
      max-width: none;
      &--1,
      &--3,
      &--5 {
      background-color: #a3b0d0b1;
      }
      &--2,
      &--4 {
      background-color: rgba(58, 66, 228, 0.683);
      }

      &.is-active {
        .horizontal-collapse__inactive-content {
          display: none;
          transition: opacity $transitionDurationMs;
          position: absolute;
          bottom: 2rem;
          left: 1rem;
          transform: translateY(100%);
          bottom: auto;
          top: 2rem;
          transform: rotate(0deg);
          min-width: auto;
          text-align: center;
          .horizontal-collapse__heading {
            user-select: none;
            cursor: default;
            margin-bottom: 0;
            @include text_style('Montserrat', 23px, 25px, 600, #FFFFFF);
            writing-mode: vertical-rl;
            text-orientation: mixed;
            transform: rotate(180deg);
            text-align: center;
            min-width: 250px;
            transform: rotate(0deg);
            white-space: normal;
            text-align: center;
          }
          &__item-inner {
            padding: 15px;
          }
        }
      .horizontal-collapse__active-content {
      opacity: 1;
      pointer-events: none;
      .active {
        display: block;
      }
      }
      }
      }
      .horizontal-collapse__inactive-content {
      bottom: 50%;
      left: 50%;
      transform: translate(-50%, 50%);
      right: 1rem;
      top: 2rem;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      .horizontal-collapse__heading {
      writing-mode: initial;
      transform: none;
      min-width: auto;
      padding-right: 0;
    
      }
      }
      .horizontal-collapse__item-inner {
        padding: 20px;
    }
  }

  </style>