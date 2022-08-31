<?php 
session_start();
require_once('config.php');
if (isset($_POST['envoyer'])&&isset($_POST['mail'])&&isset($_POST['password'])) {
    $mail=htmlentities(trim($_POST['mail']));
    $password=htmlentities(trim($_POST['password']));
    $check=$bdd->prepare('SELECT email ,password FROM Users_informations where email=? ');
    $check->execute(array($mail));
    $data=$check->fetch();
    $row=$check->rowCount();
    if ($row ==1) {
    	if (filter_var($mail,FILTER_VALIDATE_EMAIL)) {
    	  $password=hash('sha256',$password);
    	if ($data['password'] === $password) {
    	    $_SESSION['user']==$data['login'];
    		header('location:home.html?connection_reussie');
    	}else header('location:login.html?login_error=mauvais_mot_de_passe');
    	}else header('location:login.html?login_error=email_non_reconnue');
    }else header('location:login.html?login_error=compte_inexistant');
}else header('location:login.html?login_error=abscence d element');
?>