<?php
session_start();
require_once('config.php');

if (isset($_POST['valider'])&& isset($_POST['email'])&& isset($_POST['nom'])&& isset($_POST['prenom'])) {
	$email=htmlentities(trim($_POST['email']));
	$nom=htmlentities(trim($_POST['nom']));
	$prenom=htmlentities(trim($_POST['prenom']));
	$password=$nom;
    
    $check=$bdd->prepare('SELECT email,nom,prenom,password FROM Users_informations where email=?');
    $data=$check->fetch();
    $row=$check->rowCount();

    if ($row==0) {
    	if (strlen($email)<49) {
    		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    			$password=hash('sha256',$password);
    			$insert=$bdd->prepare('INSERT INTO Users_informations(email,nom,prenom,password) VALUES(:email,:nom,:prenom,:password)');
    			$insert->execute(array(
    			 'email'=>$email,
    			 'nom'=>$nom,
    			 'prenom'=>$prenom,
    			 'password'=>$password));
    			header('location:admin.php?enregistrement_valider');
    		}else header('location:register_users.html?register_error=email_non_valide');
    	}else header('location:register_users.html?register_error=email_trop_long');
    }else header('location:register_users.html?register_error=compte_exixtant');
}else header('location:register_users.html?register_error=manque_d_informations');
?>