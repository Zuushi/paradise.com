<?php

try{
		$bdd = new PDO('mysql:host=localhost;dbname=paradise','root','ggrail');
	}

	catch (Exception $e)
	{
		die('Erreur:'.$e->getMessage());
	}
?>

<?php
// tester si le formulaire a été soumis
	//tester si les cases du formulaire ne sont pas vides
	if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['password']) and !empty($_POST['mail']) and !empty($_POST['telephone']) and !empty($_POST['adresse']))
	{
		$req=$bdd->prepare('INSERT INTO Client(nom_client,prenom_client,adr_client,mail_client,pass_client,tel_client) VALUES (:nom_client, :prenom_client, :adr_client, :mail_client, :pass_client, :tel_client)');
		$req->execute(array(
			'nom_client'=>$_POST['nom'],
			'prenom_client'=>$_POST['prenom'],
			'adr_client'=>$_POST['adresse'],
			'mail_client'=>$_POST['mail'],
			'pass_client'=>$_POST['password'],
			'tel_client'=>$_POST['telephone']
			));
	}

	else
	{
	echo "Toutes les cases du formulaire ne sont pas remplies!!";
	}
	header( "refresh:5;url=index.php" ); 
?>

		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			
		</head>
		<body>
			<h2>INSCRIPTION REUSSI ! Bienvenue sur notre site! Vous allez être redirigé...</h2><br />
			<a href="index.php">Cliquez içi pou être redirigé...</a>
		</body>
		</html>