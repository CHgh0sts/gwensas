<?php include "src/include/header.php" ?>
<body>
<section class="EntrePage">
    <div class="before"></div>
</section>
<?php include "src/include/menuBg.php"; ?>
<div class="scroolAnim black">
    <i class="fas fa-mouse"></i>
    <div class="arrowScrool"></div>
</div>
<section class="menuBlur main center NewsBox" style="padding: 0 5vh;max-width: 160vh">
    <div class="borderBox boxanime slide_left autoheight">
        <div class="imgNews">
            <img src="src/img/News/Mining Gorilla_PNG.webp" alt="Mining Gorilla_PNG">
        </div>
        <div class="parragraphe">
            <h2><?= langueRecup($boxtext, $lang, $file,'news1title') ?></h2>
            <p><?= langueRecup($boxtext, $lang, $file,'news1txt') ?></p>
        </div>
        <div class="date">
            <p>-- 23/09/2021 16:23 --</p>
        </div>
    </div>
    <div class="borderBox boxanime slide_right autoheight inverse">
        <div class="imgNews">
            <img src="src/img/News/Screen Shot 04-17-20 at 09_56 AM 001_PNG.webp" alt="Screen Shot 04-17-20 at 09_56 AM 001_PNG">
        </div>
        <div class="parragraphe">
            <h2><?= langueRecup($boxtext, $lang, $file,'news2title') ?></h2>
            <p><?= langueRecup($boxtext, $lang, $file,'news2txt') ?></p>
        </div>
        <div class="date">
            <p>-- 23/09/2021 16:23 --</p>
        </div>
    </div>
    <div class="borderBox boxanime slide_left autoheight">
        <div class="imgNews">
            <img src="src/img/News/refonte-site-internet.webp" alt="refonte-site-internet">
        </div>
        <div class="parragraphe">
            <h2><?= langueRecup($boxtext, $lang, $file,'news3title') ?></h2>
            <p><?= langueRecup($boxtext, $lang, $file,'news3txt') ?></p>
        </div>
        <div class="date">
            <p>-- 23/09/2021 16:23 --</p>
        </div>
    </div>
    <div class="borderBox boxanime slide_right autoheight inverse">
        <div class="imgNews">
            <img src="src/img/News/gwencloud.webp" alt="gwencloud">
        </div>
        <div class="parragraphe">
            <h2><?= langueRecup($boxtext, $lang, $file,'news4title') ?></h2>
            <p><?= langueRecup($boxtext, $lang, $file,'news4txt') ?></p>
        </div>
        <div class="date">
            <p>-- 23/09/2021 16:23 --</p>
        </div>
    </div>
<!--    <iframe src="https://www.facebook.com/gwensasMining/" style="width: 100%;max-width: 200vh;height: 100vh" frameborder="0"></iframe>-->
</section>
<?php include "src/include/footer.php"; ?>
<script type="text/javascript" src="src/js/anim.js" defer></script>
<script type="text/javascript" src="src/js/scroolAboutUs.js" defer></script>
</body>
</html>