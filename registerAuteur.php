<?php
session_start();
require_once('config.php');

if (isset($_POST['valider'])&& isset($_POST['nom'])&&isset($_POST['prenom'])) {
	$nom=htmlentities(trim($_POST['nom']));
    $prenom=htmlentities(trim($_POST['prenom']));
    
    $check=$bdd->prepare('SELECT nom,prenom FROM auteur where nom=? AND prenom=?');
    $data=$check->fetch();
    $row=$check->rowCount();

    if ($row==0) {
    	if (strlen($nom)<49 && strlen($prenom)<49) {
    		$insert=$bdd->prepare('INSERT INTO auteur(nom,prenom) VALUES (:nom,:prenom)');
            $insert->execute(array(
             'nom'=>$nom,
             'prenom'=>$prenom
            ));
            header('location:afficheAuteur.php?registerType_succes');
    	}else header('location:registerAuteur.html?register_error=email_trop_long');
    }else header('location:registerAuteur.html?register_error=compte_exixtant');
}else header('location:registerAuteur.html?register_error=manque_d_informations');
?>