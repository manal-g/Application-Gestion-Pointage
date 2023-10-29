<?php
    require('Config.php');
    session_start();
    if (isset($_POST['motcletech']))
    {
        $motrecherchertech=$_REQUEST['motcletech'];
        $_SESSION['motrechsessiontech']=$motrecherchertech;
        header("Location:DetailsTech.php");
    }
    
?>