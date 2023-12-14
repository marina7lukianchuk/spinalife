<template>
  <div class="navig">
    <a class="adress" href="https://goo.gl/maps/KG4BETUS29LGgfMUA" target="_blank"> просп. Миколи Бажана, 1М</a>
  <nav>
    <router-link to="/">Головна</router-link> 
    <router-link to="/about">Прайс</router-link>
  </nav>
  <div class="links"> 
    <a class="tiktok" href="https://www.tiktok.com/@spynalife?_t=8erIWEChciT" target="_blank"> </a>
    <a class="insta" href="https://instagram.com/spynalife?igshid=YmM0MjE2YWMzOA==" target="_blank"> </a>
    <a class="faceb" href="https://www.facebook.com/profile.php?id=100088263312222" target="_blank"> </a>
    <a class="teleg" href="https://xn--80affa3aj0al.xn--80asehdb/#@spynalife" target="_blank"> </a>
</div>
 
</div>
  <router-view/>

</template>


<script> 
export default {
}
</script>

<style scoped lang="scss">
@import url(../src/assets/modules/_fonts.scss);

.navig {
  width: 100%;
  display: flex;
  justify-content: space-between;
  background-color: #d5dceba6;
  position: fixed;
  z-index: 30;
  padding: 20px 190px;
  gap: 40px;
  text-align: center;
}
nav {
  width: 100%;
  max-width: 300px;
  display: flex;
  gap: 20px;
  justify-content: center;
  z-index: 40;


  a {
    font-family: 'Rubik';
    font-size: 24px;
    line-height: 24px;
    font-weight: 500;
    color: #FFF;
    text-decoration: none;
    transition: .4s ease-in-out;
    text-transform: uppercase;
    &:hover {
      transform: scale(1.07);
    }

    &.router-link-exact-active {
      color: #2332d8;
   
    }
  } }

  .adress  {
    font-family: 'Rubik';
    font-size: 22px;
    line-height: 24px;
    font-weight: 400;
    color: #2332d8;
    width: 300px;
    text-decoration: none;
  }
  .links {
    display: flex;
    justify-content: end;
    gap: 20px;
    width: 300px;
}
.tiktok {
  text-decoration: none;
  &::before {
      content: '\f316';
      font-size: 29px;
      font-family: "fontello";
      font-style: normal;
      font-weight: normal; 
      color: #2332d8;
  }
}

.teleg {
  text-decoration: none;
  &::before {
      content: '\f2c6';
      font-size: 28px;
      font-family: "fontello";
      font-style: normal;
      font-weight: normal; 
      color: #2332d8;
  }
}

.insta {
  text-decoration: none;
    &::before {
    content: '\f16d';
    font-size: 28px;
    font-family: "fontello";
    font-style: normal;
    font-weight: normal; 
    color:#2332d8;
} 
}

.faceb {
  text-decoration: none;
    &::before {
        content: '\f308';
        font-size: 28px;
        font-family: "fontello";
        font-style: normal;
        font-weight: normal; 
        color: #2332d8;
    } }


    @media screen and (max-width: 1024px) {
      .adress {
        display: none;
      }
      .links {
        display: none;
      }

      .navig {
        justify-content: center;
      }

     }
</style>
