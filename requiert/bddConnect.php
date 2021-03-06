<?php


	$serveur = 'localhost';
	$login = 'my-qassa';
  $login = 'my-qassa-2';
	$passe = 'Timothee12300@';
  $passe = '?Ye1a4x4';
  $base_de_donnee = 'jojo12300_myqassa';



	try {
		$pdo = new PDO('mysql:dbname='.$base_de_donnee.';host='.$serveur, $login, $passe);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo 'Connexion échouée : ' . $e->getMessage();
	}


	define("ip", $_SERVER["REMOTE_ADDR"]);
?>
