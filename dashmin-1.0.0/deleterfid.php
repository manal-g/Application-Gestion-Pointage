<?php
    include 'Config.php';
    if(isset($_GET['deleteid']))
    $code_rfid=$_GET['deleteid'];

    $sql="delete from rfid where CODE_ETIQUETTE='$code_rfid'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        //echo "Les données sont supprimer avec succées ";
        header('location:index.php');
    }
    else{
        die(mysqli_error($conn));
    }

?>