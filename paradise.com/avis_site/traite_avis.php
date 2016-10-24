<?php

try{
		$bdd = new PDO('mysql:host=localhost;dbname=td_avis','root','ggrail');
	}

	catch (Exception $e)
	{
		die('Erreur:'.$e->getMessage());
	}
?>

<?php
// tester si le formulaire a été soumis

	//tester si les cases du formulaire ne sont pas vides
	if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['type']) and !empty($_POST['mail']) and !empty($_POST['avis']))
	{
		$req = $bdd->prepare('INSERT INTO client(nom,prenom,type,mail,avis) VALUES (:nom, :prenom, :type, :mail, :avis)');
		$req->execute(array(
			'nom'=>$_POST['nom'],
			'prenom'=>$_POST['prenom'],
			'type'=>$_POST['type'],
			'mail'=>$_POST['mail'],
			'avis'=>$_POST['avis']
			));
		echo ("succes!");
		header('location:avis_site.html');

/*
		$req = $bdd->query('SELECT nom FROM client');

		while ($donnees = $req->fetch())
		{
			echo('<p>Nom: '.$donnees['nom'].'</p>');
		}
		$donnees = closeCursor();
*/
	}

	else
	{
	echo "Toutes les cases du formulaire ne sont pas remplies";
	}




?>