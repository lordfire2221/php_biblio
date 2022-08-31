<?php 
try {

	$bdd = new PDO('mysql:host=localhost;dbname=gest_biblio','root','');
} catch (Exception $e) {
	die('Erreur'.$e->getmessage());
}