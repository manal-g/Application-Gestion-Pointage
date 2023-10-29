<?php
require('Config.php');
session_start();

if (isset($_POST['email'])){
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `administrateur` WHERE LOGIN_ADM='$email' and MDP_ADM='$password'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	if($rows==1)
    {
	    $_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
	    header("Location:http://localhost/projetfinal/Login_v1/dashmin-1.0.0/");
	}
    else
    {

        $queryemploye = "SELECT * FROM `employe` WHERE LOGIN_EMP='$email' and MDP_EMP='$password'";
        $resultemp = mysqli_query($conn,$queryemploye) or die(mysql_error()) ;
        $rowsemp = mysqli_num_rows($resultemp);
        if($rowsemp==1)
		{
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			header("Location:http://localhost/projetfinal/Login_v1/EspaceEmploye/");
		}
		else
		{
			$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
		}
        
	
	}
}
?>