<template>
    <div class="footer_container">
        <div class="logo_footer">
            <a class="link_logo" href="#">
                SPYNA LIFE
            </a>
            <a class="adress" href="https://goo.gl/maps/KG4BETUS29LGgfMUA" target="_blank"> просп. Миколи Бажана, 1М</a>
            <a class="tel" href="tel:+380686380717"> +380686380717 </a>
            <div class="links">
                <a class="tiktok" href="https://www.tiktok.com/@spynalife?_t=8erIWEChciT" target="_blank">
                </a>
                <a class="insta" href="https://instagram.com/spynalife?igshid=YmM0MjE2YWMzOA==" target="_blank"> </a>
                <a class="faceb" href="https://www.facebook.com/profile.php?id=100088263312222" target="_blank"> </a>
                <a class="teleg" href="https://xn--80affa3aj0al.xn--80asehdb/#@spynalife" target="_blank"> </a>
            </div>
            <router-link class="policy-link" to="/privacy-policy">Політика конфіденційності</router-link>
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
    background: linear-gradient(20deg, #083bf2b8 100%, #327fb6ac 80%);
    background-repeat: no-repeat;
    overflow: hidden;
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
    @include text_style ('Montserrat', 45px, 48px, 700, #ffffffe0);
    z-index: 10;
    text-transform: uppercase;
    margin: 0 auto;
    margin: 15px 0 15px;
}

.logo_img {
    width: 30%;
    height: 30%;
}

.adress {
    @include text_style ('Montserrat', 25px, 28px, 500, #ffffffe0);
    color: #FFF;
}

.tel {
    @include text_style ('Montserrat', 25px, 28px, 500, #ffffffe0);
}


a {
    text-decoration: none;
}

.links {
    margin: 0 auto;
    display: flex;
    justify-content: center;
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
    }
}

.tiktok {
    &::before {
        content: '\f316';
        font-size: 42px;
        font-family: "fontello";
        font-style: normal;
        font-weight: normal;
        color: #ffffffe0;
    }
}

.teleg {
    &::before {
        content: '\f2c6';
        font-size: 40px;
        font-family: "fontello";
        font-style: normal;
        font-weight: normal;
        color: #ffffffe0;
    }
}

.policy-link {
    display: block;
    font-size: 18px;
    font-family: "Montserrat";
    font-style: normal;
    font-weight: 500;
    color: #ffffffe0;
}



@media screen and (max-width: 576px) {
    .footer_container {
        padding: 10px 40px 70px;
    }

    .logo_footer {
        padding-top: 70px;

    }

    .adress {
        @include text_style ('Montserrat', 22px, 25px, 500, #ffffffe0);
        color: #FFF;
    }
}
</style> 