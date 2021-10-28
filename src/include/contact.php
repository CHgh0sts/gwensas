<?php
if(!empty($_POST['message']) || !empty($_POST['number']) || !empty($_POST['email']) || !empty($_POST['name'])) {

    $email = 'contact@gwensas.com';
    $headers = 'From: ' . $_POST['email'] . "\r\n" .
                'Reply-To: ' . $_POST['email'] . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

    $message = $_POST['message']."\r\nNumero : ".$_POST['number'];
    mail($email, '[Contact_Gwensas]-Nouveau Message de '.$_POST['name'].'-', $message, $headers);
    echo 'done';
}else {
    echo 'tout les input ne son pas valide';
}