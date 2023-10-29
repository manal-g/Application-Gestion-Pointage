<?php
	// Initialiser la session
	session_start();
	session_unset();
	session_destroy();
	// Détruire la session.
	if(!$_SESSION)
	{
		// Redirection vers la page de connexion
		header("Location: http://localhost/projetfinal/Login_v1");
	}
?>