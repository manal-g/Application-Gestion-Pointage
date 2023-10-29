<?php
    require('Config.php');
    session_start();
    if (isset($_POST['motcleRFID']))
    {
        $motrechercherRFID=$_REQUEST['motcleRFID'];
        $_SESSION['motrechsessionRFID']=$motrechercherRFID;
        header("Location:DetailsRFID.php");
    }
    
?>