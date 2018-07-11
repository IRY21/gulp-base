
<header class="Header DefmenuBtn-Container_fixed">

    <div class="Container">
        <div class="Header-Body">

            <button class="DefmenuBtn">
                <span class="DefmenuBtn-Line"></span>
                <span class="DefmenuBtn-Line"></span>
                <span class="DefmenuBtn-Line"></span>
            </button>

            <div class="Header-Logo Logo">
                <a href="/" class="Logo-Link">
                    <img class="Logo-Image" src="/img/logo.png" alt="">
                </a>
            </div>

            <div class="Header-Info HeaderInfo">
                <a href="tel:<?=preg_replace("/[^0-9]/", '', $phone);?>" class="HeaderInfo-Phone HeaderPhone">
                    <span class="HeaderPhone-Number"><?=$phone?></span>
                    <img src="/img/HeaderPhone-Img.png" alt="" class="HeaderPhone-Img">
                </a>
                <a href="#" class="HeaderPhone-Login HeaderLogin">Войти как арендодатель</a>
            </div>

        </div>
    </div>

</header>
