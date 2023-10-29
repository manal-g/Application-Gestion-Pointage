<?php
    require('Config.php');
    session_start();
    if (isset($_POST['motcleLCD']))
    {
        $motrechercherLCD=$_REQUEST['motcleLCD'];
        $_SESSION['motrechsessionLCD']=$motrechercherLCD;
        header("Location:DetailsLCD.php");
    }
    
?>