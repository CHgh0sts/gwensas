<?php
if (!empty($_POST['page']) && !empty($_POST['class']) && !empty($_POST['fr']) && !empty($_POST['en'])) {
    require 'src/include/config.php';
    $req = $pdo->prepare("INSERT INTO langue SET page = ?,class = ?,fr = ?,en = ?");
    $req->execute([$_POST['page'], $_POST['class'], $_POST['fr'], $_POST['en']]);
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST">
    <input type="text" name="page" placeholder="page" required>
    <input type="text" name="class" placeholder="class" required>
    <input type="text" name="fr" placeholder="fr" required>
    <input type="text" name="en" placeholder="en" required>
    <button>Envoyer</button>
</form>
</body>
</html>
