<?php
//// ---------- Local ---------- //
$pdo = new PDO('mysql:dbname=gwencloud;host=localhost', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


// ---------- w3box ---------- //
//$pdo = new PDO('mysql:dbname=gwencloud;host=localhost', 'gwencloud', 'jkd87HFDkjfs23089KK');
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);