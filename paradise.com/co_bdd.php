<?php

try{
		$bdd = new PDO('mysql:host=localhost;dbname=paradise','root','');
	}

	catch (Exception $e)
	{
		die('Erreur:'.$e->getMessage());
	}
?>