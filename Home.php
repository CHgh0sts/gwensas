<?php include "src/include/header.php" ?>
<body>
<section class="EntrePage">
    <div class="before"></div>
</section>
<?php include "src/include/menu.php"; ?>
<div class="scroolAnim">
    <a href="#container">
        <i class="fas fa-mouse"></i>
        <div class="arrowScrool"></div>
    </a>
</div>
<section class="menuBlur header">
    <picture>
        <source media="(max-width: 720px)" srcset="src/img/Globals/header/720/bgHeader-720-75.webp 360w, src/img/Globals/header/720/bgHeader-720-100.webp 2000w">
        <source media="(max-width: 1080px)" srcset="src/img/Globals/header/1080/bgHeader-1080-75.webp 720w, src/img/Globals/header/1080/bgHeader-1080-100.webp 2000w">
        <source media="(max-width: 1440px)" srcset="src/img/Globals/header/1440/bgHeader-1440-75.webp 720w, src/img/Globals/header/1440/bgHeader-1440-100.webp 2000w">
        <source media="(max-width: 2160px)" srcset="src/img/Globals/header/2160/bgHeader-2160-75.webp 720w, src/img/Globals/header/2160/bgHeader-2160-100.webp 2000w">
        <img class="bg" decoding="async" src="src/img/Home/bghome.webp" alt="background header home">
    </picture>
    <div class="info containerHeader">
                <img class="right boxanime slide_right_trans" type="image/svg+xml" src="src/img/Home/homeMain.svg" loading="lazy" decoding="async" alt="img header">
        <div class="txt left">
            <h2 class="boxanime slide_left"><?= langueRecup($boxtext, $lang, $file,'TitreHeader') ?></h2>
            <p class="boxanime slide_left"><?= langueRecup($boxtext, $lang, $file,'textheader1') ?></p>
            <p class="boxanime slide_left"><?= langueRecup($boxtext, $lang, $file,'textheader2') ?></p>
            <p class="boxanime slide_left"><?= langueRecup($boxtext, $lang, $file,'textheader3') ?></p>
            <p class="boxanime slide_left"><?= langueRecup($boxtext, $lang, $file,'textheader4') ?></p>
        </div>
    </div>
</section>
<section class="menuBlur main mainHome" id="container">
    <h2 class="title boxanime slide_top" style="padding: 0;"><?= langueRecup($boxtext, $lang, $file,'mainTitre1') ?></h2>
    <div class="info reverse boxanime">
        <div class="animSvgObject slide_popup">
            <object style="height: 95%;margin: 0;" class="right" type="image/svg+xml" data="src/img/Home/GWENHOST.svg"></object>
        </div>
        <div class="txt left" style="margin-left: 0;">
            <h2 class="slide_left" style="margin: 0 0 1vh 0;">GWENHOST</h2>
            <p class="txtHomeInfo slide_left"><?= langueRecup($boxtext, $lang, $file,'offresTextBox1') ?></p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="info boxanime">
        <div class="animSvgObject slide_popup">
            <object style="height: 95%;margin: 0;max-height: 33vh;" class="left" type="image/svg+xml" data="src/img/Home/GWENMINING.svg"></object>
        </div>
        <div class="txt right" style="margin-right: 0;">
            <h2 style="margin: 0 0 1vh 0;" class=" slide_right">GWENMINING</h2>
            <p class="txtHomeInfo slide_right"><?= langueRecup($boxtext, $lang, $file,'offresTextBox2') ?></p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="info reverse boxanime">
        <div class="animSvgObject slide_popup">
            <object style="height: 95%;margin: 0;" class="right" type="image/svg+xml" data="src/img/Home/GWENCLOUD.svg"></object>
        </div>
        <div class="txt left" style="margin-left: 0;padding: 10vh 0 0 0">
            <h2 style="margin: 0 0 1vh 0;" class="slide_left">GWENCLOUD</h2>
            <p class="txtHomeInfo readMoreF readMoreP slide_left"><?= langueRecup($boxtext, $lang, $file,'offresTextBox3') ?></p>
            <button class="ReadMore slide_left" onclick="ReadMore()">Read More</button>
        </div>
        <div class="clear"></div>
    </div>
    <h2 class="title p-09 boxanime slide_top_popup" style=""><?= langueRecup($boxtext, $lang, $file,'mainTitre2') ?></h2>
    <ul class="partenaires">
        <li class="boxanime slide_top">
            <a class="redirection" href="https://www.bpifrance.fr"><object data="src/img/Home/partenaires/bpifrance.svg" type="image/svg+xml"></object></a>
        </li>
        <li class="boxanime slide_top" style="transition-delay: .1s !important">
            <a class="redirection" href="https://bdatacenter.fr/"><object data="src/img/Home/partenaires/bigblock.svg" type="image/svg+xml"></object></a>
        </li>
        <li class="boxanime slide_top" style="transition-delay: .2s !important">
            <a class="redirection" href="https://cabinetmichelleabraham.fr/"><object data="src/img/Home/partenaires/maavocats.svg" type="image/svg+xml"></object></a>
        </li>
        <li class="boxanime slide_top" style="transition-delay: .2s !important">
            <a class="redirection" href="https://www.labanquepostale.fr/professionnels.html"><object data="src/img/Home/partenaires/post.svg" type="image/svg+xml"></object></a>
        </li>
        <li class="boxanime slide_top" style="transition-delay: .1s !important">
            <a class="redirection" href="https://www.lecomptoirdescybermonnaies.fr/"><object data="src/img/Home/partenaires/bitcoin.svg" type="image/svg+xml"></object></a>
        </li>
        <li class="boxanime slide_top">
            <a class="redirection" href="https://www.bitmain.com/"><object data="src/img/Home/partenaires/bitmain.svg" type="image/svg+xml"></object></a>
        </li>
    </ul>
    <h2 class="title p-10 boxanime slide_right_popup"><?= langueRecup($boxtext, $lang, $file,'mainTitre3') ?></h2>
    <ul class="speak">
        <li class="boxanime slide_left">
            <img onclick="autoSlide(1)" src="src/img/Home/speak/bfm%20bisness.webp" width="65" height="63" alt="bfm bisness"/>
        </li>
        <li class="boxanime slide_left">
            <img onclick="autoSlide(2)" src="src/img/Home/speak/challenges.webp" height="35" alt="info entreprise" />
        </li>
        <li class="boxanime slide_left">
            <img onclick="autoSlide(3)" src="src/img/Home/speak/info%20entreprise.webp" width="156" height="49" alt="info entreprise" />
        </li>
        <li class="boxanime slide_left">
            <img onclick="autoSlide(4)" src="src/img/Home/speak/capitale.webp" width="132" height="58" alt="capitale" />
        </li>
        <li class="boxanime slide_left">
            <img onclick="autoSlide(5)" src="src/img/Home/speak/finance%20mag.webp" width="132" height="50" alt="finance mag" />
        </li>
        <li class="boxanime slide_left">
            <img onclick="autoSlide(6)" src="src/img/Home/speak/siecle%20digital.webp" width="112" height="54" alt="siecle digital" />
        </li>
        <li class="boxanime slide_left">
            <img onclick="autoSlide(7)" src="src/img/Home/speak/tokens%20invaders.webp" width="176" height="48" alt="tokens invaders" />
        </li>
        <li class="boxanime slide_left">
            <img onclick="autoSlide(8)" src="src/img/Home/speak/bitcoin.webp" width="132" height="48" alt="bitcoin" />
        </li>
    </ul>
</section>
<?php include "src/include/footerhome.php"; ?>
<div class="popupback">
    <div class="popup vid"></div>
</div>
<script type="text/javascript" src="src/js/anim.js" defer></script>
<script type="text/javascript" src="src/js/scroolHome.js" defer></script>
<script>import "lottie-web";</script>
</body>
</html>