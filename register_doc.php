<?php
session_start();
require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href=".\css\register_doc.css">
	<link rel="stylesheet" type="text/css" href=".\bootstrap\css\bootstrap.css">
</head>
<body>
<div class="page">
	<div class="container">
    <div class="row g-0 mt-5 mb-5 height-100">
        <div class="col-md-6">
            <div class="bg-dark p-4 h-100 sidebar">
                <ul class="chart-design">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="bg-white p-4 h-100">
                <form method="POST" action="registerDoc.php">
                	
                    <div class="form-data"> <label>Nom :</label> <input type="text" name="nom" class="form-control w-100"> </div>
                    <div class="form-data"> <label>Edition :</label> <input type="text" name="auteur" class="form-control w-100"> </div>
                    <div class="form-data"><label>Auteur :</label><select name="auteur" id="auteur">
                    	<? $check='SELECT * FROM auteur';
                    	//requête query
                    	$requete=$bdd->query($check);
                    	 //récupération de toutes les données
                    	$auteur=$requete->fetchAll();
                    	$row=$requete->rowCount();
                    	while ($result=$requete->fetch()) {
                           foreach($result as $results)
                           echo'';
                        }//boucle auteur 
                    	    ?>
                    </select> </div>
                    <div class="signin-btn w-100 mt-2"> <button class="btn btn-danger btn-block"><input type="submit" name="Valider"></button> </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>