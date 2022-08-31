<?php
session_start();
require_once('config.php');

if (isset($_POST['valider'])&& isset($_POST['champ'])) {
	$champ=htmlentities(trim($_POST['champ']));
    
    $check=$bdd->prepare('SELECT libelle FROM type where libelle=?');
    $data=$check->fetch();
    $row=$check->rowCount();

    if ($row==0) {
    	if (strlen($champ)<49) {
    		$insert=$bdd->prepare('INSERT INTO type(libelle) VALUES (:champ)');
            $insert->execute(array(
             'champ'=>$champ
            ));
            header('location:afficheType.php?registerType_succes');
    	}else header('location:registerType.html?register_error=email_trop_long');
    }else header('location:registerType.html?register_error=compte_exixtant');
}else header('location:registerType.html?register_error=manque_d_informations');
?>