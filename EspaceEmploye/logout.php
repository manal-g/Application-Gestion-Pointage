<?php
	// Initialiser la session
	session_start();
	session_unset();
	
	// Détruire la session.
	if(session_destroy())
	{
		// Redirection vers la page de connexion
		header("Location: ../");
	}
?>