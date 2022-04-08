<?php

if (isset($_GET['login']) && isset($_GET['pwd']) && !empty($_GET['login'])&& !empty($_GET['pwd'])) {
	if (($_GET['login']=="Anthony") and ($_GET['pwd']=="1234")){

		// on la démarre la session
		session_start ();
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['pwd'] = $_GET['pwd'];
// on enregistre les paramètres de notre visiteur comme variables de session

// on redirige notre visiteur vers une page de notre section membre
		header ('location: accueille.php');

	}
 
 //si le résultat est false on redirige vers la page d'authentification
 	else{
 		header ('location: post-login.html');
 	}
 }
 else{
 		header ('location: post-login.html');
 	}
 ?>