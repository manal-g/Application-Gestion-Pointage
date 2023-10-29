<?php
    include 'Config.php';
    if(isset($_GET['deleteid']))
    $reference=$_GET['deleteid'];

    $sql="delete from afficheur_lcd where REFERENCE='$reference'";
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