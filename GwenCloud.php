<?php
include "src/include/header.php";
require "src/include/config.php";
?>
<body>
<section class="EntrePage">
    <div class="before"></div>
</section>
<?php include "src/include/menu.php"; ?>
<div class="scroolAnim black">
    <i class="fas fa-mouse"></i>
    <div class="arrowScrool"></div>
</div>
<section class="menuBlur header gwencloud">
<!--    <img class="bgRotate" src="src/img/Globals/header/bgHeader.webp" alt="background header gwencloud">-->
    <picture>
        <img class="bg" src="src/img/GwenCloud/headergwencloud.webp" alt="background header home">
    </picture>
    <div class="info containerHeaderGwenCloud">
        <!--            <video muted class="right" src="src/vid/Gwen1.mov" autoplay loop poster="src/img/GWENCLOUD.svg"></video>-->
        <!--        <div class="lottie-player right">-->
        <!--            <lottie-player src="src/files/json/animation1.2.json" renderer="svg" autoplay loop>-->
        <object style="margin-right: 0" class="right svgGwenCloudHeader" type="image/svg+xml" data="src/img/GwenCloud/GWENCLOUD.svg" ></object>
        <!--            </lottie-player>-->
        <!--        </div>-->
        <div class="txt left gwencloud">
            <h1 style="letter-spacing: .2rem;"><?= langueRecup($boxtext, $lang, $file,'titleHeader') ?></h1>
            <p style="margin-top: 2vh;letter-spacing: .1rem;font-size: 2.1vh"><?= langueRecup($boxtext, $lang, $file,'textHeader') ?></p>
            <a class="button" href="#plan"><p><?= langueRecup($boxtext, $lang, $file,'btnHeader') ?></p></a>
        </div>
    </div>
</section>
<section class="menuBlur main">
    <div class="sliderCloud">
        <div class="sliderCloudBox">
            <div class="slideCloud slide1">
                <h2 class="title" style="padding: 0;"><?= langueRecup($boxtext, $lang, $file,'titleGwenCloundMain1') ?></h2>
                <p><?= langueRecup($boxtext, $lang, $file,'subtitleGwenCloundMain') ?></p>
                <div class="flexSlide1">
                    <div class="boxflex">
                        <object class="right" type="image/svg+xml" data="src/img/GwenCloud/GwenCloudSlide/slide1/slide1img1.svg"></object>
                        <h3><?= langueRecup($boxtext, $lang, $file,'titreSlide1Box1') ?></h3>
                        <p><?= langueRecup($boxtext, $lang, $file,'txtSlide1Box1') ?></p>
                    </div>
                    <div class="boxflex">
                        <object class="right" type="image/svg+xml" data="src/img/GwenCloud/GwenCloudSlide/slide1/slide1img2.svg"></object>
                        <h3><?= langueRecup($boxtext, $lang, $file,'titreSlide1Box2') ?></h3>
                        <p><?= langueRecup($boxtext, $lang, $file,'txtSlide1Box2') ?></p>
                    </div>
                </div>
            </div>
            <div class="slideCloud slide2">
                <h2 class="title"><?= langueRecup($boxtext, $lang, $file,'titleGwenCloundMain2') ?></h2>
                <div class="flexSlide2">
                    <div class="boxflex">
                        <object class="right" type="image/svg+xml" data="src/img/GwenCloud/GwenCloudSlide/slide2/slide2img1.svg"></object>
                        <h3><?= langueRecup($boxtext, $lang, $file,'titreSlide2Box1') ?></h3>
                        <p><?= langueRecup($boxtext, $lang, $file,'txtSlide2Box1') ?></p>
                    </div>
                    <div class="boxflex">
                        <object class="right" type="image/svg+xml" data="src/img/GwenCloud/GwenCloudSlide/slide2/slide2img2.svg"></object>
                        <h3><?= langueRecup($boxtext, $lang, $file,'titreSlide2Box2') ?></h3>
                        <p><?= langueRecup($boxtext, $lang, $file,'txtSlide2Box2') ?></p>
                    </div>
                    <div class="boxflex">
                        <object class="right" type="image/svg+xml" data="src/img/GwenCloud/GwenCloudSlide/slide2/slide2img3.svg"></object>
                        <h3><?= langueRecup($boxtext, $lang, $file,'titreSlide2Box3') ?></h3>
                        <p><?= langueRecup($boxtext, $lang, $file,'txtSlide2Box3') ?></p>
                    </div>
                </div>
            </div>
            <div class="slideCloud slide3">
                <div class="flexSlide3">
                    <div class="boxflex">
                        <h2><?= langueRecup($boxtext, $lang, $file,'titleGwenCloundMain3') ?></h2>
                    </div>
                    <div class="boxflex">
                        <object class="right" type="image/svg+xml" data="src/img/GwenCloud/GwenCloudSlide/slide3/slide3img1.svg"></object>
                        <h3><?= langueRecup($boxtext, $lang, $file,'titreSlide3Box1') ?></h3>
                        <p><?= langueRecup($boxtext, $lang, $file,'txtSlide3Box1') ?></p>
                    </div>
                    <div class="boxflex">
                        <object class="right" type="image/svg+xml" data="src/img/GwenCloud/GwenCloudSlide/slide3/slide3img2.svg"></object>
                        <h3><?= langueRecup($boxtext, $lang, $file,'titreSlide3Box2') ?></h3>
                        <p><?= langueRecup($boxtext, $lang, $file,'txtSlide3Box2') ?></p>
                    </div>
                </div>
                <div class="flexSlide3">
                    <div class="boxflex">
                        <object class="right" type="image/svg+xml" data="src/img/GwenCloud/GwenCloudSlide/slide3/slide3img3.svg"></object>
                        <h3><?= langueRecup($boxtext, $lang, $file,'titreSlide3Box3') ?></h3>
                        <p><?= langueRecup($boxtext, $lang, $file,'txtSlide3Box3') ?></p>
                    </div>
                    <div class="boxflex">
                        <object class="right" type="image/svg+xml" data="src/img/GwenCloud/GwenCloudSlide/slide3/slide3img4.svg"></object>
                        <h3><?= langueRecup($boxtext, $lang, $file,'titreSlide3Box4') ?></h3>
                        <p><?= langueRecup($boxtext, $lang, $file,'txtSlide3Box4') ?></p>
                    </div>
                    <div class="boxflex">
                        <object class="right" type="image/svg+xml" data="src/img/GwenCloud/GwenCloudSlide/slide3/slide3img5.svg"></object>
                        <h3><?= langueRecup($boxtext, $lang, $file,'titreSlide3Box5') ?></h3>
                        <p><?= langueRecup($boxtext, $lang, $file,'txtSlide3Box5') ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="btnSlider">
            <ul class="point">
            </ul>
            <ul class="btn">
                <li>
                    <button class="left none"><i class="fas fa-arrow-left"></i></button>
                </li>
                <li>
                    <button class="right"><i class="fas fa-arrow-right"></i></button>
                </li>
            </ul>
        </div>
    </div>
</section>
<div class="menuBlur plan">
    <img class="bg" src="src/img/GwenCloud/footer.webp" alt="background footer GwenCloud">
    <h2 class="contactTitle"><?= langueRecup($boxtext, $lang, $file,'TitlePlan') ?></h2>
    <div id="plan" class="_working login">
        <div class="slider offres">
            <div class="boxslide">
                <?php
                $offres = $pdo->prepare('SELECT * FROM offers WHERE active = 1 AND stock > 0');
                $offres->execute();
                while ($offre = $offres->fetch()) {
                    $electricity  = number_format($offre->electricity , 2);
                    $stock = number_format($offre->stock, 0, '.', '');
                    if ($stock > 1000) {
                        $stock = 1000;
                    }
                    $price1 = $offre->price;
                    $fees = $offre->fees;

                    $price2 = $price1 - ($price1 * .2);
                    $price3 = $price1 - ($price1 * .3);
                    ?>
                <div class="offre loadingOffre select-offer" stock="<?= $stock ?>" price="1" valDuration="<?= $price1 ?>!<?= $electricity ?>!<?= $fees ?>@<?= $price2 ?>!<?= $electricity ?>!<?= $fees ?>@<?= $price3 ?>!<?= $electricity ?>!<?= $fees ?>">
                    <div class="imgOffre">
                        <img src="src/img/GwenCloud/Offres/<?= $offre->flag ?>.png" alt="offre1">
                    </div>
                    <h2><?= $offre->placeholder ?></h2>
                    <ul class="carracteristiques">
                        <li>
                            <div class="imgIconCarracteristiques">
                                <img src="src/img/GwenCloud/Offres/logoWaat.svg" alt="Electrecity icon">
                            </div>
                            <ul>
                                <li><p><?= langueRecup($boxtext, $lang, $file,'simulateurElec') ?></p></li>
                                <li><h4><?= $electricity ?>€/KWh</h4></li>
                            </ul>
                        </li>
                        <li>
                            <div class="imgIconCarracteristiques">
                                <img src="src/img/GwenCloud/Offres/logoElec.svg" alt="Stock icon">
                            </div>
                            <ul>
                                <li><p>Stock</p></li>
                                <li><h4><?= $stock ?> Ths</h4></li>
                            </ul>
                        </li>
                        <li>
                            <div class="imgIconCarracteristiques">
                                <img src="src/img/GwenCloud/Offres/stock.svg" alt="Fees icon">
                            </div>
                            <ul>
                                <li><p><?= langueRecup($boxtext, $lang, $file,'simulateurFees') ?></p></li>
                                <li><h4><?= $fees * 100 ?>%</h4></li>
                            </ul>
                        </li>
                        <li>
                            <div class="imgIconCarracteristiques">
                                <img src="src/img/GwenCloud/Offres/start.svg" alt="Start Date icon">
                            </div>
                            <ul>
                                <li><p>Start Date</p></li>
                                <li><h4>Today</h4></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="parramOffre">
            <input class="sliderRange" value="1" type="range" min="1" max="100" style="--ValRange: 0">
            <div class="infoCursor">
                <h3 class="sliderRangeVal" contenteditable>0</h3>
                <p>Power (TH/s)</p>
            </div>
            <div class="infoConso">
                <h3>0.547832 ₿/an</h3>
                <p id="mined_eur_year">0€ miné / an</p>
            </div>
            <button><i class="fas fa-arrow-right"></i></button>
        </div>
        <div class="slider offres YearsInfo loadingOffre">
            <div class="boxslide">
                <div class="offre Years duration-container" price="1" duration="12" durationDay="365">
                    <h1>1 An</h1>
                    <p>0€/TH/s/mois</p>
                    <h3>0€</h3>
                    <h2>0 ₿</h2>
                </div>
                <div class="offre Years duration-container" price="0.8" duration="24" durationDay="730">
                    <div class="solde">20%</div>
                    <h1>2 Ans</h1>
                    <p>0€/TH/s/mois</p>
                    <h3>0€</h3>
                    <h4 style="color: #aaa;font-size: 1.4vh;font-weight: 500;">au lieu de 0€</h4>
                    <h2 class="soldeBTC">0 ₿</h2>
                </div>
                <div class="offre Years duration-container" price="0.7" duration="36" durationDay="1095">
                    <div class="solde">30%</div>
                    <h1>3 Ans</h1>
                    <p>0€/TH/s/mois</p>
                    <h3>0€</h3>
                    <h4 style="color: #aaa;font-size: 1.4vh;font-weight: 500;">au lieu de 0€</h4>
                    <h2 class="soldeBTC">0 ₿</h2>
                </div>
            </div>
        </div>
        <h2 class="subtitle">Simulation de Production</h2>
        <p style="margin: 0 0 1vh;opacity: 1;color: rgba(255,255,255,.5);font-size: 1.4vh">Au cours actuel de <span style="color: #fff;font-size: 1.4vh;">1₿ = </span><a class="NBT_BTC" href="https://fr.tradingview.com/symbols/BTCEUR/" style="color: #fff;font-size: 1.4vh;">2000 €</a></p>
        <ul class="partenaires Rentability">
            <li onclick="partenaires(this.getAttribute('duration'), 0)" duration="1"><p>1 Jour</p></li>
            <li onclick="partenaires(this.getAttribute('duration'), 0)" duration="30"><p>1 Mois</p></li>
            <li onclick="partenaires(this.getAttribute('duration'), 0)" duration="183"><p>6 Mois</p></li>
            <li onclick="partenaires(this.getAttribute('duration'), 0)" duration="365"><p>1 An</p></li>
            <li onclick="partenaires(this.getAttribute('duration'), 0)" duration="730"><p>2 Ans</p></li>
            <li onclick="partenaires(this.getAttribute('duration'), 0)" duration="1095"><p>3 Ans</p></li>
        </ul>
        <ul class="RentabilityInfo loadingOffre">
            <li>
                <div class="logo">
                    <object class="right" type="image/svg+xml" data="src/img/GwenCloud/Offres/pioche.svg"></object>
                </div>
                <div class="info">
                    <p>Mined</p>
                    <h4 id="mined_eur">0 €</h4>
                    <h4 id="mined">0 ₿</h4>
                </div>
            </li>
            <li>
                <div class="logo">
                    <object class="right" type="image/svg+xml" data="src/img/GwenCloud/Offres/Power Cost.svg"></object>
                </div>
                <div class="info">
                    <p>Power Cost</p>
                    <h4 id="power_cost">0 €</h4>
                    <h4 id="power_cost_btc">0 ₿</h4>
                </div>
            </li>
            <li>
                <div class="logo">
                    <object class="right" type="image/svg+xml" data="src/img/GwenCloud/Offres/Fees.svg"></object>
                </div>
                <div class="info">
                    <p>Fees</p>
                    <h4 id="profit_eur">0 €</h4>
                    <h4 id="profit">0 ₿</h4>
                </div>
            </li>
            <li>
                <div class="logo">
                    <object class="right" type="image/svg+xml" data="src/img/GwenCloud/Offres/Ratio.svg"></object>
                </div>
                <div class="info">
                    <p>Ratio</p>
                    <h4 id="profit_ratio">0 €</h4>
                    <h4 id="profit_ratio_btc">0 ₿</h4>
                </div>
            </li>
        </ul>
    </div>
    <button class="btn buyNow">Commencer Maintenant</button>
    <h2>Paiements Securies Par</h2>
    <ul class="typePaye">
        <li><object class="right" type="image/svg+xml" data="src/img/Globals/footer/visa.svg" >Le navigateur ne peut pas lire le format svg</object></li>
        <li><object class="right" type="image/svg+xml" data="src/img/Globals/footer/Mastercard.svg" >Le navigateur ne peut pas lire le format svg</object></li>
        <li><object class="right" type="image/svg+xml" data="src/img/Globals/footer/bitcoin.svg" >Le navigateur ne peut pas lire le format svg</object></li>
    </ul>
    <?php include "src/include/footerNotImg.php"; ?>
</div>
<script type="text/javascript" src="src/js/simulateur.js" defer></script>
<script type="text/javascript" src="src/js/anim.js" defer></script>
<script type="text/javascript" src="src/js/scroolGwenCloud.js" defer></script>
<script type="text/javascript">

    document.addEventListener('keydown', (e) => {
        let code = e.key;
        console.log(code);
    })
    document.querySelector('.sliderRange').oninput = () => {
        changeSlide()
    }
</script>
</body>
</html>