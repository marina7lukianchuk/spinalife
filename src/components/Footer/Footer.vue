<template> 
<div class="footer_container"> 
<div class="logo_footer"> 
    <a class="link_logo" href="#"> 
       SPYNA LIFE
    </a>
    <a class="adress" href="https://goo.gl/maps/KG4BETUS29LGgfMUA"> просп. Миколи Бажана, 1М</a>
    <a class="tel" href="tel:0686380717"> +380686380717 </a>
    <div class="links"> 
    <a class="insta" href="https://instagram.com/spynalife?igshid=YmM0MjE2YWMzOA==" target="_blank"> </a>
    <a class="faceb" href="https://www.facebook.com/profile.php?id=100088263312222" target="_blank"> </a>
</div>
</div>
</div>
</template>

<script>
export default {
    name: 'Footer',
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


.footer_container {
  width: 100%;
  padding: 10px 190px 100px;
  position: relative; 
  text-align: center;
  background: linear-gradient(20deg,#083bf2b8 100%,#327fb6ac 80%);
  background-repeat: no-repeat;
  overflow: hidden;

  /* &::before {
    content: " ";
    position: absolute;
    background-image: url(../../assets/img/photo_5381903968659162119_y.jpg);
    width: 100%;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    opacity: 0.2;
    background-repeat: no-repeat;
    background-size: 100% 100%;
  } */
}

.footer_container {
    align-items: center;  
}
.logo_footer {
   padding-top: 120px;
   margin: 0 auto;
   display: flex;
   flex-direction: column;
   justify-content: center;
   gap: 30px;
}

.link_logo {
    z-index: 12; 
    cursor: pointer;  
    @include text_style ('Montserrat', 45px, 48px, 700, #ffffffe0) ;
    z-index: 10;
    text-transform: uppercase;
    margin: 0 auto;
    margin: 15px 0 15px;
}
.logo_img {
    width: 30%;
    height: 30%;
}
.adress  {
    @include text_style ('Montserrat', 25px, 28px, 500, #ffffffe0) ; 
    color: #FFF;
  }
.tel {
    @include text_style ('Montserrat', 25px, 28px, 500, #ffffffe0) ; 
}


a {
    text-decoration: none;
}
.links {
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    gap: 30px;
    max-width: 120px;
}
.insta {
    &::before {
    content: '\f16d';
    font-size: 40px;
    font-family: "fontello";
    font-style: normal;
    font-weight: normal; 
    color: #ffffffe0;
} 
}

.faceb {
    &::before {
        content: '\f308';
        font-size: 40px;
        font-family: "fontello";
        font-style: normal;
        font-weight: normal; 
        color: #ffffffe0;
    } }

@media screen and (max-width: 576px) {
    .footer_container {
        padding: 10px 40px 70px; 
    }

    .logo_footer {
        padding-top: 70px;

 }
 .adress  {
    @include text_style ('Montserrat', 22px, 25px, 500, #ffffffe0) ; 
    color: #FFF;
  }
}
</style> 