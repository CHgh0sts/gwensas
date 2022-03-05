<?php
    $recupName = basename ($_SERVER['PHP_SELF']);
    $path = explode('.', $recupName);
    $file = basename($path[0]);

    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if (!empty($_GET['lang'])) {
        $lang = $_GET['lang'];
    }

    require 'config.php';
    $recupLang = $pdo->query('SELECT * FROM langue');
    $boxtext = $recupLang->fetchAll();

    function langueRecup($box, $lang, $file, $value) {
        $textval = "rien trouvé !!";
        foreach ($box as $langue) {
            if ($langue->class == $value && $langue->page == $file) {
                if ($lang === 'fr') {
                    $textval = $langue->fr;
                } else {
                    $textval = $langue->en;
                }
            }
        }
        return $textval;
    }
?>
<html lang="<?= $lang ?>">
<head>
    <meta charset="utf8mb4_general_ci">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="src/img/Globals/head/icons.png">
    <link rel="stylesheet" href="src/fontawesome/css/all.css">
    <link rel="stylesheet" href="src/css/style.css">
    <title> Gwensas | <?= $file ?></title>
    <script type="text/javascript">
            (function() {
            window.sib = { equeue: [], client_key: "9jsvz5y89jxiesuc06czhpya" };
            window.sendinblue = {}; for (var j = ['track', 'identify', 'trackLink', 'page'], i = 0; i < j.length; i++) { (function(k) { window.sendinblue[k] = function(){ var arg = Array.prototype.slice.call(arguments); (window.sib[k] || function() { var t = {}; t[k] = arg; window.sib.equeue.push(t);})(arg[0], arg[1], arg[2]);};})(j[i]);}var n = document.createElement("script"),i = document.getElementsByTagName("script")[0]; n.type = "text/javascript", n.id = "sendinblue-js", n.async = !0, n.src = "https://sibautomation.com/sa.js?key=" + window.sib.client_key, i.parentNode.insertBefore(n, i), window.sendinblue.page();
        })();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/ScrollTrigger.min.js"></script>
</head>
