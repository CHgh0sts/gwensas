<?php include "src/include/header.php" ?>
<body>
<div class="loopImg">
    <div class="bgLoopBox"></div>
    <div class="boxImgLoop"></div>
    <div class="boxImgLoopArrowLeft">
        <i class="fas fa-angle-left"></i>
    </div>
    <div class="boxImgLoopArrowRight">
        <i class="fas fa-angle-right"></i>
    </div>
</div>
<section class="EntrePage">
    <div class="before"></div>
</section>
<?php include "src/include/menuBg.php"; ?>
<div class="scroolAnim black">
    <a href="#container">
        <i class="fas fa-mouse"></i>
        <div class="arrowScrool"></div>
    </a>
</div>
<section class="menuBlur main center" style="height: auto;flex-direction: column;">
    <div class="header boxanime">
        <img class="aboutUs slide_bottom" src="src/img/AboutUs/aboutUs.png" alt="header aboutUs">
        <h2 class="title slide_top" style="margin: 0 auto;padding: 5vh 0 2.5vh 0;font-size: 4.5vh;"><?= langueRecup($boxtext, $lang, $file,'maintitle') ?></h2>
        <p class="slide_top" style="text-align: justify;font-size: 1.8vh;line-height: 2.7vh;opacity: .7;"><?= langueRecup($boxtext, $lang, $file,'maintxt') ?></p>
    </div>
    <h2 class="title" id="container" style="margin-bottom: 1vh;font-size: 4.5vh;padding-top: 6.5vh;"><?= langueRecup($boxtext, $lang, $file,'DataTitle') ?></h2>
    <p style="margin: 3vh auto 2vh auto;font-size: 2vh;line-height: 2.7vh;opacity: .7;font-style: italic;font-weight: 800;"><?= langueRecup($boxtext, $lang, $file,'subtitleAboutUs') ?></p>
    <div class="boxSliderSpeakBlue" style="height: 47vh;">
        <div class="slideSpeakBoxBlue boxanime slide_popup">
            <div class="boxforslide"></div>
            <div class="sliderSpeak">
                <div class="slideSpeakBlue">
                    <div class="SlideImgSpeakBlue">
                        <div class="slideImgBlue">
                            <nav><img src="src/img/AboutUs/AboutUsSlide/Kazakhstan/slide1.webp" alt="slide"></nav>
                            <nav><img src="src/img/AboutUs/AboutUsSlide/Kazakhstan/slide2.webp" alt="slide"></nav>
                            <nav><img src="src/img/AboutUs/AboutUsSlide/Kazakhstan/slide3.webp" alt="slide"></nav>
                            <nav><img src="src/img/AboutUs/AboutUsSlide/Kazakhstan/slide4.webp" alt="slide"></nav>
                            <nav><img src="src/img/AboutUs/AboutUsSlide/Kazakhstan/slide5.webp" alt="slide"></nav>
                        </div>
                        <div class="fleche">
                            <div class="loop" onclick="loop();"><i class="fas fa-search-plus"></i></div>
                            <div class="arrowLeftImg"><i class="fas fa-angle-left"></i></div>
                            <div class="arrowRightImg"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                    <div class="descBoxSpeak">
                        <h1>Kazakhstan (Almaty)</h1>
                        <h2 style="display: flex;width: 15vh;align-items: center;padding-left: 2.5vh;">40 MW<img src="src/img/AboutUs/Image1.svg" alt="blabla" style="width: 4vh;height: 4vh;margin: 0;"></h2>
                        <p style="max-width: initial !important;font-size: 1.8vh"><?= langueRecup($boxtext, $lang, $file,'txtKazakhstan') ?></p>
                    </div>
                </div>
                <div class="slideSpeakBlue">
                    <div class="SlideImgSpeakBlue">
                        <div class="slideImgBlue">
                            <nav><img src="src/img/AboutUs/AboutUsSlide/France/slide1.webp" alt="slide"></nav>
                            <nav><img src="src/img/AboutUs/AboutUsSlide/France/slide2.webp" alt="slide"></nav>
                            <nav><img src="src/img/AboutUs/AboutUsSlide/France/slide3.webp" alt="slide"></nav>
                            <nav><img src="src/img/AboutUs/AboutUsSlide/France/slide4.webp" alt="slide"></nav>
                            <nav><img src="src/img/AboutUs/AboutUsSlide/France/slide5.webp" alt="slide"></nav>
                            <nav><img src="src/img/AboutUs/AboutUsSlide/France/slide6.webp" alt="slide"></nav>
                        </div>
                        <div class="fleche">
                            <div class="loop" onclick="loop();"><i class="fas fa-search-plus"></i></div>
                            <div class="arrowLeftImg"><i class="fas fa-angle-left"></i></div>
                            <div class="arrowRightImg"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                    <div class="descBoxSpeak">
                        <h1>France (Pau)</h1>
                        <h2 style="display: flex;width: 15vh;align-items: center;padding-left: 2.5vh;">40 MW<img src="src/img/AboutUs/Image1.svg" alt="blabla" style="width: 4vh;height: 4vh;margin: 0;"></h2>
                        <p style="max-width: initial !important;font-size: 1.8vh;"><?= langueRecup($boxtext, $lang, $file,'txtFrance') ?></p>
                    </div>
                </div>
                <div class="slideSpeakBlue">
                    <div class="SlideImgSpeakBlue">
                        <div class="slideImgBlue">
                            <nav><img src="src/img/AboutUs/AboutUsSlide/RDC/slide1.webp" alt="slide"></nav>
                            <nav><img src="src/img/AboutUs/AboutUsSlide/RDC/slide2.webp" alt="slide"></nav>
                            <nav><img src="src/img/AboutUs/AboutUsSlide/RDC/slide3.webp" alt="slide"></nav>
                            <nav><img src="src/img/AboutUs/AboutUsSlide/RDC/slide4.webp" alt="slide"></nav>
                            <nav><img src="src/img/AboutUs/AboutUsSlide/RDC/slide5.webp" alt="slide"></nav>
                            <nav><img src="src/img/AboutUs/AboutUsSlide/RDC/slide6.webp" alt="slide"></nav>
                            <nav><img src="src/img/AboutUs/AboutUsSlide/RDC/slide7.webp" alt="slide"></nav>
                        </div>
                        <div class="fleche">
                            <div class="loop" onclick="loop();"><i class="fas fa-search-plus"></i></div>
                            <div class="arrowLeftImg"><i class="fas fa-angle-left"></i></div>
                            <div class="arrowRightImg"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                    <div class="descBoxSpeak">
                        <h1>République démocratique du Condo</h1>
                        <h2 style="display: flex;width: 15vh;align-items: center;padding-left: 2.5vh;">40 MW<img src="src/img/AboutUs/Image1.svg" alt="blabla" style="width: 4vh;height: 4vh;margin: 0;"></h2>
                        <p style="max-width: initial !important;font-size: 2.07vh;line-height: 2.7vh;margin: 2vh auto 0 auto;"><?= langueRecup($boxtext, $lang, $file,'txtCongo') ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrowLeft"><i class="fas fa-angle-left"></i></div>
        <div class="arrowRight"><i class="fas fa-angle-right"></i></div>
    </div>
    <h2 class="title" style="font-size: 4.5vh;"><?= langueRecup($boxtext, $lang, $file,'teams') ?></h2>
    <div class="contact">
        <img src="src/img/Globals/footer/longBgFooter.webp" alt="background footer AboutUs" class="bg paddinImg">
        <div class="slider Team">
            <div class="boxslide boxanime">
                <div class="li slide_top">
                    <img src="src/img/AboutUs/Team/Tom.webp" alt="Thomas CHARBONNEL">
                    <div class="txt">
                        <h2>Thomas CHARBONNEL</h2>
                        <h3><?= langueRecup($boxtext, $lang, $file,'ThomasCHARBONNEL-poste') ?></h3>
                        <p><?= langueRecup($boxtext, $lang, $file,'ThomasCHARBONNEL-txt') ?></p>
                    </div>
                </div>
                <div class="li slide_bottom">
                    <img src="src/img/AboutUs/Team/Adri.webp" alt="Adrien GOMBERT">
                    <div class="txt">
                        <h2>Adrien GOMBERT</h2>
                        <h3><?= langueRecup($boxtext, $lang, $file,'AdrienGOMBERT-poste') ?></h3>
                        <p><?= langueRecup($boxtext, $lang, $file,'AdrienGOMBERT-txt') ?></p>
                    </div>
                </div>
                <div class="li slide_bottom">
                    <img src="src/img/AboutUs/Team/testHerve.webp" alt="Hervé Robinet">
                    <div class="txt">
                        <h2>Hervé ROBINET</h2>
                        <h3><?= langueRecup($boxtext, $lang, $file,'HervéROBINET-poste') ?></h3>
                        <p><?= langueRecup($boxtext, $lang, $file,'HervéROBINET-txt') ?></p>
                    </div>
                </div>
                <div class="li slide_top">
                    <img src="src/img/AboutUs/Team/Arthur.jpg" alt="Thomas CHARBONNEL">
                    <div class="txt">
                        <h2>Arthur MARQUES</h2>
                        <h3 style="font-size: 1.6vh"><?= langueRecup($boxtext, $lang, $file,'ArthurMARQUES-poste') ?></h3>
                        <p><?= langueRecup($boxtext, $lang, $file,'ArthurMARQUES-txt') ?></p>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="contactTitle" style="font-size: 4.5vh;"><?= langueRecup($boxtext, $lang, $file,'localisationTitle') ?></h2>
        <div class="map boxanime">
            <img class="cart slide_popup" src="src/img/AboutUs/cart.png" alt="">
            <a href="#sliderblue">
                <div class="lieux lieux1 slide_popup" onclick="autoSlide(2)">
                    <div class="enterCicle">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>France</p>
                    </div>
                </div>
                <div class="lieux lieux2 slide_popup" onclick="autoSlide(1)">
                    <div class="enterCicle">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Kazakhstan</p>
                    </div>
                </div>
                <div class="lieux lieux3 slide_popup" onclick="autoSlide(3)">
                    <div class="enterCicle">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>République démocratique du Condo</p>
                    </div>
                </div>
            </a>
        </div>
        <h2 class="title" style="font-size: 4.5vh;"><?= langueRecup($boxtext, $lang, $file,'contact') ?></h2>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <div class="demi">
                <input class="demi" type="email" name="email" placeholder="Email" required>
                <input class="demi" type="number" maxlength="10" minlength="10" min="0" name="number" placeholder="Number" required>
            </div>
            <textarea placeholder="Message"></textarea>
            <button style="width: 100%;height: 5vh;margin: .5vh 0 0 0;padding: 0;"><?= langueRecup($boxtext, $lang, $file,'btnContact') ?></button>
        </form>
        <?php include "src/include/footerNotImg.php"; ?>
    </div>
</section>
<script type="text/javascript" src="src/js/anim.js" defer></script>
<script type="text/javascript" src="src/js/scroolAboutUs.js" defer></script>
</body>
</html>