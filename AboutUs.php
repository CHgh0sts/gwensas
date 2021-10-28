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
    <i class="fas fa-mouse"></i>
    <div class="arrowScrool"></div>
</div>
<section class="menuBlur main center" style="height: auto;flex-direction: column;">
    <div class="header">
        <img class="aboutUs" src="src/img/AboutUs/aboutUs.png" alt="header aboutUs">
        <h2 class="title" style="margin: 0 auto;padding: 5vh 0 2.5vh 0;font-size: 4.5vh;"><?= langueRecup($boxtext, $lang, $file,'maintitle') ?></h2>
        <p style="text-align: justify;font-size: 1.8vh;line-height: 2.7vh;opacity: .7;"><?= langueRecup($boxtext, $lang, $file,'maintxt') ?></p>
    </div>
    <h2 class="title" style="margin-bottom: 1vh;font-size: 4.5vh;padding-top: 6.5vh;" id="sliderblue"><?= langueRecup($boxtext, $lang, $file,'DataTitle') ?></h2>
    <p style="margin: 3vh auto 2vh auto;font-size: 2vh;line-height: 2.7vh;opacity: .7;font-style: italic;font-weight: 800;">"C’est un honneur pour toute l'équipe Gwensas d'accompagner ses clients dans la réussite de leurs stratégies de minage."</p>
    <div class="boxSliderSpeakBlue" style="height: 47vh;">
        <div class="slideSpeakBoxBlue">
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
                        <p style="max-width: initial !important;font-size: 1.8vh">Nous sommes associés avec la société BigBlock Datacenter au Kazakhstan, dont le site d’exploitation est proche du barrage principal d’Almaty. Nous y exploitons actuellement une première unité mobile « BBBbox140 » (140 S17 en container autonome). Nous bénéficions d’un climat et d’un prix de kWh exceptionnel, 11.5 KZT (Tenge Kazakh ; +- 0.026 EUR).</p>
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
                        <p style="max-width: initial !important;font-size: 1.8vh;">Gvensas debute en io17 et dev ent rapidement un des premiers foumlsseurs de services d'extractlon de cryptomonnaies en France.Nous avons pense £wso&Jgusj pour rendre le mining access·b ea tous.quels que solent le Peu.l'age. I'experienceet l'investrssement .</p>
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
                        <p style="max-width: initial !important;font-size: 2.07vh;line-height: 2.7vh;margin: 2vh auto 0 auto;">Gvensas debute en io17 et dev ent ra pldement un des premiers foumlsseurs de services d'extractlon de cryptomonnaies en France.Nous avons pense £wso&Jgusj pour rendre le mining access·b ea tous.quels que solent le Peu.l'age. I'experienceet l'investrssement .</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrowLeft"><i class="fas fa-angle-left"></i></div>
        <div class="arrowRight"><i class="fas fa-angle-right"></i></div>
    </div>
    <h2 class="title" style="font-size: 4.5vh;">Notre Equipe</h2>
    <div class="contact">
        <img src="src/img/Globals/footer/longBgFooter.webp" alt="background footer AboutUs" class="bg paddinImg">
        <div class="slider Team">
            <div class="boxslide">
                <div class="li">
                    <img src="src/img/AboutUs/Team/Tom.webp" alt="Thomas CHARBONNEL">
                    <div class="txt">
                        <h2>Thomas CHARBONNEL</h2>
                        <h3>Directeur général</h3>
                        <p>Curieux, c'est en 2012 que je découvre le Bitcoin, pris de fascination pour cette révolution, j’expérimente le minage sur différentes Blockchains.
                            J'ai pu analyser les mécanismes techniques ainsi que les liens avec les valeurs des crypto-monnaies et les krachs subis.
                            J’ai appris à manier l’investissement dans les crypto-actifs, ce que je partage aujourd’hui avec le plus grand nombre. Ma vision est que la technologie blockchain et les cryptomonnaies représentent l’avenir et qu’il convient de les rendre accessibles à tous.</p>
                    </div>
                </div>
                <div class="li">
                    <img src="src/img/AboutUs/Team/Adri.webp" alt="Adrien GOMBERT">
                    <div class="txt">
                        <h2>Adrien GOMBERT</h2>
                        <h3>President</h3>
                        <p>Je suis un investisseur, toujours à la recherche des opportunités à forte rentabilité.
                            Habitué au trading traditionnel, j’ai compris qu’avec les cryptomonnaies, il est très compliqué de prédire les cours et de s’assurer un revenu stable.
                            Par contre, un mineur se fiche du cours du bitcoin, qu'il monte ou descende, la production s'adapte pour que le Chiffre d'Affaire en € soit stable.
                            Un mineur n'est pas un boursicoteur, c'est un industriel et en tant que tel, il sait prédire son CA.
                            Depuis peu, avec l’électricité à 2,6 ct€/kWh disponible sur notre nouveau site, il n’y a plus à choisir entre espérance de gain et stabilité, c’est un rêve qui devient réalité..</p>
                    </div>
                </div>
                <div class="li">
                    <img src="src/img/AboutUs/Team/testHerve.webp" alt="Hervé Robinet">
                    <div class="txt">
                        <h2>Hervé Robinet</h2>
                        <h3>Developpeur</h3>
                        <p>Nouant un grand intérêt pour le développement web, Hervé souhaite mettre les différents outils qu’il utilise au profit de Gwensas. Il voit en ce secteur une révolution financière et humaine pour les années à venir. Toute son énergie destiné au bien commun afin de faire évoluer le système et de partager sa passion pour l’informatique et les finance décentralisé. Il se sent inscrit dans une mission de vulgarisation, de partage et on peut meme dire d'évangélisation sur l'écosysteme des cryptomonnaies</p>
                    </div>
                </div>
                <div class="li">
                    <img src="src/img/AboutUs/Team/Arthur.jpg" alt="Thomas CHARBONNEL">
                    <div class="txt">
                        <h2>Arthur Marques</h2>
                        <h3 style="font-size: 1.6vh">Responsable Communications</h3>
                        <p>Arthur souhaite pouvoir partager au plus grand nombre les idées de demain sur l'écosysteme des cryptomonnaies. Il est curieux et cherche continuellement à se renouveler dans cette sphère en constante évolution. Son objectif et de mettre à profit son expérience mais surtout un regard nouveau sur une communication active et dans l’air du temps. Il intègre maintenant l'équipe GWENSAS pour parler du minning evidemment, mais aussi de toutes les attentes de la communauté. Peut importe le niveau de connaissance de chacun, il considère que sa mission est de répondre aux interrogations de tous.</p>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="contactTitle" style="font-size: 4.5vh;">Ou nous Trouver</h2>
        <div class="map">
            <img class="cart" src="src/img/AboutUs/cart.png" alt="">
            <a href="#sliderblue">
                <div class="lieux lieux1" onclick="autoSlide(2)">
                    <div class="enterCicle">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>France</p>
                    </div>
                </div>
                <div class="lieux lieux2" onclick="autoSlide(1)">
                    <div class="enterCicle">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Kazakhstan</p>
                    </div>
                </div>
                <div class="lieux lieux3" onclick="autoSlide(3)">
                    <div class="enterCicle">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>République démocratique du Condo</p>
                    </div>
                </div>
            </a>
        </div>
        <h2 class="title" style="font-size: 4.5vh;">Contactez Nous</h2>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <div class="demi">
                <input class="demi" type="email" name="email" placeholder="Your Email" required>
                <input class="demi" type="number" maxlength="10" minlength="10" min="0" name="number" placeholder="Your Number" required>
            </div>
            <textarea placeholder="Your Message"></textarea>
            <button style="width: 100%;height: 5vh;margin: .5vh 0 0 0;padding: 0;">Send Message</button>
        </form>
        <?php include "src/include/footerNotImg.php"; ?>
    </div>
</section>
<script type="text/javascript" src="src/js/anim.js" defer></script>
<script type="text/javascript" src="src/js/scroolAboutUs.js" defer></script>
</body>
</html>