<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <link rel="stylesheet" href="src/css/Home.css">-->
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            user-select: none;
            outline: none;
            font-size: 1.8vh;
            line-height: 2.7vh;
            font-family: Poppins, Serif, sans-serif;
            -webkit-tap-highlight-color: transparent !important;
        }
        :root {
            --background: #fff;
            --color1: #4381FA;
            --color2: #6D9EFE;
            --line-h: 2.7vh;
            --nbt-line-offre-p: 6;
            --size-p: 1.8vh;
            --max-w: 190vh;
        }
        ::-webkit-scrollbar {
            background: transparent;
            width: 1vh;
            cursor: pointer;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(0deg, var(--color1), var(--color2));
            border: none;
            border-radius: 5vh;
        }
        body {
            position: relative;
            width: 100%;
            height: auto;
            min-height: 100vh;
            overflow-x: hidden;
        }
        section.menu {
            position: fixed;
            width: 100%;
            height: 7vh;
            background: linear-gradient(90deg, var(--color1), var(--color2));
            display: flex;
            padding: 0 4vh;
            z-index: 10;
            align-items: center;
        }
        ul.ulMenu {
            position: absolute;
            right: 0;
            width: auto;
            height: 100%;
            display: flex;
            list-style-type: none;
        }
        ul.ulMenu li.MenuLien {
            position: relative;
            display: flex;
            align-items: center;
        }
        ul.ulMenu li.MenuLien a {
            text-decoration: none;
            color: #fff;
        }
        ul.ulMenu li.MenuLien.login a {
            border: .2vh solid #fff;
            border-radius: 1vh;
        }
        ul.ulMenu li.MenuLien.register a {
            border: .2vh solid #fff;
            background: #fff;
            color: var(--color2);
            border-radius: 1vh;
        }
        ul.ulMenu li.MenuLien a p {
            font-size: 1.4vh;
            font-weight: 800;
            padding: 0 4vh;
            border-radius: 1vh;
        }
        ul.ulMenu li.MenuLien a:hover p, ul.ulMenu li.MenuLien.Selected a p {
            background: var(--color1);
            transition: .2s;
        }
        ul.ulMenu li.MenuLien.register a:hover p {
            background: #fff;
            color: var(--color2);
        }

        header {
            position: relative;
            width: 100%;
            height: 93vh;
            padding-top: 7vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        header .bgHeader {
            position: absolute;
            width: 100%;
            z-index: -1;
            left: 0;
            top: 0;
            height: 125vh;
        }
        .borderBoxheader {
            display: flex;
            margin: 0 10%;
        }
        .txtHeader {
            max-width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .svgHeader {
            width: 50%;
            height: 60vh;
        }
        .txtHeader h1 {
            font-size: 4vh;
            line-height: 5.8vh;
            margin-bottom: 3vh;
            color: #fff;
        }
        .txtHeader p {
            color: #fff;
            font-size: 2vh;
            padding: 1vh 0 0 0;
            opacity: .7;
            margin-bottom: 3vh;
        }


        .main {
            position: relative;
            width: 100%;
            max-width: 90vw;
            margin: 0 auto;
            padding: 32vh 10% 0 10%;
            height: auto;
            text-align: center;
            min-height: 100vh;
        }
        .main h2 {
            font-size: 3vh;
        }
    </style>
    <title>Gwensas | Home</title>
</head>
<body>
<section class="menu">
    <div class="logo">
        <img src="src/img/menu/logo.svg" width="100" height="64" alt="logo gwensas blanc">
    </div>
    <ul class="ulMenu">
        <li class="MenuLien"><a class="redirection" href="Home.php"><p>Home</p></a></li>
        <li class="MenuLien"><a class="redirection" href="GwenCloud.php"><p>GwenCloud</p></a></li>
        <li class="MenuLien"><a class="redirection" href="Shop.php"><p>Shop</p></a></li>
        <li class="MenuLien"><a class="redirection" href="News.php"><p>News</p></a></li>
        <li class="MenuLien"><a class="redirection" href="AboutUs.php"><p>About Us</p></a></li>
        <li class="MenuLien login"><a class="redirection" href="comming.php"><p>Login</p></a></li>
        <li class="MenuLien register"><a class="redirection" href="comming.php"><p>Register</p></a></li>
        <li class="lang">
            <ul>
                <li class="mainLang"><img width="40" height="20" src="src/img/menu/lang/fr.webp" alt="fr"/></li>
                <li class><img width="40" height="20" src="src/img/menu/lang/en.webp" alt="en"/></li>
            </ul>
        </li>
    </ul>
</section>
<header>
    <picture>
        <source media="(max-width: 720px)" srcset="src/img/Globals/header/720/bgHeader-720-75.webp 360w, src/img/Globals/header/720/bgHeader-720-100.webp 2000w">
        <source media="(max-width: 1080px)" srcset="src/img/Globals/header/1080/bgHeader-1080-75.webp 720w, src/img/Globals/header/1080/bgHeader-1080-100.webp 2000w">
        <source media="(max-width: 1440px)" srcset="src/img/Globals/header/1440/bgHeader-1440-75.webp 720w, src/img/Globals/header/1440/bgHeader-1440-100.webp 2000w">
        <source media="(max-width: 2160px)" srcset="src/img/Globals/header/2160/bgHeader-2160-75.webp 720w, src/img/Globals/header/2160/bgHeader-2160-100.webp 2000w">
        <img class="bgHeader" src="src/img/Globals/header/bgHeader-75.webp" alt="background header home">
    </picture>
    <div class="borderBoxheader">
        <div class="txtHeader">
            <h1>GWENSAS<br>rend le minage de cryptomonnaie simple et à la portée de tous.</h1>
            <p>" Que vous soyez un mineur professionnel ou un particulier, si vous souhaitez produire des bitcoins, nous avons l’expérience et les meilleurs tarifs du marché. Ne chercher plus, vous êtes au bon endroit pour commencer une aventure révolutionnaire."</p>
            <p>Une électricité verte parmi les moins chères du marché mondial à seulement 0.025€ /kWh.</p>
            <p>Diminuez les risques en produisant vos Bitcoins au lieu de les acheter !</p>
        </div>
        <img class="svgHeader" src="src/img/Home/svgHeader.svg" alt="svgHeader.svg">
    </div>
</header>
<section class="main">
    <h2>Nos Offres</h2>
</section>
<footer>
</footer>
</body>
</html>