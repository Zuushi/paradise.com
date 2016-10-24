<?php require_once('co_bdd.php');?>

<?php
		$req = $bdd->prepare('SELECT num_client FROM Client WHERE mail_client = :mail_client AND pass_client = :pass_client');
		$req->execute(array(
		    'mail_client' => $_POST['email'],
		    'pass_client' => $_POST['password']
		    ));

		$resultat = $req->fetch();

		if (!$resultat)
		{
		    echo 'Mauvais identifiant ou mot de passe !';
		}
		else
		{
		    session_start();
		    // $_SESSION['id'] = $resultat['num_client'];
		    $_SESSION['mail_client'] = $_POST['email'];
		    header("location: index.php");
		}
?>