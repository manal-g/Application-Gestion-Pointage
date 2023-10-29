<?php
    require('Config.php');
    session_start();
    if (isset($_POST['motcle']))
    {
        $motrechercher=$_REQUEST['motcle'];
        $_SESSION['motrechsession']=$motrechercher;
        echo '****************'.$motrechercher.$_SESSION['motrechsession'];
        header("Location:DetailsEmp.php");
    }
    
?>