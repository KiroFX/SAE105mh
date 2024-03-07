<?php
$errors = [];

if (!array_key_exists('Nom', $_POST) || $_POST['Nom'] == '') {
    $errors['Nom'] = "Vous n'avez pas renseigné votre nom";
}
if (!array_key_exists('Prénom', $_POST) || $_POST['Prénom'] == '') {
    $errors['Prénom'] = "Vous n'avez pas renseigné votre prénom";
}
if (!array_key_exists('AdresseMail', $_POST) || $_POST['AdresseMail'] == '' || !filter_var($_POST['AdresseMail'], FILTER_VALIDATE_EMAIL)) {
    $errors['AdresseMail'] = "Vous n'avez pas renseigné un e-mail valide";
}
if (!array_key_exists('Message', $_POST) || $_POST['Message'] == '') {
    $errors['Message'] = "Vous n'avez pas renseigné votre message";
}

session_start();

if(!empty($errors)){
    session_start();
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: contact.php');
}
else{
    $_SESSION['success'] = 1;
    $message = $_POST['Message'];
    $headers = 'From: hugo.pouilly63@gmail.com';
    mail('aubin.riout@gmail.com', 'formulaire de contact', $message, $headers);
    header('Location: contact.php');
}


var_dump($errors);
die();


?>