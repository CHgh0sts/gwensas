<a href="#"><div class="arrowUp"><i class="fas fa-angle-left"></i></div></a>
<nav class="menu bg">
    <a class="logo redirection" href="Home.php">
        <img class="svgMenu" src="src/img/Globals/menu/logo.svg" alt="Gwensas Logo">
    </a>
    <ul>
        <li class="MenuLien"><a class="redirection" href="Home.php?lang=<?= $lang ?>">Home</a></li>
        <li class="MenuLien"><a class="redirection" href="GwenCloud.php?lang=<?= $lang ?>">GwenCloud</a></li>
        <li class="MenuLien"><a class="redirection" href="Shop.php?lang=<?= $lang ?>">Shop</a></li>
        <li class="MenuLien"><a class="redirection" href="News.php?lang=<?= $lang ?>">News</a></li>
        <li class="MenuLien"><a class="redirection" href="AboutUs.php?lang=<?= $lang ?>">About Us</a></li>
        <li class="MenuLien login"><a class="redirection" href="comming.php">Login</a></li>
        <li class="MenuLien invers"><a class="redirection" href="comming.php">Register</a></li>
        <li class="lang">
            <ul>
                <?php
                if($lang == 'fr') { ?>
                    <li class="mainLang"><img src="src/img/Globals/menu/drapeaux/fr.webp" alt="fr"/></li>
                    <a style="padding: 0 !important;" href="<?= $recupName ?>?lang=en">
                        <li class><img src="src/img/Globals/menu/drapeaux/en.webp" alt="en"/></li>
                    </a>
                <?php } else { ?>
                    <li class="mainLang"><img src="src/img/Globals/menu/drapeaux/en.webp" alt="en"/></li>
                    <a style="padding: 0 !important;" href="<?= $recupName ?>?lang=fr">
                        <li class><img src="src/img/Globals/menu/drapeaux/fr.webp" alt="fr"/></li>
                    </a>
                <?php } ?>
            </ul>
        </li>
    </ul>
    <div class="btnMenu"></div>
</nav>